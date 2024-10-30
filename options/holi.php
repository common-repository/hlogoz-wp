<?php
// Retrieve Date Settings
get_option('HLogoZ_preDates') == "" ? "" : extract(get_option('HLogoZ_preDates'));
get_option('HLogoZ_preImg') == "" ? "" : extract(get_option('HLogoZ_preImg'));
// Pre-Defined Holidays
if ($hide2 == 'show') {
    _e('<input type="hidden" target="HLogoZ-hide2" name="HLogoZ-hide2" class="HLogoZ-sh" value="show" />');
} else {
    _e('<input type="hidden" target="HLogoZ-hide2" name="HLogoZ-hide2" class="HLogoZ-sh" value="hide" />');
}

?>
  <div id="poststuff">
    <div class="postbox">
      <h3 class="hndle HLogoZ-h" style="background:#66A3FF;" target="HLogoZ-hide2"><span><?php _e('Pre-Defined Holidays - 28 Holidays Available','HLogoZ'); ?></span></h3>
      <div class="inside" id="HLogoZ-hide2">
<table width="100%" class="HLogoZ-Pad">
<?php // Default Logo ?>
<tr class="HLogoZ-selected">
<th scope="row">
<input type="checkbox" checked="checked" disabled="disabled" /> <?php _e('Default Logo', 'HLogoZ'); ?>
</td>
<td>
<select name="default-img">
	<?php _e(HLogoZImageList($DEF_IMG)) ?>
<td>
&nbsp;
</td>
</tr>
<?php // New Year's Day ?>
<tr target="holi-01">
<th scope="row">
<input type="checkbox" name="holi-01" <?php _e($H01=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('New Year\'s Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-01-img">
	<?php _e(HLogoZImageList($img01)) ?>
</td>
<td>
January 01
</td>
</tr>
<?php // Groundhog's Day ?>
<tr target="holi-02">
<th scope="row">
<input type="checkbox" name="holi-02" <?php _e($H02=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Groundhog\'s Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-02-img">
	<?php _e(HLogoZImageList($img02)) ?>
<td>
February 02
</td>
</tr>
<?php // Valentine's Day ?>
<tr target="holi-03">
<th scope="row">
<input type="checkbox" name="holi-03" <?php _e($H03=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Valentine\'s Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-03-img">
	<?php _e(HLogoZImageList($img03)) ?>
<td>
February 14
</td>
</tr>
<?php // Lincoln's Birthday ?>
<tr target="holi-04">
<th scope="row">
<input type="checkbox" name="holi-04" <?php _e($H04=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Lincoln\'s Birthday', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-04-img">
	<?php _e(HLogoZImageList($img04)) ?>
<td>
February 12
</td>
</tr>
<?php // Washington's Birthday ?>
<tr target="holi-05">
<th scope="row">
<input type="checkbox" name="holi-05" <?php _e($H05=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Washington\'s Birthday', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-05-img">
	<?php _e(HLogoZImageList($img05)) ?>
<td>
February 22
</td>
</tr>
<?php // President's Day ?>
<tr target="holi-06">
<th scope="row">
<input type="checkbox" name="holi-06" <?php _e($H06=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('President\'s Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-06-img">
	<?php _e(HLogoZImageList($img06)) ?>
<td>
1st Monday between February 15 - 23
</td>
</tr>
<?php // Easter ?>
<tr target="holi-07">
<th scope="row">
<input type="checkbox" name="holi-07" <?php _e($H07=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Easter', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-07-img">
	<?php _e(HLogoZImageList($img07)) ?>
<td>
March or April (Various Dates)
</td>
</tr>
<?php // St. Patick's Day ?>
<tr target="holi-08">
<th scope="row">
<input type="checkbox" name="holi-08" <?php _e($H08=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('St. Patick\'s Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-08-img">
	<?php _e(HLogoZImageList($img08)) ?>
<td>
March 17
</td>
</tr>
<?php // April Fool's Day ?>
<tr target="holi-09">
<th scope="row">
<input type="checkbox" name="holi-09" <?php _e($H09=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('April Fool\'s Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-09-img">
	<?php _e(HLogoZImageList($img09)) ?>
<td>
April 01
</td>
</tr>
<?php // Earth Day ?>
<tr target="holi-10">
<th scope="row">
<input type="checkbox" name="holi-10" <?php _e($H10=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Earth Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-10-img">
	<?php _e(HLogoZImageList($img10)) ?>
<td>
April 22
</td>
</tr>
<?php // Cinco De Mayo ?>
<tr target="holi-11">
<th scope="row">
<input type="checkbox" name="holi-11" <?php _e($H11=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Cinco De Mayo', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-11-img">
	<?php _e(HLogoZImageList($img11)) ?>
<td>
May 05
</td>
</tr>
<?php // Mother's Day ?>
<tr target="holi-12">
<th scope="row">
<input type="checkbox" name="holi-12" <?php _e($H12=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Mother\'s Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-12-img">
	<?php _e(HLogoZImageList($img12)) ?>
<td>
1st Sunday between May 7 - 16
</td>
</tr>
<?php // Armed Forces Day ?>
<tr target="holi-13">
<th scope="row">
<input type="checkbox" name="holi-13" <?php _e($H13=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Armed Forces Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-13-img">
	<?php _e(HLogoZImageList($img13)) ?>
<td>
1st Saturday between May 15 - 21
</td>
</tr>
<?php // Memorial Day ?>
<tr target="holi-14">
<th scope="row">
<input type="checkbox" name="holi-14" <?php _e($H14=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Memorial Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-14-img">
	<?php _e(HLogoZImageList($img14)) ?>
<td>
1st Monday between May 24 - 31
</td>
</tr>
<?php // Flag Day ?>
<tr target="holi-15">
<th scope="row">
<input type="checkbox" name="holi-15" <?php _e($H15=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Flag Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-15-img">
	<?php _e(HLogoZImageList($img15)) ?>
<td>
June 14
</td>
</tr>
<?php // Father's Day ?>
<tr target="holi-16">
<th scope="row">
<input type="checkbox" name="holi-16" <?php _e($H16=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Father\'s Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-16-img">
	<?php _e(HLogoZImageList($img16)) ?>
<td>
1st Sunday between June 15 - 22
</td>
</tr>
<?php // Independence Day (USA) ?>
<tr target="holi-17">
<th scope="row">
<input type="checkbox" name="holi-17" <?php _e($H17=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Independence Day (USA)', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-17-img">
	<?php _e(HLogoZImageList($img17)) ?>
<td>
July 4
</td>
</tr>
<?php // Parent's Day ?>
<tr target="holi-18">
<th scope="row">
<input type="checkbox" name="holi-18" <?php _e($H18=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Parent\'s Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-18-img">
	<?php _e(HLogoZImageList($img18)) ?>
<td>
1st Sunday between July 22 - 30
</td>
</tr>
<?php // Labor Day ?>
<tr target="holi-19">
<th scope="row">
<input type="checkbox" name="holi-19" <?php _e($H19=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Labor Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-19-img">
	<?php _e(HLogoZImageList($img19)) ?>
<td>
1st Monday between September 1 - 7
</td>
</tr>
<?php // Grandparent's Day ?>
<tr target="holi-20">
<th scope="row">
<input type="checkbox" name="holi-20" <?php _e($H20=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Grandparent\'s Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-20-img">
	<?php _e(HLogoZImageList($img20)) ?>
<td>
1st Sunday between September 7 - 15
</td>
</tr>
<?php // Columbus Day ?>
<tr target="holi-21">
<th scope="row">
<input type="checkbox" name="holi-21" <?php _e($H21=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Columbus Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-21-img">
	<?php _e(HLogoZImageList($img21)) ?>
<td>
1st Monday between October 9 - 15
</td>
</tr>
<?php // Halloween ?>
<tr target="holi-22">
<th scope="row">
<input type="checkbox" name="holi-22" <?php _e($H22=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Halloween', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-22-img">
	<?php _e(HLogoZImageList($img22)) ?>
<td>
October 31
</td>
</tr>
<?php // Election Day (USA) ?>
<tr target="holi-23">
<th scope="row">
<input type="checkbox" name="holi-23" <?php _e($H23=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Election Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-23-img">
	<?php _e(HLogoZImageList($img23)) ?>
<td>
1st Tuesday between November 2 - 10
</td>
</tr>
<?php // Veteran's Day ?>
<tr target="holi-24">
<th scope="row">
<input type="checkbox" name="holi-24" <?php _e($H24=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Veteran\'s Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-24-img">
	<?php _e(HLogoZImageList($img24)) ?>
<td>
November 11
</td>
</tr>
<?php // Thanksgiving ?>
<tr target="holi-25">
<th scope="row">
<input type="checkbox" name="holi-25" <?php _e($H25=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Thanksgiving', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-25-img">
	<?php _e(HLogoZImageList($img25)) ?>
<td>
1st Thursday between November 22 - 31
</td>
</tr>
<?php // Christmas Eve ?>
<tr target="holi-26">
<th scope="row">
<input type="checkbox" name="holi-26" <?php _e($H26=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Christmas Eve', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-26-img">
	<?php _e(HLogoZImageList($img26)) ?>
<td>
December 24
</td>
</tr>
<?php // Christmas Day ?>
<tr target="holi-27">
<th scope="row">
<input type="checkbox" name="holi-27" <?php _e($H27=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('Christmas Day', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-27-img">
	<?php _e(HLogoZImageList($img27)) ?>
<td>
December 25
</td>
</tr>
<?php // New Year's Eve ?>
<tr target="holi-28">
<th scope="row">
<input type="checkbox" name="holi-28" <?php _e($H28=="on" ? "checked=on" : ""); ?> class="HLogoZ-chx" /> <?php _e('New Year\'s Eve', 'HLogoZ'); ?>
</td>
<td>
<select name="holi-28-img">
	<?php _e(HLogoZImageList($img28)) ?>
<td>
December 31
</td>
</tr>
</table>
      </div>
    </div>
  </div>
<?php
// Function to Get Files
function HLogoZGetFiles($dir) {
	$dir_check = is_dir($dir);
	if(!$dir_check){

	} else {
		$dh  = opendir($dir);
		while (false !== ($filename = readdir($dh))) {
			$files[] = $filename;
		}
		$entries = array();
		if (is_dir($dir)) {
			foreach($files as $entry) {
				if($entry != '.' && $entry != '..') {
					$entries[] = $entry;
				}
			}
		}
	}
	return $entries;
}

// Function to Create Image List
function HLogoZImageList($day) {
	_e('<option value="">Choose Image</option>');
	// Set Path
	$path = ABSPATH .'wp-content/logos/';
	// Get Files
	$image_array = (HLogoZGetFiles($path));
	if($image_array == 0){
		_e('<span class="">Can\'t find any images. Please resolve any image path errors.</font>');
	} else {
		foreach($image_array as $entry){
			$temp = '<option value="'.$entry.'"'.($day==$entry ? " selected='selected'>" : ">").$entry.'</option>';
			_e($temp);
		}
	}
	_e('</select>');
}
?>
