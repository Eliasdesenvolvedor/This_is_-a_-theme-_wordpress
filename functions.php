<?php
add_theme_support( 'custom-background' );
wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',false,'1.1','all');

function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'strong magenta', 'themeLangDomain' ),
            'slug' => 'strong-magenta',
            'color' => '#a156b4',
        ),
        array(
            'name' => __( 'light grayish magenta', 'themeLangDomain' ),
            'slug' => 'light-grayish-magenta',
            'color' => '#d0a5db',
        ),
        array(
            'name' => __( 'very light gray', 'themeLangDomain' ),
            'slug' => 'very-light-gray',
            'color' => '#eee',
        ),
        array(
            'name' => __( 'very dark gray', 'themeLangDomain' ),
            'slug' => 'very-dark-gray',
            'color' => '#444',
        ),
    ) );
}

 
add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );

class forma {
	
	function umafunção($parametro,$nomewidget){
		
	if ( function_exists('register_sidebar') )

register_sidebar(array(
'name' => __( $nomewidget ),
'id' => $parametro,
'description' => __( 'Area de widget do rodape' ),
'before_widget' => '<li id="%1$s" class="%2$s">',
'after_widget' => '</li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
 	
	
	}
	
	
}


$topo=new forma(); 
 $topo->umafunção('topo','topo');
 
$widget8=new forma(); 
 $widget8->umafunção('widgetfooter','widgetfooter');
 
 $imagemprincipal=new forma(); 
 $imagemprincipal->umafunção('imagemprincipal','imagemprincipal');

$singletop=new forma(); 
 $singletop->umafunção('singletop','singletop');
 
 $singledown=new forma(); 
 $singledown->umafunção('singledown','singledown');

?>