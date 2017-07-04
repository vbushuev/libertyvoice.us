<div class="modal fade" id="user_{{$user->id}}" data-rel="/admin/user/edit/{{$user->id}}">
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
                        <form action="/admin/user/edit/{{$user->id}}"  method="post">
                            <h2>Edit user</h2>
                            <!-- 'name', 'lastname','country','email','phone','password','balance','currency','comments' -->
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1" name="name" value="{{$user->name}}">
                            </div>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1" name="lastname" value="{{$user->lastname}}">
                            </div>
                            <div class="form-line">
                                <select name="country" id="country">
                                    <option value="non-select" disabled selected>Select your country</option>
                                    <option value="Afghanistan" @if($user->country=="Afghanistan") selected="selected" @endif>Afghanistan</option>
                                    <option value="Albania" @if($user->country=="Albania") selected="selected" @endif>Albania</option>
                                    <option value="Algeria" @if($user->country=="Algeria") selected="selected" @endif>Algeria</option>
                                    <option value="Andorra" @if($user->country=="Andorra") selected="selected" @endif>Andorra</option>
                                    <option value="Angola" @if($user->country=="Angola") selected="selected" @endif>Angola</option>
                                    <option value="Anguilla" @if($user->country=="Anguilla") selected="selected" @endif>Anguilla</option>
                                    <option value="Antarctica" @if($user->country=="Antarctica") selected="selected" @endif>Antarctica</option>
                                    <option value="Antigua and/or Barbuda" @if($user->country=="Antigua and/or Barbuda") selected="selected" @endif>Antigua and/or Barbuda</option>
                                    <option value="Argentina" @if($user->country=="Argentina") selected="selected" @endif>Argentina</option>
                                    <option value="Armenia" @if($user->country=="Armenia") selected="selected" @endif>Armenia</option>
                                    <option value="Aruba" @if($user->country=="Aruba") selected="selected" @endif>Aruba</option>
                                    <option value="Australia" @if($user->country=="Australia") selected="selected" @endif>Australia</option>
                                    <option value="Austria" @if($user->country=="Austria") selected="selected" @endif>Austria</option>
                                    <option value="Azerbaijan" @if($user->country=="Azerbaijan") selected="selected" @endif>Azerbaijan</option>
                                    <option value="Bahamas" @if($user->country=="Bahamas") selected="selected" @endif>Bahamas</option>
                                    <option value="Bahrain" @if($user->country=="Bahrain") selected="selected" @endif>Bahrain</option>
                                    <option value="Bangladesh" @if($user->country=="Bangladesh") selected="selected" @endif>Bangladesh</option>
                                    <option value="Barbados" @if($user->country=="Barbados") selected="selected" @endif>Barbados</option>
                                    <option value="Belarus" @if($user->country=="Belarus") selected="selected" @endif>Belarus</option>
                                    <option value="Belgium" @if($user->country=="Belgium") selected="selected" @endif>Belgium</option>
                                    <option value="Belize" @if($user->country=="Belize") selected="selected" @endif>Belize</option>
                                    <option value="Benin" @if($user->country=="Benin") selected="selected" @endif>Benin</option>
                                    <option value="Bermuda" @if($user->country=="Bermuda") selected="selected" @endif>Bermuda</option>
                                    <option value="Bhutan" @if($user->country=="Bhutan") selected="selected" @endif>Bhutan</option>
                                    <option value="Bolivia" @if($user->country=="Bolivia") selected="selected" @endif>Bolivia</option>
                                    <option value="Bosnia and Herzegovina" @if($user->country=="Bosnia and Herzegovina") selected="selected" @endif>Bosnia and Herzegovina</option>
                                    <option value="Botswana" @if($user->country=="Botswana") selected="selected" @endif>Botswana</option>
                                    <option value="Brazil" @if($user->country=="Brazil") selected="selected" @endif>Brazil</option>
                                    <option value="British lndian Ocean Territory" @if($user->country=="British lndian Ocean Territory") selected="selected" @endif>British lndian Ocean Territory</option>
                                    <option value="Brunei Darussalam" @if($user->country=="Brunei Darussalam") selected="selected" @endif>Brunei Darussalam</option>
                                    <option value="Bulgaria" @if($user->country=="Bulgaria") selected="selected" @endif>Bulgaria</option>
                                    <option value="Burkina Faso" @if($user->country=="Burkina Faso") selected="selected" @endif>Burkina Faso</option>
                                    <option value="Burundi" @if($user->country=="Burundi") selected="selected" @endif>Burundi</option>
                                    <option value="Cambodia" @if($user->country=="Cambodia") selected="selected" @endif>Cambodia</option>
                                    <option value="Cameroon" @if($user->country=="Cameroon") selected="selected" @endif>Cameroon</option>
                                    <option value="Canada" @if($user->country=="Canada") selected="selected" @endif>Canada</option>
                                    <option value="Cape Verde" @if($user->country=="Cape Verde") selected="selected" @endif>Cape Verde</option>
                                    <option value="Cayman Islands" @if($user->country=="Cayman Islands") selected="selected" @endif>Cayman Islands</option>
                                    <option value="Central African Republic" @if($user->country=="Central African Republic") selected="selected" @endif>Central African Republic</option>
                                    <option value="Chad" @if($user->country=="Chad") selected="selected" @endif>Chad</option>
                                    <option value="Chile" @if($user->country=="Chile") selected="selected" @endif>Chile</option>
                                    <option value="China" @if($user->country=="China") selected="selected" @endif>China</option>
                                    <option value="Christmas Island" @if($user->country=="Christmas Island") selected="selected" @endif>Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands" @if($user->country=="Cocos (Keeling) Islands") selected="selected" @endif>Cocos (Keeling) Islands</option>
                                    <option value="Colombia" @if($user->country=="Colombia") selected="selected" @endif>Colombia</option>
                                    <option value="Comoros" @if($user->country=="Comoros") selected="selected" @endif>Comoros</option>
                                    <option value="Congo" @if($user->country=="Congo") selected="selected" @endif>Congo</option>
                                    <option value="Congo (la Rép. dém. du) (ex-Zaïre)" @if($user->country=="Congo (la Rép. dém. du) (ex-Zaïre)") selected="selected" @endif>Congo (la Rép. dém. du) (ex-Zaïre)</option>
                                    <option value="Cook Islands" @if($user->country=="Cook Islands") selected="selected" @endif>Cook Islands</option>
                                    <option value="Costa Rica" @if($user->country=="Costa Rica") selected="selected" @endif>Costa Rica</option>
                                    <option value="Croatia (Hrvatska)" @if($user->country=="Croatia (Hrvatska)") selected="selected" @endif>Croatia (Hrvatska)</option>
                                    <option value="Cuba" @if($user->country=="Cuba") selected="selected" @endif>Cuba</option>
                                    <option value="Cyprus" @if($user->country=="Cyprus") selected="selected" @endif>Cyprus</option>
                                    <option value="Czech Republic" @if($user->country=="Czech Republic") selected="selected" @endif>Czech Republic</option>
                                    <option value="Denmark" @if($user->country=="Denmark") selected="selected" @endif>Denmark</option>
                                    <option value="Djibouti" @if($user->country=="Djibouti") selected="selected" @endif>Djibouti</option>
                                    <option value="Dominica" @if($user->country=="Dominica") selected="selected" @endif>Dominica</option>
                                    <option value="Dominican Republic" @if($user->country=="Dominican Republic") selected="selected" @endif>Dominican Republic</option>
                                    <option value="East Timor" @if($user->country=="East Timor") selected="selected" @endif>East Timor</option>
                                    <option value="Ecuador" @if($user->country=="Ecuador") selected="selected" @endif>Ecuador</option>
                                    <option value="Egypt" @if($user->country=="Egypt") selected="selected" @endif>Egypt</option>
                                    <option value="El Salvador" @if($user->country=="El Salvador") selected="selected" @endif>El Salvador</option>
                                    <option value="Equatorial Guinea" @if($user->country=="Equatorial Guinea") selected="selected" @endif>Equatorial Guinea</option>
                                    <option value="Eritrea" @if($user->country=="Eritrea") selected="selected" @endif>Eritrea</option>
                                    <option value="Estonia" @if($user->country=="Estonia") selected="selected" @endif>Estonia</option>
                                    <option value="Ethiopia" @if($user->country=="Ethiopia") selected="selected" @endif>Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)" @if($user->country=="Falkland Islands (Malvinas)") selected="selected" @endif>Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands" @if($user->country=="Faroe Islands") selected="selected" @endif>Faroe Islands</option>
                                    <option value="Fiji" @if($user->country=="Fiji") selected="selected" @endif>Fiji</option>
                                    <option value="Finland" @if($user->country=="Finland") selected="selected" @endif>Finland</option>
                                    <option value="France" @if($user->country=="France") selected="selected" @endif>France</option>
                                    <option value="French Guiana" @if($user->country=="French Guiana") selected="selected" @endif>French Guiana</option>
                                    <option value="French Polynesia" @if($user->country=="French Polynesia") selected="selected" @endif>French Polynesia</option>
                                    <option value="Gabon" @if($user->country=="Gabon") selected="selected" @endif>Gabon</option>
                                    <option value="Gambia" @if($user->country=="Gambia") selected="selected" @endif>Gambia</option>
                                    <option value="Georgia" @if($user->country=="Georgia") selected="selected" @endif>Georgia</option>
                                    <option value="Germany" @if($user->country=="Germany") selected="selected" @endif>Germany</option>
                                    <option value="Ghana" @if($user->country=="Ghana") selected="selected" @endif>Ghana</option>
                                    <option value="Gibraltar" @if($user->country=="Gibraltar") selected="selected" @endif>Gibraltar</option>
                                    <option value="Greece" @if($user->country=="Greece") selected="selected" @endif>Greece</option>
                                    <option value="Greenland" @if($user->country=="Greenland") selected="selected" @endif>Greenland</option>
                                    <option value="Grenada" @if($user->country=="Grenada") selected="selected" @endif>Grenada</option>
                                    <option value="Guadeloupe" @if($user->country=="Guadeloupe") selected="selected" @endif>Guadeloupe</option>
                                    <option value="Guam" @if($user->country=="Guam") selected="selected" @endif>Guam</option>
                                    <option value="Guatemala" @if($user->country=="Guatemala") selected="selected" @endif>Guatemala</option>
                                    <option value="Guinea" @if($user->country=="Guinea") selected="selected" @endif>Guinea</option>
                                    <option value="Guinea-Bissau" @if($user->country=="Guinea-Bissau") selected="selected" @endif>Guinea-Bissau</option>
                                    <option value="Guyana" @if($user->country=="Guyana") selected="selected" @endif>Guyana</option>
                                    <option value="Haiti" @if($user->country=="Haiti") selected="selected" @endif>Haiti</option>
                                    <option value="Honduras" @if($user->country=="Honduras") selected="selected" @endif>Honduras</option>
                                    <option value="Hong Kong" @if($user->country=="Hong Kong") selected="selected" @endif>Hong Kong</option>
                                    <option value="Hungary" @if($user->country=="Hungary") selected="selected" @endif>Hungary</option>
                                    <option value="Iceland" @if($user->country=="Iceland") selected="selected" @endif>Iceland</option>
                                    <option value="India" @if($user->country=="India") selected="selected" @endif>India</option>
                                    <option value="Indonesia" @if($user->country=="Indonesia") selected="selected" @endif>Indonesia</option>
                                    <option value="Iran (Islamic Republic of)" @if($user->country=="Iran (Islamic Republic of)") selected="selected" @endif>Iran (Islamic Republic of)</option>
                                    <option value="Iraq" @if($user->country=="Iraq") selected="selected" @endif>Iraq</option>
                                    <option value="Ireland" @if($user->country=="Ireland") selected="selected" @endif>Ireland</option>
                                    <option value="Israel" @if($user->country=="Israel") selected="selected" @endif>Israel</option>
                                    <option value="Italy" @if($user->country=="Italy") selected="selected" @endif>Italy</option>
                                    <option value="Ivory Coast" @if($user->country=="Ivory Coast") selected="selected" @endif>Ivory Coast</option>
                                    <option value="Jamaica" @if($user->country=="Jamaica") selected="selected" @endif>Jamaica</option>
                                    <option value="Japan" @if($user->country=="Japan") selected="selected" @endif>Japan</option>
                                    <option value="Jordan" @if($user->country=="Jordan") selected="selected" @endif>Jordan</option>
                                    <option value="Kazakhstan" @if($user->country=="Kazakhstan") selected="selected" @endif>Kazakhstan</option>
                                    <option value="Kenya" @if($user->country=="Kenya") selected="selected" @endif>Kenya</option>
                                    <option value="Kiribati" @if($user->country=="Kiribati") selected="selected" @endif>Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of" @if($user->country=="Korea, Democratic People's Republic of") selected="selected" @endif>Korea, Democratic People's Republic of</option>
                                    <option value="Korea, Republic of" @if($user->country=="Korea, Republic of") selected="selected" @endif>Korea, Republic of</option>
                                    <option value="Kuwait" @if($user->country=="Kuwait") selected="selected" @endif>Kuwait</option>
                                    <option value="Kyrgyzstan" @if($user->country=="Kyrgyzstan") selected="selected" @endif>Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic" @if($user->country=="Lao People's Democratic Republic") selected="selected" @endif>Lao People's Democratic Republic</option>
                                    <option value="Latvia" @if($user->country=="Latvia") selected="selected" @endif>Latvia</option>
                                    <option value="Lebanon" @if($user->country=="Lebanon") selected="selected" @endif>Lebanon</option>
                                    <option value="les Samoa américaines" @if($user->country=="les Samoa américaines") selected="selected" @endif>les Samoa américaines</option>
                                    <option value="Lesotho" @if($user->country=="Lesotho") selected="selected" @endif>Lesotho</option>
                                    <option value="Liberia" @if($user->country=="Liberia") selected="selected" @endif>Liberia</option>
                                    <option value="Libyan Arab Jamahiriya" @if($user->country=="Libyan Arab Jamahiriya") selected="selected" @endif>Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein" @if($user->country=="Liechtenstein") selected="selected" @endif>Liechtenstein</option>
                                    <option value="Lithuania" @if($user->country=="Lithuania") selected="selected" @endif>Lithuania</option>
                                    <option value="Luxembourg" @if($user->country=="Luxembourg") selected="selected" @endif>Luxembourg</option>
                                    <option value="Macau" @if($user->country=="Macau") selected="selected" @endif>Macau</option>
                                    <option value="Macedonia" @if($user->country=="Macedonia") selected="selected" @endif>Macedonia</option>
                                    <option value="Madagascar" @if($user->country=="Madagascar") selected="selected" @endif>Madagascar</option>
                                    <option value="Malawi" @if($user->country=="Malawi") selected="selected" @endif>Malawi</option>
                                    <option value="Malaysia" @if($user->country=="Malaysia") selected="selected" @endif>Malaysia</option>
                                    <option value="Maldives" @if($user->country=="Maldives") selected="selected" @endif>Maldives</option>
                                    <option value="Mali" @if($user->country=="Mali") selected="selected" @endif>Mali</option>
                                    <option value="Malta" @if($user->country=="Malta") selected="selected" @endif>Malta</option>
                                    <option value="Marshall Islands" @if($user->country=="Marshall Islands") selected="selected" @endif>Marshall Islands</option>
                                    <option value="Martinique" @if($user->country=="Martinique") selected="selected" @endif>Martinique</option>
                                    <option value="Mauritania" @if($user->country=="Mauritania") selected="selected" @endif>Mauritania</option>
                                    <option value="Mauritius" @if($user->country=="Mauritius") selected="selected" @endif>Mauritius</option>
                                    <option value="Mayotte" @if($user->country=="Mayotte") selected="selected" @endif>Mayotte</option>
                                    <option value="Mexico" @if($user->country=="Mexico") selected="selected" @endif>Mexico</option>
                                    <option value="Micronesia, Federated States of" @if($user->country=="Micronesia, Federated States of") selected="selected" @endif>Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of" @if($user->country=="Moldova, Republic of") selected="selected" @endif>Moldova, Republic of</option>
                                    <option value="Monaco" @if($user->country=="Monaco") selected="selected" @endif>Monaco</option>
                                    <option value="Mongolia" @if($user->country=="Mongolia") selected="selected" @endif>Mongolia</option>
                                    <option value="Montserrat" @if($user->country=="Montserrat") selected="selected" @endif>Montserrat</option>
                                    <option value="Morocco" @if($user->country=="Morocco") selected="selected" @endif>Morocco</option>
                                    <option value="Mozambique" @if($user->country=="Mozambique") selected="selected" @endif>Mozambique</option>
                                    <option value="Myanmar" @if($user->country=="Myanmar") selected="selected" @endif>Myanmar</option>
                                    <option value="Namibia" @if($user->country=="Namibia") selected="selected" @endif>Namibia</option>
                                    <option value="Nauru" @if($user->country=="Nauru") selected="selected" @endif>Nauru</option>
                                    <option value="Nepal" @if($user->country=="Nepal") selected="selected" @endif>Nepal</option>
                                    <option value="Netherlands" @if($user->country=="Netherlands") selected="selected" @endif>Netherlands</option>
                                    <option value="Netherlands Antilles" @if($user->country=="Netherlands Antilles") selected="selected" @endif>Netherlands Antilles</option>
                                    <option value="New Caledonia" @if($user->country=="New Caledonia") selected="selected" @endif>New Caledonia</option>
                                    <option value="New Caledonia" @if($user->country=="New Caledonia") selected="selected" @endif>New Caledonia</option>
                                    <option value="New Zealand" @if($user->country=="New Zealand") selected="selected" @endif>New Zealand</option>
                                    <option value="Nicaragua" @if($user->country=="Nicaragua") selected="selected" @endif>Nicaragua</option>
                                    <option value="Niger" @if($user->country=="Niger") selected="selected" @endif>Niger</option>
                                    <option value="Nigeria" @if($user->country=="Nigeria") selected="selected" @endif>Nigeria</option>
                                    <option value="Niue" @if($user->country=="Niue") selected="selected" @endif>Niue</option>
                                    <option value="Norfork Island" @if($user->country=="Norfork Island") selected="selected" @endif>Norfork Island</option>
                                    <option value="Northern Mariana Islands" @if($user->country=="Northern Mariana Islands") selected="selected" @endif>Northern Mariana Islands</option>
                                    <option value="Norway" @if($user->country=="Norway") selected="selected" @endif>Norway</option>
                                    <option value="Oman" @if($user->country=="Oman") selected="selected" @endif>Oman</option>
                                    <option value="Pakistan" @if($user->country=="Pakistan") selected="selected" @endif>Pakistan</option>
                                    <option value="Palau" @if($user->country=="Palau") selected="selected" @endif>Palau</option>
                                    <option value="Panama" @if($user->country=="Panama") selected="selected" @endif>Panama</option>
                                    <option value="Papua New Guinea" @if($user->country=="Papua New Guinea") selected="selected" @endif>Papua New Guinea</option>
                                    <option value="Paraguay" @if($user->country=="Paraguay") selected="selected" @endif>Paraguay</option>
                                    <option value="Peru" @if($user->country=="Peru") selected="selected" @endif>Peru</option>
                                    <option value="Philippines" @if($user->country=="Philippines") selected="selected" @endif>Philippines</option>
                                    <option value="Pitcairn" @if($user->country=="Pitcairn") selected="selected" @endif>Pitcairn</option>
                                    <option value="Poland" @if($user->country=="Poland") selected="selected" @endif>Poland</option>
                                    <option value="Portugal" @if($user->country=="Portugal") selected="selected" @endif>Portugal</option>
                                    <option value="Qatar" @if($user->country=="Qatar") selected="selected" @endif>Qatar</option>
                                    <option value="Reunion" @if($user->country=="Reunion") selected="selected" @endif>Reunion</option>
                                    <option value="Romania" @if($user->country=="Romania") selected="selected" @endif>Romania</option>
                                    <option value="Russian Federation" @if($user->country=="Russian Federation") selected="selected" @endif>Russian Federation</option>
                                    <option value="Rwanda" @if($user->country=="Rwanda") selected="selected" @endif>Rwanda</option>
                                    <option value="Saint Kitts and Nevis" @if($user->country=="Saint Kitts and Nevis") selected="selected" @endif>Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia" @if($user->country=="Saint Lucia") selected="selected" @endif>Saint Lucia</option>
                                    <option value="Saint Vincent and the Grenadines" @if($user->country=="Saint Vincent and the Grenadines") selected="selected" @endif>Saint Vincent and the Grenadines</option>
                                    <option value="Samoa" @if($user->country=="Samoa") selected="selected" @endif>Samoa</option>
                                    <option value="Samoa américaine" @if($user->country=="Samoa américaine") selected="selected" @endif>Samoa américaine</option>
                                    <option value="San Marino" @if($user->country=="San Marino") selected="selected" @endif>San Marino</option>
                                    <option value="Sao Tome and Principe" @if($user->country=="Sao Tome and Principe") selected="selected" @endif>Sao Tome and Principe</option>
                                    <option value="Saudi Arabia" @if($user->country=="Saudi Arabia") selected="selected" @endif>Saudi Arabia</option>
                                    <option value="Senegal" @if($user->country=="Senegal") selected="selected" @endif>Senegal</option>
                                    <option value="Seychelles" @if($user->country=="Seychelles") selected="selected" @endif>Seychelles</option>
                                    <option value="Sierra Leone" @if($user->country=="Sierra Leone") selected="selected" @endif>Sierra Leone</option>
                                    <option value="Singapore" @if($user->country=="Singapore") selected="selected" @endif>Singapore</option>
                                    <option value="Slovakia" @if($user->country=="Slovakia") selected="selected" @endif>Slovakia</option>
                                    <option value="Slovenia" @if($user->country=="Slovenia") selected="selected" @endif>Slovenia</option>
                                    <option value="Solomon Islands" @if($user->country=="Solomon Islands") selected="selected" @endif>Solomon Islands</option>
                                    <option value="Somalia" @if($user->country=="Somalia") selected="selected" @endif>Somalia</option>
                                    <option value="South Africa" @if($user->country=="South Africa") selected="selected" @endif>South Africa</option>
                                    <option value="Spain" @if($user->country=="Spain") selected="selected" @endif>Spain</option>
                                    <option value="Sri Lanka" @if($user->country=="Sri Lanka") selected="selected" @endif>Sri Lanka</option>
                                    <option value="St. Helena" @if($user->country=="St. Helena") selected="selected" @endif>St. Helena</option>
                                    <option value="St. Pierre and Miquelon" @if($user->country=="St. Pierre and Miquelon") selected="selected" @endif>St. Pierre and Miquelon</option>
                                    <option value="Sudan" @if($user->country=="Sudan") selected="selected" @endif>Sudan</option>
                                    <option value="Suriname" @if($user->country=="Suriname") selected="selected" @endif>Suriname</option>
                                    <option value="Svalbarn and Jan Mayen Islands" @if($user->country=="Svalbarn and Jan Mayen Islands") selected="selected" @endif>Svalbarn and Jan Mayen Islands</option>
                                    <option value="Swaziland" @if($user->country=="Swaziland") selected="selected" @endif>Swaziland</option>
                                    <option value="Sweden" @if($user->country=="Sweden") selected="selected" @endif>Sweden</option>
                                    <option value="Switzerland" @if($user->country=="Switzerland") selected="selected" @endif>Switzerland</option>
                                    <option value="Syrian Arab Republic" @if($user->country=="Syrian Arab Republic") selected="selected" @endif>Syrian Arab Republic</option>
                                    <option value="Taiwan" @if($user->country=="Taiwan") selected="selected" @endif>Taiwan</option>
                                    <option value="Tajikistan" @if($user->country=="Tajikistan") selected="selected" @endif>Tajikistan</option>
                                    <option value="Tanzania, United Republic of" @if($user->country=="Tanzania, United Republic of") selected="selected" @endif>Tanzania, United Republic of</option>
                                    <option value="Thailand" @if($user->country=="Thailand") selected="selected" @endif>Thailand</option>
                                    <option value="Togo" @if($user->country=="Togo") selected="selected" @endif>Togo</option>
                                    <option value="Tokelau" @if($user->country=="Tokelau") selected="selected" @endif>Tokelau</option>
                                    <option value="Tonga" @if($user->country=="Tonga") selected="selected" @endif>Tonga</option>
                                    <option value="Trinidad and Tobago" @if($user->country=="Trinidad and Tobago") selected="selected" @endif>Trinidad and Tobago</option>
                                    <option value="Tunisia" @if($user->country=="Tunisia") selected="selected" @endif>Tunisia</option>
                                    <option value="Turkey" @if($user->country=="Turkey") selected="selected" @endif>Turkey</option>
                                    <option value="Turkmenistan" @if($user->country=="Turkmenistan") selected="selected" @endif>Turkmenistan</option>
                                    <option value="Turks and Caicos Islands" @if($user->country=="Turks and Caicos Islands") selected="selected" @endif>Turks and Caicos Islands</option>
                                    <option value="Tuvalu" @if($user->country=="Tuvalu") selected="selected" @endif>Tuvalu</option>
                                    <option value="Uganda" @if($user->country=="Uganda") selected="selected" @endif>Uganda</option>
                                    <option value="Ukraine" @if($user->country=="Ukraine") selected="selected" @endif>Ukraine</option>
                                    <option value="United Arab Emirates" @if($user->country=="United Arab Emirates") selected="selected" @endif>United Arab Emirates</option>
                                    <option value="United Kingdom" @if($user->country=="United Kingdom") selected="selected" @endif>United Kingdom</option>
                                    <option value="United States" @if($user->country=="United States") selected="selected" @endif>United States</option>
                                    <option value="URSS" @if($user->country=="URSS") selected="selected" @endif>URSS</option>
                                    <option value="Uruguay" @if($user->country=="Uruguay") selected="selected" @endif>Uruguay</option>
                                    <option value="Uzbekistan" @if($user->country=="Uzbekistan") selected="selected" @endif>Uzbekistan</option>
                                    <option value="Vanuatu" @if($user->country=="Vanuatu") selected="selected" @endif>Vanuatu</option>
                                    <option value="Vatican City State" @if($user->country=="Vatican City State") selected="selected" @endif>Vatican City State</option>
                                    <option value="Venezuela" @if($user->country=="Venezuela") selected="selected" @endif>Venezuela</option>
                                    <option value="Vietnam" @if($user->country=="Vietnam") selected="selected" @endif>Vietnam</option>
                                    <option value="Virgin Islands (British)" @if($user->country=="Virgin Islands (British)") selected="selected" @endif>Virgin Islands (British)</option>
                                    <option value="Virgin Islands (U.S.)" @if($user->country=="Virgin Islands (U.S.)") selected="selected" @endif>Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futuna Islands" @if($user->country=="Wallis and Futuna Islands") selected="selected" @endif>Wallis and Futuna Islands</option>
                                    <option value="Western Sahara" @if($user->country=="Western Sahara") selected="selected" @endif>Western Sahara</option>
                                    <option value="Yemen" @if($user->country=="Yemen") selected="selected" @endif>Yemen</option>
                                    <option value="Yugoslavia" @if($user->country=="Yugoslavia") selected="selected" @endif>Yugoslavia</option>
                                    <option value="Zaire" @if($user->country=="Zaire") selected="selected" @endif>Zaire</option>
                                    <option value="Zambia" @if($user->country=="Zambia") selected="selected" @endif>Zambia</option>
                                    <option value="Zimbabwe" @if($user->country=="Zimbabwe") selected="selected" @endif>Zimbabwe</option>
                                    <option value="Zone neutre" @if($user->country=="Zone neutre") selected="selected" @endif>Zone neutre</option>
                                </select>
                            </div>
                            <div class="form-line">
                                <select class="form-control" placeholder="Currency" aria-describedby="basic-addon1" name="currency">

                                    <option value="GBP" @if($user->currency=="GBP") selected="selected" @endif>Great britan pounds</option>
                                    <option value="EUR" @if($user->currency=="EUR") selected="selected" @endif>Euro</option>
                                    <option value="USD" @if($user->currency=="USD") selected="selected" @endif>American dollars</option>
                                    <option value="ILS" @if($user->currency=="ILS") selected="selected" @endif>Israel Shekel</option>
                                </select>
                            </div>
                            <div class="form-line">
                                <input type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email" value="{{$user->email}}">
                            </div>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Phone" aria-describedby="basic-addon1" name="phone" value="{{$user->phone}}">
                            </div>
                            <div class="form-line">
                                <input type="password" class="form-control" placeholder="New password" aria-describedby="basic-addon1" name="password">
                            </div>
                            <div class="form-line">
                                <textarea class="form-control" placeholder="Comments" aria-describedby="basic-addon1" name="comments">{{$user->comments}}</textarea>
                            </div>
                            <div class="form-line clearfix">
                                {{ csrf_field() }}
                                <input type="submit" title="Save" value="Save">
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
function useredit(){
    var user_id = arguments.length?arguments[0]:null;
    $("#user_"+user_id).modal();
}
</script>
