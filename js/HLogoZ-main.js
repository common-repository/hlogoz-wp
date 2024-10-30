jQuery(function() {
	// Minimize/Maximize Boxes Based on Stored Value
	jQuery(".HLogoZ-sh").each(function (i) {
		var a = jQuery(this).attr("target");
		if (jQuery("[name='"+ a +"']").val() == "hide") jQuery("[id='"+ a +"']").hide();
	});
	// Show/Hide Extra Flash Settings Based on Stored Value
	jQuery("#HLogoZ-hide").each(function (i) {
		var a = jQuery(this).val();
		if (a == "") jQuery(".hide-fla").hide();
	});
	// Click Event to Toggle Extra Flash Settings
	jQuery("#HLogoZ-mode").click(function () {
		if (jQuery(".fla").is(":selected")) {
		    jQuery(".hide-fla").show();
		} else {
		    jQuery(".hide-fla").hide();
		}
	});
	// Add Cursor to Box Headers
	jQuery(".HLogoZ-h").css("cursor","pointer");
	// Header Click
	jQuery(".HLogoZ-h").click(function () {
		var a = jQuery(this).attr('target');
		if (jQuery("[id='"+ a +"']").is(":hidden")) {
		    jQuery("[name='"+ a +"']").val("show");
		    jQuery("[id='"+ a +"']").toggle("fast");
		} else {
		    jQuery("[name='"+ a +"']").val("hide");
		    jQuery("[id='"+ a +"']").toggle("fast");
		}
	});
	// OnLoad Date Highlight
	jQuery(".HLogoZ-chx").each(function (i) {
		var a = jQuery(this).attr('name');
		if (jQuery(this).is(":checked")) {
		    jQuery("[target='"+ a +"']").addClass("HLogoZ-selected");
		} else {
		    jQuery("[target='"+ a +"']").removeClass("HLogoZ-selected");
		}
	});
	// Click Checkbox Highlight
	jQuery(".HLogoZ-chx").click(function () {
		var a = jQuery(this).attr('name');
		if (jQuery(this).is(":checked")) {
		    jQuery("[target='"+ a +"']").addClass("HLogoZ-selected");
		} else {
		    jQuery("[target='"+ a +"']").removeClass("HLogoZ-selected");
		}
	});
});
