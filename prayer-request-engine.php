<?php

$EmailFrom = "soundanalarm.com";

// CHANGE THE NEXT LINE UPON LAUNCH!!!
$EmailTo  = 'hello@soundanalarm.com' . ', '; // note the comma
$EmailTo .= 'soundanalarm@comcast.net' . ', ';
$EmailTo .= 'stacigh@gmail.com';
// CHANGE THE ABOVE LINE UPON LAUNCH!!!

$Subject = "Prayer request from Sound An Alarm visitor";
$Name = Trim(stripslashes($_POST['prayer-request-name']));
$Email = Trim(stripslashes($_POST['prayer-request-email'])); 
$Request = Trim(stripslashes($_POST['prayer-request-request'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.soundanalarm.com/error-submitting-prayer-request/\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Request: ";
$Body .= $Request;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.soundanalarm.com/request-received/\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.soundanalarm.com/error-submitting-prayer-request/\">";
}
?>