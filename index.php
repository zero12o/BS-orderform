<?php 
	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];
?>
<?php 
function auto_copyright($year = 'auto'){ 
	if(intval($year) == 'auto'){ $year = date('Y'); } 
	if(intval($year) == date('Y')){ echo intval($year); } 
	if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); } 
	if(intval($year) > date('Y')){ echo date('Y'); } 
} 
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href='http://fonts.googleapis.com/css?family=Roboto:900,500,700,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Form Step Two</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/countdown.js" type="text/javascript"></script> <!-- recommended by developer to have this on the header -->
<!--    <script type="text/javascript">
    	function redirectuser() {
			window.location.replace("http://stackoverflow.com");
		}
    </script>  
     The following goes on the countdown script below ==> onComplete : redirectuser
     as you can see it redirects the user on that session.  You can expand this to whatever you want maybe you can use a php combo script to make it change the page contents when the timer has ran out. 
    -->
	<script type="text/javascript">
        function randomPassword(length) {
            var length = 8; //eight is the average password length but I feel it should be 15 characters max. 
            var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
            var pass = "";
            for (var x = 0; x < length; x++) {
            var i = Math.floor(Math.random() * chars.length);
                pass += chars.charAt(i);
            }
                return pass;
            }
        function generate() {
            orderForm.Contact0Password.value = randomPassword(orderForm.length.value);
        }
    </script>
  </head>
  <body>
  	<div class="container containerbackground">
    	<div class="row">
        	<div class="col-lg-12">
            	<h2 class="text-center"><i class="fa fa-html5 fa-4x"></i>  <i class="fa fa-css3 fa-4x"></i>Bootstrap Order Form Template</h2>
             	<p class="lead_order">Order Information</p>
                	<h2 class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula suscipit tellus ac porta. Nulla at nisi eleifend, eleifend sapien id, aliquam leo. Donec eget vehicula urna, sed faucibus risus. Etiam pellentesque, eros eu semper congue, odio neque mollis libero, ut suscipit diam dolor nec orci. Suspendisse hendrerit commodo urna, ut consequat felis varius et. Mauris in eros mattis, euismod massa et, placerat sem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque venenatis venenatis vehicula.</p>
                    
                    
 <!-- ========================================================================================================= -->
                <!-- =========================== 		Enter Your Infusionsoft Parameters Here	   ================================ -->
          	<form id="orderForm" action="https://wh185.infusionsoft.com/AddForms/processFormSecure.jsp" method='Post' class="form-horizontal">
                    <input id="infusion_xid" name="infusion_xid" type="hidden" value="3a6351a05a21316fbaae9c24da955034" />
                    <input id="infusion_type" name="infusion_type" type="hidden" value="CustomFormSale" />
                    <input id="infusion_name" name="infusion_name" type="hidden" value="Clifford Bennet DUS" />
                    <input id="CAttempt" name="CAttempt" type="hidden" />
                    <input id="NotLegacy" name="NotLegacy" type="hidden" value="true" />
                    <input id="ProductId" name="ProductId" type="hidden" value="14" />
                    <input id="PayTotal_A" name="PayTotal_A" type="hidden" value="10.0" />
                    <input id="PlanCount_A" name="PlanCount_A" type="hidden" value="1" />
                    <input type="radio" class="radio hidden" name="PurchaseType" value="A" checked>
                    <input value="10.0" id="PayTotal_A" type="hidden" name="PayTotal_A" />
                    <input value="1" id="PlanCount_A" type="hidden" name="PlanCount_A" />
                <!-- ============================================================================================= -->
 					<p class="lead_order">Personal Information</p>
                    <div class="form-group">
                        <div class="col-lg-4">
                            <label for="First_Name">First Name</label>
                            <input id="First_Name" required class="form-control" type="text" placeholder="First Name" name="Contact0FirstName" value="<?php echo $firstname; ?>" />
                        </div><!-- col-lg-4 -->
                        <div class="col-lg-4">
                            <label for="Last_Name">Last Name</label>
                            <input id="Last_Name" required class="form-control" type="text" placeholder="Last Name" name="Contact0LastName" value="<?php echo $lastname; ?>" />
                        </div><!-- col-lg-4 -->
                        <div class="col-lg-4">
                            <label for="Email">Email</label>
                            <input id="Email" required class="form-control" type="text" placeholder="Email" name="Contact0Email" value="<?php echo $email; ?>" />
                        </div><!-- col-lg-4 -->
                    </div><!-- form-group -->
                    <div class="form-group">
                         <div class="col-lg-4">
                             <label for="Phone">Phone</label>
                             <input id="Phone" required class="form-control" type="text" placeholder="Phone" name="Contact0Phone1" value="<?php echo $phone; ?>" />
                         </div><!-- col-lg-4 -->
                         <div class="col-lg-4">
                            <label for="Membership_Password">Setup Your  Membership Password</label>
                            <input  type="hidden" name="length" value="8">
                            <input id="Membership_Password" required class="form-control" type="text" placeholder="Password" name="Contact0Password" />
                         </div><!-- col-lg-4 -->
                         <div class="col-lg-4">
                            <label for="Generate_Password"><span class="sr-only">Generate Password</span>&nbsp;</label>
                            <input id="Generate_Password" type="button" class="btn-primary btn form-control" value="Auto Generate Password" onClick="generate();" />
                        </div><!-- col-lg-4 -->
                     </div><!-- form-group -->
                     <p class="lead_order">Billing Address</p>
                     <div class="form-group">
                         <div class="col-lg-12">
                            <label for="Street_Address">Street Address 1 *</label>
                            <input id="Street_Address" required class="form-control" type="text" placeholder="Street Address 1 *" name="Contact0StreetAddress1" />
                        </div><!-- "col-lg-12" -->
                    </div><!-- form-group -->
                    <div class="form-group">
                    	<div class="col-lg-6">
                            <label for="Street_Address2">Street Address 2</label>
                            <input id="Street_Address2" class="form-control" type="text" placeholder="Street Address 2" name="Contact0StreetAddress2" /> 
                        </div><!-- col-lg-6 -->
                        <div class="col-lg-6">
                            <label for="city">City *</label>
                            <input  id="city" required class="form-control" type="text" placeholder="City *" name="Contact0City" />
                        </div><!-- col-lg-6 -->
                    </div><!-- form-group -->
                    <div class="form-group">
                    	<div class="col-lg-4">
                            <label for="state">State *</label>
                            <input id="state" required class="form-control" type="text" placeholder="State *" name="Contact0State" />
                        </div>
                        <div class="col-lg-4">
                            <label for="postalcode">Postal Code *</label>
                            <input id="postalcode" required class="form-control" type="text" placeholder="Postal Code *" name="Contact0PostalCode" />
                        </div><!-- col-lg-4 -->
                        <div class="col-lg-4">
                            <label for="country">Country</label>
                            <select id="country" class="form-control"  name="Contact0Country" >
                              <option value="">Please select a country</option> <option value="Afghanistan">Afghanistan</option> <option value="Albania">Albania</option> <option value="Algeria">Algeria</option> <option value="American Samoa">American Samoa</option> <option value="Andorra">Andorra</option> <option value="Angola">Angola</option> <option value="Anguilla">Anguilla</option> <option value="Antarctica">Antarctica</option> <option value="Antigua and Barbuda">Antigua and Barbuda</option> <option value="Argentina">Argentina</option> <option value="Armenia">Armenia</option> <option value="Aruba">Aruba</option> <option value="Australia">Australia</option> <option value="Austria">Austria</option> <option value="Åland Islands">Åland Islands</option> <option value="Azerbaijan">Azerbaijan</option> <option value="Bahamas">Bahamas</option> <option value="Bahrain">Bahrain</option> <option value="Bangladesh">Bangladesh</option> <option value="Barbados">Barbados</option> <option value="Belarus">Belarus</option> <option value="Belgium">Belgium</option> <option value="Belize">Belize</option> <option value="Benin">Benin</option> <option value="Bermuda">Bermuda</option> <option value="Bhutan">Bhutan</option> <option value="Bolivia">Bolivia</option> <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> <option value="Botswana">Botswana</option> <option value="Bouvet Island">Bouvet Island</option> <option value="Brazil">Brazil</option> <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> <option value="Brunei Darussalam">Brunei Darussalam</option> <option value="Bulgaria">Bulgaria</option> <option value="Burkina Faso">Burkina Faso</option> <option value="Burundi">Burundi</option> <option value="Cambodia">Cambodia</option> <option value="Cameroon">Cameroon</option> <option value="Canada">Canada</option> <option value="Cape Verde">Cape Verde</option> <option value="Cayman Islands">Cayman Islands</option> <option value="Central African Republic">Central African Republic</option> <option value="Chad">Chad</option> <option value="Chile">Chile</option> <option value="China">China</option> <option value="Christmas Island">Christmas Island</option> <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> <option value="Colombia">Colombia</option> <option value="Comoros">Comoros</option> <option value="Congo">Congo</option> <option value="Democratic Republic Of Congo">Democratic Republic Of Congo</option> <option value="Cook Islands">Cook Islands</option> <option value="Costa Rica">Costa Rica</option> <option value="Croatia">Croatia</option> <option value="Cuba">Cuba</option> <option value="Cyprus">Cyprus</option> <option value="Czech Republic">Czech Republic</option> <option value="Côte D'Ivoire">Côte D'Ivoire</option> <option value="Denmark">Denmark</option> <option value="Djibouti">Djibouti</option> <option value="Dominica">Dominica</option> <option value="Dominican Republic">Dominican Republic</option> <option value="Ecuador">Ecuador</option> <option value="Egypt">Egypt</option> <option value="El Salvador">El Salvador</option> <option value="Equatorial Guinea">Equatorial Guinea</option> <option value="Eritrea">Eritrea</option> <option value="Estonia">Estonia</option> <option value="Ethiopia">Ethiopia</option> <option value="Falkland Islands">Falkland Islands</option> <option value="Faroe Islands">Faroe Islands</option> <option value="Fiji">Fiji</option> <option value="Finland">Finland</option> <option value="France">France</option> <option value="French Guiana">French Guiana</option> <option value="French Polynesia">French Polynesia</option> <option value="French Southern Territories">French Southern Territories</option> <option value="Gabon">Gabon</option> <option value="Gambia">Gambia</option> <option value="Georgia">Georgia</option> <option value="Germany">Germany</option> <option value="Ghana">Ghana</option> <option value="Gibraltar">Gibraltar</option> <option value="Greece">Greece</option> <option value="Greenland">Greenland</option> <option value="Grenada">Grenada</option> <option value="Guadeloupe">Guadeloupe</option> <option value="Guam">Guam</option> <option value="Guatemala">Guatemala</option> <option value="Guernsey">Guernsey</option> <option value="Guinea">Guinea</option> <option value="Guinea-Bissau">Guinea-Bissau</option> <option value="Guyana">Guyana</option> <option value="Haiti">Haiti</option> <option value="Heard and McDonald Islands">Heard and McDonald Islands</option> <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> <option value="Honduras">Honduras</option> <option value="Hong Kong">Hong Kong</option> <option value="Hungary">Hungary</option> <option value="Iceland">Iceland</option> <option value="India">India</option> <option value="Indonesia">Indonesia</option> <option value="Iran">Iran</option> <option value="Iraq">Iraq</option> <option value="Ireland">Ireland</option> <option value="Isle of Man">Isle of Man</option> <option value="Israel">Israel</option> <option value="Italy">Italy</option> <option value="Jamaica">Jamaica</option> <option value="Japan">Japan</option> <option value="Jersey">Jersey</option> <option value="Jordan">Jordan</option> <option value="Kazakhstan">Kazakhstan</option> <option value="Kenya">Kenya</option> <option value="Kiribati">Kiribati</option> <option value="North Korea">North Korea</option> <option value="South Korea">South Korea</option> <option value="Kuwait">Kuwait</option> <option value="Kyrgyzstan">Kyrgyzstan</option> <option value="Laos">Laos</option> <option value="Latvia">Latvia</option> <option value="Lebanon">Lebanon</option> <option value="Lesotho">Lesotho</option> <option value="Liberia">Liberia</option> <option value="Libya">Libya</option> <option value="Liechtenstein">Liechtenstein</option> <option value="Lithuania">Lithuania</option> <option value="Luxembourg">Luxembourg</option> <option value="Macao">Macao</option> <option value="Republic of Macedonia">Republic of Macedonia</option> <option value="Madagascar">Madagascar</option> <option value="Malawi">Malawi</option> <option value="Malaysia">Malaysia</option> <option value="Maldives">Maldives</option> <option value="Mali">Mali</option> <option value="Malta">Malta</option> <option value="Marshall Islands">Marshall Islands</option> <option value="Martinique">Martinique</option> <option value="Mauritania">Mauritania</option> <option value="Mauritius">Mauritius</option> <option value="Mayotte">Mayotte</option> <option value="Mexico">Mexico</option> <option value="Federated States of Micronesia">Federated States of Micronesia</option> <option value="Moldova">Moldova</option> <option value="Monaco">Monaco</option> <option value="Mongolia">Mongolia</option> <option value="Montenegro">Montenegro</option> <option value="Montserrat">Montserrat</option> <option value="Morocco">Morocco</option> <option value="Mozambique">Mozambique</option> <option value="Myanmar">Myanmar</option> <option value="Namibia">Namibia</option> <option value="Nauru">Nauru</option> <option value="Nepal">Nepal</option> <option value="Netherlands">Netherlands</option> <option value="Netherlands Antilles">Netherlands Antilles</option> <option value="New Caledonia">New Caledonia</option> <option value="New Zealand">New Zealand</option> <option value="Nicaragua">Nicaragua</option> <option value="Niger">Niger</option> <option value="Nigeria">Nigeria</option> <option value="Niue">Niue</option> <option value="Norfolk Island">Norfolk Island</option> <option value="Northern Mariana Islands">Northern Mariana Islands</option> <option value="Norway">Norway</option> <option value="Oman">Oman</option> <option value="Pakistan">Pakistan</option> <option value="Palau">Palau</option> <option value="Palestine">Palestine</option> <option value="Panama">Panama</option> <option value="Papua New Guinea">Papua New Guinea</option> <option value="Paraguay">Paraguay</option> <option value="Peru">Peru</option> <option value="Philippines">Philippines</option> <option value="Pitcairn">Pitcairn</option> <option value="Poland">Poland</option> <option value="Portugal">Portugal</option> <option value="Puerto Rico">Puerto Rico</option> <option value="Qatar">Qatar</option> <option value="Romania">Romania</option> <option value="Russian Federation">Russian Federation</option> <option value="Rwanda">Rwanda</option> <option value="Réunion">Réunion</option> <option value="St. Barthélemy">St. Barthélemy</option> <option value="St. Helena, Ascension and Tristan Da Cunha">St. Helena, Ascension and Tristan Da Cunha</option> <option value="St. Kitts And Nevis">St. Kitts And Nevis</option> <option value="St. Lucia">St. Lucia</option> <option value="St. Martin">St. Martin</option> <option value="St. Pierre And Miquelon">St. Pierre And Miquelon</option> <option value="St. Vincent And The Grenedines">St. Vincent And The Grenedines</option> <option value="Samoa">Samoa</option> <option value="San Marino">San Marino</option> <option value="Sao Tome and Principe">Sao Tome and Principe</option> <option value="Saudi Arabia">Saudi Arabia</option> <option value="Senegal">Senegal</option> <option value="Serbia">Serbia</option> <option value="Seychelles">Seychelles</option> <option value="Sierra Leone">Sierra Leone</option> <option value="Singapore">Singapore</option> <option value="Slovakia">Slovakia</option> <option value="Slovenia">Slovenia</option> <option value="Solomon Islands">Solomon Islands</option> <option value="Somalia">Somalia</option> <option value="South Africa">South Africa</option> <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option> <option value="Spain">Spain</option> <option value="Sri Lanka">Sri Lanka</option> <option value="Sudan">Sudan</option> <option value="Suriname">Suriname</option> <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option> <option value="Swaziland">Swaziland</option> <option value="Sweden">Sweden</option> <option value="Switzerland">Switzerland</option> <option value="Syrian Arab Republic">Syrian Arab Republic</option> <option value="Taiwan">Taiwan</option> <option value="Tajikistan">Tajikistan</option> <option value="Tanzania">Tanzania</option> <option value="Thailand">Thailand</option> <option value="Timor-Leste">Timor-Leste</option> <option value="Togo">Togo</option> <option value="Tokelau">Tokelau</option> <option value="Tonga">Tonga</option> <option value="Trinidad and Tobago">Trinidad and Tobago</option> <option value="Tunisia">Tunisia</option> <option value="Turkey">Turkey</option> <option value="Turkmenistan">Turkmenistan</option> <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> <option value="Tuvalu">Tuvalu</option> <option value="Uganda">Uganda</option> <option value="Ukraine">Ukraine</option> <option value="United Arab Emirates">United Arab Emirates</option> <option value="United Kingdom">United Kingdom</option> <option value="United States" selected="selected">United States</option> <option value="US Minor Outlying Islands">US Minor Outlying Islands</option> <option value="Uruguay">Uruguay</option> <option value="Uzbekistan">Uzbekistan</option> <option value="Vanuatu">Vanuatu</option> <option value="Venezuela">Venezuela</option> <option value="Viet Nam">Viet Nam</option> <option value="Virgin Islands, British">Virgin Islands, British</option> <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> <option value="Wallis and Futuna">Wallis and Futuna</option> <option value="Western Sahara">Western Sahara</option> <option value="Yemen">Yemen</option> <option value="Zambia">Zambia</option> <option value="Zimbabwe">Zimbabwe</option> 
                              </select>
                        </div><!-- col-lg-4 -->
                     </div><!-- form-group -->
                     <p class="lead_order">Credit Card Information </p>
                     <!-- These group of styles shows the credit cards just in case you are directly leading people to this page as a sales page. use "hidden" to hide it from view -->
                     <p class="hidden-xs"><i class="fa fa-cc-visa fa-3x"></i> <i class="fa fa-cc-mastercard fa-3x"></i> <i class="fa fa-cc-discover fa-3x"></i> <i class="fa fa-cc-amex fa-3x"></i></p>
					 <div class="form-group">
                     	<div class="col-lg-6">
                         	<label for="Credit_Card_Type">Credit Card Type * </label>
                         	<select id="Credit_Card_Type" class="form-control"  name="CreditCard0CardType">
                                <option value="">Please select a card type</option> <option value="American Express">American Express</option> <option value="Discover">Discover</option> <option value="MasterCard">MasterCard</option> <option value="Visa">Visa</option></select>
                         </div><!-- col-lg-6 -->
                         <div class="col-lg-6">
                             <label for="Card_Number">Card Number *</label>
                             <input id="Card_Number" required maxlength="16" class="form-control"  name="CreditCard0CardNumber" type="text"  autocomplete="off">
                     	</div><!-- col-lg-6 -->
                     </div><!-- form-group -->
                     <div class="form-group">
                        <div class="col-lg-4">
                            <label for="CreditCardExpirationMonth">Expiration *<span class="sr-only">Credit Card Expiration Month</span></label>
                            <select id="CreditCardExpirationMonth" class="form-control" name="CreditCard0ExpirationMonth">
                                <option value="01">01</option> <option value="02">02</option> <option value="03">03</option> <option value="04">04</option> <option value="05">05</option> <option value="06">06</option> <option value="07">07</option> <option value="08">08</option> <option value="09">09</option> <option value="10">10</option> <option value="11">11</option> <option value="12">12</option> </select>
                     	</div><!-- col-lg-4 -->
                        <div class="col-lg-4">
                            <label for="CreditCardExpirationYear"><span class="sr-only">Credit Card Expiration Year</span>&nbsp;</label>
                            <select id="CreditCardExpirationYear" class="form-control" name="CreditCard0ExpirationYear">
                                <option value="2015">2015</option> <option value="2016">2016</option> <option value="2017">2017</option> <option value="2018">2018</option> <option value="2019">2019</option> <option value="2020">2020</option> <option value="2021">2021</option> <option value="2022">2022</option> <option value="2023">2023</option> <option value="2024">2024</option> <option value="2025">2025</option> <option value="2026">2026</option> </select>
                          </div><!-- col-lg-4 -->
                          <div class="col-lg-4">
                             <label for="ccv" >CCV *</label>
                             <input id="ccv" size="5" class="form-control" name="CreditCard0VerificationCode" type="text" required >
                          </div>
                     </div>
                     <p class="lead_order">Purchase Plan</p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula suscipit tellus ac porta. Nulla at nisi eleifend, eleifend sapien id, aliquam leo. Donec eget vehicula urna, sed faucibus risus. Etiam pellentesque, eros eu semper congue, odio neque mollis libero, ut suscipit diam dolor nec orci. Suspendisse hendrerit commodo urna, ut consequat felis varius et. Mauris in eros mattis, euismod massa et, placerat sem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque venenatis venenatis vehicula.</p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula suscipit tellus ac porta. Nulla at nisi eleifend, eleifend sapien id, aliquam leo. Donec eget vehicula urna, sed faucibus risus. Etiam pellentesque, eros eu semper congue, odio neque mollis libero, ut suscipit diam dolor nec orci. Suspendisse hendrerit commodo urna, ut consequat felis varius et. Mauris in eros mattis, euismod massa et, placerat sem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque venenatis venenatis vehicula.</p>
                     <p>A cancellation pursuant to the above policy only ensures no future rebills.</p>
                     <p><em><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula suscipit tellus ac porta. Nulla at nisi eleifend, eleifend sapien id, aliquam leo. Donec eget vehicula urna, sed faucibus risus. Etiam pellentesque, eros eu semper congue, odio neque mollis libero, ut suscipit diam dolor nec orci. Suspendisse hendrerit commodo urna, ut consequat felis varius et. Mauris in eros mattis, euismod massa et, placerat sem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque venenatis venenatis vehicula.</strong></em></p><br />
                     <div class="form-group">
                    	<div class="col-lg-6 col-lg-offset-3">
                    		<label for="signature" class="sr-only">Type your signature to confirm your purchase</label>
                    		<input type="text" id="signature" class="form-control" name="Custom-Initials" placeholder="Type your signature to confirm your purchase" />						
                       </div><!-- col-xs-10 -->
                     </div><!-- form-group  -->
                     <h3 class="text-center"><button class="btn btn-lg btn-lgpadd btn-warning text-uppercase" name="submit" type="submit">Order Now  <i class="fa fa-shopping-cart "></i></button></h3>
        	 </form> 
            </div><!--  col-lg-12 -->
        </div><!-- row -->
    </div><!-- contaniner  -->
  	<div class="container nopadding footer">
    	<div class="row">
        	<div class="col-lg-12">
            	<footer>
                	<ul>
                	  <li><strong>Lorem Ipsum  &copy; <?php auto_copyright(); ?></strong> &nbsp;&nbsp;</li>
                	  <li><a href="#">Privacy Policy</a></li>
                	  <li><a href="#">Disclaimer</a></li>
                	  <li><a href="#">Contact Us</a></li>
                	  <li><a href="#">Terms of Service</a></li>
              	  </ul>
            	</footer>
            </div><!--  col-lg-12 -->
        </div>
    </div><!-- contaniner  -->    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="js/bootstrap.min.js"></script>-->
  
  </body>
</html>