

// onload responsive footer and menu stuff
jQuery(document).ready(function($){

	// select some things we'll use to make things responsive
	var menu = $( 'header nav' ),
		menu_toggle = menu.find( 'button.menu-toggle' ),
		menu_ul = menu.find( '.nav-menu' ),
		fluid_images = $( '.content img' );


	// remove height and width from images inside
	fluid_images.removeAttr( 'width' ).removeAttr( 'height' );

	// auto-resize videos
	$(".content-wide").fitVids();

	// show/hide menus when they click the toggler
	menu_toggle.click(function(){

		if ( menu_ul.is( ':visible' ) ) {
			menu_ul.hide();
		} else {
			menu_ul.show();
		}

		// when user clicks a link, open submenu if it exists.
		menu_ul.find( 'a' ).click(function(){
			var parent_li = $( this ).parent( 'li' );
			var submenu = $( this ).next( 'ul' );
			if ( !submenu.is( ':visible' ) && parent_li.hasClass( 'menu-item-has-children' ) ) {
				event.preventDefault();
				parent_li.addClass( 'open' );
				submenu.show();
			}
		});

	});

	// 
	$( '.accordion-box-title' ).click(function(){
		$( this ).parent( '.accordion-box' ).children( '.accordion-box-content' ).slideToggle( 600 );
	});

	$( 'button[data-url]' ).click(function(){
		window.location.href = $( this ).attr( 'data-url' );
	});

	$( 'body a:not(.previous):not(.next):not(.lightbox-iframe)' ).click(function( e ){
		
		// break the normal linking behavior
		e.preventDefault();

		// get the link
		var the_link = $( this );
		var the_link_href = the_link.attr( 'href' );

		// prompt the user and if they confirm the prompt, proceed to the third party site.
		if ( the_link.hasClass( 'bypass' ) ||
			the_link_href.match( /educa.jpederson.io/i ) || 
			the_link_href.match( /educacu.com/i ) || 
			the_link_href.match( /educacu.giraph.io/i ) || 
			the_link_href.match( /shareteccu.com/i ) || 
			the_link_href.match( /billpaysite.com/i ) || 
			the_link_href.match( /gbs.onlinecu.com/i ) || 
			the_link_href.match( /itsme247.com/i ) || 
			the_link_href.charAt(0) === '#' || 
			the_link_href.charAt(0) === '/' ) {
			location.href = the_link_href;
		} else {
			if ( confirm( "You are leaving our website and linking to an alternate website not operated by us (see below). Educational Community Alliance Credit Union does not endorse or guarantee the products, information, or recommendations provided by third-party vendors or third-party linked sites.\n\n"+the_link_href ) ) {
				window.open( the_link_href, "_blank" ); 
			}
		}

	});

	$( '.lightbox-iframe' ).magnificPopup({ 'type': 'iframe' });

	$( '.home-content' ).fitVids();
	
});


