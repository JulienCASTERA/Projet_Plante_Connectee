jQuery(function($){
  function readyFn( jQuery ) {
    $(".preloader").fadeOut("slow");
  }

$( window ).on("load", readyFn );
 });