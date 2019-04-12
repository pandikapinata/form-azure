$(function(e) {
	'use strict';
	$('.select2').select2()
	$("#destination").select2({
		placeholder: "Select a State",
		allowClear: true
	});
});