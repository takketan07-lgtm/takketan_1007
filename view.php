<?php
echo "<h2>受信した位置情報</h2>";

if (file_exists("location.txt")) {

    $text = file_get_contents("location.txt");

    // Googleマップリンクをクリック可能にする
    $text = preg_replace(
        '/(https:\/\/maps\.google\.com\/\?q=[0-9\.\-]+,[0-9\.\-]+)/',
        '<a href="$1" target="_blank">📍 地図を開く</a>',
        $text
    );

    echo "<div style='white-space:pre-line; font-family:sans-serif;'>";
    echo $text;
    echo "</div>";

} else {
    echo "まだデータがありません。";
}
?>
