<html>
<body>
<?php

$a[]="IIT Bombay - Indian Institute of Technology";
$a[]="IIT Guwahati - Indian Institute of Technology";
$a[]="IIT Delhi - Indian Institute of Technology";
$a[]=" IIT Kanpur - Indian Institute of Technology";
$a[]="National Institute of Technology, Tiruchirapalli (NIT-T)";
$a[]="Indian Institute of Science (IISc), Bangalore";
$a[]="Indian School of Mines University (ISMU)";
$a[]=" Thapar University";
$a[]="National Institute of Technology (NIT) Surathkal";



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
