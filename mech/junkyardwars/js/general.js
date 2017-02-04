$(document).ready(function(){
	//initial
	$('#content').load('content/desc.php');
	//handle menu clicks
	$('ul#nav li a').click(function() {
		
		var page = $(this).attr('href');
			$('#content').load('content/'+page);
			return false;
	});
	/*
	$('table#nav tr td a').click(function() {
		
		var page = $(this).attr('href');
			$('#content').load('content/'+page);
			return false;
	});*/

});