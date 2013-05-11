<html>
<body>
<?php

$a[]="Presidency College,Chennai";
$a[]="St.Xaviers college,Kolkata";
$a[]="Hans Raj college,Delhi";
$a[]="Christ college,Bangalore";
$a[]="Loyola college,chennai";
$a[]="St.Joseph's college of commerce,bangalore";
$a[]="Shri ram college of commerce,Delhi";
$a[]="Symbiosis Society's college of arts and commerce,Pune";
$a[]="Madras christian college,chennai";
$a[]="Lady shiram college,Delhi";


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
