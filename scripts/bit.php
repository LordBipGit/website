<?php

$url = "https://blockchain.info/stats?format=json";
$stats = json_decode(file_get_contents($url), true);
$btcValue = $stats['market_price_usd'];
$usdCost = 10;

$convertedCost = $usdCost / $btcValue;

echo number_format($convertedCost, 8). " BTC";

echo '<p>Hello World</p>'; 
?>