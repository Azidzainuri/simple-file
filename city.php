<?php

header('Access-Control-Allow-Origin: *');
if ((isset($_GET['id'])) && (isset($_GET['province']))) {
    $url = "https://api.rajaongkir.com/starter/city?id={$_GET['id']}&province={$_GET['province']}";
} elseif ((isset($_GET['province']))) {
    $url = "https://api.rajaongkir.com/starter/city?province={$_GET['province']}";
} elseif ((isset($_GET['id']))) {
    $url = "https://api.rajaongkir.com/starter/city?id={$_GET['id']}";
} else {
    $url = "https://api.rajaongkir.com/starter/city";
}


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "key: af3addd9df5f1154d101824312efb522"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
