<?php

if (!isset($_SESSION))
{
  session_start();
}

if(!isset($_SESSION['SESION_TEMPORAL']))
{
	$_SESSION['SESION_TEMPORAL']=date("YmdHis");
}




//nombre de la Marca o proyecto  
$global_proyecto='Peibo';

// Guion bajo seguido del nombre del proyecto
$global_name_session='_peibo';

//url del proyecto - Ruta absoluta
$global_url='';
   

// imagenes
#$favicon="<link rel='icon' href='img/favicon_dantec.png' type='image/x-icon'>";
$logo="https://peibo.concepthaus.dev/wp-content/themes/peibo-child/assets/img/logos/logoHeader.png";


// nombre del archivo
basename($_SERVER['PHP_SELF']);


$url_absoluta = 'https://peibo.concepthaus.dev/';
?>
