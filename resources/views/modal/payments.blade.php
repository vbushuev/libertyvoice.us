<div class="modal fade" id="payments_{{$user->id}}" data-rel="/admin/payment/add">
    <div class="modal-dialog modal-lg">
        <!-- <form action="/data/user/update" type="GET"> -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Payments of {{$user->name}} {{$user->lastname}} - {{$user->email}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <section>
                    <div class="wrapper">

                        <table>
                            <thead>
                                <tr><th colspan="4">Payments</th></tr>
                                <tr><th>Date</th><th>Amount</th><th>Debit/Credit</th><th>Description</th></tr>
                            </thead>
                                @if (isset($user->payments))
                                <tbody>
                                    @foreach($user->payments as $user_payment)
                                        <tr>
                                            <td>{{$user_payment->created_at}}</td>
                                            <td>{{$user_payment->amount}} {{$user_payment->currency}}</td>
                                            <td>{{$user_payment->type}}</td>
                                            <td>{{$user_payment->message}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                @endif

                        </table>


                        <form action="/admin/payment/add"  method="post">
                            <h2>Add payment</h2>

                            <div class="form-line">
                                <input type="number" class="form-control" placeholder="Amount" aria-describedby="basic-addon1" name="amount" value="">
                            </div>
                            <div class="form-line">
                                <select class="form-control" placeholder="Currency" aria-describedby="basic-addon1" name="currency">
                                    <option value="USD">American dollars</option>
                                    <option value="GBP">Great britan pounds</option>
                                    <option value="EUR">Euro</option>
                                    <option value="ILS">Israel Shekel</option>
                                </select>
                            </div>
                            <div class="form-line">
                                <select class="form-control" placeholder="Payment type" aria-describedby="basic-addon1" name="type">
                                    <option value="debit">debit</option>
                                    <option value="credit">credit</option>
                                </select>
                            </div>
                            <div class="form-line clearfix">
                                <input type="hidden" name="user_id" value="{{$user->id}}" />
                                {{ csrf_field() }}
                                <input type="submit" title="Add" value="Add">
                            </div>
                        </form>
                    </div>

                </section>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-primary submit-data">Add</button> -->
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- </form> -->
    </div>
</div><!--end .modal-->
<script>
function payments(){
    var user_id = arguments.length?arguments[0]:null;
    $("#payments_"+user_id).modal();
}
</script>
