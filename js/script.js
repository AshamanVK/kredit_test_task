jQuery(document).ready(function($) {

  $.extend($.validator.messages, {
    required: "Необходимо заполнить",
  });

  $("#add_call").validate({
    debug: true,
    submitHandler: function(form) {

      var theme = $("#theme").val();
      var message = $("#message").val();
      var data = 'theme='+ theme + '&message='+ message;

      $.ajax({
        data: data,
        type: "POST",
        url: "includes/post_data.php",
        success: function(result){
          // alert("Data Save: " + data);
        }
      }).done(function () {
          $("#theme").val("");
          $("#message").val("");
          $("#add_call_modal .close").trigger('click');
          $("#tickets").load("includes/get_data.php")
      });
   
    }
  });

});