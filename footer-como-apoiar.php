<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */

?>
<div id="como-apoiar">
	<a class="image" href="<?php echo home_url('/rede');?>">
		<div class="col-md-8 col-md-offset-2 content">
			<?php _e('Conheça o trabalho de aceleração social da Artesol','odin');?>
		</div><!-- .col-md-12 content -->
	</a><!-- .image -->
</div><!-- #como-apoiar -->
<div class="footer-full">
<footer id="footer" role="contentinfo">
	<div class="container">
		<div class="col-md-6 pull-left">
			<h3><?php _e('Mapa do site','odin'); ?></h3>
			<nav class="col-md-4 pull-left">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu-1',
						'depth'          => 1,
						'container'      => false,
					)
				);
				?>
			</nav><!-- .col-md-2 pull-left -->
			<nav class="col-md-4 pull-left">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu-2',
						'depth'          => 1,
						'container'      => false,
					)
				);
				?>
			</nav><!-- .col-md-2 pull-left -->
			<nav class="col-md-4 pull-left">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu-3',
						'depth'          => 1,
						'container'      => false,
					)
				);
				?>
			</nav><!-- .col-md-2 pull-left -->
		</div><!-- .col-md-6 pull-left -->
		<div class="col-md-6 pull-right">
			<h3><?php _e('Parceiros','odin'); ?></h3>
			<a href="<?php echo get_field('parceiro-iguatemi', 'option');?>" class="parceiro-iguatemi">
				<?php _e('Artesol + Iguatemi','odin'); ?>
			</a>
			<?php if(get_field('todos-parceiros', 'option')): ?>
			     <a href="<?php echo get_field('todos-parceiros', 'option');?>" class="release-btn pull-right">
			     	<?php _e('Todos os parceiros','odin'); ?>
			     </a>
		    <?php endif; ?>
		    <div class="separator"></div><!-- .separator -->
		    <?php if(get_field('link-imprensa', 'option')): ?>
		         <h3><?php _e('Imprensa','odin'); ?></h3>
			     <a href="<?php echo get_field('link-imprensa', 'option');?>" class="imprensa-link">
			     	<?php _e('Contate nossa assessoria','odin'); ?>
			     </a>
			     <a href="<?php echo get_field('link-release', 'option');?>" class="release-btn pull-right">
			     	<?php _e('Download do release','odin'); ?>
			     </a>
		    <?php endif; ?>
		</div><!-- .col-md-6 pull-right -->
		<div class="col-md-12 end-footer">
			<div class="col-md-5 endereco">
				 <?php echo get_field('endereco', 'option'); ?>
			</div><!-- .endereco -->
			<div class="col-md-6 pull-right social">
				<h4><?php _e('Alguns direitos reservados','odin');?></h4>
				<?php if( get_field('social_repeater', 'option') ): ?>
				    <div class="pull-right">
				    	<?php while ( has_sub_field('social_repeater','option') ): ?>
				             <?php $social_name = strtolower(get_sub_field('social_repeater_name')); ?>
				             <?php if($social_name != 'cc'): ?>
				                <a href="<?php the_sub_field('social_repeater_link');?>">
				                	<?php echo sprintf('<span class="genericon genericon-%s-alt"></span>',$social_name); ?>
				                </a>
				             <?php endif; ?>
				             <?php if($social_name == 'cc'): ?>
				         	     <a href="<?php the_sub_field('social_repeater_link');?>" class="cc-icon">
				         	     </a>
				             <?php endif; ?>
                           <?php endwhile; ?>
				    </div><!-- .pull-right -->
                <?php endif;?>
			</div><!-- .social -->
		</div><!-- .col-md-12 -->
	</div><!-- .container -->
</footer><!-- #footer -->
</div><!-- footer-full -->
<?php wp_footer(); ?>

</body>
</html>
