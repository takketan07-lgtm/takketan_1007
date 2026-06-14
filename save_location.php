<?php

$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    exit("データがありません");
}

$latitude = $data["latitude"];
$longitude = $data["longitude"];
$time = date("Y-m-d H:i:s");

// 保存する内容
$text = "日時: $time\n";
$text .= "緯度: $latitude\n";
$text .= "経度: $longitude\n";
$text .= "Google Maps: https://maps.google.com/?q=$latitude,$longitude\n";
$text .= "-------------------------\n";

// location.txt に追記
file_put_contents(
    "location.txt",
    $text,
    FILE_APPEND
);

echo "OK";
?>
