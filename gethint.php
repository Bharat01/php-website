<html>
<body>
<?php

$a[]="Indian Institute of technology,Delhi";
$a[]="Indian Institute of technology,kharagpur";
$a[]="National Institute of technology,Tiruchirapali";
$a[]="Netaji Subash Institute of technology,Delhi";
$a[]="Manipal Institute of technology,Manipal";
$a[]="Indian Institute of Information techonology,Gwalior";
$a[]="R.V college of engineering,Banglore";
$a[]="Govt model engineering college,Kochi";
$a[]="Jamia milia islamia,Delhi";
$a[]="Sri Sai ram engineering college,Chennai";


$q=$_GET["q"];

if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
      if ($hint=="")
        {
        $hint=$a[$i];
        }
      else
        {
        $hint=$hint." , ".$a[$i];
        }
      }
    }
  }

if ($hint == "")
  {
  $response="no suggestion";
  }
else
  {
  $response=$hint;
  }

echo $response;
?>
</body>
</html>
