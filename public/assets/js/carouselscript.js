	$('.carousel').carousel({
	  interval: 5000,
   	  pause: "false"
	})

// Swipe js

$(document).ready(function(){
  
    $(".carousel").carousel({
      //ปิดการเล่น auto
      interval: 5000,
      pause: true
    });
    
    $( ".carousel .carousel-inner" ).swipe( {
      swipeLeft: function ( event, direction, distance, duration, fingerCount ) {
        this.parent( ).carousel( 'next' );
      },
      swipeRight: function ( ) {
        this.parent( ).carousel( 'prev' );
      },
      threshold: 0,
      //เอา  a ออกถ้าต้องการให้ slide ที่เป็น tag a สามารถคลิกได้
      excludedElements:"label, button, input, select, textarea, .noSwipe"
    } );
    
    
  });





