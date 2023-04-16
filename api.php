<?php
$url = "https://sensoralia.iessanclemente.net/api/v1/sensores/8/mediciones?limit=2";
$lista_sensores = file_get_contents($url);
if (!$lista_sensores) {
    echo "Error: Failed to get data from API";
    exit();
}
$mediciones = json_decode($lista_sensores);
if (!$mediciones) {
    echo "Error: Failed to decode JSON data";
    exit();
}
var_dump($mediciones);
?>
