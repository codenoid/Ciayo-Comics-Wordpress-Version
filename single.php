<?php /*
| Single
| Writer : Rubi Jihantoro
| Url  	 : facebook.com/real.jihantoro | kutemukan.com/profile/ruby
| Email  : jihantoro8@gmail.com
*/ ?><?php get_header(); ?>
<?php if(have_posts()){while( have_posts() ){ the_post();?>

<?php get_template_part( 'content', get_post_format() ); ?>


	<?php } } else { echo '<div style="text-align:center;margin-top:200px;margin-bottom:200px;"><b style="color:#7B7B7B;text-transform:capitalize;">Not Found</b></div>'; } ?>

<?php get_footer(); ?>