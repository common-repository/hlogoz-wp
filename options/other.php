<?php
//Promote HLogoZ-WP
if ($hide4 == 'show') {
    _e('<input type="hidden" target="HLogoZ-hide4" name="HLogoZ-hide4" class="HLogoZ-sh" value="show" />');
} else {
    _e('<input type="hidden" target="HLogoZ-hide4" name="HLogoZ-hide4" class="HLogoZ-sh" value="hide" />');
}
?>
  <div id="poststuff">
    <div class="postbox">
      <h3 class="hndle HLogoZ-h" style="background:#66A384;" target="HLogoZ-hide4"><span><?php _e('Other Settings','HLogoZ'); ?></span></h3>
      <div class="inside" id="HLogoZ-hide4">
<table width="100%" class="HLogoZ-Pad">
<tr>
<th scope="row">
<?php _e('Help promote HLogoZ-WP?', 'HLogoZ'); ?>
</td><td>
<input type="checkbox" name="prom" <?php _e($prom=="on" ? "checked=on" : ""); ?> /> <?php _e('Place a support link at the bottom of each post/page. Thanks for your support!', 'HLogoZ'); ?>
</td></tr>
</table>
      </div>
    </div>
  </div>
<?php
// How To
if ($hide5 == 'show') {
    _e('<input type="hidden" target="HLogoZ-hide5" name="HLogoZ-hide5" class="HLogoZ-sh" value="show" />');
} else {
    _e('<input type="hidden" target="HLogoZ-hide5" name="HLogoZ-hide5" class="HLogoZ-sh" value="hide" />');
}
?>
  <div id="poststuff">
    <div class="postbox">
      <h3 class="hndle HLogoZ-h" style="background:#E0C266;" target="HLogoZ-hide5"><span><?php _e('Setup Information','HLogoZ'); ?></span></h3>
      <div class="inside" id="HLogoZ-hide5">
<table width="100%" class="HLogoZ-Pad">
<tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="HLogoZ-Green">Step 1a: (Default Theme) Edit header.php in Template</span><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* <span class="HLogoZ-Blue">Go to step 1b below if you are using a custom theme</span><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Go to Appearance -> Editor<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Click on Header (header.php) in Template File List<br /><br />
<img src="<?php _e(HLogoZ_Url()); ?>images/how-to-default.png" width="609" height="304" /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Record the name of the CSS class<br /><br />

&nbsp;&nbsp;&nbsp;&nbsp;<span class="HLogoZ-Green">Step 1b: (Custom Theme) Edit header.php in Template</span><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* <span class="HLogoZ-Blue">Skip to Step 2 if you followed Step 1a.</span><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* If you already know the CSS class for your logo/div container then you may skip this step.<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* If you need to modify the default theme see Step 1a.<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Go to Appearance -> Editor<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Click on Header (header.php) in Template File List<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Look for where your logo is located.<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Record the name of the CSS class<br /><br />

&nbsp;&nbsp;&nbsp;&nbsp;<span class="HLogoZ-Green">Step 2: Upload Images</span><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Create a new folder named "logos" in the wp-content folder<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Upload all images to your new "logos" folder located in wp-content/logos/<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* <span class="HLogoZ-Red">Note:</span> For best results use images/flash files that have the same dimensions. <span class="HLogoZ-Red">(Auto image size detection is planned for a future version.)</span><br /><br />

&nbsp;&nbsp;&nbsp;&nbsp;<span class="HLogoZ-Green">Step 3: Fill Out General Settings</span><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* <span class="HLogoZ-Blue">Manual CSS: </span>Use this option if you prefer manual CSS.<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* <span class="HLogoZ-Blue">Image CSS Class/ID: </span>Only type the name of the Class/ID (no periods or number signs at beginning)<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* <span class="HLogoZ-Blue">Mode: </span>Make sure you have the correct mode selected.<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Make sure the title field is filled out with something when using flash mode.<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* <span class="HLogoZ-Red">Flash mode is still in the beta phase and may not work correctly in all templates.</span><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* <span class="HLogoZ-Blue">Width and Height: </span>These will be the dimensions of the container not the image, although you may make it the dimensions of your image. You may need to play around with the dimensions a bit to get it to fit just right. <span class="HLogoZ-Red">For default theme use 760w x 200h (pixels).</span><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* <span class="HLogoZ-Blue">Time Offset: </span>If the current time and or date is inaccurate you can fix it by adding/subtracting hours to your server time.<br /><br />

&nbsp;&nbsp;&nbsp;&nbsp;<span class="HLogoZ-Green">Step 4: Select Dates and Fill out any other settings</span><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Only dates that are checked will be displayed on the given date, otherwise the default logo will be displayed.<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Make sure to choose an image for each date. HLogoZ-WP will revert to the default logo if an image is unchosen.<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Create your own dates.<br /><br />
<!--
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Fill in a label for the date (Labels are only displayed in admin)<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Select an image from the drop down box<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Select an image from the drop down box<br /><br />
-->
</td></tr>
</table>
      </div>
    </div>
  </div>
<?php
//ChangeLog
if ($hide6 == 'show') {
    _e('<input type="hidden" target="HLogoZ-hide6" name="HLogoZ-hide6" class="HLogoZ-sh" value="show" />');
} else {
    _e('<input type="hidden" target="HLogoZ-hide6" name="HLogoZ-hide6" class="HLogoZ-sh" value="hide" />');
}
?>
  <div id="poststuff">
    <div class="postbox">
      <h3 class="hndle HLogoZ-h" style="background:#A384E0;" target="HLogoZ-hide6"><span><?php _e('ChangeLog','HLogoZ'); ?></span></h3>
      <div class="inside" id="HLogoZ-hide6">
<table width="100%" class="HLogoZ-Pad">
<tr>
<td>
1.1.6 - 7/19/11
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Added background CSS option.<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Added width 100% option.
<br /><br />
1.1.5 - 9/14/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Removed "logos" folder. You'll need to create a new folder called "logos" inside wp-content folder. This is to fix the update deletion issue for new versions.<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Fixed the promote setting<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Updated Installation Instructions and Setup Information
<br /><br />
1.1.4 - 6/14/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Modified setup instructions and added info for editing the default WordPress theme
<br /><br />
1.1.3 - 6/13/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Updated the CSS for boxes to fix visual glitch in 2.8
<br /><br />
1.1.2 - 4/26/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Added logos folder, linking issue fixed<br />
&nbsp;&nbsp;&nbsp;&nbsp;* No longer need to make a logos folder
<br /><br />
1.1.1 - 3/30/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Added HLogoZ Logo<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Updated backend design to match logo<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Added Dropdown boxes for width and height to choose type of dimension property (px or em)<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Added Dropdown box for Image class to choose id or class
<br /><br />
1.1.0 - 3/22/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Added Custom Holiday Feature<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Fixed a time bug, offset now works properly<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Fixed the extract bug that was causing an on screen error<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Minor code cleanup
<br /><br />
1.0.3 - 3/18/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Default image bug fix
<br /><br />
1.0.2 - 3/17/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Some code clean up
<br /><br />
1.0.1 - 3/15/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Date and/or date ranges are now listed next to holidays
<br /><br />
1.0.0 - 3/3/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Initial Release
</td></tr>
</table>
      </div>
    </div>
  </div>
