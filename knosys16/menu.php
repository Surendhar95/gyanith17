<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="menu/css/common.css">
  <style>
    #showcase {
      height: 315px;
       }
    #item-title {
      color: #F31414;
      font-size: 29px;
      letter-spacing: 0.13em;
      text-shadow: 1px 1px 6px #C72B2B;
      text-align: center;
      margin-top: 30px;
      margin-bottom: 22px;
    }
  </style>
</head>
  <!-- GitHub ribbon: http://codepo8.github.io/css-fork-on-github-ribbon/ -->
  <style>

  #forkongithub a{background:#dd0d0d;color:#fff;text-decoration:none;font-family:arial,sans-serif;text-align:center;font-weight:bold;padding:5px 40px;font-size:1rem;line-height:2rem;position:relative;transition:0.5s;}#forkongithub a:hover{background:rgba(0,0,0,0.8);color:#ddd;}#forkongithub a::before,#forkongithub a::after{content:"";width:100%;display:block;position:absolute;top:1px;left:0;height:1px;background:#fff;}#forkongithub a::after{bottom:1px;top:auto;}@media screen and (min-width:800px){#forkongithub{position:absolute;display:block;top:0;right:0;width:200px;overflow:hidden;height:200px;z-index:9999;}#forkongithub a{width:200px;position:absolute;top:60px;right:-60px;transform:rotate(45deg);-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);box-shadow:4px 4px 10px rgba(0,0,0,0.8);}}</style>


  <div class="wrap">
    <div id="showcase" class="noselect">
      <img class="cloud9-item" src="menu/images/browsers/firefox.png" alt="Firefox">
      <img class="cloud9-item" src="menu/images/browsers/wyzo.png" alt="Wyzo">
      <img class="cloud9-item" src="menu/images/browsers/opera.png" alt="Opera">
      <img class="cloud9-item" src="menu/images/browsers/chrome.png" alt="Chrome">
      <img class="cloud9-item" src="menu/images/browsers/iexplore.png" alt="Internet Explorer">
      <img class="cloud9-item" src="menu/images/browsers/safari.png" alt="Safari">
    </div>
  </div>



 
  <script src="menu/js/lib/jquery.reflection.js"></script>
  <script src="menu/js/lib/jquery.cloud9carousel.js"></script>
  <script>
    $(function() {
      var showcase = $("#showcase"), title = $('#item-title')

      showcase.Cloud9Carousel( {
        yOrigin: 42,
        yRadius: 48,
        mirror: {
          gap: 12,
          height: 0.2
        },
        buttonLeft: $("#nav > .left"),
        buttonRight: $("#nav > .right"),
        autoPlay: 1,
        bringToFront: true,
        onRendered: rendered,
        onLoaded: function() {
          showcase.css( 'visibility', 'visible' )
          showcase.css( 'display', 'none' )
          showcase.fadeIn( 1500 )
        }
      } )

      function rendered( carousel ) {
        title.text( carousel.nearestItem().element.alt )

        // Fade in based on proximity of the item
        var c = Math.cos((carousel.floatIndex() % 1) * 2 * Math.PI)
        title.css('opacity', 0.5 + (0.5 * c))
      }

      //
      // Simulate physical button click effect
      //
      $('#nav > button').click( function( e ) {
        var b = $(e.target).addClass( 'down' )
        setTimeout( function() { b.removeClass( 'down' ) }, 80 )
      } )

      $(document).keydown( function( e ) {
        //
        // More codes: http://www.javascripter.net/faq/keycodes.htm
        //
        switch( e.keyCode ) {
          /* left arrow */
          case 37:
            $('#nav > .left').click()
            break

          /* right arrow */
          case 39:
            $('#nav > .right').click()
        }
      } )
    })
  </script>
  <script src="js/social.js" async></script>

