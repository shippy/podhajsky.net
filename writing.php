<?php
// Generate
class Feed {
	var $url, $name, $takeover, $pending;
}

$feeds = array(
	new Feed("http://podhajsky.blog.ihned.cz/?m=rss", "Blog / iHned.cz", false, false),
	new Feed("http://shippyard.tumblr.com/rss", "Tumblr", true, true)
	);
				
// Generate
	// RSS extraction step

// Extract from KFF - proprietary, not recommended
$url = "http://www.kellnerfoundation.cz/univerzity/index.php?page=136&bloger=55";
$all = file_get_contents($url);
$DOM = new DOMDocument;
$DOM->loadHTML($all);
// Date, URL, heading
$dates = $DOM->getElementByTagName('strong');
$headings = $DOM->getElementByTagName('a');
foreach ($headings as $a) {
	// if ()
}


?>