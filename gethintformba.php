<html>
<body>
<?php

$a[]="Indian Institute of Management,Bangalore";
$a[]="Indian Institute of Management,Kolkata";
$a[]=" National Institute of Industrial Engineering,Mumbai";
$a[]=" Indian Institute of technology,Delhi";
$a[]="Vellore Institute of technology,Vellore";
$a[]="National Institute of technology,warangal";
$a[]="Institute of engineering and technology,Lucknow";
$a[]="Birla Institute of techonology and science,Pilani";
$a[]="Thapar Institute of Engineering and technology,Patiala";
$a[]="Indian Institute of Inforation technology,Gwalior";


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
