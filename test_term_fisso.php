<?php


/* detect mobile device*/
$ismobile = 0;
$container = $_SERVER['HTTP_USER_AGENT'];

// A list of mobile devices
$useragents = array (

'Android' ,
'AppleWebKit' ,
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
echo "document.write ('<p>mobile device</p>')";
//echo "document.write ($_SERVER['HTTP_USER_AGENT'])";
//header("Location: http://www.pte.it/mobile/index.htm"); 
}
else {
//echo "document.write ('desktop device<br>')";


 header("Location: http://www.pte.it/mobile/index.htm"); 

}
?> 


