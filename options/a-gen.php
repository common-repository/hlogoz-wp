<?php
// Retrieve General & Hide Settings
get_option('HLogoZ_gen') == "" ? "" : extract(get_option('HLogoZ_gen'));
get_option('HLogoZ_hide') == "" ? "" : extract(get_option('HLogoZ_hide'));
// General Settings
if ($hide1 == 'show') {
    _e('<input type="hidden" target="HLogoZ-hide1" name="HLogoZ-hide1" class="HLogoZ-sh" value="show" />');
} else {
    _e('<input type="hidden" target="HLogoZ-hide1" name="HLogoZ-hide1" class="HLogoZ-sh" value="hide" />');
}
?>
  <div id="poststuff">
    <div class="postbox">
      <h3 class="hndle HLogoZ-h" style="background:#C26666;" target="HLogoZ-hide1"><span class="HLogoZ-Bold"><?php _e('General Settings','HLogoZ'); ?></span></h3>
      <div class="inside" id="HLogoZ-hide1">
<table width="100%" class="HLogoZ-Pad">
<tr>
<th scope="row">
<?php _e('Image CSS Class/ID', 'HLogoZ'); ?>
</td>
<td>
<input type="text" name="class1" size="25" value="<?php $class1=="" ? _e('Enter CSS Class/ID For Div', 'HLogoZ', 'HLogoZ') : _e($class1); ?>" />&nbsp;
<select name="class2">
	<option value="." <?php _e($class2=="." ? "selected" : ""); ?>>. (class)</option>
	<option value="#" <?php _e($class2=="#" ? "selected" : ""); ?>># (id)</option>
</select>
</td></tr>
<tr>
<th scope="row">
<?php _e('Image or Flash Mode?', 'HLogoZ'); ?>
</td>
<td>
<select name="mode" id="HLogoZ-mode">
	<option value="" <?php _e($mode=="" ? "selected" : ""); ?>>Image Mode</option>
	<option value="fla" <?php _e($mode=="fla" ? "selected" : ""); ?> class="fla">Flash Mode (Beta)</option>
	<!--<option value="com" <?php _e($mode=="com" ? "selected" : ""); ?> class="fla">Combo Mode (Coming in Future)</option>-->
</select>
<input type="hidden" id="HLogoZ-hide" value="<?php _e($mode); ?>" />
</td></tr>
<tr class="hide-fla">
<th scope="row" style="text-align:left; vertical-align:top;" colspan="2">
<span class="HLogoZ-Red"><?php _e('Title is required for Flash Mode.', 'HLogoZ'); ?></span>
</td></tr>
<tr class="hide-fla">
<th scope="row" style="text-align:left; vertical-align:top;">
<?php _e('Title', 'HLogoZ'); ?>
</td><td>
<input type="text" name="title" value="<?php _e($title); ?>" />
</td></tr>
<tr>
<th scope="row" style="text-align:left; vertical-align:top;">
<?php _e('Background Color', 'HLogoZ'); ?>
</td><td>
<input type="text" name="bgColor" value="<?php _e($bgColor); ?>" />
</td></tr>
<tr>
<th scope="row" style="text-align:left; vertical-align:top;">
<?php _e('Width', 'HLogoZ'); ?>
</td><td>
<input type="text" name="wid1" size = "25" value="<?php _e($wid1); ?>" />
<select name="wid2">
	<option value="px" <?php _e($wid2=="px" ? "selected" : ""); ?>>px (pixels)</option>
	<option value="em" <?php _e($wid2=="em" ? "selected" : ""); ?>>em (em-quad)</option>
</select>
<p><input type="checkbox" name="wid3" value="100%" <?php _e($wid3=='100%' ? 'checked="checked"' : ''); ?> />100% Width (Image Mode Only)</p>
</td></tr>
<tr>
<th scope="row" style="text-align:left; vertical-align:top;">
<?php _e('Height', 'HLogoZ'); ?>
</td><td>
<input type="text" name="hei1" size = "25" value="<?php _e($hei1); ?>" />
<select name="hei2">
	<option value="px" <?php _e($hei2=="px" ? "selected" : ""); ?>>px (pixels)</option>
	<option value="em" <?php _e($hei2=="em" ? "selected" : ""); ?>>em (em-quad)</option>
</select>
</td></tr>
<tr>
<th scope="row">
<?php _e('Time Offset', 'HLogoZ'); ?>
</td>
<td>
<select name="offset1">
	<option value="+" <?php _e($offset1=="+" || $offset1=="" ? "selected" : ""); ?>>Plus</option>
	<option value="-" <?php _e($offset1=="-" ? "selected" : ""); ?> class="fla">Minus</option>
</select>
<select name="offset2">
	<option value="0" <?php _e($offset2=="0" || $offset2=="" ? "selected" : ""); ?>>0 Hours</option>
	<option value="1" <?php _e($offset2=="1" ? "selected" : ""); ?>>1 Hour</option>
	<option value="2" <?php _e($offset2=="2" ? "selected" : ""); ?>>2 Hours</option>
	<option value="3" <?php _e($offset2=="3" ? "selected" : ""); ?>>3 Hours</option>
	<option value="4" <?php _e($offset2=="4" ? "selected" : ""); ?>>4 Hours</option>
	<option value="5" <?php _e($offset2=="5" ? "selected" : ""); ?>>5 Hours</option>
	<option value="6" <?php _e($offset2=="6" ? "selected" : ""); ?>>6 Hours</option>
	<option value="7" <?php _e($offset2=="7" ? "selected" : ""); ?>>7 Hours</option>
	<option value="8" <?php _e($offset2=="8" ? "selected" : ""); ?>>8 Hours</option>
	<option value="9" <?php _e($offset2=="9" ? "selected" : ""); ?>>9 Hours</option>
	<option value="10" <?php _e($offset2=="10" ? "selected" : ""); ?>>10 Hours</option>
	<option value="11" <?php _e($offset2=="11" ? "selected" : ""); ?>>11 Hours</option>
	<option value="12" <?php _e($offset2=="12" ? "selected" : ""); ?>>12 Hours</option>
	<option value="13" <?php _e($offset2=="13" ? "selected" : ""); ?>>13 Hours</option>
	<option value="14" <?php _e($offset2=="14" ? "selected" : ""); ?>>14 Hours</option>
	<option value="15" <?php _e($offset2=="15" ? "selected" : ""); ?>>15 Hours</option>
	<option value="16" <?php _e($offset2=="16" ? "selected" : ""); ?>>16 Hours</option>
	<option value="17" <?php _e($offset2=="17" ? "selected" : ""); ?>>17 Hours</option>
	<option value="18" <?php _e($offset2=="18" ? "selected" : ""); ?>>18 Hours</option>
	<option value="19" <?php _e($offset2=="19" ? "selected" : ""); ?>>19 Hours</option>
	<option value="20" <?php _e($offset2=="20" ? "selected" : ""); ?>>20 Hours</option>
	<option value="21" <?php _e($offset2=="21" ? "selected" : ""); ?>>21 Hours</option>
	<option value="22" <?php _e($offset2=="22" ? "selected" : ""); ?>>22 Hours</option>
	<option value="23" <?php _e($offset2=="23" ? "selected" : ""); ?>>23 Hours</option>
</select>
<?php
$houroffset = $offset;
$timechange = ($houroffset * 60 * 60);
$today = date("F d, Y",time() + $timechange);
$time = date("h:i A",time() + $timechange);
_e(" Current Time is: $time and today is $today");
?>
<input type="hidden" id="hide-fla" value="<?php _e($mode); ?>" />
</td></tr>
</table>
      </div>
    </div>
  </div>
