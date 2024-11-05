<?php
$url = "https://charting-library.tradingview-widget.com/";
header("Content-Type: text/html");
echo file_get_contents($url);
?>
