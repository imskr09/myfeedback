<?php
include('connect.php');
$bx = '';
$sub = '';
$bx = @$_POST['BOX'];
$sub = @$_POST['SUBMIT'];


if(isset($_POST['SUBMIT']))
{
	//$query =;
	mysql_query("INSERT INTO complaintbox(comp) values('$bx')");
	echo '<script>alert(" YOU HAVE SUBMMITED SUCCESSFULLY THANK YOU ")</script>';
	///header('index3.php');
}
else
 echo "try again";
?>



<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>COMPLAINT BOX</title>
</head>


<body style="background:url(image/above-art-background-733852.jpg);">
<div style="background:#990000; height:90px; margin-left:50px; margin-right:100px;">
<div>
<img src="image/d.-y.-patil-college-of-engineering-ambi-.png"width="149" style="width:140px; height:90px;"/>
</div>
<div style="margin-top:-90px; margin-left:500px; color:#FFFFFF;">
<h1 style="color:#FFFFFF; margin-left:-50px; margin-right:150px; height:20px;">WELCOME TO DYPTC </h1><h1 style="font-size:15px; color:#FFFFFF; margin-left:60PX">COMPLAINT BOX</h1>
</div><br/></div></table> <BR />
<div style="background:#990000; height:7px;"></div>

<div style="margin-left:600PX;">
<h2>INSTRUCTION</h2>
</DIV><BR />
<div style="background:#006666; width:60px; height:20px;">
<a href="index3.php" style="color:#FFFFFF;">HOME</a></div>
<H3 style="margin-left:200PX;"> 1. DO NOT WRITE NONSENSE.</H3>
<H3 style="margin-left:200PX;"> 2. WRITE YOUR COMPLAINT SHORT AS POSSIBLE.</H3><BR /><BR />
<form ACTION="#" method="POST">
<table style="margin-left:400PX; background:#990000">
<TR>
	<TD><H2 style="margin-left:140PX; color:#FFFFFF;">COMPLAINT BOX</H2></TD>
</TR>
<TR style="background:#FFCC99">
  <td style="margin-left:500PX; background:#FFCC33">&nbsp;</td>
</TR>
<TR style="background:#FFCC99">
<td style="margin-left:500PX; background:#FFCC33"><textarea rows="12" cols="70" name="BOX" id="BOX"></textarea></td></TR>
<tr>
	<td colspan="3"align="center"> <input type="submit" value="SUBMIT" name="SUBMIT"/></td>
</tr>
</form>
</body>
</html>
