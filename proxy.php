<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$server = "http://ct5play.lat";
$username = "Dyeimes";
$password = "13579111315aa";

$apiUrl = "$server/player_api.php?username=$username&password=$password&action=get_live_streams";
$response = file_get_contents($apiUrl);
echo $response;
?>
