	<div class="content">
		<?php if ( function_exists( 'add_theme_support' ) )the_post_thumbnail('detail_thumb');?>
		<b style="color:hotpink;font-size:11px;"><?php the_category( ' ' );?> </b><br>
		<a style="font-size:15px;" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	</div>