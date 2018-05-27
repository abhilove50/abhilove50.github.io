<!-- <?php -->
// if(isset($_POST['email'])) {
//
//     // CHANGE THE TWO LINES BELOW
//     $email_to = "akkumarabhi2@gmail.com";
//
//     $email_subject = "Contact Page";
//

    // function died($error) {
    //     // your error code can go here
    //     echo "We are very sorry, but there were error(s) found with the form you submitted.";
    //     echo "These errors appear below.<br /><br />";
    //     echo $error."<br /><br />";
    //     echo "Please go back and fix these errors.<br /><br />";
    //     die();
    // }

    // validation expected data exists
    // if(!isset($_POST['name']) ||
    //     !isset($_POST['email']) ||
    //     !isset($_POST['subject']) ||
    //     !isset($_POST['message'])) {
    //     died('We are sorry, but there appears to be a problem with the form you submitted.');
    // }
  //
  //   $name = $_POST['name']; // required
  //   $email_from = $_POST['email']; // required
  //   $subject = $_POST['subject']; // not required
  //   $message = $_POST['message']; // required
  //
  //   $error_message = "";
  //   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  // if(!preg_match($email_exp,$email_from)) {
  //   $error_message .= 'Email Address not valid.<br />';
  // }
  //   $string_exp = "/^[A-Za-z .'-]+$/";
  // if(!preg_match($string_exp,$name)) {
  //   $error_message .= 'Name is not valid.<br />';
  // }
  //
  // if(strlen($message) < 2) {
  //   $error_message .= 'We are sorry, we can"'"t understand that!<br />';
  // }
  // if(strlen($error_message) > 0) {
  //   died($error_message);
  // }
  //   $email_message = "Form details below.\n\n";
  //
  //   function clean_string($string) {
  //     $bad = array("content-type","bcc:","to:","cc:","href");
  //     return str_replace($bad,"",$string);
  //   }
  //
  //   $email_message .= "Name: ".clean_string($name)."\n";
  //   $email_message .= "Email: ".clean_string($email_from)."\n";
  //   $email_message .= "Subject: ".clean_string($subject)."\n";
  //   $email_message .= "Message: ".clean_string($message)."\n";


// create email headers
// $headers = 'From: '.$email_from."\r\n".
// 'Reply-To: '.$email_from."\r\n" .
// 'X-Mailer: PHP/' . phpversion();
// mail($email_to, $email_subject, $email_message, $headers);
// ?>


echo "Thank you for contacting us. We will be in touch with you very soon.";


<?php $name = $_POST['name'];
$email = $_POST['email'];
$email = $_POST['subject'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "akkumarabhi2.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error Please check values!");
echo "Thank You!";
?>
