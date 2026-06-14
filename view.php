<?php
echo "<h2>受信した位置情報</h2>";

if (file_exists("location.txt")) {

    $text = file_get_contents("location.txt");

    // Googleマップリンクを自動でクリック可能にする
    $text = preg_replace(
        '/(https:\/\/maps\.google\.com\/\?q=[0-9\.\-]+,[0-9\.\-]+)/',
        '<a href="$1" target="_blank">$1（地図を開く）</a>',
        $text
    );

    echo "<pre style='white-space:pre-wrap;'>";
    echo $text;
    echo "</pre>";

} else {
    echo "まだデータがありません。";
}
?>
