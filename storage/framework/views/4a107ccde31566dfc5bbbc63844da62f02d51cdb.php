<?php $__env->startSection('content'); ?>
<h2>Add Retailer</h2>

<script type="text/javascript">
    <!--
    function hiddenDiv(id,showid){
        if(document.getElementById(id).value != ""){
            document.getElementById(showid).style.display = "";
        }else{
            document.getElementById(showid).style.display = "none";
        }
    }
    -->
</script>


<form action="" method="post" name="form1">
    <table bgcolor="#F9F9F9" width="100%" cellpadding="2" cellspacing="3"  border="0" align="center">
        <tr>
            <td colspan="2" align="right" valign="top"><font color="red">* denotes required field</font></td>
        </tr>
        <tr>
            <td width="30%" valign="middle" align="right" class="tb1"><span class="req">* </span>Title:</td>
            <td width="70%" valign="top"><input type="text" name="rname" id="rname" value="" size="62" class="textbox" /></td>
        </tr>
        <tr>
            <td nowrap="nowrap" width="30%" valign="middle" align="right" class="tb1">Affiliate Network:</td>
            <td width="70%" valign="top">
                <select class="textbox2" id="network_id" name="network_id" onchange="javascript:hiddenDiv('network_id','program_id')"  style="width: 130px;">
                    <option value="">-----------------------</option>
                    <option value="13">Admitad</option><option value="3">Affiliate Window</option><option value="4">AffiliateFuture</option><option value="14">Affilinet</option><option value="19">Bigrock</option><option value="5">Buy.at</option><option value="1">Commission Junction</option><option value="18">Cuelinks</option><option value="11">Daisycon</option><option value="10">Linkshare</option><option value="16">OMG optimisemedia</option><option value="17">Payoom</option><option value="8">Pepperjam Network</option><option value="9">ShareASale</option><option value="2">TradeDoubler</option><option value="12">Tradetracker</option><option value="20">Tyroo</option><option value="15">vCommission</option><option value="6">Webgains</option><option value="7">Zanox</option>			</select>
            </td>
        </tr>
        <tr id="program_id" style="display: none;" >
            <td valign="middle" align="right" class="tb1">Program ID:</td>
            <td valign="top"><input type="text" name="program_id" value="" size="21" class="textbox" /><span class="note">Merchant ID from affiliate network</span></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Category:</td>
            <td valign="top">
                <div class="scrollbox">
                    <div class="odd"><input name="category_id[]" value="16"  type="checkbox">Accessories &amp; Jewellery</div><div class="even"><input name="category_id[]" value="42"  type="checkbox">Automotive</div><div class="odd"><input name="category_id[]" value="1"  type="checkbox">Books &amp; Magazines</div><div class="even"><input name="category_id[]" value="8"  type="checkbox">Business</div><div class="odd"><input name="category_id[]" value="35"  type="checkbox">Cellular Phones</div><div class="even"><input name="category_id[]" value="2"  type="checkbox">Clothes &amp; Fashion</div><div class="odd"><input name="category_id[]" value="3"  type="checkbox">Computer Shops</div><div class="even"><input name="category_id[]" value="5"  type="checkbox">DVD&#039;s &amp; Movies</div><div class="odd"><input name="category_id[]" value="6"  type="checkbox">Education</div><div class="even"><input name="category_id[]" value="7"  type="checkbox">Electronics</div><div class="odd"><input name="category_id[]" value="9"  type="checkbox">Flowers</div><div class="even"><input name="category_id[]" value="10"  type="checkbox">Food &amp; Drink</div><div class="odd"><input name="category_id[]" value="43"  type="checkbox">Fun and Entertainment</div><div class="even"><input name="category_id[]" value="11"  type="checkbox">Gadgets</div><div class="odd"><input name="category_id[]" value="12"  type="checkbox">Gift Shops</div><div class="even"><input name="category_id[]" value="44"  type="checkbox">Groceries</div><div class="odd"><input name="category_id[]" value="13"  type="checkbox">Health &amp; Beauty</div><div class="even"><input name="category_id[]" value="14"  type="checkbox">Home &amp; Garden</div><div class="odd"><input name="category_id[]" value="15"  type="checkbox">Internet &amp; Software</div><div class="even"><input name="category_id[]" value="47"  type="checkbox">Medicine</div><div class="odd"><input name="category_id[]" value="18"  type="checkbox">Mother &amp; Baby</div><div class="even"><input name="category_id[]" value="19"  type="checkbox">Office Supplies</div><div class="odd"><input name="category_id[]" value="20"  type="checkbox">Online Gaming</div><div class="even"><input name="category_id[]" value="21"  type="checkbox">Other</div><div class="odd"><input name="category_id[]" value="17"  type="checkbox">Shoes</div><div class="even"><input name="category_id[]" value="23"  type="checkbox">Sports &amp; Fitness</div><div class="odd"><input name="category_id[]" value="24"  type="checkbox">Toys &amp; Games</div><div class="even"><input name="category_id[]" value="34"  type="checkbox">Travel</div>				</div>
            </td>
        </tr>
        <tr>
            <td width="30%" valign="middle" align="right" class="tb1">Country:</td>
            <td width="70%" valign="top">
                <div class="scrollbox">
                    <div class="odd"><input name="country_id[]" value="1"  type="checkbox">Afghanistan</div><div class="even"><input name="country_id[]" value="2"  type="checkbox">Aland Islands</div><div class="odd"><input name="country_id[]" value="3"  type="checkbox">Albania</div><div class="even"><input name="country_id[]" value="4"  type="checkbox">Algeria</div><div class="odd"><input name="country_id[]" value="5"  type="checkbox">American Samoa</div><div class="even"><input name="country_id[]" value="6"  type="checkbox">Andorra</div><div class="odd"><input name="country_id[]" value="7"  type="checkbox">Angola</div><div class="even"><input name="country_id[]" value="8"  type="checkbox">Anguilla</div><div class="odd"><input name="country_id[]" value="9"  type="checkbox">Antigua and Barbuda</div><div class="even"><input name="country_id[]" value="10"  type="checkbox">Argentina</div><div class="odd"><input name="country_id[]" value="11"  type="checkbox">Armenia</div><div class="even"><input name="country_id[]" value="12"  type="checkbox">Aruba</div><div class="odd"><input name="country_id[]" value="13"  type="checkbox">Australia</div><div class="even"><input name="country_id[]" value="14"  type="checkbox">Austria</div><div class="odd"><input name="country_id[]" value="15"  type="checkbox">Azerbaijan</div><div class="even"><input name="country_id[]" value="16"  type="checkbox">Bahamas</div><div class="odd"><input name="country_id[]" value="17"  type="checkbox">Bahrain</div><div class="even"><input name="country_id[]" value="18"  type="checkbox">Bangladesh</div><div class="odd"><input name="country_id[]" value="19"  type="checkbox">Barbados</div><div class="even"><input name="country_id[]" value="20"  type="checkbox">Belarus</div><div class="odd"><input name="country_id[]" value="21"  type="checkbox">Belgium</div><div class="even"><input name="country_id[]" value="22"  type="checkbox">Belize</div><div class="odd"><input name="country_id[]" value="23"  type="checkbox">Benin</div><div class="even"><input name="country_id[]" value="24"  type="checkbox">Bermuda</div><div class="odd"><input name="country_id[]" value="25"  type="checkbox">Bhutan</div><div class="even"><input name="country_id[]" value="26"  type="checkbox">Bolivia</div><div class="odd"><input name="country_id[]" value="27"  type="checkbox">Bosnia and Herzegovina</div><div class="even"><input name="country_id[]" value="28"  type="checkbox">Botswana</div><div class="odd"><input name="country_id[]" value="29"  type="checkbox">Bouvet Island</div><div class="even"><input name="country_id[]" value="30"  type="checkbox">Brazil</div><div class="odd"><input name="country_id[]" value="31"  type="checkbox">British Indian Ocean Territory</div><div class="even"><input name="country_id[]" value="32"  type="checkbox">Brunei Darussalam</div><div class="odd"><input name="country_id[]" value="33"  type="checkbox">Bulgaria</div><div class="even"><input name="country_id[]" value="34"  type="checkbox">Burkina Faso</div><div class="odd"><input name="country_id[]" value="35"  type="checkbox">Burundi</div><div class="even"><input name="country_id[]" value="36"  type="checkbox">Cambodia</div><div class="odd"><input name="country_id[]" value="37"  type="checkbox">Cameroon</div><div class="even"><input name="country_id[]" value="38"  type="checkbox">Canada</div><div class="odd"><input name="country_id[]" value="39"  type="checkbox">Cape Verde</div><div class="even"><input name="country_id[]" value="40"  type="checkbox">Cayman Islands</div><div class="odd"><input name="country_id[]" value="41"  type="checkbox">Central African Republic</div><div class="even"><input name="country_id[]" value="42"  type="checkbox">Chad</div><div class="odd"><input name="country_id[]" value="43"  type="checkbox">Chile</div><div class="even"><input name="country_id[]" value="44"  type="checkbox">China</div><div class="odd"><input name="country_id[]" value="45"  type="checkbox">Christmas Island</div><div class="even"><input name="country_id[]" value="46"  type="checkbox">Cocos (Keeling) Islands</div><div class="odd"><input name="country_id[]" value="47"  type="checkbox">Colombia</div><div class="even"><input name="country_id[]" value="48"  type="checkbox">Comoros</div><div class="odd"><input name="country_id[]" value="49"  type="checkbox">Congo</div><div class="even"><input name="country_id[]" value="50"  type="checkbox">Congo, The Democratic Republic of the</div><div class="odd"><input name="country_id[]" value="51"  type="checkbox">Cook Islands</div><div class="even"><input name="country_id[]" value="52"  type="checkbox">Costa Rica</div><div class="odd"><input name="country_id[]" value="53"  type="checkbox">Cote D'Ivoire</div><div class="even"><input name="country_id[]" value="54"  type="checkbox">Croatia</div><div class="odd"><input name="country_id[]" value="55"  type="checkbox">Cuba</div><div class="even"><input name="country_id[]" value="56"  type="checkbox">Cyprus</div><div class="odd"><input name="country_id[]" value="57"  type="checkbox">Czech Republic</div><div class="even"><input name="country_id[]" value="58"  type="checkbox">Denmark</div><div class="odd"><input name="country_id[]" value="59"  type="checkbox">Djibouti</div><div class="even"><input name="country_id[]" value="60"  type="checkbox">Dominica</div><div class="odd"><input name="country_id[]" value="61"  type="checkbox">Dominican Republic</div><div class="even"><input name="country_id[]" value="62"  type="checkbox">Ecuador</div><div class="odd"><input name="country_id[]" value="63"  type="checkbox">Egypt</div><div class="even"><input name="country_id[]" value="64"  type="checkbox">El Salvador</div><div class="odd"><input name="country_id[]" value="65"  type="checkbox">Equatorial Guinea</div><div class="even"><input name="country_id[]" value="66"  type="checkbox">Eritrea</div><div class="odd"><input name="country_id[]" value="67"  type="checkbox">Estonia</div><div class="even"><input name="country_id[]" value="68"  type="checkbox">Ethiopia</div><div class="odd"><input name="country_id[]" value="69"  type="checkbox">Falkland Islands (Malvinas)</div><div class="even"><input name="country_id[]" value="70"  type="checkbox">Faroe Islands</div><div class="odd"><input name="country_id[]" value="71"  type="checkbox">Fiji</div><div class="even"><input name="country_id[]" value="72"  type="checkbox">Finland</div><div class="odd"><input name="country_id[]" value="73"  type="checkbox">France</div><div class="even"><input name="country_id[]" value="74"  type="checkbox">French Guiana</div><div class="odd"><input name="country_id[]" value="75"  type="checkbox">French Polynesia</div><div class="even"><input name="country_id[]" value="76"  type="checkbox">French Southern Territories</div><div class="odd"><input name="country_id[]" value="77"  type="checkbox">Gabon</div><div class="even"><input name="country_id[]" value="78"  type="checkbox">Gambia</div><div class="odd"><input name="country_id[]" value="79"  type="checkbox">Georgia</div><div class="even"><input name="country_id[]" value="80"  type="checkbox">Germany</div><div class="odd"><input name="country_id[]" value="81"  type="checkbox">Ghana</div><div class="even"><input name="country_id[]" value="82"  type="checkbox">Gibraltar</div><div class="odd"><input name="country_id[]" value="83"  type="checkbox">Greece</div><div class="even"><input name="country_id[]" value="84"  type="checkbox">Greenland</div><div class="odd"><input name="country_id[]" value="85"  type="checkbox">Grenada</div><div class="even"><input name="country_id[]" value="86"  type="checkbox">Guadeloupe</div><div class="odd"><input name="country_id[]" value="87"  type="checkbox">Guam</div><div class="even"><input name="country_id[]" value="88"  type="checkbox">Guatemala</div><div class="odd"><input name="country_id[]" value="89"  type="checkbox">Guinea</div><div class="even"><input name="country_id[]" value="90"  type="checkbox">Guinea-Bissau</div><div class="odd"><input name="country_id[]" value="91"  type="checkbox">Guyana</div><div class="even"><input name="country_id[]" value="92"  type="checkbox">Haiti</div><div class="odd"><input name="country_id[]" value="93"  type="checkbox">Heard Island and McDonald Islands</div><div class="even"><input name="country_id[]" value="94"  type="checkbox">Holy See (Vatican City State)</div><div class="odd"><input name="country_id[]" value="95"  type="checkbox">Honduras</div><div class="even"><input name="country_id[]" value="96"  type="checkbox">Hong Kong</div><div class="odd"><input name="country_id[]" value="97"  type="checkbox">Hungary</div><div class="even"><input name="country_id[]" value="98"  type="checkbox">Iceland</div><div class="odd"><input name="country_id[]" value="99"  type="checkbox">India</div><div class="even"><input name="country_id[]" value="100"  type="checkbox">Indonesia</div><div class="odd"><input name="country_id[]" value="101"  type="checkbox">Iran, Islamic Republic of</div><div class="even"><input name="country_id[]" value="102"  type="checkbox">Iraq</div><div class="odd"><input name="country_id[]" value="103"  type="checkbox">Ireland</div><div class="even"><input name="country_id[]" value="104"  type="checkbox">Israel</div><div class="odd"><input name="country_id[]" value="105"  type="checkbox">Italy</div><div class="even"><input name="country_id[]" value="106"  type="checkbox">Jamaica</div><div class="odd"><input name="country_id[]" value="107"  type="checkbox">Japan</div><div class="even"><input name="country_id[]" value="108"  type="checkbox">Jordan</div><div class="odd"><input name="country_id[]" value="109"  type="checkbox">Kazakhstan</div><div class="even"><input name="country_id[]" value="110"  type="checkbox">Kenya</div><div class="odd"><input name="country_id[]" value="111"  type="checkbox">Kiribati</div><div class="even"><input name="country_id[]" value="112"  type="checkbox">Korea, Democratic People's Republic of</div><div class="odd"><input name="country_id[]" value="113"  type="checkbox">Korea, Republic of</div><div class="even"><input name="country_id[]" value="114"  type="checkbox">Kuwait</div><div class="odd"><input name="country_id[]" value="115"  type="checkbox">Kyrgyzstan</div><div class="even"><input name="country_id[]" value="116"  type="checkbox">Lao People's Democratic Republic</div><div class="odd"><input name="country_id[]" value="117"  type="checkbox">Latvia</div><div class="even"><input name="country_id[]" value="118"  type="checkbox">Lebanon</div><div class="odd"><input name="country_id[]" value="119"  type="checkbox">Lesotho</div><div class="even"><input name="country_id[]" value="120"  type="checkbox">Liberia</div><div class="odd"><input name="country_id[]" value="121"  type="checkbox">Libyan Arab Jamahiriya</div><div class="even"><input name="country_id[]" value="122"  type="checkbox">Liechtenstein</div><div class="odd"><input name="country_id[]" value="123"  type="checkbox">Lithuania</div><div class="even"><input name="country_id[]" value="124"  type="checkbox">Luxembourg</div><div class="odd"><input name="country_id[]" value="125"  type="checkbox">Macao</div><div class="even"><input name="country_id[]" value="126"  type="checkbox">Macedonia</div><div class="odd"><input name="country_id[]" value="127"  type="checkbox">Madagascar</div><div class="even"><input name="country_id[]" value="128"  type="checkbox">Malawi</div><div class="odd"><input name="country_id[]" value="129"  type="checkbox">Malaysia</div><div class="even"><input name="country_id[]" value="130"  type="checkbox">Maldives</div><div class="odd"><input name="country_id[]" value="131"  type="checkbox">Mali</div><div class="even"><input name="country_id[]" value="132"  type="checkbox">Malta</div><div class="odd"><input name="country_id[]" value="133"  type="checkbox">Marshall Islands</div><div class="even"><input name="country_id[]" value="134"  type="checkbox">Martinique</div><div class="odd"><input name="country_id[]" value="135"  type="checkbox">Mauritania</div><div class="even"><input name="country_id[]" value="136"  type="checkbox">Mauritius</div><div class="odd"><input name="country_id[]" value="137"  type="checkbox">Mayotte</div><div class="even"><input name="country_id[]" value="138"  type="checkbox">Mexico</div><div class="odd"><input name="country_id[]" value="139"  type="checkbox">Micronesia, Federated States of</div><div class="even"><input name="country_id[]" value="140"  type="checkbox">Moldova, Republic of</div><div class="odd"><input name="country_id[]" value="141"  type="checkbox">Monaco</div><div class="even"><input name="country_id[]" value="142"  type="checkbox">Mongolia</div><div class="odd"><input name="country_id[]" value="143"  type="checkbox">Montenegro</div><div class="even"><input name="country_id[]" value="144"  type="checkbox">Montserrat</div><div class="odd"><input name="country_id[]" value="145"  type="checkbox">Morocco</div><div class="even"><input name="country_id[]" value="146"  type="checkbox">Mozambique</div><div class="odd"><input name="country_id[]" value="147"  type="checkbox">Myanmar</div><div class="even"><input name="country_id[]" value="148"  type="checkbox">Namibia</div><div class="odd"><input name="country_id[]" value="149"  type="checkbox">Nauru</div><div class="even"><input name="country_id[]" value="150"  type="checkbox">Nepal</div><div class="odd"><input name="country_id[]" value="151"  type="checkbox">Netherlands</div><div class="even"><input name="country_id[]" value="152"  type="checkbox">Netherlands Antilles</div><div class="odd"><input name="country_id[]" value="153"  type="checkbox">New Caledonia</div><div class="even"><input name="country_id[]" value="154"  type="checkbox">New Zealand</div><div class="odd"><input name="country_id[]" value="155"  type="checkbox">Nicaragua</div><div class="even"><input name="country_id[]" value="156"  type="checkbox">Niger</div><div class="odd"><input name="country_id[]" value="157"  type="checkbox">Nigeria</div><div class="even"><input name="country_id[]" value="158"  type="checkbox">Niue</div><div class="odd"><input name="country_id[]" value="159"  type="checkbox">Norfolk Island</div><div class="even"><input name="country_id[]" value="160"  type="checkbox">Northern Mariana Islands</div><div class="odd"><input name="country_id[]" value="161"  type="checkbox">Norway</div><div class="even"><input name="country_id[]" value="162"  type="checkbox">Oman</div><div class="odd"><input name="country_id[]" value="163"  type="checkbox">Pakistan</div><div class="even"><input name="country_id[]" value="164"  type="checkbox">Palau</div><div class="odd"><input name="country_id[]" value="165"  type="checkbox">Palestinian Territory, Occupied</div><div class="even"><input name="country_id[]" value="166"  type="checkbox">Panama</div><div class="odd"><input name="country_id[]" value="167"  type="checkbox">Papua New Guinea</div><div class="even"><input name="country_id[]" value="168"  type="checkbox">Paraguay</div><div class="odd"><input name="country_id[]" value="169"  type="checkbox">Peru</div><div class="even"><input name="country_id[]" value="170"  type="checkbox">Philippines</div><div class="odd"><input name="country_id[]" value="171"  type="checkbox">Pitcairn</div><div class="even"><input name="country_id[]" value="172"  type="checkbox">Poland</div><div class="odd"><input name="country_id[]" value="173"  type="checkbox">Portugal</div><div class="even"><input name="country_id[]" value="174"  type="checkbox">Puerto Rico</div><div class="odd"><input name="country_id[]" value="175"  type="checkbox">Qatar</div><div class="even"><input name="country_id[]" value="176"  type="checkbox">Reunion</div><div class="odd"><input name="country_id[]" value="177"  type="checkbox">Romania</div><div class="even"><input name="country_id[]" value="178"  type="checkbox">Russian Federation</div><div class="odd"><input name="country_id[]" value="179"  type="checkbox">Rwanda</div><div class="even"><input name="country_id[]" value="180"  type="checkbox">Saint Helena</div><div class="odd"><input name="country_id[]" value="181"  type="checkbox">Saint Kitts and Nevis</div><div class="even"><input name="country_id[]" value="182"  type="checkbox">Saint Lucia</div><div class="odd"><input name="country_id[]" value="183"  type="checkbox">Saint Pierre and Miquelon</div><div class="even"><input name="country_id[]" value="184"  type="checkbox">Saint Vincent and the Grenadines</div><div class="odd"><input name="country_id[]" value="185"  type="checkbox">Samoa</div><div class="even"><input name="country_id[]" value="186"  type="checkbox">San Marino</div><div class="odd"><input name="country_id[]" value="187"  type="checkbox">Sao Tome and Principe</div><div class="even"><input name="country_id[]" value="188"  type="checkbox">Saudi Arabia</div><div class="odd"><input name="country_id[]" value="189"  type="checkbox">Senegal</div><div class="even"><input name="country_id[]" value="190"  type="checkbox">Serbia</div><div class="odd"><input name="country_id[]" value="191"  type="checkbox">Seychelles</div><div class="even"><input name="country_id[]" value="192"  type="checkbox">Sierra Leone</div><div class="odd"><input name="country_id[]" value="193"  type="checkbox">Singapore</div><div class="even"><input name="country_id[]" value="194"  type="checkbox">Slovakia</div><div class="odd"><input name="country_id[]" value="195"  type="checkbox">Slovenia</div><div class="even"><input name="country_id[]" value="196"  type="checkbox">Solomon Islands</div><div class="odd"><input name="country_id[]" value="197"  type="checkbox">Somalia</div><div class="even"><input name="country_id[]" value="198"  type="checkbox">South Africa</div><div class="odd"><input name="country_id[]" value="199"  type="checkbox">South Georgia</div><div class="even"><input name="country_id[]" value="200"  type="checkbox">Spain</div><div class="odd"><input name="country_id[]" value="201"  type="checkbox">Sri Lanka</div><div class="even"><input name="country_id[]" value="202"  type="checkbox">Sudan</div><div class="odd"><input name="country_id[]" value="203"  type="checkbox">Suriname</div><div class="even"><input name="country_id[]" value="204"  type="checkbox">Svalbard and Jan Mayen</div><div class="odd"><input name="country_id[]" value="205"  type="checkbox">Swaziland</div><div class="even"><input name="country_id[]" value="206"  type="checkbox">Sweden</div><div class="odd"><input name="country_id[]" value="207"  type="checkbox">Switzerland</div><div class="even"><input name="country_id[]" value="208"  type="checkbox">Syrian Arab Republic</div><div class="odd"><input name="country_id[]" value="209"  type="checkbox">Taiwan, Province Of China</div><div class="even"><input name="country_id[]" value="210"  type="checkbox">Tajikistan</div><div class="odd"><input name="country_id[]" value="211"  type="checkbox">Tanzania, United Republic of</div><div class="even"><input name="country_id[]" value="212"  type="checkbox">Thailand</div><div class="odd"><input name="country_id[]" value="213"  type="checkbox">Timor-Leste</div><div class="even"><input name="country_id[]" value="214"  type="checkbox">Togo</div><div class="odd"><input name="country_id[]" value="215"  type="checkbox">Tokelau</div><div class="even"><input name="country_id[]" value="216"  type="checkbox">Tonga</div><div class="odd"><input name="country_id[]" value="217"  type="checkbox">Trinidad and Tobago</div><div class="even"><input name="country_id[]" value="218"  type="checkbox">Tunisia</div><div class="odd"><input name="country_id[]" value="219"  type="checkbox">Turkey</div><div class="even"><input name="country_id[]" value="220"  type="checkbox">Turkmenistan</div><div class="odd"><input name="country_id[]" value="221"  type="checkbox">Turks and Caicos Islands</div><div class="even"><input name="country_id[]" value="222"  type="checkbox">Tuvalu</div><div class="odd"><input name="country_id[]" value="223"  type="checkbox">Uganda</div><div class="even"><input name="country_id[]" value="224"  type="checkbox">Ukraine</div><div class="odd"><input name="country_id[]" value="225"  type="checkbox">United Arab Emirates</div><div class="even"><input name="country_id[]" value="226"  type="checkbox">United Kingdom</div><div class="odd"><input name="country_id[]" value="227"  type="checkbox">United States</div><div class="even"><input name="country_id[]" value="228"  type="checkbox">United States Minor Outlying Islands</div><div class="odd"><input name="country_id[]" value="229"  type="checkbox">Uruguay</div><div class="even"><input name="country_id[]" value="230"  type="checkbox">Uzbekistan</div><div class="odd"><input name="country_id[]" value="231"  type="checkbox">Vanuatu</div><div class="even"><input name="country_id[]" value="232"  type="checkbox">Venezuela</div><div class="odd"><input name="country_id[]" value="233"  type="checkbox">Viet Nam</div><div class="even"><input name="country_id[]" value="234"  type="checkbox">Virgin Islands, British</div><div class="odd"><input name="country_id[]" value="235"  type="checkbox">Virgin Islands, U.S.</div><div class="even"><input name="country_id[]" value="236"  type="checkbox">Wallis And Futuna</div><div class="odd"><input name="country_id[]" value="237"  type="checkbox">Western Sahara</div><div class="even"><input name="country_id[]" value="238"  type="checkbox">Yemen</div><div class="odd"><input name="country_id[]" value="239"  type="checkbox">Zambia</div><div class="even"><input name="country_id[]" value="240"  type="checkbox">Zimbabwe</div>				</div>
            </td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Image URL:</td>
            <td valign="top"><input type="text" name="image_url" class="textbox" value="" size="62" /> <input type="checkbox" class="checkbox" name="image_save" value="1"  /> <img src="images/icons/download.png" /> download image <sup title="you must have allow_url_fopen set to on">?<sup></td>
        </tr>
        <tr>
            <td width="30%" valign="top" align="right" class="tb1" style="padding-top: 7px;"><span class="req">* </span>URL:</td>
            <td nowrap="nowrap" width="70%" valign="top">
                <input type="text" name="url" id="url" value="http://" size="100" class="textbox" /> <a id="show_info" href="javascript:void(0)"><img src="images/icons/notice.png" align="absmiddle" /></a>
                <div id="info" style="display: none;">
                    <table bgcolor="#F7F7F7" style="border-radius: 7px; padding: 5px; margin: 5px 0;" width="100%" cellpadding="2" cellspacing="2" border="0" align="left">
                        <tr valign="top">
                            <td colspan="2" align="left">
                                <p>If you are working with affiliate network(s), then please don't forget to add '<font color="#E72085">{USERID}</font>' to your link to track members.</p>
                                Here are some link examples:
                            </td>
                        </tr>
                        <tr valign="middle">
                            <td nowrap="nowrap" align="right"><b>ShareASale</b>:</td>
                            <td nowrap="nowrap" align="left"><font color="#30AF08">http://www.shareasale.com/r.cfm?u=zzzzz&b=xxxxx&m=yyyyy</font><font color="#E72085">&afftrack=<b>{USERID}</b></font></td>
                        </tr>
                        <tr valign="middle">
                            <td nowrap="nowrap" align="right"><b>Commission Junction</b>:</td>
                            <td nowrap="nowrap" align="left"><font color="#30AF08">http://www.kqzyfj.com/click-2538644-10432491</font><font color="#E72085">?sid=<b>{USERID}</b></font></td>
                        </tr>
                        <tr valign="middle">
                            <td nowrap="nowrap" align="right"><b>LinkShare</b>:</td>
                            <td nowrap="nowrap" align="left"><font color="#30AF08">http://click.linksynergy.com/fs-bin/click?offerid=4.1&subid=0&type=4</font><font color="#E72085">&u1=<b>{USERID}</b></font></td>
                        </tr>
                        <tr valign="middle">
                            <td nowrap="nowrap" align="right"><b>Zanox</b>:</td>
                            <td nowrap="nowrap" align="left"><font color="#30AF08">http://ad.zanox.com/ppc/?142171430629117663T</font><font color="#E72085">&zpar0=<b>{USERID}</b></font></td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">where <b>afftrack</b>, <b>sid</b>, <b>u1</b> and <b>zpar0</b> - SubID parameters</td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Old Cashback:</td>
            <td valign="top">
                <input type="text" name="old_cashback" id="old_cashback" value="" size="4" class="textbox" />
                <select name="old_cashback_sign" class="textbox2">
                    <option value="%" >%</option>
                    <option value="currency" >Rs.</option>
                    <option value="points" >points</option>
                </select>
            </td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Cashback:</td>
            <td valign="top">
                <input type="text" name="cashback" id="cashback" value="" size="4" class="textbox" />
                <select name="cashback_sign" class="textbox2">
                    <option value="%" >%</option>
                    <option value="currency" >Rs.</option>
                    <option value="points" >points</option>
                </select>
            </td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Description:</td>
            <td valign="top"><textarea name="description" id="editor1" cols="75" rows="8" class="textbox2"></textarea></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Cashback Rates:</td>
            <td valign="top"><textarea name="cashback_rates" id="editor2" cols="75" rows="8" class="textbox2"></textarea></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Guideline To Earn:</td>
            <td valign="top"><textarea name="guidelines_to_earn" id="editor3" cols="75" rows="8" class="textbox2"></textarea></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Important:</td>
            <td valign="top"><textarea name="important" id="editor4" cols="75" rows="8" class="textbox2"></textarea></td>
        </tr>
        <?php /*<script type="text/javascript" src="./js/ckeditor/ckeditor.js"></script>*/ ?>

        <?php echo Html::script('public/js/ckeditor/ckeditor.js'); ?>


        <script>
            CKEDITOR.replace( 'editor1' );
            CKEDITOR.replace( 'editor2' );
            CKEDITOR.replace( 'editor3' );
            CKEDITOR.replace( 'editor4' );
        </script>
        <tr>
            <td valign="middle" align="right" class="tb1">Conditions:</td>
            <td valign="top"><textarea name="conditions" cols="112" rows="4" style="width:590px;" class="textbox2"></textarea></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Tags:</td>
            <td valign="top"><input type="text" name="tags" id="tags" value="" size="115" style="width:590px;" class="textbox" /></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Website:</td>
            <td valign="top"><input type="text" name="website" id="website" value="" size="40" class="textbox" /><span class="note">e.g. amazon.com</span></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">SEO Title:</td>
            <td valign="top"><input type="text" name="seo_title" id="seo_title" value="" size="115" style="width:590px;" class="textbox" /></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Meta Description:</td>
            <td valign="top"><textarea name="meta_description" cols="112" rows="2" style="width:590px;" class="textbox2"></textarea></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Meta Keywords:</td>
            <td valign="top"><input type="text" name="meta_keywords" id="meta_keywords" value="" size="115" style="width:590px;" class="textbox" /></td>
        </tr>
        <script>
            $(function() {
                $('#end_date').calendricalDate();
                $('#end_time').calendricalTime({
                    minTime: {hour: 0, minute: 0},
                    maxTime: {hour: 23, minute: 59},
                    timeInterval: 30
                })
            });
        </script>
        <tr>
            <td valign="middle" align="right" class="tb1">Expiry Date:</td>
            <td valign="middle"><input type="text" name="end_date" id="end_date" value="" size="10"  maxlength="10" class="textbox" />&nbsp; <input type="text" name="end_time" id="end_time" value="" size="6" maxlength="8" class="textbox" /><span class="note">YYYY-MM-DD &nbsp; HH:MM</span></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Featured?</td>
            <td valign="middle"><input type="checkbox" class="checkbox" name="featured" value="1"  />&nbsp;Yes!</td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Store of the Week?</td>
            <td valign="middle"><input type="checkbox" class="checkbox" name="deal_of_week" value="1"  />&nbsp;Yes!</td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Status:</td>
            <td valign="middle">
                <select name="status" class="textbox2">
                    <option value="active" >active</option>
                    <option value="inactive" >inactive</option>
                    <option value="expired" >expired</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2" valign="bottom">
                <input type="hidden" name="action" id="action" value="add">
                <input type="submit" class="submit" name="add" id="add" value="Add Retailer" />
            </td>
        </tr>
    </table>
</form>

<script type="text/javascript">
    $("#show_info").click(function () {
        $("#info").toggle("slow");
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>