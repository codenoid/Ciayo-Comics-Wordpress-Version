<?php /*
| Index
| Writer : Rubi Jihantoro
| Url  	 : facebook.com/real.jihantoro | kutemukan.com/profile/ruby
| Email  : jihantoro8@gmail.com
*/ ?>

<?php if(getOption('gogo_tomago_maintenance_mode') == 'off'){ ?>
<?php get_header(); ?>
<div class="bb fluid-container">
		<div class="top-bg">
			<div class="bb container">
				<div class="bb menu">
						<ul class="menu-list">
							<li class="logo"><a href="<?php bloginfo('url');?>" title="Go To Homepage"><img src="http://localhost/ciayo/logo.jpg" alt=""></a> </li>
		<?php 
			$args = array('theme_location' => 'header_menu');
			wp_nav_menu($args);
		?>
						</ul>
				</div>
			</div>
		</div>
		<div class="slider">
		 	<div blurbs-slider="ayam" class="slideshow-container">
				  <div class="mySlides fade">
				    <img src="<?php echo getOption('gogo_tomago_slider1'); ?>" style="width:100%">
				  </div>

				  <div class="mySlides fade">
				    <img src="<?php echo getOption('gogo_tomago_slider2'); ?>" style="width:100%">
				  </div>

				  <div class="mySlides fade">
				    <img src="<?php echo getOption('gogo_tomago_slider3'); ?>" style="width:100%">
				  </div>

				  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				  <a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>

			<div style="text-align:center;margin-top:-30px;position:absolute;left:47%;">
			  <span class="dot" onclick="currentSlide(1)"></span>
			  <span class="dot" onclick="currentSlide(2)"></span>
			  <span class="dot" onclick="currentSlide(3)"></span>
			</div>

		</div>
			<div class="black-bg ano">
				<div class="bb container"><br><br>
						<b style="font-size:18px;color:white;">Recommended</b><br><br>
						<div class="cthree">

							<div class="three">
								<img src="<?php echo getOption('gogo_tomago_rec1'); ?>" class="three" alt="a">
							</div>

							<div class="three">
								<img src="<?php echo getOption('gogo_tomago_rec2'); ?>" class="three" alt="b">
							</div>

							<div class="three">
								<img src="<?php echo getOption('gogo_tomago_rec3'); ?>" class="three" alt="c">
							</div>


						</div>
				</div>
			</div>
			<br>
		<div class="bb container">
			<b style="color:black;font-size:18px;display:inline-block;float:left">New Release</b>
			<a href="" class="bb basic btn" id="seeall" title="" style="display:inline-block;float:right"> SEE ALL > </a><br><br>
			<div class="bb six contents" style="margin-left: -15px !important;margin-right: -58px !important;">
				
		<?php if(have_posts()){while( have_posts() ){ 
			the_post();?> 
			<?php get_template_part( 'list-content', get_post_format() ); ?>
		<?php } } else { 
			echo '<div style="text-align:center;margin-top:200px;margin-bottom:200px;"><b style="color:#7B7B7B;text-transform:capitalize;">Not Found</b></div>'; 
		} ?>	

			</div>
		</div>


</div>
	<?php get_footer(); ?>
<?php } else { ?>
<?php get_template_part( 'mt' ); ?>
<?php } ?>