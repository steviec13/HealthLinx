<!--
<?php// require_once($_SERVER['DOCUMENT_ROOT']."/slpw/sitelokregister.php"); ?>
-->
<table class="bodyText" align="center" border="0" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td>
                <div align="left">
                    <span class="navHeadlineOrg">
                        <strong>Complete this registration form to get started!</strong>
                        Fields marked with an asterisk (<span class="style2">*</span>) are required.
                    </span>
                    <form class="registerForm" name="sitelokregisteruser" action="/registrationConfirmation/" method="POST" enctype="multipart/form-data">
                        <?php registeruser("JOBS","0","../critical_care/opportunities2.php?username=!!!username!!!&password=!!!passwordhash!!!","newuser.htm","newuseradmin.htm","Yes","YYYYYYYYYYYYYYYYY"); ?>
                        <table class="bodyText registerTable" border="0" cellpadding="2" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td align="left" valign="middle">First Name:</td>
                                    <td align="left" valign="baseline">
                                        <input type="text" name="custom1" maxlength="50" size="30" value="<?php echo $custom1; ?>" required></input>
                                        <sup><font color="#ff0000">*</font></sup>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle">Last Name:</td>
                                    <td align="left" valign="baseline">
                                        <input type="text" name="name" maxlength="50" size="30" value="<?php echo $name; ?>" required></input>
                                        <sup><font color="#ff0000">*</font></sup>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle">Contact Phone:
                                    <sup>Please indicateWork (W) or Home (H)</sup>
                                    </td>
                                    <td align="left" valign="center">
                                        <input type="text" name="custom2" maxlength="50" size="30" value="<?php echo $custom2; ?>"></input>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle">Email:</td>
                                    <td align="left" valign="baseline">
                                        <input type="text" name="email" maxlength="50" size="30" required></input>
                                        <sup><font color="#ff0000">*</font></sup>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle">Verify Email:</td>
                                    <td align="left" valign="baseline">
                                        <input type="text" name="verifyemail" maxlength="50" size="30" required></input>
                                        <sup><font color="#ff0000">*</font></sup>
                                    </td>
                                </tr> 
                                <tr>
                                    <td align="left" valign="middle">Create a Password:</td>
                                    <td align="left" valign="baseline">
                                        <input type="password" name="password" maxlength="50" size="30" required></input>
                                        <sup><font color="#ff0000">*</font></sup>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle">Verify Password:</td>
                                    <td align="left" valign="baseline">
                                        <input type="password" name="verifypassword" maxlength="50" size="30" required></input>
                                        <sup><font color="#ff0000">*</font></sup>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle">City:</td>
                                    <td align="left" valign="baseline">
                                        <input type="text" name="custom3" maxlength="50" size="30" value="<?php echo $custom3; ?>"></input>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle">State:</td>
                                    <td align="left" valign="baseline">
                                        <select name="custom4">
                                            <option value="ns">Select:</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AK">Arkansas</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="IA">Iowa</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MA">Massachussetts</option>
                                            <option value="MD">Maryland</option>
                                            <option value="ME">Maine</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MT">Montana</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NY">New York</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VA">Virginia</option>
                                            <option value="VT">Vermont</option>
                                            <option value="WA">Washington</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WY">Wyoming</option>
                                         </select><?php echo $custom4; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle">Current Position:</td>
                                    <td align="left" valign="baseline">
                                            <select name="custom5">
                                                <option required>Select:</option>
                                                <option value="ADM">Administrator</option>
                                                <option value="CM">Case Manager</option>
                                                <option value="CNM">Certified Nurse Midwife</option>
                                                <option value="CHN">Charge Nurse</option>
                                                <option value="CAO">Chief Administrative Officer</option>
                                                <option value="CEO">Chief Executive Officer</option>
                                                <option value="CFO">Chief Financial Officer</option>
                                                <option value="CNO">Chief Nursing Officer</option>
                                                <option value="COO">Chief Operations Officer</option>
                                                <option value="CNS">Clinical Nurse Specialist</option>
                                                <option value="CONS">Consultant</option>
                                                <option value="CRD">Coordinator</option>
                                                <option value="DIR">Director</option>
                                                <option value="DON">Director of Nursing</option>
                                                <option value="MGR">Manager</option>
                                                <option value="EDU">Educator</option>
                                                <option value="NM">Nurse Manager</option>
                                                <option value="NP">Nurse Practitioner</option>
                                                <option value="PHM">Pharmacist</option>
                                                <option value="RCRT">Recruiter</option>
                                                <option value="SN">Staff Nurse</option>
                                                <option value="SUP">Supervisor</option>
                                                <option value="TECH">Technician</option>
                                                <option value="VP">Vice President</option>
                                            </select><?php echo $custom5; ?>
                                    <sup><font color="#ff0000">*</font></sup>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle">Current Field:</td>
                                    <td align="left" valign="baseline">
                                            <select name="custom6">
                                                <option required>Select:</option>
                                                <option value="AMB">Ambulatory</option>
                                                <option value="BH">Behavioral Health</option>
                                                <option value="BMT">Bone Marrow Transplant</option>
                                                <option value="BUSADM">Business Administration</option>
                                                <option value="CP">Cardiopulmonary</option>
                                                <option value="CV">Cardiovascular/Open Heart</option>
                                                <option value="CATH">Cath Lab/Electrophysiology</option>
                                                <option value="CC">Critical Care</option>
                                                <option value="EDU">Education</option>
                                                <option value="EMER">Emergency/Trauma</option>
                                                <option value="ENDO">Endoscopy</option>
                                                <option value="HOME">Home Health</option>
                                                <option value="HOSPADM">Hospital Administration</option>
                                                <option value="HR">Human Resources</option>
                                                <option value="CTRL">Infection Control</option>
                                                <option value="IT">Information Systems/Technology</option>
                                                <option value="LD">Labor and Delivery</option>
                                                <option value="LONGTERM">Longterm Care</option>
                                                <option value="MCH">Maternal Child Health</option>
                                                <option value="RCDS">Medical Records</option>
                                                <option value="MS">MedSurg</option>
                                                <option value="NICU">Neonatal Intensive Care (NICU)</option>
                                                <option value="NEURO">Neurology</option>
                                                <option value="OB">Obstetrics and Gynecology</option>
                                                <option value="ONC">Oncology</option>
                                                <option value="ORTHO">Orthopaedics</option>
                                                <option value="OP">Outpatient</option>
                                                <option value="PACU">PACU</option>
                                                <option value="PICU">Pediatric Intensive Care (PICU)</option>
                                                <option value="PEDS">Pediatrics</option>
                                                <option value="PHAR">Pharmacy</option>
                                                <option value="QA">Quality Assurance/Improvement</option>
                                                <option value="RAD">Radiology/Diagnostic Imaging</option>
                                                <option value="RECOV">Recovery/Stepdown/Telemetry</option>
                                                <option value="REHAB">Rehabilitation</option>
                                                <option value="RSCH">Research</option>
                                                <option value="RESP">Respiratory Care</option>
                                                <option value="SURG">Surgery/Surgical Services</option>
                                                <option value="OTHER">Other</option>
                                                <option value="TRNS">Transplant</option>
                                            </select>
                                    <sup><font color="#ff0000">*</font></sup>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle">Other Areas of Interest (desired positions/fields):</td>
                                    <td align="left" valign="baseline">
                                        <textarea rows="3" name="custom7" cols="25" value="<?php echo $custom7; ?>"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle" rowspan="3">Desired Location(s):</td>
                                    <td align="left" valign="baseline">
                                            <select name="custom9">
                                                <option value="ns">State:</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AK">Arkansas</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="IA">Iowa</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MA">Massachussetts</option>
                                                <option value="MD">Maryland</option>
                                                <option value="ME">Maine</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MT">Montana</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NY">New York</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VA">Virginia</option>
                                                <option value="VT">Vermont</option>
                                                <option value="WA">Washington</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WY">Wyoming</option>
                                            </select>and/or
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle">
                                            <select name="custom8">
                                                <option value="ns">City:</option>
                                                <option value="ATL">Atlanta (GA)</option>
                                                <option value="AUS">Austin (TX)</option>
                                                <option value="BLT">Baltimore (MD)</option>
                                                <option value="BTR">Baton Rouge (LA)</option>
                                                <option value="BOS">Boston (MA)</option>
                                                <option value="CHA">Charlotte (NC)</option>
                                                <option value="CHG">Chicago (IL)</option>
                                                <option value="CCN">Cincinnati (OH)</option>
                                                <option value="CLE">Cleveland (OH)</option>
                                                <option value="CMH">Columbus (OH)</option>
                                                <option value="DFW">Dallas\Fort Worth (TX)</option>
                                                <option value="DNR">Denver (CO)</option>
                                                <option value="DTR">Detroit (MI)</option>
                                                <option value="FTL">Ft. Lauderdale (FL)</option>
                                                <option value="HOU">Houston (TX)</option>
                                                <option value="IPS">Indianapolis (IN)</option>
                                                <option value="KCY">Kansas City (MO)</option>
                                                <option value="LSV">Las Vegas (NV)</option>
                                                <option value="LEX">Lexington (KY)</option>
                                                <option value="LGS">Los Angeles (CA)</option>
                                                <option value="LOU">Louisville (KY)</option>
                                                <option value="MPH">Memphis (TN)</option>
                                                <option value="MM">Miami (FL)</option>
                                                <option value="MPL">Minneapolis (MN)</option>
                                                <option value="NWO">New Orleans (LA)</option>
                                                <option value="NKC">New York City (NY)</option>
                                                <option value="NFK">Norfolk (VA)</option>
                                                <option value="OLN">Orlando (FL)</option>
                                                <option value="PHD">Philadelphia (PA)</option>
                                                <option value="PHX">Phoenix (AZ)</option>
                                                <option value="PIT">Pittsburgh (PA)</option>
                                                <option value="PLD">Portland (OR)</option>
                                                <option value="RCH">Richmond (VA)</option>
                                                <option value="SAO">San Antonio (TX)</option>
                                                <option value="SGO">San Diego (CA)</option>
                                                <option value="SFO">San Francisco (CA)</option>
                                                <option value="SAV">Savannah (GA)</option>
                                                <option value="SEA">Seattle (WA)</option>
                                                <option value="STL">St. Louis (MO)</option>
                                                <option value="STP">St. Paul (MN)</option>
                                                <option value="TMC">Tampa (FL)</option>
                                                <option value="TUC">Tucson (AZ)</option>
                                                <option value="WDC">Washington DC</option>
                                            </select>and/or
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="baseline">
                                            <select name="custom10">
                                                <option value="ns">Region:</option>
                                                <option value="ANY">Any</option>
                                                <option value="ATC">Atlantic Coast (ATC)</option>
                                                <option value="CTL">Continental US</option>
                                                <option value="EAS">East (EAS)</option>
                                                <option value="GFC">Gulf Coast (GFC)</option>
                                                <option value="MDWN">Midwest North (MDWN)</option>
                                                <option value="MDWS">Midwest South (MDWS)</option>
                                                <option value="HLS">Mountains (HLS)</option>
                                                <option value="NWE">New England (NWE)</option>
                                                <option value="NTH">North (NTH)</option>
                                                <option value="NTE">Northeast (NTE)</option>
                                                <option value="NTW">Northwest (NTW)</option>
                                                <option value="PFC">Pacific Coast (PFC)</option>
                                                <option value="PNW">Pacific Northwest (PNW)</option>
                                                <option value="STH">South (STH)</option>
                                                <option value="STE">Southeast (STE)</option>
                                                <option value="STW">Southwest (STW)</option>
                                                <option value="WST">West (WST)</option>
                                            </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle">Referred by:</td>
                                    <td align="left" valign="baseline">
                                        <input type="text" name="custom11" maxlength="50" size="30" value="<?php echo $custom11; ?>"></input>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle">
                                    <p><strong>Upload your resume here:</strong></p>
                                    </td>
                                    <td align="left">
                                        <input type="file" name="custom13"></input>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle">
                                        <p>Additional Comments:</p>
                                        <p>To submit comments, simply type in the box to the right.</p>
                                    </td>
                                    <td align="left">
                                        <textarea name="custom12" maxlength="255" size="30" rows="10" cols="25" value="<?php echo $custom12; ?>"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    	<input type="submit" name="Button1" value="Register" >
                    </form>
                </div>
            </td>
        </tr>                                            
    </tbody>
</table>