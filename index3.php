

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Feedback and Complaint box</title>
<style>

.feedbackbtn
{
background-color:#;
background-repeat:no-repeat;
border:0px;
cursor:pointer;
overflow:hidden;
width:200px;
height:200px; 
margin-left:350px;
margin-top:180px; 
font-size:20px;
}
.complainbtn
{
background-color:#;
background-repeat:no-repeat;
border:0px;
cursor:pointer;
overflow:hidden;
width:200px;
height:200px; 
margin-left:350px;
margin-top:180px; 
font-size:20px;
}
 
</style>

<style>
.button {
    position: relative;
    background-color:#003366;   
	 border: none;
    font-size: 28px;
    color: #FFFFFF;
    padding: 20px;
	margin-left:300px;
	margin-top:150px;
    width: 250px;
	height:250px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

.button:after {
    content: "";
    background: #90EE90;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px!important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
</
</style>
</head>

<body bgcolor="#000000">
<table>
<div style="background:#990000; height:90px; margin-left:50px; margin-right:100px;">
<div><img src="image/d.-y.-patil-college-of-engineering-ambi-.png"width="149" style="width:140px; height:90px;"/></div>
<div style="margin-top:-90px; margin-left:500px; color:#FFFFFF;">
<h1 style="color:#FFFFFF; margin-left:-50px; margin-right:150px; height:20px;">WELCOME TO DYPTC </h1><h1 style="font-size:15px; color:#FFFFFF;">FEEDBACK & COMPLAINT BOX</h1>
</div><br/></div></table>
<div style="background-color:;"><marquee scrollamount="20" onMouseOver="this.stop();" onMouseOut="this.start();">
<img src="image/aad.jpg"  style="width:250px; height:150px;"/>
<img src="image/above-art-background-733852.jpg"  style="width:250px; height:150px;"/>
<img src="image/abstract-architecture-attractive-988873.jpg"  style="width:250px; height:150px;"/>
<img src="image/925717217s.png" style="width:250px; height:150px;"/></marquee></div>
</marquee>
<div style="background:#990000; height:7px;"></div>
<div style="background:; background-position:bottom; ">

<button class="button" onClick="openfeedback('index1.php');">FEEDBACK PAGE</button>
<script>
function openfeedback(url)
{
var getconf=confirm("Are you sure open the Feedback form");
if(getconf==true)
{
location.replace(url);
}
}
</script>

<button class="button"  onclick="opencomplaint('index2.php');">COMPLAINT BOX</button>
<script>
function opencomplaint(url)
{
var getconf=confirm("Are you sure to open the complaint box form");
if(getconf==true)
{
location.replace(url);
}
}
</script>

<br />
<br />
<br />
</div>
</div>
<div style="background:
#990000">
<span style="color:#FFFFFF; margin-left:390px;">
&copy XYZ</span>

<span style="color:#FFFFFF; margin-left:500px;">
Developed By : SPS Group</span>


</div>
</body>
</html>
