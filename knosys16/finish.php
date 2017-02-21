<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Knosys'16</title>
		<meta name="description" content="Adding elasticity with SVG shape animations" />
		<meta name="keywords" content="svg, morph, snap.svg, effect, animation, css, shape" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="img/ico.gif">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/inputs.css" />
		
		<link rel="stylesheet" type="text/css" href="css/button.css" />
		<script src="js/snap.svg-min.js"></script>
		<!-- <script src = 'validate.js'></script> -->
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type='text/javascript'>
		$(function {
    $("input[name=first]")[0].oninvalid = function () {
        this.setCustomValidity("Please enter at least 5 characters.");
        this.setCustomValidity("");
    };
});
		
		</script>
		<style>
			body
           {
            background-image:url("img/backgound.svg");
			background-repeat:no-repeat;
            background-attachment:fixed;
            background-position:center; 
			
            }
header #cd-logo {
  margin-bottom: 3em;
}
@media only screen and (min-width: 768px) {
  header {
    margin-bottom: 4em;
  }
}
@media only screen and (min-width: 1170px) {  /*Normal header height*/
  header #cd-logo {
    position: absolute;
    top: 1px;                 /*normal top dist*/
    left: 39%;
  }
}
			</style>
		
	</head>
	<body>
		<div class="container">
			<div class="main">
				<?php 
if(isset($_GET['id'])){
	if ($_GET['id'] == 'confirm'){
		echo "
		<div class='row'><center>
		<div class='col-sm-4 col-md-4 col-lg-4'>
		</div>
		<div class='col-sm-8 col-md-8 col-lg-8'>
		<div ><h3>".$_GET['name'].",You are successfully subscribed to Knosys'16.Check your mail for further details.</h3></div>
		</div>
		<div class='col-sm-4 col-md-4 col-lg-4'>
		</div>
		</center>
		</div>";
	}
	else
	{
		echo "
		<div class='row'><center>
		<div class='col-sm-4 col-md-4 col-lg-4'>
		</div>
		<div class='col-sm-8 col-md-8 col-lg-8'>
		<div ><h3>This email is already subscribed to Knosys'16.</h3></div>
		</div>
		<div class='col-sm-4 col-md-4 col-lg-4'>
		</div>
		</center>
		</div>";
		
	}
}
?>
<div class="codrops-links" style='position:absolute;bottom:40px;top:15px'>
						<a class="codrops-icon codrops-icon-prev" style="font-size:2.5em;"href="http://www.knosys.in" title="Previous Demo"><span>Previous Demo</span></a> 
						
					    </div>
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script>
			(function() {

				function extend( a, b ) {
					for( var key in b ) { 
						if( b.hasOwnProperty( key ) ) {
							a[key] = b[key];
						}
					}
					return a;
				}
				
				function SVGButton( el, options ) {
					this.el = el;
					this.options = extend( {}, this.options );
					extend( this.options, options );
					this.init();
				}

				SVGButton.prototype.options = {
					speed : { reset : 800, active : 150 },
					easing : { reset : mina.elastic, active : mina.easein }
				};

				SVGButton.prototype.init = function() {
					this.shapeEl = this.el.querySelector( 'span.morph-shape' );

					var s = Snap( this.shapeEl.querySelector( 'svg' ) );
					this.pathEl = s.select( 'path' );
					this.paths = {
						reset : this.pathEl.attr( 'd' ),
						active : this.shapeEl.getAttribute( 'data-morph-active' )
					};

					this.initEvents();
				};

				SVGButton.prototype.initEvents = function() {
					this.el.addEventListener( 'mousedown', this.down.bind(this) );
					this.el.addEventListener( 'touchstart', this.down.bind(this) );

					this.el.addEventListener( 'mouseup', this.up.bind(this) );
					this.el.addEventListener( 'touchend', this.up.bind(this) );

					this.el.addEventListener( 'mouseout', this.up.bind(this) );
				};

				SVGButton.prototype.down = function() {
					this.pathEl.stop().animate( { 'path' : this.paths.active }, this.options.speed.active, this.options.easing.active );
				};

				SVGButton.prototype.up = function() {
					this.pathEl.stop().animate( { 'path' : this.paths.reset }, this.options.speed.reset, this.options.easing.reset );
				};

				[].slice.call( document.querySelectorAll( 'button.button--effect-1' ) ).forEach( function( el ) {
					new SVGButton( el );
				} );

				[].slice.call( document.querySelectorAll( 'button.button--effect-2' ) ).forEach( function( el ) {
					new SVGButton( el, {
						speed : { reset : 650, active : 650 },
						easing : { reset : mina.elastic, active : mina.elastic }
					} );
				} );

			})();			
		</script>
		<script>
			(function() {

				function SVGInput( el, options ) {
					this.el = el;
					this.inputEl = this.el.querySelector( 'input' );
					this.init();
				}

				SVGInput.prototype.init = function() {
					this.shapeEl = this.el.querySelector( 'span.morphi' );

					var s = Snap( this.shapeEl.querySelector( 'svg' ) );
					this.pathEl = s.select( 'path' );
					this.paths = {
						reset : this.pathEl.attr( 'd' ),
						active : this.shapeEl.getAttribute( 'data-morph-active' )
					};

					this.initEvents();
				};

				SVGInput.prototype.initEvents = function() {
					if( this.inputEl.type === 'checkbox' || this.inputEl.type === 'radio' ) {
						this.el.addEventListener( 'mousedown', this.down.bind(this) );
						this.el.addEventListener( 'touchstart', this.down.bind(this) );

						this.el.addEventListener( 'mouseup', this.up.bind(this) );
						this.el.addEventListener( 'touchend', this.up.bind(this) );

						this.el.addEventListener( 'mouseout', this.up.bind(this) );
					}
					else {
						this.el.addEventListener( 'click', this.toggle.bind(this) );
					}
				};

				SVGInput.prototype.down = function() {
					this.pathEl.stop().animate( { 'path' : this.paths.active }, 150, mina.easein );
				};

				SVGInput.prototype.up = function() {
					this.pathEl.stop().animate( { 'path' : this.paths.reset }, 1000, mina.elastic );
				};

				SVGInput.prototype.toggle = function() {
					var self = this;

					this.pathEl.stop().animate( { 'path' : this.paths.active }, 200, mina.easein, function() {
						self.pathEl.stop().animate( { 'path' : self.paths.reset }, 600, mina.elastic );
					} );
				};

				[].slice.call( document.querySelectorAll( '.input-wrap' ) ).forEach( function( el ) {
					new SVGInput( el );
				} );

			})();
		</script>
	</body>
</html>