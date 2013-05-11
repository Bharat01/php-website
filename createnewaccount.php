<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php require_once('Connections/con_education.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "frm_create")) {
  $insertSQL = sprintf("INSERT INTO login (user_name, password, first_name, middle_name, last_name) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['user_name'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['first_name'], "text"),
                       GetSQLValueString($_POST['middle_name'], "text"),
                       GetSQLValueString($_POST['last_name'], "text"));

  mysql_select_db($database_con_education, $con_education);
  $Result1 = mysql_query($insertSQL, $con_education) or die(mysql_error());

  $insertGoTo = "createnewaccount.html";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_con_education, $con_education);
$query_rs_admin = "SELECT * FROM login";
$rs_admin = mysql_query($query_rs_admin, $con_education) or die(mysql_error());
$row_rs_admin = mysql_fetch_assoc($rs_admin);
$totalRows_rs_admin = mysql_num_rows($rs_admin);
?>
<p>Create new account</p>
<form id="frm_create" name="frm_create" method="POST" action="<?php echo $editFormAction; ?>">
  <table width="200" border="1">
    <tr>
      <td>Username</td>
      <td><input name="user_name" type="text" id="user_name" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input name="password" type="text" id="password" /></td>
    </tr>
    <tr>
      <td>First name </td>
      <td><input name="first_name" type="text" id="first_name" /></td>
    </tr>
    <tr>
      <td>Middle name </td>
      <td><input name="middle_name" type="text" id="middle_name" /></td>
    </tr>
    <tr>
      <td>Last name </td>
      <td><input name="last_name" type="text" id="last_name" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Save" type="submit" id="Save" value="Save" /></td>
    </tr>
  </table>
  <table width="906" border="1">
    <tr>
      <td>id</td>
      <td>Username</td>
      <td>Password</td>
      <td>Firstname</td>
      <td>Middlename</td>
      <td>Lastname</td>
    </tr>
      <?php do { ?><tr> 
      <td><?php echo $row_rs_admin['id']; ?></td>
      <td><?php echo $row_rs_admin['user_name']; ?></td>
      <td><?php echo $row_rs_admin['password']; ?></td>
      <td><?php echo $row_rs_admin['first_name']; ?></td>
      <td><?php echo $row_rs_admin['middle_name']; ?></td>
      <td><?php echo $row_rs_admin['last_name']; ?></td>
		  </tr>
          <?php } while ($row_rs_admin = mysql_fetch_assoc($rs_admin)); ?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <input type="hidden" name="MM_insert" value="frm_create">
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($rs_admin);
?>
