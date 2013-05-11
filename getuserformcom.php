<html>
<body>
<?php
$info=$_GET["info"];
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("mcom", $con);

$sql="SELECT name,place FROM mcom WHERE info = '".$info."'";

$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Place</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['place'] . "</td>";
    }
echo "</table>";

mysql_close($con);
?>
</body>
</html>