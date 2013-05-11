<html>
<body>
<?php

$a[]="Satya Institute of media and Management,Lucknow";
$a[]="St.Josephs college of commerce,Bangalore";
$a[]="Apeejay Institute of management,Jalandhar";
$a[]="Chandigarh Business School,Mohali";
$a[]="Aryans Group of colleges,Chandigarh";
$a[]="International Institute of business management,Delhi";
$a[]="Netaji subash Institute of management sciences,Delhi";
$a[]="LN college of management and technology,Mumbai";
$a[]="Hyderabad school of business,Hyderabad";
$a[]="Institute of management studies";


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
