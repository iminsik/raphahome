 <? 
// Change the $to_email to your email address, make sure it is in quotes with a ; at the end of the line.
$to_email = "2.two4seven.7@gmail.com";

$email = $_POST[email];
$return_email = $_POST[email];
		
$to = "$to_email";

// Change the $subject to whatever you like the email subject line to be, again keep it within quotes and end with ; 
$subject = "Form Submitted from IAD";

// $message between the quotes is where the contents of the form is shown on the email.  
// If you changed field names on the input form, or added/deleted field, this is where you will need to change them here in the program.
//  Keep the $_POST[  ] - the name from the form field would go in the brackets.   
$message = "
Name: $_POST[name]
Email Address: $_POST[email]
Messages: $_POST[messages]
Orders: $_POST[orders]
Questions: $_POST[questions]
Suggestions: $_POST[suggestions]
"; 

//mail headers 
$headers = "MIME-Version: 1.0\n"; 
$headers .= "Content-type: text/plain; charset=iso-8859-1\n"; 
$headers .= "X-Priority: 3\n"; 
$headers .= "X-MSMail-Priority: Normal\n"; 
$headers .= "X-Mailer: php\n"; 
$headers .= "From: \"IAD Form Lesson - Web 1\" <$return_email>\n"; 
$headers .= "Return-Path: $return_email\n"; 
//$headers .= "Return-Receipt-To: $return_email\n"; 

mail($to,$subject,$message,$headers);

// The following 2 lines will return the program back to the given web page.  It is currently going back to the input form, if you want it to go back to your home page...change the form.html to the page you want to return to.  

header("Location: thanks.html");
exit;
		 
?>		 
