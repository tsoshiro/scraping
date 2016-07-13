<?php

$base_url = 'https://itunes.apple.com/search';

$term = rawurlencode('脱出ゲーム');
$country = 'jp';

$media = 'software';
$entity = 'software';

$attribute = '';

$callback = 'callbackjs';
$limit = 10;

$offset = 0;
$lang = 'ja_jp';

$url = $base_url.'?term='.$term.'&media='.$media.'&entity='.$entity.'&country='.$country
			.'&lang='.$lang.'&limit='.$limit;

// PHP5
$json = file_get_contents($url);
$data = json_decode($json, true);

// 書き込む文字列
$file_data = "";
$number = 1;

foreach ($data['results'] as $row) {
	$title = $row['trackCensoredName'];
	$description = $row['description'];

	echo "<div><h1>".$title."</h1>";
	echo nl2br( htmlspecialchars($description) )."</div>";

	$file_data .= $number."\t".$title."\t"."\"".(htmlspecialchars($description))."\"\n";
	$number++;
}

// 文字列をファイルに書き込み、CSVデータを作成する
$file_name = "description_data.csv";

// ファイルを取得
if (file_get_contents($file_name) != "") {
	$file_data = file_get_contents($file_name).$file_data;
	// 作成
	file_put_contents($file_name, $file_data);
}