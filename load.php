<?php

require_once 'twitter-php/library/twitter.class.php';

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

// enables caching (path must exists and must be writable!)
// Twitter::$cacheDir = dirname(__FILE__) . '/temp';


// ENTER HERE YOUR CREDENTIALS (see readme.txt)
$consumerKey= "V7TKGdfQAclF7zebgogvQ";
$consumerSecret="qNDiChwsHlBYsHz1E0DJXPdRc01vBf6mWnfJz8BVM";
$accessToken="134431610-a8lEhf3jKfJtYX7V8wOc6TmkmdM0b1x73VRXHxxq";
$accessTokenSecret="aIyhrxNLFMBwuRNrFTIYOeWa2LQ5UKKZXjbAJfNSVQ";	

$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

$channel = $twitter->load(Twitter::ALL);

$results = $twitter->search("sunil");

$channel = $twitter->load(Twitter::ALL);

?>
<hr>
<!doctype html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Twitter timeline demo</title>

<ul>
<?php foreach ($channel->status as $status): ?>
	<li><a href="http://twitter.com/<?php echo $status->user->screen_name ?>"><img src="<?php echo htmlspecialchars($status->user->profile_image_url) ?>">
		<?php echo htmlspecialchars($status->user->name) ?></a>:
		<?php echo Twitter::clickable($status->text) ?>
		<small>at <?php echo date("j.n.Y H:i", strtotime($status->created_at)) ?></small>
	</li>
<?php endforeach ?>
</ul>

<hr>
These are search results for "sunil"
<ul>
<?php foreach ($results as $result): ?>
	<li><a href="http://twitter.com/<?php echo $result->from_user ?>"><img src="<?php echo htmlspecialchars($result->profile_image_url) ?>" width="48">
		<?php echo htmlspecialchars($result->from_user) ?></a>:
		<?php echo Twitter::clickable($result->text) ?>
		<small>at <?php echo date("j.n.Y H:i", strtotime($result->created_at)) ?></small>
	</li>
<?php endforeach ?>
</ul>
