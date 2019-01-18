<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		<div class="thumbnail-img"><?php the_post_thumbnail('large');?></div>
		<?php the_category();?>
		<?php the_time('F j,y');?>
	<?php the_time('g:i a');?>
		
		<?php the_content();?>