<style>
.letradosingle {
font-size: 3em;

}

@media only screen and (min-width: 620px) {

.letradosingle {
	font-size: 5em;
	 
	
	
		
	}
 

}
</style>
<div class="retiraponto letradosingle escrita">
<?php if ( is_active_sidebar( 'singletop' ) ) : ?>
<?php dynamic_sidebar( 'singletop' ); ?>
<?php endif;?>





<?php get_header();
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
    endwhile; 
	else:
	echo "<p>nenhum post foi encontrado </p>";
endif; 

  the_title();
  the_content(); 
 ?>
 
 


 
 


<?php wp_head(); ?> 
<?php wp_footer(); ?>



<?php if ( is_active_sidebar( 'singledown' ) ) : ?>
<?php dynamic_sidebar( 'singledown' ); ?>
<?php endif;?>



<?php get_footer(); ?>
</div>