<div class="retiraponto escrita">
	<div class="flex">
	<div class="principal">

<?php if ( is_active_sidebar( 'topo' ) ) : ?>
<?php dynamic_sidebar( 'topo' ); ?>
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
 
 


 
 

<?php get_footer(); ?>
<?php wp_head(); ?> 









<?php if ( is_active_sidebar( 'widgetfooter' ) ) : ?>
<?php dynamic_sidebar( 'widgetfooter' ); ?>
<?php endif;?>





<footer>
</footer>

</div>
<div class="imagemprincipal">

<?php if ( is_active_sidebar( 'imagemprincipal' ) ) : ?>
<?php dynamic_sidebar( 'imagemprincipal' ); ?>
<?php endif;?>

</div>
</div>


</footer>



</div>
</div>




</div>
</div>
<?php wp_footer(); ?>