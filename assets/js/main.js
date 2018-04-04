var pageScroll = function( element, event ){

    var hash = element.hash;
    var home = 71;

    if( !jQuery( "[rel='scroll-page']" ).length || !hash ){
        return false;
    }

    event.preventDefault();

    var top = jQuery(hash).offset().top - home;

    jQuery('html, body').animate({
      scrollTop: top
    }, 800, function(){

        if ( history.pushState ) {
        history.pushState(null, null, hash);
      } else {
        location.hash = hash;
      }

    })
};

var changeClassLinkMenu = function( element ){

  element.addClass("active")
  .parents("li").siblings()
  .children("a").removeClass("active");

};

jQuery(function(){

//   var menu = jQuery("#menu-principal .navigation li");
//   var hash = location.hash;

//   if( hash ){

//     pageScroll( location, event );
//     changeClassLinkMenu(   menu.children("a[href$='"+hash+"']") );

//   } else {

//     var basename = location.pathname.replace(/\b\//g,"");
//     changeClassLinkMenu( menu.children("a[href*='"+basename+"']") );

//   }

//   menu.children('a').on('click', function(event) {

//     if ( this.hash ) {
//       pageScroll( this, event );
//       changeClassLinkMenu( jQuery(this) );
//     }

//   });

});
