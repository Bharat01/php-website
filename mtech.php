<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint1").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuserformtech.php?info="+encodeURI(str),true);
xmlhttp.send();
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style4 {font-family: "Times New Roman", Times, serif}
.style5 {
	font-size: 18px;
	color: #000000;
}
-->
</style>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection"/>
	<!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" />
    <![endif]-->
			
	<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>	
	<script type="text/javascript" language="javascript" src="js/jquery.dropdownPlain.js"></script>

</head>
</head>
</head>
<head>
<style>

.shakeimage{
position:relative
}
</style>
<script language="JavaScript1.2">


var rector=3


var stopit=0 
var a=1

function init(which){
stopit=0
shake=which
shake.style.left=0
shake.style.top=0
}

function rattleimage(){
if ((!document.all&&!document.getElementById)||stopit==1)
return
if (a==1){
shake.style.top=parseInt(shake.style.top)+rector+"px"
}
else if (a==2){
shake.style.left=parseInt(shake.style.left)+rector+"px"
}
else if (a==3){
shake.style.top=parseInt(shake.style.top)-rector+"px"
}
else{
shake.style.left=parseInt(shake.style.left)-rector+"px"
}
if (a<4)
a++
else
a=1
setTimeout("rattleimage()",50)
}

function stoprattle(which){
stopit=1
which.style.left=0
which.style.top=0
}

</script>
</head>
<style>
body {background-image:url('grey.jpg');}
</style>

<body>
<body style="padding-left:150px;padding-right:150px">
<div id="back"></div>
<script src="http://localhost/minor/jquery-1.8.2.min.js"></script>
<script>
$(document).ready(function()
{
	$("#login").click(function()
	{
   $('#overlay').css({opacity: 0}).show().animate({opacity: 0.8}, 'fast');
	$("#logintest").fadeIn("slow");
	});
	
	$("#overlay").click(function()
	{
	$("#logintest").fadeOut("slow");
	$("#overlay").fadeOut("slow");
	});
}
);


</script>


<div id="logintest" style="width:400px;height:100px; border-width:medium;display:none; left:500px; top:250px; position: absolute;z-index: 100">
<fieldset style="background-color:grey;height:100%;">

<form method="POST" action="securedpage.php">
<table>
<tr>
<td align="left">Username:</td>  <td><input type="text" name="username" autocomplete="on" placeholder="Username" /></td>
</tr>
<tr>
<td align="left">Password:</td>  <td><input type="password" name="password1" placeholder="Password" /></td>
</tr>
<td align="center"><input class="loginbutton" type="submit" name="Submit" value="Log In"/></td>
<tr><td align="center"><a href="createnewaccount.htm";> Create a new account</a></td></tr>
</table>
</form>
</fieldset>
</div>

<style type="text/css">
#overlay {
	left: 0;
	top: 0;
	height: 200%;
	width: 200%;
	background-color: black;
	opacity: 0.8;
	display: none;
	position: absolute;
	z-index: 90;
}
</style>


<div id="overlay" class="dialogue"></div>

<a id="login">click here to login</a>
<body style="padding-left:150px;padding-right:150px">
<style type="text/css">
h1 {text-shadow:2px 2px #FF0000;
background-image: url('grey1.jpg');}
h2 {text-shadow:3px 1px #FF0000;}
</style>
<h1 style="font-family:'Comic Sans MS',cursive;width:100%;height:120px;font-size:100px;margin-bottom:0px;">eDucaTedIndia</h1>
<h2 class="style4" style="background-color:#303030 ;width:100%;height:30px;font-size:20px;margin-top:0px">Be what you want to be.. <span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"> <span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"> <a href="https://www.youtube.com/" target="_blank"><img border="0" src="youtube.png" style="float:right"; class="shakeimage" onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" onClick="top.focus()"//></a> <a href="https://www.twitter.com/" target="_blank"><img border="0" src="twitter.png" style="float:right"; class="shakeimage" onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" onClick="top.focus()"//></a> <span style="background-color:#800000;width:1200px;height:120px;font-size:100px;margin-bottom:0px"> <span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"><span class="style4" style="background-color:#989898;widht:1100px;height:30px;margin-top:0px"> </span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><a href="https://www.facebook.com/" target="_blank"><img border="0" src="facebook.png" style="float:right"; class="shakeimage" onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" onClick="top.focus()"//></a></span></span></span></span></h2>
 
<t>
<t>
</style>


<style type="text/css">
a:hover
{
background-color:red;
}
</style>
<ul class="dropdown">

        	<li><a href="project.php"><b>Home</b></a>

        	</li>


        	<li><a href="#"><b>All Courses(U.G)</b></a>
<ul class="sub_menu">        		
        			 <li><a href="btech.php"><b>B-tech<b/></b></a></li>
        			 <li>
        				<a href="bba.php"><b>BBA</b></a>
        				
        					<li><a href="bcom.php"><b>B.com</b></a></li>
        			</ul>		
					
        	</li>




        	<li><a href="#"><b>All Courses(P.G)</b></a>
<ul class="sub_menu">        		
        			 <li><a href="mtech.php"><b>M-tech</b></a></li>
        			 <li>
        				<a href="mba.php"><b>MBA</b></a>
        				
        					<li><a href="mcom.php"><b>M.com</b></a></li>
        			</ul>		
					
        	</li>
</div>



        	<li><a href="#"><b>Test Preparation(U.G)</b></a>
<ul class="sub_menu">        		
        			 <li><a href="prepbtech.html"><b>B-tech</b></a></li>        			 
                                 <li>
        				<a href="prepbba.html"><b>BBA</b></a>
        				
        					<li><a href="prepbcom.html"><b>B.com</b></a></li>
        			</ul>		
					
        	</li>
</div>


        	<li><a href="#"><b>Test preparation(P.G)</b></a>
<ul class="sub_menu">        		
        			 <li><a href="prepmtech.html"><b>M-tech</b></a></li>
        			 <li>
        				<a href="prepmba.html"><b>MBA</b></a>
        				
        					<li><a href="prepmcom.html"><b>M.com</b></a></li>
        			</ul>		
					
        	</li>
</div>
<br />
<br/>
<br/>

<?php
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("mtech",$con);
  $sql="SELECT * FROM `desc` WHERE 1";

  $result = mysql_query($sql);
  while($row = mysql_fetch_array($result))
  {
  echo  "<p style=font-family:'Monotype Corsiva','Apple Chancery','ITC Zapf Chancery','URW Chancery L',cursive;font-size:20px;><b>".$row['info']."</b></p>";
  }
mysql_close($con);
?>

<script>
function showHint(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","gethintformtech.php?q="+str,true);
xmlhttp.send();
}
</script>
<form action=""> 
<b>Search college by name:</b> <input type="text" id="txt1" onkeyup="showHint(this.value)" />
</form>
<br/>
<br/>
<p><b>Suggestions: </b><span id="txtHint"></span></p> 
<br/>
<br/>
<br/>
<p><b>Search college by your percentage:</b></p>
<form action=""> 
<select name="info" onchange="showUser(this.value)">
<option value="">Select a percentage</option>
<option value="above 90">above 90</option>
<option value="80-90">80-90</option>
<option value="70-80">70-80</option>
</select>
</form>
<br/>
<div id="txtHint1"><b>Here will be your college's list</b></div>
<br/>
<br/>

<p style="font-family:'Monotype Sorts',dingbats,'ITC Zapf Dingbats',fantasy;color:red;font-size:25px;"><b>India's Top M-tech Colleges:</b></p>

<br/>
<br/>
<br/>
<p style="font-family:'Monotype Corsiva','Apple Chancery','ITC Zapf Chancery','URW Chancery L',cursive;font-size:25px;"><a href="https://www.iitb.ac.in/" target="_blank">1.) IIT Bombay - Indian Institute of Technology</a><br />
<a href="https://www.iitg.ac.in/" target="_blank">2.) IIT Guwahati - Indian Institute of Technology</a><br/>
<a href="https://www.iitd.ac.in/" target="_blank">3.) 	IIT Delhi - Indian Institute of Technology	</a><br/>
<a href="https://www.iitk.ac.in/" target="_blank">4.) IIT Kanpur - Indian Institute of Technology</a><br/>
<a href="https://plus.google.com/" target="_blank">5.) National Institute of Technology, Tiruchirapalli (NIT-T)</a><br/>
<a href="https://www.nitt.edu/" target="_blank">6.) Indian Institute of Science (IISc), Bangalore</a><br/>
<a href="https://www.ismdhanbad.ac.in/" target="_blank">7.) Indian School of Mines University (ISMU)	</a><br/>
<a href="https://www.thapar.edu/" target="_blank">8.) Thapar University</a><br/>
<a href="https://www.nitk.ac.in/" target="_blank">9.) National Institute of Technology (NIT) Surathkal </a><br/>

</p>
</body>
</html>
