<?php

function da_menu_items(){
	global $settings;
	$url = isset($settings['defaultavatar_href']) ? $settings['defaultavatar_href'] : "";
	if(!empty($url)){
	  add_js('var test = "xxx"; $("ul.info:not(:has(img.avatar))").each(function() {
	var user_href = $(this.parentNode).find("a").prop("href");
$(this).prepend("<li class=\"avatar\"><a href=\"/wedge/index.php?action=profile;u="+user_href+"\"><img class=\"avatar\" src=\"'.$url.'\"></a></li>");
 });');
        }

}
