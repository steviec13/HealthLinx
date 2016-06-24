<form method="post" action="/beta/wp-content/themes/healthlinx/OpenPositions.asp" target="_self" name="PositionSelection">
    <table class="bodyText" border="0" cellpadding="3" cellspacing="0">
        <tbody><tr>
            <td colspan="2" align="left" valign="baseline">
                Search available Career Opportunities:<br>
            </td>
        </tr>
        <tr>
            <td align="right" height="34" valign="top">
                <nobr>Unit/Department:</nobr>
                <br>
                <span class="more">and/or   </span></td>
            <td align="left" valign="top">
                    <select size="1" name="JobCountry">
                        <option value="">Show All...</option>
                        <option value="AMB">Ambulatory</option>
                        <option value="BH">Behavioral Health</option>
                        <option value="BMT">Bone Marrow Transplant</option>
                        <option value="BUSADM">Business Administration (Development)</option>
                        <option value="CP">Cardiopulmonary</option>
                        <option value="CV">Cardiovascular/Open Heart</option>
                        <option value="CM">Case Management</option>
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
                        <option value="LT">Longterm Care</option>
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
                        <option value="TRNS">Transplant (other than bone marrow)</option>
                        <option value="OTHER">Other</option>
                    </select>
            </td>
        </tr>
        <tr>
            <td align="right" height="28" valign="top">
                Job Title:<br>
                <span class="more">and/or   </span></td>
                                       <td align="left" valign="top"><select size="1" name="JobCity">
<option value="">Show All...</option>
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
<option value="EDU">Educator</option>
<option value="MGR">Manager</option>
<option value="NM">Nurse Manager</option>
<option value="NP">Nurse Practitioner</option>
<option value="PHM">Pharmacist</option>
<option value="RCTR">Recruiter</option>
<option value="SN">Staff Nurse</option>
<option value="SUP">Supervisor</option>
<option value="TECH">Technician</option>
<option value="VP">Vice President</option>
<option value="OTHER">Other</option>
</select>
</td>

        </tr>
         <tr>
            <td align="right" height="28" valign="top">
                Consultant:<br>
                </td>
               <td align="left" valign="top">
<!--#include virtual="/includes/associateDropDown.asp" -->
</td>
            </tr>
        <!-- comment out state fields 
<tr>
<td align="right" valign="top" height="34">State<nobr><font size="2" face="Verdana, Arial, Helvetica, sans-serif">:</font></nobr></td>
<td align="left" valign="top"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
<select size="1" name="JobRegion">
<option value="">Show All...</option>
<option value="AL">Alabama (AL)</option>
<option value="AK">Alaska (AK)</option>
<option value="AZ">Arizona (AZ)</option>
<option value="AR">Arkansas (AR)</option>
<option value="CA">California (CA)</option>
<option value="CO">Colorado (CO)</option>
<option value="CT">Connecticut (CT)</option>
<option value="DE">Delaware (DE)</option>
<option value="fl">Florida (FL)</option>
<option value="GA">Georgia (GA)</option>
<option value="HI">Hawaii (HI)</option>
<option value="ID">Idaho (ID)</option>
<option value="IL">Illinois (IL)</option>
<option value="IN">Indiana (IN)</option>
<option value="IA">Iowa (IA)</option>
<option value="KS">Kansas (KS)</option>
<option value="KY">Kentucky (KY)</option>
<option value="LA">Louisiana (LA)</option>
<option value="ME">Maine (ME)</option>
<option value="MD">Maryland (MD)</option>
<option value="MA">Massachusetts (MA)</option>
<option value="MI">Michigan (MI)</option>
<option value="MN">Minnesota (MN)</option>
<option value="MS">Mississippi (MS)</option>
<option value="MO">Missouri (MO)</option>
<option value="MT">Montana (MT)</option>
<option value="NE">Nebraska (NE)</option>
<option value="NV">Nevada (NV)</option>
<option value="NH">New Hampshire (NH)</option>
<option value="NJ">New Jersey (NJ)</option>
<option value="NM">New Mexico (NM)</option>
<option value="NY">New York (NY)</option>
<option value="NC">North Carolina (NC)</option>
<option value="ND">North Dakota (ND)</option>
<option value="OH">Ohio (OH)</option>
<option value="OK">Oklahoma (OK)</option>
<option value="OR">Oregon (OR)</option>
<option value="PA">Pennsylvania (PA)</option>
<option value="RI">Rhode Island (RI)</option>
<option value="SC">South Carolina (SC)</option>
<option value="SD">South Dakota (SD)</option>
<option value="TN">Tennessee (TN)</option>
<option value="TX">Texas (TX)</option>
<option value="UT">Utah (UT)</option>
<option value="VT">Vermont (VT)</option>
<option value="VA">Virginia (VA)</option>
<option value="WA">Washington (WA)</option>
<option value="DC">Washington DC (DC)</option>
<option value="WV">West Virginia (WV)</option>
<option value="WI">Wisconsin (WI)</option>
<option value="WY">Wyoming (WY)</option>
</select>
</font></td>
</tr>

end comment out state fields -->
        <tr>
            <td align="center" valign="top">
            </td>
            <td align="left" valign="top">
                 
                    <input value="Search" name="B3" type="submit">
                
            </td>
        </tr>
        <tr>
            <td align="center" valign="top">
            </td>
            <td align="left" valign="top">
               
            </td>
        </tr>
    </tbody></table>
</form>