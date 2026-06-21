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
);

foreach ( $useragents as $useragents ) {
if(strstr($container,$useragents)) {
$ismobile = 1;
}
}
echo $_SERVER['HTTP_USER_AGENT'];


?> 


