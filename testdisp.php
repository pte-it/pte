<?php


/* detect mobile device*/
$ismobile = 0;
$container = $_SERVER['HTTP_USER_AGENT'];

// A list of mobile devices
$useragents = array (

'Android' ,
'Blazer' ,
'Palm' ,
'Handspring' ,
'Nokia' ,
'Kyocera',
'Samsung' ,
'Motorola' ,
'Smartphone',
'Windows CE' ,
'Blackberry' ,
'WAP' ,
'SonyEricsson',
'PlayStation Portable',
'LG',
'MMP',
'OPWV',
'Symbian',
'EPOC',
'iPad',
'Mobile',
);

foreach ( $useragents as $useragents ) {
if(strstr($container,$useragents)) {
$ismobile = 1;
}
}



if ( $ismobile == 1 ) {
echo "<p>mobile device</p>";
//echo $_SERVER['HTTP_USER_AGENT'];
//header("Location: https://pte-it.github.io/pte/mobile/index.htm"); 
}
else {
//header("Location: https://pte-it.github.io/pte/index1.htm");
echo "<p>desktop device</p>"; 	
}
?> 


