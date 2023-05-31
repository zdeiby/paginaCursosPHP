<?php  
$url='https://api.castelancarpinteyro.com/users';
$opciones=array("ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false));
$respuesta=file_get_contents($url, false,stream_context_create($opciones));

$objRespuesta=json_decode(($respuesta));


?>