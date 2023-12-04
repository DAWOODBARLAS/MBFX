<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
$site_name = 'MBFX';
$domain = 'mbfx.co';
function returnBody($postData){
    $body = '<html><body>';
    foreach ($postData as $key=> $value) {
        $key = str_replace('_', ' ', $key);
        $key = ucfirst($key);
        $body .= '<p style="color:#666;font-size:15px;"><strong>'.$key.'</strong> : '.$value.'</p>';
    }
    $body .= '</body></html>';
    return $body;
}
if(isset($_POST['email'])){
    $body = returnBody($_POST);
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'premium253.web-hosting.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = "mailer@mbfx.co";     // SMTP username
        $mail->Password = 'h*C*EasCPRc*';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('mailer@mbfx.co', "$domain Contact Form");
        // $mail->addAddress('aw708596@gmail.com');     // Add a recipient
        $mail->addAddress('abdullahsayyaf3@gmail.com');     // Add a recipient
        $mail->addAddress('partners@mbfx.co');     // Add a recipient
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'No Subject';
        $mail->Body    = $body;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        echo 'email_sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}