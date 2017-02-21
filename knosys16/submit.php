<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta name="description" content="Adding elasticity with SVG shape animations" />
		<meta name="keywords" content="svg, morph, snap.svg, effect, animation, css, shape" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="img/ico.gif">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/button.css" />
		<script src="js/snap.svg-min.js"></script>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
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
		<div class="container-fluid">
		<div class='row'>
		<div class='col-sm col-md '>
			<div class="main">
				
				<form  action="inputs.html" method="POST">
		
					<div class="input-container input-container--indent">
						<button class="button button--line button--effect-2"  >
							<span class="morph-shape" data-morph-active="M287,95.25c0,11.046-5.954,19.75-17,19.75c0,0-90-4-120-4s-120,4-120,4c-11.046,0-17.25-9.5-17.25-20.5c0-8.715,0.25-10.75,0.25-34s-0.681-26.257-1-33.75C11.5,15,18.954,10,30,10c0,0,90,3,120,3s120-3,120-3c11.046,0,17.75,6.5,17,20c-0.402,7.239,0,6.75,0,30.5C287,83.5,287,84.75,287,95.25z">
								<svg width="100%" height="100%" viewBox="0 0 300 125" preserveAspectRatio="none">
									<path d="M290,95c0,11.046-8.954,20-20,20c0,0-90,0-120,0s-120,0-120,0c-11.046,0-20-9-20-20c0-8.715,0-25.875,0-34.5c0-7.625,0-22.774,0-30.5c0-11.625,8.954-20,20-20c0,0,90,0,120,0s120,0,120,0c11.046,0,20,8.954,20,20c0,7.25,0,22.875,0,30.5C290,69.125,290,84.5,290,95z"/>
								</svg>
							</span>
							<span class="button__text">Subscribe</span>
				        </button>
					</div>
				</div>
				</form>	
				<!-- Related demos -->
				
				</div>
				</div>
			</div><!-- /main -->
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
	
	</body>
</html>