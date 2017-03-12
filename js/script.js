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
          // alert("asdasd");
          // Here I want to get the how long it took to load some.php and use it further
      });
   
    }
  });

});