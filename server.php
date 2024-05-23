<?php
// Leggo il file
$cd_string = file_get_contents("dischi.json"); // string

$cd_array = json_decode($cd_string, true);

$cd = [
    "result" => $cd_array
];


$cd_list_array= json_encode($cd);


// Informo il browser che gli arriverà json
header("Content-Type: application/json");



// Invio la risposta
echo $cd_list_array;

