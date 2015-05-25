(function( root, $, undefined ) {
	"use strict";

  var $win = $(window);

  $(function () {
    resizeHeader();
    initInstafeed();
    scrollFade($(".intro"), 0.5, 0);
    checkHash();
    //initIsotope();

    $('.js-accolades').on('click', function(e){ 
      $(this).parents('.box-restaurant-big').toggleClass('flip'); 
      var text = $(this).find('span').text();
      $(this).find('span').text( text === 'Show' ? 'Hide' : 'Show');
      e.preventDefault();  
    }); 

    $win.on("resize", function () {      
      clearTimeout($win.resizedFinished);
      $win.resizedFinished = setTimeout(function(){
       resizeHeader();
     }, 250);
    });

    $('.share-links a').on('click', function(e){
        var share_url = $(this).data('url');
        var vendor = $(this).data('vendor');
        var width = 500;
        var height = 400;
        var leftPosition, topPosition, url;


        if(vendor === 'fb') {
          url = 'https://www.facebook.com/sharer/sharer.php?u='+ encodeURI(share_url) +'"';
        }
        else if(vendor === 'tw') {
         url = 'http://www.twitter.com/share?url='+ encodeURI(share_url);
        }
        else if(vendor === 'gl') {
          url = 'https://plus.google.com/share?url='+ encodeURI(share_url);
        }
       
        //Allow for borders.
        leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
        //Allow for title and status bars.
        topPosition = (window.screen.height / 2) - ((height / 2) + 50);
        window.open(url, "share_window", "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no");

        e.preventDefault();
    });
  
  });




  function checkHash() {
    if(window.location.hash) {
      var hash = window.location.hash.slice(1);
      var target = $('#' + hash);

      if(target.length > 0) {
         $('html,body').animate({
          scrollTop: target.offset().top - 25
        }, 1500);
      }
    }
  }

  function resizeHeader() {
    $(".header").css("height", $win.height());
  }

  function initInstafeed() {
    if($('#instafeed').length > 0) {
      var feed = new Instafeed({
        get: "user",
        clientId: "a0660f0c72874245ac45bb6974520a07",
        userId: 1463755023,
        accessToken: "566414879.467ede5.249c4e8f2db140d897deab5c0e2a2b6b",
        limit: 3,
        sortBy: "most-recent",
        resolution: "low_resolution",
        template: '<a href="{{link}}" title="View on Instagram" target="_blank" class="instagram-tile" style="background-image: url({{image}})"><div class="instagram-overlay"><span><i class="fa fa-heart"></i> {{likes}}</span></div>'
      });
      feed.run();
    }
  }  


  function scrollFade($element, friction, offset) {

    var parentHeight = $element.parent().outerHeight() * 0.5;
    var previousOpacity = Infinity;

    $win.scroll(function() {
      var scrollTop = Math.max(0, $win.scrollTop())
      , yOffset   = ($element.outerHeight() * -0.5) + scrollTop * friction
      , opacity   = 1 - (scrollTop / parentHeight - (parentHeight * offset));

      if (opacity < 0 && previousOpacity < 0) { return; }

      $element.css({
        transform: 'translate3d(0px,'+ yOffset +'px, 0)',
        opacity: opacity
      });


      previousOpacity = opacity;
    });
  }



} ( this, jQuery ));