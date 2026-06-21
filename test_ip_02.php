<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
<title>Test rilevamento IP</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<style TYPE="text/css">


P.nota {font-family: Arial, Verdana, helvetica; font-size: 8pt; font-weight: bold}



</style>

</head>
<body bgcolor="#FFFFFF">
  
   <p class="nota" align="center">

   <?php
echo "<B> ";
   $ip = getenv('REMOTE_ADDR');

  echo "Il Vs. indirizzo IP: ".$ip;
echo "</B> </P>";
  
?>



   

</body>

</html>