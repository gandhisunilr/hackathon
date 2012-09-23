<?php 

$context = $_GET["words"];
$url = 'http://search.yahooapis.com/ContentAnalysisService/V1/termExtraction';
$post = "query=tool&appid=hack&context=".rawurlencode($context);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
$xml = simplexml_load_string(curl_exec($ch));
curl_close($ch);

foreach ($xml->Result as $Result) {
echo "{$Result}<br>";
}	

echo "<pre>".print_r($xml,1)."</pre>";
?>
