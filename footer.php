


<style>
footer{
	position:fixed;
	bottom:0%;
	left:0%;
	right:0%;
	font-size:15px;
	text-align:center;
	color:#fff;
	/*margin-bottom:2%;*/
	opacity:0.7;
	z-index:50;
}

footer hr{
	width:97%;
	position:relative;
	left:17px;
	
	
}
.clrch:hover{
color:#19f6e8;
}
#socialicon{
	padding-left:5%;
/*padding-right:20px;*/
margin-bottom:5px;
}

</style>

<div id="fb-root"></div>
			<script>
				(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>

<footer>
<hr/>
	<div class="footer">
		<div class="row">
			<div id="socialicon" class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<img src="/images/twitter.svg" />
					<img src="/images/youtube.svg"/>
					<img src="/images/insta.svg"/>
					<div style="padding-bottom:-40px;" class="fb-like" data-href="https://www.facebook.com/gyanith.nitpy/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 clrch">
					MADE WITH <i class="fa fa-heart" aria-hidden="true" style="color:red;"></i> BY WEB TEAM NITPY
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
		</div>
	</div>
</footer>
