$(function() {
  $('#login').click(function(event) {
    event.preventDefault();

    navigator.id.getVerifiedEmail(function(assertion) {
      if(assertion) {
        sajax_do_call('verifyAssertion', [assertion], function(xhr) {
          var info = JSON.parse(xhr.responseText);
          console.log("response: " + info.email);
        });
      }
    });
  });
});
