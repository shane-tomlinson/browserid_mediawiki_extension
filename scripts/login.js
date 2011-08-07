$(function() {
  $('#login').click(function(event) {
    event.preventDefault();

    navigator.id.getVerifiedEmail(function(assertion) {
      console.log("assertion: " + assertion);
    });
  });
});
