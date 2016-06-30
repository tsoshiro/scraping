<?php
require_once('simple_html_dom.php');

$url = "https://techcrunch.com";
$html = new simple_html_dom();
$html->load_file($url);


if ($html!="") {
	$ret = $html->find('h2');
	foreach ($ret as $element) {
		echo "<p class='plain'>".$element->plaintext."</p>";
		echo "<p class='inner'>".$element->innertext."</p>";
		echo "<p class='outer'>".$element->outertext."</p>";
	}
}



return;
?>