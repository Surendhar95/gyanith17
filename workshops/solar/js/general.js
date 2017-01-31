$(document).ready(function(){
	//initial
	$('#content').load('content/intro.php');
	//handle menu clicks
	$('ul#nav li a').click(function() {
		
		var page = $(this).attr('href');
			$('#content').load('content/'+page);
			return false;
	});
});