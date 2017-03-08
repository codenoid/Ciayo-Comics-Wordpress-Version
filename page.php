<?php /*
| Page
| Writer : Rubi Jihantoro
| Url  	 : facebook.com/real.jihantoro | kutemukan.com/profile/ruby
| Email  : jihantoro8@gmail.com 
*/ ?>
<?php if(getOption('green_wasabi_maintenance_mode') == 'off'){ ?>
<?php get_header(); ?>
<br>
	<?php if(have_posts()){while( have_posts() ){ the_post();?>	
<?php get_template_part( 'content', get_post_format() ); ?>
<div class="commenttemplatedude" style="display:none;">
	<li show="comment" class="comment byuser bypostauthor even thread-even">
		<div class="comment-body">
			<div class="comment-author vcard">	
				<cite class="fn">You</cite> 
				<span class="says">says:</span>
			</div>
			<div class="comment-meta commentmetadata">
				<a class="ctempdate">Now</a>	
			</div>
			<p style="margin-top:5px !important;" homba-show="comment"></p>
		</div>
	</li>
</div>

<?php if ( comments_open() || get_comments_number() ) {comments_template();}?><?php } } else { echo '<div style="text-align:center;margin-top:200px;margin-bottom:200px;"><b style="color:#7B7B7B;text-transform:capitalize;">Not Found</b></div>'; } ?>	

<?php get_footer(); ?>
<?php } else { ?>

<?php get_template_part( 'mt' ); ?>

<?php } ?>