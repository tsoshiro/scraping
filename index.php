<?php
require_once('simple_html_dom.php');

$url = "https://techcrunch.com";
// $html = file_get_contents($url);
$html = new simple_html_dom();
$html->load_file($url);

// foreach ($html->find('img') as $element) {
// 	echo $element->src . "<br/>";
// }

// foreach ($html->find('div') as $element) {
// 	echo $element->plaintext . "<br/>";
// }

if ($html!="") {
	$ret = $html->find('h2');
	foreach ($ret as $element) {
		echo "<p class='plain'>".$element->plaintext."</p>";
		echo "<p class='inner'>".$element->innertext."</p>";
		echo "<p class='outer'>".$element->outertext."</p>";
		// echo "<div>";
		// echo "<p>".$element->plaintext."</p>";
		// echo "<p>".$element->innertext."</p>";
		// echo "<p>".$element->outertext."</p>";
		// echo "</div>";
	}
}



return;

// // 通常	
// if ($html!="") {
// 	// 変換
// 	// $html = htmlspecialchars($html);
// 	$html = mb_convert_encoding($html,mb_internal_encoding(),"auto");

// 	preg_match_all("/<h2 class=\"post-title\">(.*?)<\/h2>/u",$html,$title);

// 	for ($i=0; $i < count($title[0]); $i++) { 
// 		# code...
// 		echo $title[0][$i]."\n";
// 	}
// } else {
// 	$info_msg = "FAILED TO LOAD FILE.";
// 	echo $info_msg;
// }
?><!-- 
<style>
.plain {
	color:black;
}
.inner {
	color: gray;
}
.outer{
	color: red;

}
</style> -->