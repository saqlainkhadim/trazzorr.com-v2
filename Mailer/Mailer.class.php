<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//require("class.phpmailer.php");
require 'vendor/autoload.php';

class Mailer
{


    function sendMail($details)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'mail.treezzor.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'amitsingh909192@treezzor.com';                     //SMTP username
            $mail->Password   = 'a2)b$r1Uq(+6';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            $mail->setFrom('amitsingh909192@gmail.com');
            $mail->FromName = $details["fromName"];
            $to = $details["to"];
            // $to ='saqlainkhadimbusiness@gmail.com'; //for test
            $cc = $details["cc"];
            //$bcc = $details["bcc"];
            $subject = $details["subject"];
            $message = $details["message"];
            $toArr = explode(",",$to);
            for($i=0;$i<count($toArr);$i++)
            {
                $mail->AddAddress($toArr[$i]);
            }
            if($cc!="")
            {
                $ccArr = explode(",",$cc);
                for($i=0;$i<count($ccArr);$i++)
                {
                    $mail->AddCC($ccArr[$i]);
                }
            }
            $mail->IsHTML(true);

            $mail->Subject = $subject;
            $mail->Body = stripslashes($message);

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}