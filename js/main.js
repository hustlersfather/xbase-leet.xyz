// Datatable 
$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );

// Generate a random captcha code
function generateCaptcha() {
  var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  var captchaCode = '';
  for (var i = 0; i < 6; i++) {
    captchaCode += characters.charAt(Math.floor(Math.random() * characters.length));
  }
  return captchaCode;
}

// Display the captcha code in an image
function displayCaptcha() {
  var captchaCode = generateCaptcha();
  var canvas = document.getElementById('captchaCanvas');
  var context = canvas.getContext('2d');
  context.font = '20px Arial';
  context.strokeText(captchaCode, 10, 25);
}
