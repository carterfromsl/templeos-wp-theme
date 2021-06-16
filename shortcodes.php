<?php

function tos_window_function( $atts = array(), $content = null ) {
  
    // set up default parameters
	extract(shortcode_atts(array(
		'title' => 'Window',
		'id' => 'window',
		'class' => '',
	), $atts));
    
	return '<div id="c-'.$id.'" aria-label="'. $title .'" class="t-menu '. $class .'">
	<div class="t-directory-bar">
	<span class="ticker">https://templeosonline.com/#c-'.$id.'</span><span class="ticker" aria-hidden="true">https://templeosonline.com/#c-'.$id.'</span>
	</div>
	<span class="t-close" title="Close '. $title .'" onclick="closeCol(\'c-'.$id .'\')">[X]</span>' . do_shortcode($content) . '</div>';
}

add_shortcode('tos-window', 'tos_window_function');



function tos_icon_function( $atts = array() ) {
  
    // set up default parameters
	extract(shortcode_atts(array(
		'color' => 'mediumblue',
		'link' => 'javascript:void(0);',
		'target' => '',
		'icon' => '',
		'font' => 'tos-online',
		'label' => '',
	), $atts));
    
	return '<div class="t-icon" style="color:'. $color .';"><a title="'. $label .'" href="'. $link .'" class="icon-char" style="font-family:'. $font .';" data-av_icon="'. $icon .'" target="'. $target .'"></a><span class="icon_caption">'. $label .'</span></div>';
}

add_shortcode('tos-icon', 'tos_icon_function');



function tos_godword_function() {
	return '<p class="godword_wrap"><del>God says:</del> <span id="godWord"></span></p>
<button class="t-button" onclick="getWord();"><i>N</i>ew Word</button>';
}

add_shortcode('godword', 'tos_godword_function');



function recent_posts_shortcode($atts, $content = null) {
	
	global $post;
	
	extract(shortcode_atts(array(
		'cat'     => '',
		'num'     => '5',
		'order'   => 'DESC',
		'orderby' => 'post_date',
	), $atts));
	
	$args = array(
		'cat'            => $cat,
		'posts_per_page' => $num,
		'order'          => $order,
		'orderby'        => $orderby,
	);
	
	$output = '';
	
	$posts = get_posts($args);
		
	foreach($posts as $post) {
		
		setup_postdata($post);
		
		$output .= '<li class="feed_entry"><span class="feed_marker">&gt; </span><span class="feed_date">'. get_the_date('m/d') .' </span><span class="feed_time">'. get_the_time('H:i') .' </span><span class="feed_id">['. get_the_ID() .'] </span><a title="Access: '. get_the_title() .'" href="'. get_the_permalink() .'">'. get_the_title() .'.CPP.Z</a></li>';
		
	}
	
	wp_reset_postdata();
	
	return '<ul class="feed_list">'. $output .'</ul>';
	
}
add_shortcode('recent_posts', 'recent_posts_shortcode');

?>