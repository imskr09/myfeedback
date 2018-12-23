<?php
include('connect.php');
$cm = @$_POST['cm'];
$teach= @$_POST['TEACHING'];
$lb= @$_POST['lb'];
$la= @$_POST['la'];
$rg= @$_POST['rg'];
$ho= @$_POST['ho'];
$pl= @$_POST['pl'];
$inf= @$_POST['inf'];
$caf= @$_POST['caf'];
$sf= @$_POST['sf'];
$fc =@$_POST['fc'];
$pr= @$_POST['pr'];
$btn = @$_POST['submit'];

if(isset($btn)){
if($cm<5 || $teach<5 || $lb<5 || $la<5 || $rg<5 || $ho<5 || $pl<5 || $inf<5 || $caf<5 || $sf<5 || $fc<5 || $pr<5 ){
	echo '<script>alert("You provided poor rating please give comments for improvement in complaint box")</script>';
}


$sql = "INSERT INTO feedbackscale VALUES('$cm','$teach','$lb','$la','$rg','$ho','$pl','$inf','$caf','$sf','$fc','$pr')";
mysql_query($sql);
echo '<script>alert("Thank you for your valuable time.");</script>';
}
else
echo 'not inserted';

?>





<!DOCTYPE html>
<head>
<title>feedback options</title>
</head>

<body style="background:url(image/above-art-background-733852.jpg);">
<div style="background:#990000; height:90px; margin-left:50px; margin-right:100px;">
<div><img src="image/d.-y.-patil-college-of-engineering-ambi-.png"width="154" style="width:140px; height:90px;"/></div>
<div style="margin-top:-90px; margin-left:500px; color:#FFFFFF;">
<h1 style="color:#FFFFFF; margin-left:-50px; margin-right:150px; height:20px;">WELCOME TO DYPTC </h1><h1 style="font-size:15px; color:#FFFFFF; margin-left:60PX;">FEEDBACK  PAGE</h1>
</div><br/></div>
<br />

<div style="background:#990000; height:7px;"></div>
<br />
<br />
<div style="background:#006666; width:60PX; height:20PX;"><a href="index3.php" style="color:#FFFFFF">HOME</a></div></br>
<DIV style="background:#006666; width:150PX; height:20PX;"><a href="index2.php" style="color:#FFFFFF;">COMPLAINT BOX</a></DIV>

<form action="#" method="POST">
<div style="background:#000000; width:350px; margin-left:470px;">
<h2 style="color:#FFFFFF">YOUR FEEDBACKS MATTER:</h2></div>
<table style="background:#990000;" align="center" border=0 >
<TR bordercolordark="#990000">
<TD style="color:#FFFFFF">CAMPUS ENVIRONMENT :</TD>
<TD> 
1.<input name="cm" type="radio" checked="checked" style="height:30px; width:30px;" value="1"/>   
2. <input type="radio" name="cm" style="height:30px; width:30px;" value="2"/> 
3.<input style="height:30px; width:30px;" type="radio" name="cm" value="3"/> 
4.<input style="height:30px; width:30px;" type="radio" name="cm" value="4"/>
5.<input style="height:30px; width:30px;" type="radio" name="cm" value="5"/>
6.<input style="height:30px; width:30px;" type="radio" name="cm" value="6"/>
7.<input style="height:30px; width:30px;"type="radio" name="cm" value="7"/>
8.<input style="height:30px; width:30px;" type="radio" name="cm" value="8"/>
9.<input style="height:30px; width:30px;" type="radio" name="cm" value="9"/>
10.<input style="height:30px; width:30px;" type="radio" name="cm" value="10"/>
</TD></TR>
<TR>
<TD style="color:#FFFFFF">TEACHING :</TD>
<TD> 1.<input type="radio" style="height:30px; width:30px;" name="TEACHING" value="1"/> 
2.<input type="radio" style="height:30px; width:30px;" name="TEACHING" value="2"/> 
3.<input type="radio" style="height:30px; width:30px;" name="TEACHING" value="3"/> 
4.<input type="radio" style="height:30px; width:30px;" name="TEACHING" value="4"/> 
5.<INPUT type="radio"style="height:30px; width:30px;" name="TEACHING" value="5"/> 
6.<input type="radio"style="height:30px; width:30px;" name="TEACHING" value="6"/> 
7.<input type="radio"style="height:30px; width:30px;" name="TEACHING" value="7"/> 
8.<input type="RADIO"style="height:30px; width:30px;" name="TEACHING" value="8"/> 
9.<input type="radio"style="height:30px; width:30px;" name="TEACHING" value="9"/> 
10. <input type="radio"style="height:30px; width:30px;" name="TEACHING" value="10"/>
</TD></TR>
<TR>
<TD style="color:#FFFFFF">LIBRARY :</TD>
<TD> 
1.<input type="radio"style="height:30px; width:30px;" name="lb" value="1"/> 
2.<input type="radio"style="height:30px; width:30px;" name="lb" value="2"/> 
3.<input type="radio"style="height:30px; width:30px;" name="lb" value="3"/> 
4.<input type="radio"style="height:30px; width:30px;" name="lb" value="4"/> 
5.<INPUT type="radio"style="height:30px; width:30px;" name="lb" value="5"/> 
6.<input type="radio"style="height:30px; width:30px;" name="lb" value="6"/> 
7.<input type="radio"style="height:30px; width:30px;" name="lb" value="7"/> 
8.<input type="RADIO"style="height:30px; width:30px;" name="lb" value="8"/> 
9.<input type="radio"style="height:30px; width:30px;" name="lb" value="9"/> 
10.<input type="radio"style="height:30px; width:30px;" name="lb" value="10"/></TD></TR>
<TR>
<TD style="color:#FFFFFF">LABORATORY :</TD>
<TD> 
1.<input type="radio"style="height:30px; width:30px;" name="la" value="1"/> 
2.<input type="radio"style="height:30px; width:30px;" name="la" value="2"/> 
3.<input type="radio"style="height:30px; width:30px;" name="la" value="3"/> 
4.<input type="radio"style="height:30px; width:30px;" name="la" value="4"/> 
5.<INPUT type="radio"style="height:30px; width:30px;" name="la" value="5"/> 
6.<input type="radio"style="height:30px; width:30px;" name="la" value="6"/> 
7.<input type="radio"style="height:30px; width:30px;" name="la" value="7"/> 
8.<input type="RADIO"style="height:30px; width:30px;" name="la" value="8"/> 
9.<input type="radio"style="height:30px; width:30px;" name="la" value="9"/> 
10.<input type="radio"style="height:30px; width:30px;" name="la" value="10"/></TD></TR>
<TR>
<TD style="color:#FFFFFF">RAGGING :</TD>
<TD> 
1.<input type="radio"style="height:30px; width:30px;" name="rg" value="1"/> 
2.<input type="radio"style="height:30px; width:30px;" name="rg" value="2"/> 
3.<input type="radio"style="height:30px; width:30px;" name="rg" value="3"/> 
4.<input type="radio"style="height:30px; width:30px;" name="rg" value="4"/> 
5.<INPUT type="radio"style="height:30px; width:30px;" name="rg" value="5"/> 
6.<input type="radio"style="height:30px; width:30px;" name="rg" value="6"/> 
7.<input type="radio"style="height:30px; width:30px;" name="rg" value="7"/> 
8.<input type="RADIO"style="height:30px; width:30px;" name="rg" value="8"/> 
9.<input type="radio"style="height:30px; width:30px;" name="rg" value="9"/> 
10.<input type="radio"style="height:30px; width:30px;" name="rg" value="10"/></TD></TR>
<TR>
<TD style="color:#FFFFFF">HOSTEL :</TD>
<TD> 
1.<input type="radio"style="height:30px; width:30px;" name="ho" value="1"/> 
2.<input type="radio"style="height:30px; width:30px;" name="ho" value="2"/> 
3.<input type="radio"style="height:30px; width:30px;" name="ho" value="3"/> 
4.<input type="radio"style="height:30px; width:30px;" name="ho" value="4"/> 
5.<INPUT type="radio"style="height:30px; width:30px;" name="ho" value="5"/> 
6.<input type="radio"style="height:30px; width:30px;" name="ho" value="6"/> 
7.<input type="radio"style="height:30px; width:30px;" name="ho" value="7"/> 
8.<input type="RADIO"style="height:30px; width:30px;" name="ho" value="8"/> 
9.<input type="radio"style="height:30px; width:30px;" name="ho" value="9"/> 
10.<input type="radio"style="height:30px; width:30px;" name="ho" value="10"/></TD></TR>
<TR>
<TD style="color:#FFFFFF">PLACEMENT :</TD>
<TD> 
1.<input type="radio"style="height:30px; width:30px;" name="pl" value="1"/> 
2.<input type="radio"style="height:30px; width:30px;" name="pl" value="2"/> 
3.<input type="radio"style="height:30px; width:30px;" name="pl" value="3"/> 
4.<input type="radio"style="height:30px; width:30px;" name="pl" value="4"/> 
5.<INPUT type="radio"style="height:30px; width:30px;" name="pl" value="5"/> 
6.<input type="radio"style="height:30px; width:30px;" name="pl" value="6"/> 
7.<input type="radio"style="height:30px; width:30px;" name="pl" value="7"/> 
8.<input type="RADIO"style="height:30px; width:30px;" name="pl" value="8"/> 
9.<input type="radio"style="height:30px; width:30px;" name="pl" value="9"/> 
10.<input type="radio"style="height:30px; width:30px;" name="pl"value="10"/></TD></TR>
<TR>
<TD style="color:#FFFFFF">INFRASTRUCTURE :</TD>
<TD> 
1.<input type="radio"style="height:30px; width:30px;" name="inf" value="1"/> 
2.<input type="radio"style="height:30px; width:30px;" name="inf" value="2"/> 
3.<input type="radio"style="height:30px; width:30px;" name="inf" value="3"/> 
4.<input type="radio"style="height:30px; width:30px;" name="inf" value="4"/> 
5.<INPUT type="radio"style="height:30px; width:30px;" name="inf" value="5"/> 
6.<input type="radio"style="height:30px; width:30px;" name="inf" value="6"/> 
7.<input type="radio"style="height:30px; width:30px;" name="inf" value="7"/> 
8.<input type="RADIO"style="height:30px; width:30px;" name="inf" value="8"/> 
9.<input type="radio"style="height:30px; width:30px;" name="inf" value="9"/> 
10.<input type="radio"style="height:30px; width:30px;" name="inf" value="10"/></TD></TR>
<TR>
<TD style="color:#FFFFFF">CAFETERIA :</TD>
<TD> 
1.<input type="radio"style="height:30px; width:30px;" name="caf" value="1"/> 
2.<input type="radio"style="height:30px; width:30px;" name="caf" value="2"/> 
3.<input type="radio"style="height:30px; width:30px;" name="caf" value="3"/> 
4.<input type="radio"style="height:30px; width:30px;" name="caf" value="4"/> 
5.<INPUT type="radio"style="height:30px; width:30px;" name="caf" value="5"/> 
6.<input type="radio"style="height:30px; width:30px;" name="caf" value="6"/> 
7.<input type="radio"style="height:30px; width:30px;" name="caf" value="7"/> 
8.<input type="RADIO"style="height:30px; width:30px;" name="caf" value="8"/> 
9.<input type="radio"style="height:30px; width:30px;" name="caf" value="9"/> 
10.<input type="radio"style="height:30px; width:30px;" name="caf" value="10"/></TD></TR>
<TR>
<TD style="color:#FFFFFF">SPORTS FACILITY :</TD>
<TD> 
1.<input type="radio"style="height:30px; width:30px;" name="sf" value="1"/> 
2.<input type="radio"style="height:30px; width:30px;" name="sf" value="2"/> 
3.<input type="radio"style="height:30px; width:30px;" name="sf" value="3"/> 
4.<input type="radio"style="height:30px; width:30px;" name="sf" value="4"/> 
5.<INPUT type="radio"style="height:30px; width:30px;" name="sf" value="5"/> 
6.<input type="radio"style="height:30px; width:30px;" name="sf" value="6"/> 
7.<input type="radio"style="height:30px; width:30px;" name="sf" value="7"/> 
8.<input type="RADIO"style="height:30px; width:30px;" name="sf" value="8"/> 
9.<input type="radio"style="height:30px; width:30px;" name="sf" value="9"/> 
10.<input type="radio"style="height:30px; width:30px;" name="sf" value="10"/></TD></TR>
<TR>
<TD style="color:#FFFFFF">FACULTY :</TD>
<TD> 
1.<input type="radio"style="height:30px; width:30px;" name="fc" value="1"/> 
2.<input type="radio"style="height:30px; width:30px;" name="fc" value="2"/> 
3.<input type="radio"style="height:30px; width:30px;" name="fc" value="3"/> 
4.<input type="radio"style="height:30px; width:30px;" name="fc" value="4"/> 
5.<INPUT type="radio"style="height:30px; width:30px;" name="fc" value="5"/> 
6.<input type="radio"style="height:30px; width:30px;" name="fc" value="6"/> 
7.<input type="radio"style="height:30px; width:30px;" name="fc" value="7"/> 
8.<input type="RADIO"style="height:30px; width:30px;" name="fc" value="8"/> 
9.<input type="radio"style="height:30px; width:30px;" name="fc" value="9"/> 
10.<input type="radio"style="height:30px; width:30px;" name="fc" value="10"/></TD></TR>
<TR> 
<TD style="color:#FFFFFF">PARKING :</TD>
<TD> 
1.<input type="radio"style="height:30px; width:30px;" name="pr" value="1"/> 
2.<input type="radio"style="height:30px; width:30px;" name="pr" value="2"/> 
3.<input type="radio"style="height:30px; width:30px;" name="pr" value="3"/> 
4.<input type="radio"style="height:30px; width:30px;" name="pr" value="4"/> 
5.<INPUT type="radio"style="height:30px; width:30px;" name="pr" value="5"/> 
6.<input type="radio"style="height:30px; width:30px;" name="pr" value="6"/> 
7.<input type="radio"style="height:30px; width:30px;" name="pr" value="7"/> 
8.<input type="RADIO"style="height:30px; width:30px;" name="pr" value="8"/> 
9.<input type="radio"style="height:30px; width:30px;" name="pr" value="9"/> 
10.<input type="radio"style="height:30px; width:30px;" name="pr" value="10"/></TD></TR>

</table>
<input type="submit" name="submit" value="Give Feedback" style="margin-left:600PX; width:130px; height:40px;">
</form>

</ div>
</body>
</html>
