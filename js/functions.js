$( document ).ready(function() {

	$("#promo-modal-close").click(function(){
	  $( "#promo-wrapper" ).hide();
	});

	$("#before-after").hide();
	$("#weight-section-stats").hide();
	$("#measurement").hide();

	$("#top-user-section").click(function(){
		event.preventDefault();
	  $( "#before-after" ).slideToggle();
	});

	$("#weight-section").click(function(){
		event.preventDefault();
	  $( "#weight-section-stats" ).slideToggle();
	});

	$("#measurement-section").click(function(){
		event.preventDefault();
	  $( "#measurement" ).slideToggle();
	});



  // plyr.setup();

  // $(".video-thumb").click(function() {
  //     event.preventDefault();
  //     // alert ("Cliked");
  //     $('.video').hide();
  //     // $('.plyr').hide();
  //     $('#' + $(this).data('rel')).fadeIn('slow');
  // });

});
