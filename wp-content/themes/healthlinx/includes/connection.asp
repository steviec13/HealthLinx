<%
'strConnection = "Provider=MSDASQL;Driver={SQL Server};server=p3swhsql-v08.shr.phx3.secureserver.net;database=NWSAdmin;uid=NWSAdmin;pwd=NewWorld2007;"
'strConnection = "Provider=MSDASQL;Driver={SQL Server};server=localhost;database=hlWeb;uid=hlWeb;pwd=hlWeb"
strConnection  = "Driver={SQL Server};SERVER=hlWeb.db.2663928.hostedresource.com;DATABASE=hlWeb;UID=hlWeb;PWD=HLAdmin2007"
'MM_postings_STRING = "filedsn=C:\DataSources\" & "access_Go4PostingsWeb.dsn;Uid=Admin;Pwd=;"
'MM_submissions_STRING = "filedsn=C:\DataSources" & "access_Go4SubmissionsWeb.dsn;Uid=Admin;Pwd=;"

'keep GoDaddy paths here
MM_postings_STRING = "filedsn=d:\hosting\hlhosting\_dsn\" & "access_Go4PostingsWeb.dsn;Uid=Admin;Pwd=;"
MM_submissions_STRING = "filedsn=d:\hosting\hlhosting\_dsn\" & "access_Go4SubmissionsWeb.dsn;Uid=Admin;Pwd=;"
'MM_submissions_STRING = "filedsn=d:\hosting\hlhosting\_dsn\" & "access_HESlogin.dsn;Uid=Admin;Pwd=;"

'response.write strConnection
'response.end

'DataTypeEnum consts
'adArray = 0x2000 	'Combine with another data type to indicate that the other data type is an array
adBigInt =	20 	'8-byte signed integer
adBinary =	128 	'Binary
adBoolean =	11 	'True or false Boolean
adBSTR =	8 	'Null-terminated character string
adChapter =	136 	'4-byte chapter value for a child recordset
adChar =	129 	'String
adCurrency =	6 	'Currency format
adDate =	7 	'Number of day since 12/30/1899
adDBDate =	133 	'YYYYMMDD date format
adDBFileTime =	137 	'Database file time
adDBTime =	134 	'HHMMSS time format
adDBTimeStamp =	135 	'YYYYMMDDHHMMSS date/time format
adDecimal= 	14 	'Number with fixed precision and scale
adDouble =	5 	'Double precision floating-point
adEmpty =	0 	'no value
adError =	10 	'32-bit error code
adFileTime =	64 	'Number of 100-nanosecond intervals since 1/1/1601
adGUID =	72 	'Globally unique identifier
adIDispatch =	9 '	Currently not supported by ADO
adInteger =	3 '	4-byte signed integer
adIUnknown =	13 	'Currently not supported by ADO
adLongVarBinary =	205 '	Long binary value
adLongVarChar =	201 	'Long string value
adLongVarWChar =	203 '	Long Null-terminates string value
adNumeric =	131 	'Number with fixed precision and scale
adPropVariant =	138 	'PROPVARIANT automation
adSingle =	4 	'Single-precision floating-point value
adSmallInt =	2 '	2-byte signed integer
adTinyInt =	16 '	1-byte signed integer
adUnsignedBigInt =	21 '	8-byte unsigned integer
adUnsignedInt =	19 	'4-byte unsigned integer
adUnsignedSmallInt =	18 	'2-byte unsigned integer
adUnsignedTinyInt =	17 '	1-byte unsigned integer
adUserDefined =	132 	'User-defined variable
adVarBinary =	204 '	Binary value
adVarChar =	200 '	String
adVariant =	12 '	Automation variant
adVarNumeric =	139 '	Variable width exact numeric with signed scale
adVarWChar =	202 '	Null-terminated Unicode character string
adWChar =	130 '	Null-terminated Unicode character string

%>