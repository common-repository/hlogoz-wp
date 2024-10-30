<?php
// Date Cycle Function
if (!function_exists("HLogoZ_Dates")) {
    function HLogoZ_Dates() {
	// Get Properties
	get_option('HLogoZ_gen') == "" ? "" : extract(get_option('HLogoZ_gen'));
	// Time and Date Calculations (Don't Modify these unless you want the calculations to be off =D)
	$timechange = ($offset1.$offset2 * 60 * 60);
	$today = date("F d, Y",time() + $timechange);
	$time = date("h:i A",time() + $timechange);
	$day = date("d",time() + $timechange);
	$month= date("F",time() + $timechange);
	$year = date("Y",time() + $timechange);
	$weekday = date("l",time() + $timechange);
	$easter = date("F d, $year", easter_date($year)); // Easter Mod Calculation
	
	// Retrieve Date Settings
	get_option('HLogoZ_preDates') == "" ? "" : extract(get_option('HLogoZ_preDates'));
	get_option('HLogoZ_preImg') == "" ? "" : extract(get_option('HLogoZ_preImg'));
	
	// New Year's Day
	if ($today == "January 01, $year") $a = HLogoZ_Exists($img01, $H01, $DEF_IMG);

	// Groundhog Day
	else if ($today == "February 02, $year") $a = HLogoZ_Exists($img02, $H02, $DEF_IMG);
	
	// Valentine's Day
	else if ($today == "February 14, $year") $a = HLogoZ_Exists($img03, $H03, $DEF_IMG);

	// Lincoln's Birthday
	else if ($today == "February 12, $year") $a = HLogoZ_Exists($img04, $H04, $DEF_IMG);

	// Washington's Birthday
	else if ($today == "February 22, $year") $a = HLogoZ_Exists($img05, $H05, $DEF_IMG);

	// President's Day
	else if (($month == February) && ($weekday == Monday) && ($day >= 15) && ($day < 23)) $a = HLogoZ_Exists($img06, $H06, $DEF_IMG);

	// Easter
	else if ($today == $easter) $a = HLogoZ_Exists($img07, $H07, $DEF_IMG);

	// St. Paticks Day
	else if ($today == "March 17, $year") $a = HLogoZ_Exists($img08, $H08, $DEF_IMG);

	// April Fool's Day
	else if ($today == "April 01, $year") $a = HLogoZ_Exists($img09, $H09, $DEF_IMG);

	// Earth Day
	else if ($today == "April 22, $year") $a = HLogoZ_Exists($img10, $H10, $DEF_IMG);

	// Cinco De Mayo
	else if ($today == "May 05, $year") $a = HLogoZ_Exists($img11, $H11, $DEF_IMG);

	// Mothers Day
	else if (($month == May) && ($weekday == Sunday) && ($day > 07) && ($day< 16)) $a = HLogoZ_Exists($img12, $H12, $DEF_IMG);

	// Armed Forces Day
	else if (($month == May) && ($weekday == Saturday) && ($day >= 15) && ($day<= 21)) $a = HLogoZ_Exists($img13, $H13, $DEF_IMG);

	// Memorial Day 
	else if (($month == May) && ($weekday == Monday) && ($day >= 24) && ($day<= 31)) $a = HLogoZ_Exists($img14, $H14, $DEF_IMG);

	// Flag Day
	else if ($today == "June 14, $year") $a = HLogoZ_Exists($img15, $H15, $DEF_IMG);

	// Fathers Day
	else if (($month == June) && ($weekday == Sunday) && ($day >= 15) && ($day< 22)) $a = HLogoZ_Exists($img16, $H16, $DEF_IMG);

	// Independence Day
	else if ($today == "July 04, $year") $a = HLogoZ_Exists($img17, $H17, $DEF_IMG);

	// Parent's Day
	else if (($month == July) && ($weekday == Sunday) && ($day >= 22) && ($day< 30)) $a = HLogoZ_Exists($img18, $H18, $DEF_IMG);

	// Labor Day
	else if (($month == September) && ($weekday == Monday) && ($day >= 01) && ($day < 07)) $a = HLogoZ_Exists($img19, $H19, $DEF_IMG);

	// Grandparent's Day
	else if (($month == September) && ($weekday == Sunday) && ($day >= 07) && ($day < 15)) $a = HLogoZ_Exists($img20, $H20, $DEF_IMG);

	// Columbus Day
	else if (($month == October) && ($weekday == Monday) && ($day >= 09) && ($day <= 15)) $a = HLogoZ_Exists($img21, $H21, $DEF_IMG);

	// Halloween
	else if ($today == "October 31, $year") $a = HLogoZ_Exists($img22, $H22, $DEF_IMG);

	// Election Day
	else if (($month == November) && ($weekday == Tuesday) && ($day >= 02) && ($day < 10)) $a = HLogoZ_Exists($img23, $H23, $DEF_IMG);

	// Veteran's Day
	else if ($today == "November 11, $year") $a = HLogoZ_Exists($img24, $H24, $DEF_IMG);

	// Thanksgiving
	else if (($month == November) && ($weekday == Thursday) && ($day > 22) && ($day <= 31)) $a = HLogoZ_Exists($img25, $H25, $DEF_IMG);

	// Christmas Eve
	else if ($today == "December 24, $year") $a = HLogoZ_Exists($img26, $H26, $DEF_IMG);

	// Christmas
	else if ($today == "December 25, $year") $a = HLogoZ_Exists($img27, $H27, $DEF_IMG);

	// New Year's Eve
	else if ($today == "December 31, $year") $a = HLogoZ_Exists($img28, $H28, $DEF_IMG);
	
	// Check Custom Dates
	else {
	    if (get_option('HLogoZ_custom') != '') {
		// Retrieve Custom Data
		get_option('HLogoZ_custom') == "" ? "" : extract(get_option('HLogoZ_custom'));
		$count = count(get_option('HLogoZ_custom')) / 5;
		
		// Loop Through Each Date
		for ($i = 1; $i <= $count; $i++) {
		    $pad = str_pad($i, 3, '0', STR_PAD_LEFT);
		    $mon = ${"mon".$pad};
		    $day = ${"day".$pad};
		    if ($today == "$mon $day, $year") $a = HLogoZ_Exists(${"img".$pad}, ${"chx".$pad}, $DEF_IMG);
		}
	    }
	    if ($a == '' || $a == $DEF_IMG) $a = $DEF_IMG;
	}
	return $a;
    }
}

// Check Image Exists/Display
if (!function_exists("HLogoZ_Exists")) {
    function HLogoZ_Exists($img, $num, $DEF_IMG) {
	$path = ABSPATH .'wp-content/logos/'.$img;
	if (file_exists($path) && $num == "on") {
    	    $a = $img;
	} else {
    	    $a = $DEF_IMG;
	}
	return $a;
    }
}
?>
