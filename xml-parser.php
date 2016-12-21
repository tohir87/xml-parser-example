<?php
/**
* @author: Tohir Omoloye
* @email: otcleantech@gmail.com
**/

$url = "http://punchng.com/feed/";		// url of the resource
$xml = simplexml_load_file($url) or die("feed not loading");


$news = [];
$news['title'] = trim($xml->channel->title);
$news['description'] = trim($xml->channel->description);
$news['build_date'] = trim($xml->channel->lastBuildDate);

for ($j=0; $j < count($xml->channel->item); $j++ ){
	$news['items'][] = $xml->channel->item[$j];
}

echo json_encode($news);

?>
