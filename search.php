<?php
require_once 'twitter-php/library/twitter.class.php';

if(isset($_GET['searchstr'])==1)
{
	$twitter = new Twitter;
	$searchstr = $_GET['searchstr'];
	$results = $twitter->search($searchstr);
?>
<?php foreach ($results as $result):
$response .= "<li><a href=\"http://twitter.com/";
$response .=  $result->from_user;
$response .= "><img src=";
$response .=  htmlspecialchars($result->profile_image_url) 
$response .= " width=\"48\">";
$response .=  htmlspecialchars($result->from_user);
$response .= "</a>:";
$response .=  Twitter::clickable($result->text);
$response .= "<small>at";
$response .=  date("j.n.Y H:i", strtotime($result->created_at)) ;
$response .= "</small></li>:";
endforeach ?>
<?php
}
$response = "Sunil Response";
echo $response;
?>




