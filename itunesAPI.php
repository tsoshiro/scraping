<?php

$base_url = 'https://itunes.apple.com/search';

$term = rawurlencode('脱出ゲーム');
$country = 'jp';

$media = 'software';
$entity = 'software';

$attribute = '';

$callback = 'callbackjs';
$limit = 20;

$offset = 0;
$lang = 'ja_jp';

$url = $base_url.'?term='.$term.'&media='.$media.'&entity='.$entity.'&country='.$country
			.'&lang='.$lang.'&limit='.$limit;

// PHP5
$json = file_get_contents($url);
$data = json_decode($json, true);

foreach ($data['results'] as $row) {
	$title = $row['trackCensoredName'];
	$description = $row['description'];

	echo "<div><h1>".$title."</h1>";
	echo nl2br( htmlspecialchars($description) )."</div>";
}