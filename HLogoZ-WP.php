<?php
/*
Plugin Name: HLogoZ-WP
Plugin URI: http://blog.rswr.net/2009/03/02/hlogoz-logo-changer-wordpress-plugin/
Description: Automatically changes your logo based on holiday/date.
Version: 1.1.6
Author: Ryan Christenson (The RSWR Network)
Author URI: http://www.rswr.net/
*/

/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

$HLZ_path = trailingslashit(dirname(__FILE__));

if (!class_exists("HLogoZ")) {
	class HLogoZ {
		var $adminOptionsName = "HLogoZ_Admin_Options";
		function HLogoZ() { //constructor
		}

		//Print out the admin page
		function printAdminPage() {
			if (isset($_POST['update_HLogoZSettings'])) {
  				// Save General Options
  				$HLogoZgen = array('prom' => $_POST['prom'], 'mode' => $_POST['mode'], 'title' => $_POST['title'], 'bgColor' => $_POST['bgColor'], 'wid1' => $_POST['wid1'], 'wid2' => $_POST['wid2'], 'wid3' => $_POST['wid3'], 'hei1' => $_POST['hei1'], 'hei2' => $_POST['hei2'], 'class1' => $_POST['class1'], 'class2' => $_POST['class2'], 'offset1' => $_POST['offset1'], 'offset2' => $_POST['offset2']);
  				update_option('HLogoZ_gen', $HLogoZgen);
  				
  				// Save Hide Options
  				$HLogoZhide = array('hide1' => $_POST['HLogoZ-hide1'], 'hide2' => $_POST['HLogoZ-hide2'], 'hide3' => $_POST['HLogoZ-hide3'], 'hide4' => $_POST['HLogoZ-hide4'], 'hide5' => $_POST['HLogoZ-hide5'], 'hide6' => $_POST['HLogoZ-hide6']);
  				update_option('HLogoZ_hide', $HLogoZhide);
  				
				// Save Holiday Date Settings
				$HLogoZpreD = array();
  				for ($i = 1; $i <= 28; $i++) $HLogoZpreD['H'.str_pad($i, 2, '0', STR_PAD_LEFT)] = $_POST['holi-'.str_pad($i, 2, '0', STR_PAD_LEFT)];
  				update_option('HLogoZ_preDates', $HLogoZpreD);
				
				// Save Holiday Image Settings
  				$HLogoZpreI = array('DEF_IMG' => $_POST['default-img']);
  				for ($i = 1; $i <= 28; $i++) $HLogoZpreI['img'.str_pad($i, 2, '0', STR_PAD_LEFT)] = $_POST['holi-'.str_pad($i, 2, '0', STR_PAD_LEFT).'-img'];
  				update_option('HLogoZ_preImg', $HLogoZpreI);
  				
  				// Save Custom Date Settings
  				$HLogoZcustom = array();
  				for ($i = 1; $i <= $_POST['num']; $i++) {
  				    if ($_POST['cust-'.str_pad($i, 3, '0', STR_PAD_LEFT).'-txt'] != '') {
  					$HLogoZcustom['chx'.str_pad($i, 3, '0', STR_PAD_LEFT)] = $_POST['cust-'.str_pad($i, 3, '0', STR_PAD_LEFT).'-chx'];
  					$HLogoZcustom['txt'.str_pad($i, 3, '0', STR_PAD_LEFT)] = $_POST['cust-'.str_pad($i, 3, '0', STR_PAD_LEFT).'-txt'];
  					$HLogoZcustom['day'.str_pad($i, 3, '0', STR_PAD_LEFT)] = $_POST['cust-'.str_pad($i, 3, '0', STR_PAD_LEFT).'-day'];
  					$HLogoZcustom['mon'.str_pad($i, 3, '0', STR_PAD_LEFT)] = $_POST['cust-'.str_pad($i, 3, '0', STR_PAD_LEFT).'-mon'];
  					$HLogoZcustom['img'.str_pad($i, 3, '0', STR_PAD_LEFT)] = $_POST['cust-'.str_pad($i, 3, '0', STR_PAD_LEFT).'-img'];
  				    }
  				}
  				update_option('HLogoZ_custom', $HLogoZcustom);
  				
  				// Calculate Number of Saved Custom Dates
  				$HLogoZcount = count(get_option('HLogoZ_custom')) / 5;
  				update_option('HLogoZ_count', $HLogoZcount);
  				
?>
<div class="updated"><p><span class="HLogoZ-Bold"><?php _e("HLogoZ-WP Options Updated!", "HLogoZ");?></span></p></div>
<?php
			}
?>
<style type="text/css">
<!--
.HLogoZ-Pad td{padding:10px;text-align:left;font-weight:700;}
.HLogoZ-Pad th{text-align:left;vertical-align:top;font-weight:700;}
.HLogoZ-Bold{font-weight:700;}
.HLogoZ-Red{color:red;font-weight:700;}
.HLogoZ-Green{color:#009900;font-weight:700;}
.HLogoZ-Blue{color:#0033CC;font-weight:700;}
.HLogoZ-chlog{font-size:small;}
.HLogoZ-selected{background:#999;}
.HLogoZ-float{float:left;}
.HLogoZ-clear{clear:both;}
-->
</style>
<div class="wrap">
<div class="HLogoZ-float"><img src="<?php _e(HLogoZ_Url()); ?>images/app-logo.png" width="380" height="90" /></div>
<div class="HLogoZ-float"><?php _e('Ver. 1.1.6','HLogoZ'); ?></div>
<div class="HLogoZ-clear"></div>
<form class="form-table" method="post" action="<?php _e($_SERVER["REQUEST_URI"]); ?>">
<?php
global $HLZ_path;
// General Options
if(file_exists($HLZ_path.'options/a-gen.php')) require_once($HLZ_path.'options/a-gen.php');
// Pre-Defined Holidays (Options)
if(file_exists($HLZ_path.'options/holi.php')) require_once($HLZ_path.'options/holi.php');
// Custom Holidays (Options)
if(file_exists($HLZ_path.'options/holi-custom.php')) require_once($HLZ_path.'options/holi-custom.php');
// Other Options
if(file_exists($HLZ_path.'options/other.php')) require_once($HLZ_path.'options/other.php');
?>
	<input type="submit" name="update_HLogoZSettings" value="<?php _e('Update Settings', 'HLogoZ') ?>" class="button-primary action" /><br /><br />
</form>
</div>
<?php
		}
	}
}

// Add Image
if (!function_exists("HLogoZ_AddImage")) {
	function HLogoZ_AddImage(){
		//Go Through Holiday/Event List and Choose an Image
		global $HLZ_path;
		
		// Get Properties
		get_option('HLogoZ_gen') == "" ? "" : extract(get_option('HLogoZ_gen'));
		
		// Load Dates List
		if(file_exists($HLZ_path.'dates.php')) require_once($HLZ_path.'dates.php');
		$image = HLogoZ_Dates();
		
		// Get Link to Image
		$link = get_option('siteurl').'/wp-content/logos/'.$image;
		
		// Width Check
		if ($wid3 == '') $wid = $wid1.$wid2;
		else $wid = $wid3;
		
		// Image Mode
		if ($mode == '') {
		_e("\n");
		print
		<<<EOT
<!--HLogoZ-WP CSS-->
<style type="text/css">
$class2$class1 {background: $bgColor url('$link') no-repeat; background-position: top left; width:$wid; height:$hei1$hei2;}
</style>
<!--HLogoZ-WP CSS-->
EOT;
_e("\n");
		// Flash Mode
		} else if ($mode == 'fla') {
		$stripIMG = str_replace('.swf', '', $image);
		$link2 = get_option('siteurl').'/wp-content/logos';
		$link3 = get_option('siteurl').'/wp-content/plugins/hlogoz-wp/js/AC_RunActiveContent.js';
		print
		<<<EOT
<!--HLogoZ-WP CSS/Flash-->
<style type="text/css">
$class2$class1 {width:$wid1$wid2; height:$hei1$hei2;}
</style>
<div class="$class1.$class2">
    <script src="$link3" type="text/javascript"></script>
    <script type='text/javascript'>
	AC_FL_RunContent( 'type','application/x-shockwave-flash','width','$wid1','height','$hei1','title','$title','movie','$link2/$stripIMG','quality','high' );
    </script>
    <noscript><object type='application/x-shockwave-flash' data='$link' width='$wid1' height='$hei1' title='$title'>
    <param name='movie' value='$link' />
    <param name='quality' value='high' />
    Logo
    </object></noscript>
</div>
<!--HLogoZ-WP CSS/Flash-->
EOT;
_e("\n");
		}
	}
}

########################
#                      #
#   Other Functions    #
#                      #
########################

// Promote Text
if (!function_exists("HLogoZ_Promote")) {
    function HLogoZ_Promote($content) {
	//Get Settings
	get_option('HLogoZ_gen') == "" ? "" : extract(get_option('HLogoZ_gen'));
	
	if(is_page() || is_single()) {
	    if ($prom == "on") {
		$content .= "<p>Logo Date Generation by <a href='http://blog.rswr.net/2009/03/02/hlogoz-logo-changer-wordpress-plugin/'>HLogoZ-WP (WordPress Plugin)</a></p>";
	    }
	}
	return $content;
    }
}

// Get Plugin URL
function HLogoZ_Url() {
	$path = dirname(__FILE__);
	$path = str_replace("\\","/",$path);
	$path = trailingslashit(get_bloginfo('wpurl')) . trailingslashit(substr($path,strpos($path,"wp-content/")));
	return $path;
}

//Initialize the admin panel
if (!function_exists("HLogoZ_ap")) {
	function HLogoZ_ap() {
		global $HLogoZ_init;
		wp_enqueue_script('HLogoZ-main','/wp-content/plugins/hlogoz-wp/js/HLogoZ-main.js', array('jquery'), '1.0');
		if (!isset($HLogoZ_init)) {
			return;
		}
		if (function_exists('add_options_page')) {
			add_options_page('HLogoZ-WP', 'HLogoZ-WP', 9, basename(__FILE__), array(&$HLogoZ_init, 'printAdminPage'));
		}
	}
}

// Initialize Class
if (class_exists("HLogoZ")) {
	$HLogoZ_init = new HLogoZ();
}

//Actions and Filters
if (isset($HLogoZ_init)) {
	//Actions
	add_action('hlogoz-wp/HLogoZ.php', array(&$HLogoZ_init, 'init'));
	add_action('admin_menu', 'HLogoZ_ap');
	add_action('wp_head', 'HLogoZ_AddImage');
	
	//Filters
	add_filter('the_content', 'HLogoZ_Promote');
}
?>
