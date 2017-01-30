$(document).ready(function() {
$("#submit").click(function() {
var fname = $("#first_name").val();
var lname = $("#last_name").val();
var country = $("#country").val();
var reason = $("#reason").val();
var bname = $("#bname").val();
var email = $("#email").val();
var message = $("#message").val();
$("#returnmessage").empty(); // To empty previous error/success message.
// Checking for blank fields.
if (fname == '' || lname == '' || reason == '' || bname == '' || email == '' || message == '') {
alert("Please Fill Required Fields");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("./contact.php", {
fname1: fname,
lname1: lname,
country1: country,
reason1: reason,
bname1: bname,
email1: email,
message1: message,
}, function(data) {
$("#returnmessage").append(data); // Append returned message to message paragraph.
if (data == "Your information has been received, We will contact you soon.") {
$("#contact")[0].reset(); // To reset form fields on success.
}
});
}
});
});