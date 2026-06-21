<?php 

 $ContaTutto   ="public/visite.txt";
  $fp = fopen($ContaTutto,"r+");



$contonumerico= fread($fp,filesize($ContaTutto));
fclose($fp);

$contonumerico++;

$fp = fopen($ContaTutto,"w");
fputs ($fp,$contonumerico);

  {
    echo $contonumerico;
  }
?>

