<?php
// Custom Holidays
if ($hide3 == 'show') {
    _e('<input type="hidden" target="HLogoZ-hide3" name="HLogoZ-hide3" class="HLogoZ-sh" value="show" />');
} else {
    _e('<input type="hidden" target="HLogoZ-hide3" name="HLogoZ-hide3" class="HLogoZ-sh" value="hide" />');
}

// Day
function Hday($day) {
    $Darray = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31');
    $Hday .= '<option value="">Choose Day</option>';
    foreach($Darray as $entry) {
	$Hday .= '<option value="'.$entry.($day==$entry ? '" selected="selected">' : '">').$entry.'</option>';
    }
    $Hday .= '</select>';
    return $Hday;
}
// Month
function Hmon($mon) {
    $Marray = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $Hmon .= '<option value="">Choose Month</option>';
    foreach($Marray as $entry) {
	$Hmon .= '<option value="'.$entry.($mon==$entry ? '" selected="selected">' : '">').$entry.'</option>';
    }
    $Hmon .= '</select>';
    return $Hmon;
}
?>
  <div id="poststuff">
    <div class="postbox">
      <h3 class="hndle HLogoZ-h" style="background:#E0E066;" target="HLogoZ-hide3"><span><?php _e('Custom Holidays/Events','HLogoZ'); ?></span></h3>
      <div class="inside" id="HLogoZ-hide3">
<table width="100%" class="HLogoZ-Pad" id="dates">
<?php
$count = count(get_option('HLogoZ_custom')) / 5;
if (get_option('HLogoZ_custom') == '' || $count == '0') {
// Show Custom Day #1
?>
<tr target="cust-001-chx">
<td>
<input type="checkbox" name="cust-001-chx" class="HLogoZ-chx" />
<input type="input" name="cust-001-txt" size ="20" />
</td>
<td>
<select name="cust-001-day">
<?php _e(Hday()) ?>&nbsp;&nbsp;
<select name="cust-001-mon">
<?php _e(Hmon()) ?>
</td>
<td>
<select name="cust-001-img">
	<?php _e(HLogoZImageList($cimg001)) ?>
</td></tr>
<?php
} else {
    // Retrieve Custom Data
    get_option('HLogoZ_custom') == "" ? "" : extract(get_option('HLogoZ_custom'));
    for ($i = 1; $i <= $count; $i++) {
	$pad = str_pad($i, 3, '0', STR_PAD_LEFT);
	_e('<tr target="cust-'.$pad.'-chx">');
	_e('<td>');
	_e('<input type="checkbox" name="cust-'.$pad.'-chx" '.(${"chx".$pad}=="on" ? "checked=on" : "").' class="HLogoZ-chx" />&nbsp;');
	_e('<input type="input" name="cust-'.$pad.'-txt" size ="20" value="'.${"txt".$pad}.'" />');
	_e('</td>');
	_e('<td>');
	_e('<select name="cust-'.$pad.'-day">');
	_e(Hday(${"day".$pad}).'&nbsp;&nbsp;&nbsp;');
	_e('<select name="cust-'.$pad.'-mon">');
	_e(Hmon(${"mon".$pad}));
	_e('</td>');
	_e('<td>');
	_e('<select name="cust-'.$pad.'-img">');
	_e(HLogoZImageList(${"img".$pad}));
	_e('</td></tr>');
    }
}

if ($count == '0') $count = '1';
?>
<input type="hidden" name="num" value="<?php _e($count=="0" ? "1" : "$count") ?>" />
</table>
<?php
##################################
#                                #
#   Start Holidays JavaScript    #
#                                #
##################################
?>
<script type="text/javascript">
jQuery(function() {

            // Add repeat method to String object
            String.prototype.repeat = function(n){
                return new Array(n + 1).join(this);
            };

            // Add leading Zeros
            function leading_zeros (n, total_digits) {
                n = n.toString();
                return '0'.repeat(total_digits - n.length) + n;
            };

	    // Initialize the counter
            var counter = '<?php _e($count) ?>';
            var num_counter = '<?php _e($count) ?>';

            jQuery('#dates-button').click(function(){

                // Increment and Pad Counter
                var padded_counter = leading_zeros(++counter, 3);
                var list = '<?php _e(HLogoZImageList($ph)) ?>';
                var day = '<?php _e(Hday($ph)) ?>';
                var mon = '<?php _e(Hmon($ph)) ?>';

                // Create New Row
                var extrafield = '<tr target="cust-' + padded_counter + '-chx"><td>';
		extrafield += '<input type="checkbox" name="cust-' + padded_counter + '-chx" class="HLogoZ-chx" />&nbsp;';
		extrafield += '<input type="input" name="cust-' + padded_counter + '-txt" size ="20" /></td>';
                extrafield += '<td>';
                extrafield += '<select name="cust-' + padded_counter + '-day">';
                extrafield += day + '&nbsp;&nbsp;&nbsp;';
                extrafield += '<select name="cust-' + padded_counter + '-mon">';
                extrafield += mon;
                extrafield += '</td><td>';
                extrafield += '<select name="cust-' + padded_counter + '-img">';
                extrafield += list;
                extrafield += '<input type="hidden" value="' + padded_counter + '">';
                extrafield += '</td></tr>';

                // Add Row to Table
                jQuery('#dates').append(extrafield);
                
                // Change Value of Num Hidden Field
                jQuery('[name="num"]').val(++num_counter);
	    });
});
</script>
<?php
##################################
#                                #
#    End Holidays JavaScript     #
#                                #
##################################
?>
<br /><br />
<input type="button" id="dates-button" value="<?php _e('Add New Holiday/Event','HLogoZ'); ?>" class="button" />
      </div>
    </div>
  </div>
