<?php

require_once "Mail.php";

// This function checks for email injection. Specifically, it checks for carriage returns - typically used by spammers to inject a CC list.
function isInjected($str) {
    $injections = array('(\n+)',
        '(\r+)',
        '(\t+)',
        '(%0A+)',
        '(%0D+)',
        '(%08+)',
        '(%09+)'
    );

    $inject = join('|', $injections);
        $inject = "/$inject/i";

    if(preg_match($inject,$str)) {
        return true;
    }
    else {
        return false;
    }
}

$referer = $_SERVER['HTTP_REFERER'];

 // If the user tries to access this script directly, redirect them to feedback form
 if (!isset($_POST['email'])) {
    echo("<p>Please fill email address</p>");
    header("Location: $referer");
 }

// Load form field data into variables.
$sender = '<' . $_POST['email'] . '>';
$to = '<contato@audiopeia.com.br>';
$body = $_POST['message'];

if(isset($_POST['subject'])) {
    $subject = 'Audiopeia\'s contact - ' . $_POST['subject'];
} else {
    $subject = $_POST['name'] . '-' . $_POST['phone'] . '-' . $_POST['link'];

}

// If email injection is detected, redirect to the error page.
if (isInjected($sender)) {
    return;
}

$headers = array(
    'From' => '<usuario@audiopeia.com.br>',
    'To' => $to,
    'Subject' => $subject,
    'Reply-to' => $sender
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'usuario@audiopeia.com.br',
        'password' => 'User@Audio13'
    ));

//$sendmail = Mail::factory('sendmail', array());

$mail = $smtp->send($to, $headers, $body);
//$mail = $sendmail->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
}
//else {
//    echo('<p>Message successfully sent!</p>');
//}

//$headers = "From: $email \r\n";
//if(mail("contato@audiopeia.com.br", "Audiopeia's Contact form", $body, $headers)){
//    echo("<p>Email successfully sent!</p>");
//} else {
//    echo("<p>Email delivery failed $strerr</p>");
//}

header("Location: $referer");
?>
