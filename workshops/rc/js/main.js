/**
 * main.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */
(function() {

    var bodyEl = document.body,
        content = document.querySelector( '.content-wrap' ),
        openbtn = document.getElementById( 'open-button' ),
        closebtn = document.getElementById( 'close-button' ),
        isOpen = false;

    function init() {
        initEvents();
    }

    function initEvents() {
        //if(openbtn){//abhi add
        openbtn.addEventListener( 'click', toggleMenu );
    //}//abhi add
        if( closebtn ) {
            closebtn.addEventListener( 'click', toggleMenu );
        }

        // close the menu element if the target it´s not the menu element or one of its descendants..
        if(content){//add by abhi
        content.addEventListener( 'click', function(ev) {
            var target = ev.target;
            if( isOpen && target !== openbtn ) {
                toggleMenu();
            }
        } );
    }//add by abhi
    }

    function toggleMenu() {
        if( isOpen ) {
            classie.remove( bodyEl, 'show-menu' );
        }
        else {
            classie.add( bodyEl, 'show-menu' );
        }
        isOpen = !isOpen;
    }

    init();

})();