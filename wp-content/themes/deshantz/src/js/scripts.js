(function( root, $, undefined ) {
	"use strict";

  var $win = $(window);

	$(function () {
		resizeHeader();
    initInstafeed();
	});

  $win.on("resize", function () {      
    clearTimeout($win.resizedFinished);
    $win.resizedFinished = setTimeout(function(){
       resizeHeader();
    }, 250);
  });

  function resizeHeader() {
    $(".header").css("height", $win.height());
  }

  function initInstafeed() {
    var feed = new Instafeed({
      get: "user",
      clientId: "a0660f0c72874245ac45bb6974520a07",
      userId: 1463755023,
      accessToken: "566414879.467ede5.249c4e8f2db140d897deab5c0e2a2b6b",
      limit: 3,
      sortBy: "most-recent",
      resolution: "low_resolution",
      template: '<a href="{{link}}" target="_blank" class="instagram-tile" style="background-image: url({{image}})"><div class="instagram-overlay"><span><i class="fa fa-heart"></i> {{likes}}</span></div>'
    });
    feed.run();
  }  


} ( this, jQuery ));