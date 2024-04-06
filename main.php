<?php
/* API url */
define('API_URL', 'https://whenisthenextmcufilm.com/api');

/* Iniciar sesion de curl */
$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resultApi = curl_exec($ch);

/* Result JSON */
$data = json_decode($resultApi, true);

/* Cerrar conexion curl */
curl_close($ch);
#var_dump($data)
?>