<?php


/* max size for content like images and videos */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}


$defaults_2 = 
	array(
		'before'           => '<p>' . 'Pages:',
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => 'Next page',
		'previouspagelink' => 'Previous page',
		'pagelink'         => '%',
		'echo'             => 1
	);
 
wp_link_pages( $defaults_2 );

//////////////////////////////////
// navigation menu one top 
//////////////////////////////////

function register_nav_menu_zxc(){

    $location='header';
    $description='Primary menu En';
    register_nav_menu( $location, $description );

}
add_action('after_setup_theme','register_nav_menu_zxc' );



//////////////////////////////////
// excerpt read more 
//////////////////////////////////

function excerpt_more_zxc( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('[ Continue Reading ]', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'excerpt_more_zxc' );


?>