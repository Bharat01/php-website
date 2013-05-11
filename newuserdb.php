<html>
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$city=$_POST['city'];
$email=$_POST['email'];
$uname=$_POST['uname'];
$password1=$_POST['password1'];

$con3=mysql_connect("localhost","root","");
$db=mysql_select_db("login");
$res=mysql_query("INSERT INTO login VALUES('$fname','$lname','$city','$email','$uname','$password1')");
echo $res;
echo"account created";

?>
</br>
<a href="project.html">Click here for login</a>
</html>