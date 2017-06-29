<div class="modal fade" id="numbers_{{$user->id}}" data-rel="/admin/payment/add">
    <div class="modal-dialog modal-lg">
        <!-- <form action="/data/user/update" type="GET"> -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Numbers of {{$user->name}} {{$user->lastname}} - {{$user->email}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <section>
                    <div class="wrapper">

                        <table>
                            <thead>
                                <tr><th colspan="6">Number</th></tr>
                                <tr><th>Date</th><th>Number</th><th>Price</th><th>State</th><th colspan="2">Avaliable until</th></tr>
                            </thead>
                                @if (isset($user->numbers))
                                <tbody>
                                    @foreach($user->numbers as $user_number)
                                        <tr>
                                            <td>{{$user_number->created_at}}</td>
                                            <td>{{$user_number->number}}</td>
                                            <td>{{$user_number->amount}} {{$user_number->currency}}</td>
                                            <td>{{$user_number->state}}</td>
                                            <td>{{$user_number->until}}</td>
                                            <td>
                                                <a href="#" onclick="event.preventDefault();document.getElementById('remove-number-form-{{$user_number->id}}').submit();" class="button-long"><i class="fa fa-trash"></i>&nbsp;Delete</a>

                                                <form id="remove-number-form-{{$user_number->id}}" action="/admin/number/remove/{{$user_number->id}}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                @endif

                        </table>


                        <form action="/admin/number/add" method="post">
                            <h2>Add number</h2>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Number" aria-describedby="basic-addon1" name="number" value="">
                            </div>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Amount per month (30 days)" aria-describedby="basic-addon1" name="amount" value="">
                            </div>
                            <div class="form-line">
                                <select class="form-control" placeholder="Currency" aria-describedby="basic-addon1" name="currency">
                                    <option value="USD">American dollars</option>
                                    <option value="GBP">Great britan pounds</option>
                                    <option value="EUR">Euro</option>
                                    <option value="ILS">Israel Shekel</option>
                                </select>
                            </div>
                            <div class="form-line clearfix">
                                <!-- 'user_id', 'number', 'state','amount','currency','until' -->
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
function numbers(){
    var user_id = arguments.length?arguments[0]:null;
    $("#numbers_"+user_id).modal();
}
</script>
