
<?php
require_once 'twitter-php/library/twitter.class.php';

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
$FUCKINGSTRING = $Result;
}	

$twitter = new Twitter;
$searchstr = (string) $FUCKINGSTRING;
$results = $twitter->search($searchstr);
echo "<ul>";

$response .= "<h1 >THE TWEET TIMES</h1><hr>";
$i=0;

foreach ($results as $result){
$i=$i+1;

$response .= "<li><a href=\"http://twitter.com/\"";
$response .= $result->from_user;
$response .= ">";
$response .= "<b><h4>";
$response .= $result->from_user;
$response .= "</h4></b></a>";
$response .=  Twitter::clickable($result->text);
$response .= "<small>at";
$response .=  date("j.n.Y H:i", strtotime($result->created_at)) ;
$response .= "</small>:";
$response .= "</li><br><br>";
if($i>6)
  break;

}
//output the response
echo $response;
?>
