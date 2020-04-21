
$(document).ready(function(){

  var dropdown_timeout;

  $(".icon_dropdown, .icon_dropdown ul").on('mouseenter', function(){
    $(".icon_dropdown ul").addClass("active");
    clearTimeout(dropdown_timeout);
  }).on('mouseleave', function(){
    dropdown_timeout = setTimeout(function(){ $(".icon_dropdown ul").removeClass("active"); }, 500);
  });

});


