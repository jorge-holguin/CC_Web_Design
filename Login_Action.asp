<%@LANGUAGE="VBSCRIPT"%>
<!--#include file="../adovbs.inc"-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Intranet - EAV Janitorial Service</title>
    <link rel="stylesheet" href="./styles/Login_Action.css" type="text/css">
</head>
<body>
<%
    On Error Resume Next

    p_user = Request("p_user")
    p_pass = Request("p_pass")

    ' Inicio de Validación de usuario
    Set SNewsSet = Server.CreateObject("ADODB.RECORDSET")
    StrSql = "SELECT * FROM EAV_Cliente WHERE Cli_User = '" & p_user & "' AND Cli_Pass = '" & p_pass & "'"
    SNewsSet.Open StrSql, Session("BDREGI_ConnectionString")

    If Not SNewsSet.EOF Then
        Response.Cookies("Messenger_V5") = p_user
        Response.Redirect("Intranet.asp")
    Else
        Response.Redirect("Login.asp?p_message=1")
    End If
%>
</body>
</html>
