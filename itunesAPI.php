<?php

$base_url = 'https://itunes.apple.com/search';

$term = rawurlencode('すくみず');
$country = 'jp';

$media = 'software';
$entity = 'software';

$attribute = '';

$callback = 'callbackjs';
$limit = 10;

$offset = 0;
$lang = 'ja_jp';

$request = $base_url.'?term='.$term.'&media='.$media.'&entity='.$entity.'&country='.$country
			.'&lang='.$lang.'&limit='.$limit;

echo $request;