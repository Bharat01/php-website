<html>
<body>
<?php

$a[]="Sikkim Manipal University,Jamshedpur";
$a[]="Sikkim Manipal University,Noida";
$a[]="Brahmanand Institute of research technology and management,Delhi";
$a[]=" Mahatama Gandhi University,Bangalore";
$a[]="Ambitious college of distant Education,Mumbai";
$a[]="Knowledge Tree Institute of Professional studies,Dehradun";
$a[]="Institute of technical and Professional studies,Bhubaneshwar";
$a[]=" Arihant Group of institutes,Pune";
$a[]="Alliance College of Commerce";
$a[]="Indira Gandhi National open University";


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
