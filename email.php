<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["pname"]==""||$_POST["pemail"]==""||$_POST["psubject"]==""||$_POST["pmessage"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['pemail'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$name = $_POST['pname'];    
$subject = $_POST['psubject'];
$message = $_POST['pmessage'];
$header = 'From:'. $email; // Sender's Email
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("contact@cyberworldtechnologies.in", $subject, $message, $header);
echo "<h2>Your mail has been sent successfuly ! Thank you for your feedback</h2>";
echo '<meta http-equiv="refresh" content="2;url=http://cyberworldtechnologies.in/Contact">';
}
}
}
?>