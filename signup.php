<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "employment";

//$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
//$connectionInfo = array( "Database"=>"JGBS_Dev", "UID"=>"devloperuser", "PWD"=>"JG%987");
//$conn = mssql_connect($serverName, 'liveuser', 'JGLive@538%');
//mssql_select_db("JGBS",$conn);

//if( $conn === false ) {
   // die( print_r( sqlsrv_errors(), true));
//}
//else
//{

//}

?>
<html>
<head>
    <noscript>
    This page needs JavaScript activated to work. 
    <style>div { display:none; }</style>
    </noscript>
    <title>Signup - J.M. Grove  - The Home Improvement Specialists</title>
    <link rel="stylesheet" href="inc/grovestyle.css" type="text/css">
    <link rel="stylesheet" href="inc/intlTelInput.css" type="text/css">
    <meta name="description" content="J.M.Grove -  replacement windows, doors, roofing, vinyl siding, gutters, awnings, brick, stone veneer, skylights, additions, decks and much more!" />
    <meta name="keywords" content=" J.M Grove, J.M. Grove employment, J.M. Grove jobs, Installer jobs construction, windows, doors, roofing, vinyl siding, gutters, awnings, brick, stone veneer, skylights, additions, decks " />
    
    <style>

label.error {
    color: #c72121;
    display:inline-block;
    position: relative;
    font-size: 9px;
}
label#NameMiddleInitial-error {
   float:right;
}
   input[type="text"].error
{
 border-color:#c72121;
}
.cntpref {
    background: #efeeee;
    padding: 10px;
    width: 94%;
	display: inline-block;
	margin-bottom: 15px;
	text-transform: capitalize;
}
.cntpref span {
    float: left;
	width: 40%;
}
.cntpref label {
    display: inline-block;
    margin-left: 5%;
	
}
.allow-dropdown
{
width:100%;    
}
        .content_panel {
            border-radius: 7px;
            min-height: 400px;
            padding: 13px 0 35px 13px;
            font-size: 12px;
            color: #4d4a33;
            font-family: Arial, Helvetica, sans-serif;
        }

            .content_panel .login_right_panel {
                background: #efeeee;
                border-radius: 10px;
                box-shadow: 0 5px 2px #a1a0a0;
                margin: 0 auto;
                min-height: 200px;
                padding: 0 0 26px;
                width: 508px;
                float:left;
            }
			.content_panel .signup_panel {
                background: #efeeee;
                border-radius: 10px;
                box-shadow: 0 5px 2px #a1a0a0;
                margin: 0 auto;
                padding: 0 0 26px;
                width: 685px;
                float:left;
            }

            .content_panel h1 {
                background: rgba(193,82,85,1);
                background: -moz-linear-gradient(top, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
                background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(193,82,85,1)), color-stop(100%, rgba(169,64,66,1)));
                background: -webkit-linear-gradient(top, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
                background: -o-linear-gradient(top, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
                background: -ms-linear-gradient(top, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
                background: linear-gradient(to bottom, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c15255', endColorstr='#a94042', GradientType=0 );
                border-radius: 7px 7px 0 0;
                color: #fff;
                font-size: 22px;
                font-weight: normal;
                height: 45px;
                line-height: 45px;
                margin: 0;
                padding: 0 0 0 25px;
            }

                .content_panel h1 b {
                    font-weight: normal;
                    padding: 0 0 0 18px;
                    color: #FFF;
                }

            .content_panel .login_form_panel {
                background: #efeeee;
                border-top: 10px solid #000;
                min-height: 200px;
                padding: 0 5px;
            }

                .content_panel .login_form_panel ul {
                    list-style-type: none;
                    margin: 0;
                    overflow: auto;
                    padding: 0;
                }

                    .content_panel .login_form_panel ul li.last {
                        border-right: 0 none;
                    }

                    .content_panel .login_form_panel ul li {
                        border-right: 0 solid #fff;
                        float: left;
                        margin: 0;
                        padding: 0;
                        width: 99%;
                    }

                        .content_panel .login_form_panel ul li table {
                            margin: 0 3%;
                            width: 94%;
                        }

                            .content_panel .login_form_panel ul li table tr td {
                                background: rgba(0, 0, 0, 0) url("img/line.png") repeat-x scroll center bottom;
                                padding: 10px 15px 12px;
                            }

            .content_panel input[type="checkbox"] {
                float: left;
                height: 20px;
                line-height: 20px !important;
                margin: 0 5px 0 0 !important;
            }

            .content_panel label {
                float: left;
            }

            .content_panel .login_form_panel ul li table tr td label {
                display: inline-block;
                font-weight: normal;
                line-height: 8px;
                margin-right: 2%;
                padding-top: 5px;
                vertical-align: top;
                width: 28%;
            }

            .content_panel .login_form_panel ul li table tr td input, .content_panel .login_form_panel ul li table tr td textarea, .content_panel .login_form_panel ul li table tr td select {
                border: 1px solid #b5b4b4;
                border-radius: 5px;
                line-height: 14px;
                margin: 0;
                padding: 5px;
            }

            .content_panel a {
                color: #06c;
                text-decoration: underline;
            }

                .content_panel a:hover, .content_panel a:focus {
                    color: #09F;
                }

            .content_panel .btn_sec {
                width: 44%;
                float: left;
                height: 60px;
            }

        .btn_sec input[type="submit"] {
            background: rgba(193,82,85,1);
            background: -moz-linear-gradient(top, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(193,82,85,1)), color-stop(100%, rgba(169,64,66,1)));
            background: -webkit-linear-gradient(top, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
            background: -o-linear-gradient(top, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
            background: -ms-linear-gradient(top, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
            background: linear-gradient(to bottom, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c15255', endColorstr='#a94042', GradientType=0 );
            border-radius: 10px;
            box-shadow: 0 0 10px #a1a0a0;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            line-height: 34px;
            margin: 5px 10px;
            padding: 0 10px;
            text-decoration: none;
            border: 2px solid #FFF !important;
        }

        .col-250 {
            width: 320px;
            min-height: 35px;
            margin-bottom:15px;
        }

        .left {
            float: left;
        }

        .right {
            float: right;
        }

        .clear-float {
            float: none;
            clear: both;
        }

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        .pad-5 {
            padding: 5px;
        }

        .emp-mltxtbox {
            color: #999999;
            width: 94%;
            height: 70px;
            border: 1px solid;
            border-radius: 5px;
        }

        .emp-txtbox {
            color: #999999;
            width: 94%;
            height: 25px;
            border: 1px solid;
            border-radius: 5px;
        }

        .emp-ddl {
            color: #999999;
            width: 94%;
            height: 25px;
            border: 1px solid;
            border-radius: 5px;
			margin-bottom: 10px;
        }
		h2.boxheading{font-size: 20px; margin: 0 0 12px; padding: 0;}
		label.f-label{display: inline-block; font-size: 1em; font-weight: bold; margin-bottom: 5px;}
    </style>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <div align="center">
        <div id="shell">
            <?php  include("inc/header.php"); ?>
            <div id="content">
                <?php include("inc/employee_leftmenu.php"); ?>
                <div id="content-right">
                    <div style="width:100%;height:17px;float:left;overflow:hidden;"></div>
                    
                    <div style="width:100%;float:left;overflow:hidden;font-size:.8em;">
                        <section class="content_panel" style="min-height:inherit;">
                        <form name="loginform" id="loginform" method="post" action="billing-registration.php">

                            <div class="signup_panel">
                                <h1 style="text-align:left;"><b>Sign Up</b></h1>

                                <!-- Tabs starts -->
                                <div id="tabs-1" style="margin: 0 0 0 0 !important;">
                                    <div class="login_form_panel" style="margin: 0 0 0 0 !important;">
                                        <ul>
                                            <li class="last">
											
											<h2 style="background: rgba(0, 0, 0, 0) url(img/line.png) repeat-x scroll center bottom;padding: 10px 15px 12px;">Contact Information</h2>
											
                                                <table cellspacing="0" cellpadding="0" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <label>First Name<span>*</span></label>
                                                                <input name="txtloginid" id="txtloginid" tabindex="1" placeholder="Enter First Name" style="width:311px;" type="text">
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Last Name<span>*</span></label>
                                                                <input name="txtpassword" id="txtpassword" tabindex="2" placeholder="Enter Last Name" value="" style="width:311px;" type="text">
                                                                
                                                            </td>
                                                        </tr>
														
														 <tr>
                                                            <td>
                                                                <label>Email ID<span>*</span></label>
                                                                <input name="txtloginid" id="txtloginid" tabindex="1" placeholder="Enter email id" style="width:311px;" type="text">
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Password<span>*</span></label>
                                                                <input name="txtpassword" id="txtpassword" tabindex="2" placeholder="Enter Password" value="" style="width:311px;" type="password">
                                                                
                                                            </td>
                                                        </tr>
														 <tr>
                                                            <td>
                                                                <label>Confirm Password<span>*</span></label>
                                                                <input name="txtpassword" id="txtpassword" tabindex="2" placeholder="Enter Confirm Password" value="" style="width:311px;" type="password">
                                                                
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td>
                                                                <label>Date of Birth<span>*</span></label>
                                                                <input name="txtpassword" id="txtpassword" tabindex="2" placeholder="Enter Date of Birth" value="" style="width:311px;" type="text">
                                                                
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td>
                                                                <label>Gender<span>*</span></label>
                                                                <select name="gender">
																<option value="">Select gender</option>
																<option value="male">Male</option>
																<option value="female">Female</option>
																</select>
                                                                
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td>
                                                                <label>Contact No.<span>*</span></label>
                                                                <input name="txtpassword" id="txtpassword" tabindex="2" placeholder="Enter Contact Number" value="" style="width:311px;" type="text">
                                                               
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td>
                                                                <label>Phone Type<span>*</span></label>
                                                                <select name="gender">
																<option value="">Select phone type</option>
																<option value="land">Land phone</option>
																<option value="mobile">Mobile phone</option>
																</select>
                                                                
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td>
                                                                <label>Emergency Contact Name</label>
                                                                <input name="txtpassword" id="txtpassword" tabindex="2" placeholder="Enter Emergency Contact Name" value="" style="width:311px;" type="text">
                                                                
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td>
                                                                <label>Emergency Contact Number<span>*</span></label>
                                                                <input name="txtpassword" id="txtpassword" tabindex="2" placeholder="Enter Emergency Contact Number" value="" style="width:311px;" type="text">
                                                                <span id="RequiredFieldValidator2" style="color:Red;display:none;">Please Enter Emergency Contact Number</span>
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td>
                                                                <label><input type="checkbox" name="check_sign" value="co-sign">Co-Signor</label>
                                                               <!-- <input name="txtpassword" id="txtpassword" tabindex="2" placeholder="Enter Last Name" value="" style="width:311px;" type="text">
                                                                <span id="RequiredFieldValidator2" style="color:Red;display:none;">Please Enter Last Name</span>-->
                                                            </td>
                                                        </tr>
														
														
														<tr>
                                                            <td>
                                                                <h2>Previous Address</h2>
                                                            </td>
                                                        </tr>
														
														
														
														<tr>
                                                            <td>
                                                                <label>Previous Address</label>
                                                                <input name="txtpassword" id="txtpassword" tabindex="2" placeholder="" value="" style="width:311px;" type="text">
                                                                
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td>
                                                                <label>Zip Code</label>
                                                                <input name="txtpassword" id="txtpassword" tabindex="2" placeholder="Enter Zip Code" value="" style="width:311px;" type="text">
                                                                
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td>
                                                                <label>City</label>
                                                                <select name="gender">
																<option value="">Select city</option>
																</select>
                                                               
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td>
                                                                <label>State</label>
                                                                <select name="gender">
																<option value="">Select state</option>
																</select>
                                                                
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td>
                                                                <label>Country</label>
                                                                <select name="country" id="country" >
                                                    <option value="">Country...</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AG">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AG">Antigua &amp; Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AA">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia</option>
                                                    <option value="BL">Bonaire</option>
                                                    <option value="BA">Bosnia &amp; Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="BC">British Indian Ocean Ter</option>
                                                    <option value="BN">Brunei</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="IC">Canary Islands</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CD">Channel Islands</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CI">Christmas Island</option>
                                                    <option value="CS">Cocos Island</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="CC">Comoros</option>
                                                    <option value="CG">Congo</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="CT">Cote D'Ivoire</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CB">Curacao</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="TM">East Timor</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FA">Falkland Islands</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="FS">French Southern Ter</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GB">Great Britain</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HW">Hawaii</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IA">Iran</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IR">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="NK">Korea North</option>
                                                    <option value="KS">Korea South</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Laos</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macau</option>
                                                    <option value="MK">Macedonia</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="ME">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="MI">Midway Islands</option>
                                                    <option value="MD">Moldova</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Nambia</option>
                                                    <option value="NU">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="AN">Netherland Antilles</option>
                                                    <option value="NL">Netherlands (Holland, Europe)</option>
                                                    <option value="NV">Nevis</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NW">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PW">Palau Island</option>
                                                    <option value="PS">Palestine</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PO">Pitcairn Island</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="ME">Republic of Montenegro</option>
                                                    <option value="RS">Republic of Serbia</option>
                                                    <option value="RE">Reunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="NT">St Barthelemy</option>
                                                    <option value="EU">St Eustatius</option>
                                                    <option value="HE">St Helena</option>
                                                    <option value="KN">St Kitts-Nevis</option>
                                                    <option value="LC">St Lucia</option>
                                                    <option value="MB">St Maarten</option>
                                                    <option value="PM">St Pierre &amp; Miquelon</option>
                                                    <option value="VC">St Vincent &amp; Grenadines</option>
                                                    <option value="SP">Saipan</option>
                                                    <option value="SO">Samoa</option>
                                                    <option value="AS">Samoa American</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">Sao Tome &amp; Principe</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="OI">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syria</option>
                                                    <option value="TA">Tahiti</option>
                                                    <option value="TW">Taiwan</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad &amp; Tobago</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TU">Turkmenistan</option>
                                                    <option value="TC">Turks &amp; Caicos Is</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="US" selected="selected">United States of America</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VS">Vatican City State</option>
                                                    <option value="VE">Venezuela</option>
                                                    <option value="VN">Vietnam</option>
                                                    <option value="VB">Virgin Islands (Brit)</option>
                                                    <option value="VA">Virgin Islands (USA)</option>
                                                    <option value="WK">Wake Island</option>
                                                    <option value="WF">Wallis &amp; Futana Is</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZR">Zaire</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                                                
                                                            </td>
                                                        </tr>
														
                                                        <tr>
                                                            <td style="padding-bottom:2px !important;background:none !important;">
                                                                <label></label>
                                                                <div class="btn_sec">
                                                                    <input name="btnsubmit" value="Create & Continue" id="btnsubmit" tabindex="3" style="width: 60% !important; height: 67% !important;" type="submit">&nbsp;&nbsp;<input name="cncl" value="Cancel" id="btnsubmit" tabindex="3" style="width: 30% !important; height: 67% !important;" type="submit">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!--<tr>
                                                            <td style="padding-top:0px !important;">
                                                                <label></label>
                                                                <a id="lnkForgotUsername" href="http://web.jmgrovebuildingsupply.com/ForgotuserId.aspx">Forgot Username</a> &nbsp;<a id="lnkForgotPassword" href="http://web.jmgrovebuildingsupply.com/ForgotPassword.aspx">Forgot Password</a>
                                                            </td>
                                                        </tr>-->
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            </form>
                        </section>
                        <?php if(isset($_GET['view'])=='formbox')
                        {
                        $style= 'block';
                        }
                        else
                        {
                        $style ='none';
                        }
                        ?>


                        
                    </div>

                </div>

            </div>
            <?php include("inc/testimonials.php"); ?>
        </div>
        <?php include("inc/footer.php"); ?>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCynLsMUZYv7PFhEHbkF5QfPXhY-FuQ2j0"></script>


    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js"></script>
    <script type="text/javascript" src="jquery.mask.js"></script>
    <script type="text/javascript">
	$.validator.addMethod('filesize', function (value, element, param) {
			return this.optional(element) || (element.files[0].size <=  1024 * 1024 * param)
	}, 'File size must be less than {0} MB');
    $("#employees_data_form").validate({
		  rules: {
		    fname: "required",
		    email: {
		      required: true,
		      email: true
		    },
		    lname: "required",
			/*git_uname: "required",*/
		    zip: "required",
		    state: "required",
		    city: "required",
		    address: "required",
		    phone: "required",
		    startdate: "required",
		    salary: "required",
		    position: "required",
            NameMiddleInitial: "required",
            reasonforleaving:"required",
            salaryrequirements:"required",
            messagetorecruiter:"required",
            profilepic: {
				required: true,
				filesize: 2,
				extension: "gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG"
			},
			resume: {
				required: true,
				filesize: 2,
				extension: "pdf|doc|txt|docx|PDF|DOC|TXT|DOCX|gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG"
			},
            employed:{required: true},
            crime:{required: true},
            drugtest:{required: true},
            workedforjg:{required: true},
            source: "required",
            jobtype:"required"

		  },
		  messages:{
            profilepic: {
				extension: "Please attach file having extension .gif,.jpg,.png,.jpeg. Replace this with extensions we allow."
			},
			 resume: {
				extension: "Please attach file having extension .pdf,.doc,.txt,.gif,.jpg,.png,.jpeg. Replace this with extensions we allow."
				
			}
		  }
		  /*,
		  submitHandler: function(form) {
		    form.submit();
		  }*/

		});

		$("#loginform").validate({
		  rules: {
		    txtloginid: "required",
		    txtpassword: "required",
		   },
		  submitHandler: function(form) {
		    form.submit();
		  }

		});
    </script>
    <script src="js/intlTelInput.js"></script>
    <script type="text/javascript">
	
	function chk_gitunm_val(postn_val)
		{
			
			
			if(postn_val==8 || postn_val==9 || postn_val==10 || postn_val==11 || postn_val==12 || postn_val==13 || postn_val==21)
			{
			//alert(postn_val);
			
				if(document.myForm.git_uname.value=="")
				{
				//alert("Please Enter GitHub Username");
				jQuery("#er_chk_gitunm").css('display','none');
				jQuery("#git_uname_error").css('display','inline');
				//document.myForm.git_uname.focus();
				jQuery("#frm_sub").attr('disabled','disabled');
				return false;
				}
				if(document.myForm.git_uname.value!="")
				{
				var url="https://api.github.com/users/"+document.myForm.git_uname.value;
				//alert(url);
				jQuery("#git_uname_error").css('display','none');
				jQuery.ajax(url, {
					statusCode: {
					404: function() {
					  //alert('Not a valid github username');
					  jQuery("#er_chk_gitunm").css('display','inline');
					  //document.myForm.git_uname.focus();
					},
					200: function() {
					  //alert('Valid Username');	
					  jQuery("#er_chk_gitunm").css('display','none');	  
					}
				  }
				});	
				}
			
			}
			else {
			jQuery("#git_uname_error").css('display','none');
			jQuery("#frm_sub").removeAttr('disabled');
			}
		
		}

        function ValidateEmail(mail) {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
                return (true);
            }
            alert("Please enter valid email address!");
            return (false);
        }

        function emailBlur(){
            var email = $("#email").val();

                if (email != '') {
                    //alert(email);
                    $.ajax({
                        url: "emailValidation.php",
                        type: "POST",
                        data: { email: email },
                        success: function (returnedData) {
                            //  alert('done');
                            //var returnedData = data.json;
                            if (returnedData == "Exist") {
                                var r = confirm("This email is already exists, do you want to go our staff login page?");
                                if (r == true) {
                                    window.location.href = "http://web.jmgrovebuildingsupply.com/stafflogin.aspx";
                                }
                                else
                                {
                                    
                                    $("#email").val('');
                                    $("#email").focus();
                                    $("#email").trigger('change');
                                    return false;
                                }
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            //alert('not done');
                            $('#info').html(textStatus + ", " + errorThrown);
                        }
                    });
                }
        }

        $(document).ready(function () {



            $('#country, #zip').on('change', function () {
                var str = $('#zip').val() + ',' + $("#country option:selected").text();
                var geocoder;
                var map;

                geocoder = new google.maps.Geocoder();
                var address = str;
                var city;

                geocoder.geocode({ 'address': address }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {

                        for (var component in results[0]['address_components']) {
                            for (var i in results[0]['address_components'][component]['types']) {
                                if (results[0]['address_components'][component]['types'][i] == "administrative_area_level_1") {
                                    state = results[0]['address_components'][component]['long_name'];
                                    city = results[0]['address_components'][1]['long_name'];
                                    $("#city").val(city);
                                    $("#state").val(state);
                                    $('#reasonforleaving').focus();
                                }
                            }
                        }
                    } else {
                        alert('Invalid Zipcode');
                    }
                });

            });

            $("#startdate").datepicker(
                     {
                         minDate: 0,
                         dateFormat: 'yy-mm-dd',
                         changeMonth: true,
                         changeYear: true,
                         yearRange: '1950:2050'
                     }
                 );

            var position = $("#position option:selected").text();

            $("#position_text").val(position);

            $("#otherposition").hide();



            $("#email").on("blur", function () {

                var email = $("#email").val();

                if (email != '') {
                    //alert(email);
                    $.ajax({
                        url: "emailValidation.php",
                        type: "POST",
                        data: { email: email },
                        success: function (returnedData) {
                            //  alert('done');
                            //var returnedData = data.json;
                            if (returnedData == "Exist") {
                                var r = confirm("This email is already exists, do you want to go our staff login page?");
                                if (r == true) {
                                    window.location.href = "http://web.jmgrovebuildingsupply.com/stafflogin.aspx";
                                }
                                else
                                {
                                	
                                    $("#email").val('');
                                    $("#email").focus();
                                    $("#email").trigger('change');
                                    return false;
                                }
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            //alert('not done');
                            $('#info').html(textStatus + ", " + errorThrown);
                        }
                    });
                }
            });
 
 $("#source").change(function () {

var sourcetext = $("#source option:selected").text();

$("#source_text").val(sourcetext);

 });

            $("#position").change(function () {
                //    var position = $("#position").val();
                var position = $("#position option:selected").text();

                $("#position_text").val(position);
                //  alert(position);
                switch (position) {
                    case 'Installer - Helper':
                    case 'Installer - Journeyman':
                    case 'Installer - Mechanic':
                    case 'Installer - Lead mechanic':
                    case 'Installer - Foreman':
                    case 'Commercial Only':
                    case 'SubContractor':
                        position = 'installer';
                        break;
                    default: position = 'SalesUser';
                        break;
                }
               // alert(position);
                $("#user_type").val(position);

            });
ApplyIntlPhoneValidation();

$("#txtloginid").blur(function(){
    if( $(this).val() != '' &&!ValidateEmail($(this).val()))
    {
        $(this).val('');
        $(this).focus();
        return false;
    }
    else
    {
    return true;
    }
});

// $("#email").blur(function(){
//   if($(this).val() != '' && !ValidateEmail($(this).val()))
//     {
//         $(this).val('');
//         $(this).focus();
//         return false;
//     }
//     else
//     {
// return true;
//     }

// });


});




 function checkAlreadyExistPhone() {

                //var phone = $("#phone").val();
                var phone = $("#phone").intlTelInput("getNumber");
                //alert(phone);
                if (phone != '') {
                    $.ajax({
                        url: "phoneValidation.php",
                        type: "POST",
                        data: { phone: phone },
                        success: function (data) {
                            //var returnedData = data.json;

                            if (data.trim() == "Exist") {
                                var r = confirm("This phone is already exists, do you want to go our staff login page?");
                                if (r == true) {
                                    window.location.href = "http://web.jmgrovebuildingsupply.com/stafflogin.aspx";
                                }
                                else
                                {
                                    $("#phone").val('');
                                    $("#phone").focus();
                                }
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {

                            $('#info').html(textStatus + ", " + errorThrown);
                        }
                    });

                }
            }


function    ApplyIntlPhoneValidation()
{

var telInput = $("#phone");

// initialise plugin
telInput.intlTelInput({
  utilsScript: "js/intl-tel-utils.js",
  separateDialCode: true,
  initialCountry: "auto",
  geoIpLookup: function(callback) {
    $.get('http://ipinfo.io', function() {}, "jsonp").always(function(resp) {
      var countryCode = (resp && resp.country) ? resp.country : "";
      callback(countryCode);
    });
  }
});

var reset = function() {

};

// on blur: validate
telInput.blur(function() {
  reset();
  if ($.trim(telInput.val())) {
    if (telInput.intlTelInput("isValidNumber")) {
      checkAlreadyExistPhone();
    } else {
      alert('Invalid phone number');
      telInput.val('');
      return false;
    }
  }
});

// on keyup / change flag: reset
telInput.on("keyup change", reset);

}

function    LoginFormValidation ()
{

var d = document.loginform;
            //alert(d);
            if (d.txtloginid.value == "") {
                alert("Please Enter Login Id");
                d.txtloginid.focus();
                return false;
            }
            if (d.txtpassword.value == "") {
                alert("Please Enter Password");
                d.txtpassword.focus();
                return false;
            }

            return true;

}
        function formValidation() {
            //alert('abc');
            var d = document.myForm;
            //alert(d);
            if (d.fname.value == "") {
                alert("Please Enter First Name");
                d.fname.focus();
                return false;
            }
            if (d.lname.value == "") {
                alert("Please Enter Your Last name");
                d.lname.focus();
                return false;
            }
            if (d.email.value == "") {
                alert("Please Enter Email Address");
                d.email.focus();
                return false;
            }
			
			

            if (d.zip.value == "") {
                alert("Please Enter Your zip");
                d.zip.focus();
                return false;
            }

            if (d.state.value == "") {
                alert("Please Enter State");
                d.state.focus();
                return false;
            }

            if (d.city.value == "") {
                alert("Please Enter Your City");
                d.city.focus();
                return false;
            }
            if (d.address.value == "") {
                alert("Please Enter Your Address");
                d.address.focus();
                return false;
            }
            if (d.phone.value == "") {
                alert("Please Enter Your phone");
                d.phone.focus();
                return false;
            }
            if (d.startdate.value == "") {
                alert("Please Enter Start date");
                d.startdate.focus();
                return false;
            }

            if (d.salary.value == "") {
                alert("Please Enter Salary");
                d.salary.focus();
                return false;
            }
            if (d.position.value == "") {
                alert("Please Select Position");
                d.position.focus();
                return false;
            }

            if (document.getElementById('workyes').checked == false && document.getElementById('workno').checked == false) {
                alert("Please Select Work Status (Yes or No)");
                return false;
            }
            if (document.getElementById('licenseyes').checked == false && document.getElementById('licenseno').checked == false) {
                alert("Please Select License Status(Yes or No)");
                return false;
            }
            if (document.getElementById('crimeyes').checked == false && document.getElementById('crimeno').checked == false) {
                alert("Please Select Crime Status (Yes or No)");
                return false;
            }

            var fmVal = $('#resume').val();
            if (fmVal == '') {
                alert("Please Upload Resume");
                return false;
            }

            if (d.position.value == "17" && d.otherposition.value == "") {
                alert("Please Enter Position Name");
                d.otherposition.focus();
                return false;
            }


            return true;
        }
		function chk_gituname(uname_val)
	{
	//alert(uname_val);
	var url="https://api.github.com/users/"+uname_val;
	jQuery("#git_uname_error").css('display','none');
	jQuery.ajax(url, {
			  statusCode: {
				404: function() {
				  //alert('Not a valid github username');
				  if(document.myForm.git_uname.value=="") {
				  jQuery("#er_chk_gitunm").css('display','none');
				  } else {
				  jQuery("#er_chk_gitunm").css('display','inline');
				  }
				  jQuery("#frm_sub").attr('disabled','disabled');
				  //document.myForm.git_uname.focus();
				},
				200: function() {
				  //alert('Valid Username');	
				  jQuery("#er_chk_gitunm").css('display','none');	
				  jQuery("#frm_sub").removeAttr('disabled');	  
				}
			  }
			});		
	
	}
        </script>

</body>
<?php include_once("inc/analyticstracking.php") ?>
</html>
