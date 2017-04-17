<?php

$to      = "efrenvasquez@u.boisestate.edu";
$subject = "New Contact Form Submission";
$message = trim(stripslashes($_POST['Message']));
$from    = trim(stripslashes($_POST['Email']));
$firstname    = trim(stripslashes($_POST['First-Name']));
$lastname    = trim(stripslashes($_POST['Last-Name']));
$phone   = trim(stripslashes($_POST['Phone']));


$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

$body = "";
$body .= "First-Name: ";
$body .= $firstname;
$body .= "\n";
$body = "";
$body .= "Last-Name: ";
$body .= $lastname;
$body .= "\n";
$body .= "Email: ";
$body .= $from;
$body .= "\n";
$body .= "Phone: ";
$body .= $phone;
$body .= "\n";
$body .= "Message: ";
$body .= $message;
$body .= "\n";

$success = mail($to, $subject, $body, "From: <$from>");

if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thank-you.php\">";
} else {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
