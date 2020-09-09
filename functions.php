// Add Amazon Affiliate disclaimer

add_filter('the_content', 'add_my_content');

function add_my_content($content) {

	$my_custom_text = '<div style="border-left:1px solid black;padding-left:10px;margin-bottom:10px;"><em>I hope you find my recommendations helpful. Just so you know, if you make a purchase based on one of my recommended products, I may receive a small commission at no extra cost to you.</em></div>';

	if(is_single() && !is_home() && !is_product()) {
		$content = $my_custom_text.$content;
	}
	return $content;
}