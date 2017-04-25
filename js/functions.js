$( document ).ready(function() {

	$("#promo-modal-close").click(function(){
	  $( "#promo-wrapper" ).hide();
	});

  plyr.setup();

  // $(".video-thumb").click(function() {
  //     event.preventDefault();
  //     // alert ("Cliked");
  //     $('.video').hide();
  //     // $('.plyr').hide();
  //     $('#' + $(this).data('rel')).fadeIn('slow');
  // });

});