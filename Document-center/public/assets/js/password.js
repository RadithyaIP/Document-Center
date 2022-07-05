$(document).ready(function(){
    $('#password-addon').on('click', function(event) {
      event.preventDefault();
      if ($('#password').attr("type") == "text") {
        $('#password').attr('type', 'password');
        $('#password-addon').html('Show');
      } else if ($('#password').attr("type") == "password") {
        $('#password').attr('type', 'text');
        $('#password-addon').html('Hide');
      }
    })
    $('#submit').on('click', function() {
      $(this).html('submitted..');
    })
  })