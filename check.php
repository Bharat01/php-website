<?php
// Inialize session
session_start();

// Include database connection settings
$con2=mysql_connect("localhost","root","");
$db=mysql_select_db("login");

// Retrieve username and password from database according to user's input
$login = mysql_query("SELECT userid,uname,password1 FROM login WHERE (uname = '" . mysql_real_escape_string($_POST['username']) . "') and (password1 = '" . mysql_real_escape_string($_POST['password1']) . "')");
if(mysql_num_rows($login) == 1) echo 'done';
// Check username and password match
if (mysql_num_rows($login) == 1) {
// Set username session variable
$row=mysql_fetch_array($login);
$_SESSION['userid']=$row['id'];


$_SESSION['username'] = $_POST['username'];
// Jump to secured page
header('Location: securedpage.php');
}
else {
// Jump to login page
header('Location: project.php');
}
?>