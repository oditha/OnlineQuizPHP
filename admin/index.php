<?php
session_start()
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Administrative Login - Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 <style >
    .title

{
text-align:center;
padding:50px 0 20px;
}
.title h1
{
margin:0;
padding:0;
color:black;
text-transform:uppercase;
font-size:36px;
font-weight: bold;
}

.container
{
width:50%;
height:400px;
background-:#fff;
margin:0 auto;
border: 2px solid #fff;
box-shadow:0 15px 40px rgba(0,0,0,.5);

}

.formBox
{
Width:100%;
padding:80px 40px;
box-sizing: border-box;
height:400px;
background:#fff;
}
.formBox p
{
margin: 0;
padding: 0;
font-weight: bold;
color:#a6af13;
}
.formBox input
{
width:100%;
margin-bottom: 20px;
}
.formBox input[type="text"],
.formBox input[type="password"]
{
border:none;
border-bottom:2px solid #a6af13;
outline:none;
height:40px;
}
.formBox input[type="text"]:focus,
.formBox input[type="password"]:focus
{
border-bottom:2px solid #262626;
}
.formBox input[type="submit"]
{
border:none;
outline:none;
height:40px;
color:#fff;
background: #262626;
cursor:pointer;
 align:center;
}
.formBox input[type="submit"]:hover
{
 background:#a6af13;

}
footer {
    padding: 1em;
    color: black;
    background-color: yellow;
    clear: left;
    text-align: center;
    font-weight: bold;
    font-size: 20px;
}


</style>
<link href="../quiz.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css" media="screen,projection"/>

</head>

<body>
  <img src="logo.jpg" alt="not  available" width=100% height="85">
<?php
include("header.php");
?>

<p class="head1">Adminstrative Login </p>
<form name="form1" method="post" action="login.php">
  
    <div class="container">
      <div class="formBox">
<table width="490" border="0">
  <tr>
    <td width="106"><span class="style2"></span></td>
    <td width="132"><span class="style2"><span class="head1"><img src="login.jpg" width="131" height="155"></span></span></td>
    <td width="238"><table width="219" border="0" align="center">
  <tr>
   <p>Username:</p>
      <input type="text" name="loginid" id="loginid2" required  placeholder="Enter your username" >
      <p>Password:</p>
      <input type="password" name="pass" id="pass2" required     placeholder="Enter your password" ><br>
     
    <td class="style2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td><input name="submit" type="submit" id="submit" value="Login"></td>
  </tr>
</table></td>
  </tr>
</table>
</div>
</div>
</form>
<br>
<footer>Copyright &copy; Shashnini De Silva </footer>
</body>

</html>
