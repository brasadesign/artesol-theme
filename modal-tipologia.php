<?php
/* Modal Tipologia */
global $category_id;
$term = get_term($category_id,'tipos',OBJECT,null);
?>
<div class="col-md-12 agenda-modal">
    <div class="col-md-12 title-container">
		<h1 class="post-title">
			<?php echo $term->name;?>
		</h1><!-- .post-title -->
	</div><!-- .col-md-9 pull-right title-container -->
    <div class="col-md-12 clear"></div><!-- .col-md-12 clear -->
    <div class="col-md-12 content">
        <?php echo $term->description;?>
    </div><!-- .col-md-12 content -->
    <div class="col-md-12 text-center">
    	<?php $args = array();?>
    	<?php $args['filter_type'] = $term->slug;?>
    	<?php $link = add_query_arg($args, get_post_type_archive_link('produtos'));?>
    	<a class="btn btn-primary btn-lg" href="<?php echo esc_url($link);?>">
    		<?php _e('Veja alguns produtos dessa tipologia','odin');?>
    	</a>
    </div><!-- .col-md-12 text-center -->
</div><!-- .col-md-12 agenda-modal -->
<a class="close-reveal-modal">&#215;</a>
