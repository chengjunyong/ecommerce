


$(document).ready(function(){

  var dropdown_timeout;

  $(".icon_dropdown, .icon_dropdown ul").on('mouseenter', function(){
    $(".icon_dropdown ul").addClass("active");
    clearTimeout(dropdown_timeout);
  }).on('mouseleave', function(){
    dropdown_timeout = setTimeout(function(){ $(".icon_dropdown ul").removeClass("active"); }, 500);
  });

  $(".icheck").iCheck({
    checkboxClass: 'icheckbox_square-blue',
    radioClass: 'iradio_square-blue',
    increaseArea: '20%' /* optional */
  });

});

function toastBox(class_name, title, body)
{
  var toast_html = "";
  var unique_id = new Date().valueOf();
  toast_html += '<div class="toast '+class_name+'" role="alert" aria-live="assertive" aria-atomic="true" data-delay="1500" toast_id="'+unique_id+'">';
  toast_html += '<div class="toast-header">';
  toast_html += '<strong class="mr-auto">'+title+'</strong>';
  toast_html += '<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">';
  toast_html += '<span aria-hidden="true">&times;</span>';
  toast_html += '</button>';
  toast_html += '</div>';
  toast_html += '<div class="toast-body">';
  toast_html += body;
  toast_html += '</div>';
  toast_html += '</div>';

  $("#toastBox").append(toast_html);
  $(".toast[toast_id="+unique_id+"]").toast('show').delay(1500).queue(function(removeToast){
    $(".toast[toast_id="+unique_id+"]").fadeOut();
    removeToast();
  });
}

