<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$add=$_POST['add'];
$city=$_POST['city'];
$state=$_POST['state'];
$email=$_POST['email'];
$message=$_POST['message'];
$con2=mysql_connect("localhost","root","");
$db=mysql_select_db("contactus");
$res=mysql_query("INSERT INTO contactus VALUES('$fname','$lname','$add','$city','$state','$email','$message')");
echo "Thanks for your contacting us. We will get back to you soon."
?>