<!--#include virtual="/includes/connection.asp" -->
<%
Dim rsJobs
Dim rsJobs_numRows
Dim usedWhere
usedWhere = false
' build sql query string

strSQL = "Select * from JobList "
if request.form("jobCity") <> "" then
    strSQL = strSQL & "Where jobCity Like '%" & request.form("jobCity") & "%'" 
    usedWhere = true
end if
if request.form("jobCountry") <> "" and request.form("jobCity") <> "" then
    strSQL = strSQL & "and jobCountry Like '%" & request.form("jobCountry") & "%'" 
elseif request.form("jobCountry") <> "" then
    usedWhere = true
    strSQL = strSQL & "Where jobCountry Like '%" & request.form("jobCountry") & "%'"
end if 
if request.form("jobCountry") <> "" and request.form("jobRegion") <> "" then
    strSQL = strSQL & "and jobRegion Like '%" & request.form("jobRegion") & "%'" 
elseif request.form("jobRegion") <> "" then 
    usedWhere = true
    strSQL = strSQL & "Where jobRegion Like '%" & request.form("jobRegion") & "%'"
end if

if request.Form("consultant") <> "" then
    consultantID = Request.Form("consultant")
    if (usedWhere) then
        strSQL = strSQL & " and JobOwner = '" & consultantID & "'"
    else
        strSQL = strSQL & " where JobOwner = '" & consultantID & "'"
    end if
end if 



Set rsJobs = Server.CreateObject("ADODB.Recordset")
rsJobs.ActiveConnection = MM_postings_STRING
rsJobs.Source = strSQL
rsJobs.CursorType = 1
rsJobs.CursorLocation = 2
rsJobs.LockType = 1
rsJobs.Open()

rsJobs_numRows = 0
%>
<div align="left">
  <p><span class="navSection">Your Search Results</span></p>
  <p>You searched on: <strong>
    <% dim deptname, searchdept
					deptname = request.form("jobCountry")
if deptname ="" then searchdept = "All departments" end if 
if deptname ="AMB" then searchdept = "Ambulatory" end if 
if deptname ="BH" then searchdept = "Behavioral Health" end if 
if deptname ="BMT" then searchdept = "Bone Marrow Transplant" end if 
if deptname ="BUSADM" then searchdept = "Business Administration (Development)" end if 
if deptname ="CP" then searchdept = "Cardiopulmonary" end if 
if deptname ="CV" then searchdept = "Cardiovascular/Open Heart" end if 
if deptname ="CM" then searchdept = "Case Management" end if 
if deptname ="CATH" then searchdept = "Cath Lab/Electrophysiology" end if 
if deptname ="CC" then searchdept = "Critical Care" end if 
if deptname ="EDU" then searchdept = "Education" end if 
if deptname ="EMER" then searchdept = "Emergency/Trauma" end if 
if deptname ="ENDO" then searchdept = "Endoscopy" end if 
if deptname ="HOME" then searchdept = "Home Health" end if 
if deptname ="HOSPADM" then searchdept = "Hospital Administration" end if 
if deptname ="HR" then searchdept = "Human Resources" end if 
if deptname ="CTRL" then searchdept = "Infection Control" end if 
if deptname ="IT" then searchdept = "Information Systems/Technology" end if 
if deptname ="LD" then searchdept = "Labor and Delivery" end if 
if deptname ="LT" then searchdept = "Longterm Care" end if 
if deptname ="MCH" then searchdept = "Maternal Child Health" end if 
if deptname ="RCDS" then searchdept = "Medical Records" end if 
if deptname ="MS" then searchdept = "MedSurg" end if 
if deptname ="NICU" then searchdept = "Neonatal Intensive Care (NICU)" end if 
if deptname ="NEURO" then searchdept = "Neurology" end if 
if deptname ="OB" then searchdept = "Obstetrics and Gynecology" end if 
if deptname ="ONC" then searchdept = "Oncology" end if 
if deptname ="ORTHO" then searchdept = "Orthopaedics" end if 
if deptname ="OP" then searchdept = "Outpatient" end if 
if deptname ="PACU" then searchdept = "PACU" end if 
if deptname ="PICU" then searchdept = "Pediatric Intensive Care (PICU)" end if 
if deptname ="PEDS" then searchdept = "Pediatrics" end if 
if deptname ="PHAR" then searchdept = "Pharmacy" end if 
if deptname ="QA" then searchdept = "Quality Assurance/Improvement" end if 
if deptname ="RAD" then searchdept = "Radiology/Diagnostic Imaging" end if 
if deptname ="RECOV" then searchdept = "Recovery/Stepdown/Telemetry" end if 
if deptname ="REHAB" then searchdept = "Rehabilitation" end if 
if deptname ="RSCH" then searchdept = "Research" end if 
if deptname ="RESP" then searchdept = "Respiratory Care" end if 
if deptname ="SURG" then searchdept = "Surgery/Surgical Services" end if 
if deptname ="TRNS" then searchdept = "Transplant (other than bone marrow)" end if 
if deptname ="OTHER" then searchdept = "Other" end if 

					response.write searchdept %>
    </strong></p>
  <p>Displaying <strong>
    <% = rsJobs.RecordCount %>
    </strong> results</p>
  <form>
    <input type="button" value="&lt; back to search page" onclick="history.back();">
  </form>
  <table width="364" border="0" cellpadding="2" cellspacing="1" class="DirectoryText">
    <tr>
      <td><strong>Job ID</strong></td>
      <td><strong>Position</strong></td>
      <td><strong>Job Title </strong></td>
      <td><strong>Location</strong></td>
      <td><strong>Consultant</strong></td>
    </tr>
    <% 
While (NOT rsJobs.EOF)
%>
      <tr bgcolor="#EEEDEB">
        <td><%=(rsJobs.Fields.Item("JobSer").Value)%></td>
        <td><%=(rsJobs.Fields.Item("JobCity").Value)%></td>
        <td bgcolor="#EEEDEB"><a href="opportunities_details.asp?jobID=<%=(rsJobs.fields.item("JobSer").value)%>" class="DirectoryText"><%=(rsJobs.Fields.Item("JobTitle").Value)%></a></td>
        <td><p><%=(rsJobs.Fields.Item("JobRegion").Value)%>
            <!--<br><%=(rsJobs.Fields.Item("JobCountry").Value)%><br>-->
          </p></td>
        <td><span class="style2">
          <%
	  
'	  response.write "SELECT * FROM Assignments INNER JOIN Associates ON Assignments.AssociateID=Associates.ID WHERE Associates.fLast  = '" + rsJobs.fields.item("JobOwner").value + "'" 
	  
Dim rsGetLink
Dim rsGetLink_cmd
Dim rsGetLink_numRows
Set rsGetLink_cmd = Server.CreateObject ("ADODB.Command")
rsGetLink_cmd.ActiveConnection = strConnection
rsGetLink_cmd.CommandText = "SELECT * FROM Assignments INNER JOIN Associates ON Assignments.AssociateID=Associates.ID WHERE Associates.fLast  = '" + rsJobs.fields.item("JobOwner").value + "'" 
rsGetLink_cmd.Prepared = true

Set rsGetLink = rsGetLink_cmd.Execute
rsGetLink_numRows = 0
%>
          <%
if (not rsGetLink.BOF) and (not rsGetLInk.EOF) then
     rsGetLink.movefirst 
    %>
          <% if rsGetLink.fields.item("DepartmentID").value <> "" then %>
          <a href="bio.asp?BIOID=<%=rsGetLink.fields.item("AssociateID").value%>&ID=<%=rsGetLink.fields.item("DepartmentID").value%>" class="DirectoryText">
          <% end if %>
          <%= rsGetLink("strFirst") & "&nbsp;" & rsGetLink("strLast") %>
          <% if rsGetLink.fields.item("DepartmentID").value <> "" then %>
          </a>
          <% end if 
else
    response.Write "<span class=" &  vbquot & "DirectoryText" &  vbquot & ">None listed</span>"
end if
%>
          <%
rsGetLink.Close()
Set rsGetLink = Nothing
%>
          </span></td>
      </tr>
      <% 
  Repeat1__index=Repeat1__index+1
  Repeat1__numRows=Repeat1__numRows-1
  rsJobs.MoveNext()
Wend
%>
  </table>
  <br>
  <br>
  <p class="bodyText">&nbsp;</p>
  <p>&nbsp;</p>
  <p><br>
  </p>
</div>
