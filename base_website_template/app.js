jQuery(function($){
  $(window).load(function() {
    $(".preloader").fadeOut("slow");
  });
});

$("#choose-contact").click(function() {
  console.log("Valeure de inputGroupSelect : ", $("#inputGroupSelect").val());
  if ($("#inputGroupSelect").val() == 1) {
    $("#mail").slideDown();
    $("#msg").slideUp();
    $("#appel").slideUp();
  }else if ($("#inputGroupSelect").val() == 2) {
    $("#mail").slideUp();
    $("#msg").slideDown();
    $("#appel").slideUp();
  }else if ($("#inputGroupSelect").val() == 3) {
    $("#mail").slideUp();
    $("#msg").slideUp();
    $("#appel").slideDown();
  } else {
    console.log("No option choosed");
  }
});