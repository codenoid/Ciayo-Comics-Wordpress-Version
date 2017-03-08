<?php /*
| Header
| Writer : Rubi Jihantoro
| Url  	 : facebook.com/real.jihantoro | kutemukan.com/profile/ruby
| Email  : jihantoro8@gmail.com
*/ ?><?php wp_footer(); ?>
	<div class="bb container" style="margin-top:90px;">
			<div style="background-color:#F7F7F7;">
				<div class="footer" style="padding-top:20px;padding-bottom:10px;text-align:center;">
<?php $args = array('theme_location' => 'footer_menu'); wp_nav_menu($args);?>
					<br>
					<?php echo getOption('gogo_tomago_footer_text'); ?>
				</div> 
			</div>
	</div>
	<div class="whomadethis" style="z-index:999;width:100%;min-height:1000px;background-color:rgba(34,34,34,0.8);position:fixed !important;top:0%;display:none;">
		<div style="position:fixed;left:48%;top:40%;color:white;width:100%;">

			<h1 style="color:white;">faw</h1>
		</div>
	</div>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bundle.js"></script>
	<script type="text/javascript">
		<?php echo getOption('gogo_tomago_google_analystic'); ?>
	</script>
</body>
</html> 