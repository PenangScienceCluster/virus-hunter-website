<?php

namespace App\Libraries;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MailService
{
    public function send($to = null, $subject = null, $content = null)
    {
        $mail = new PHPMailer(true);
        try {
            $mailConfig = config('Email');

            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

            $mail->isSMTP();
            $mail->Host       = $mailConfig->SMTPHost;
            $mail->SMTPAuth   = true;
            $mail->Username   = $mailConfig->SMTPUser;
            $mail->Password   = $mailConfig->SMTPPass;
            $mail->SMTPSecure = $mailConfig->SMTPCrypto;
            $mail->Port       = $mailConfig->SMTPPort;

            $mail->setFrom($mailConfig->fromEmail, $mailConfig->fromName);
            $mail->addReplyTo($mailConfig->fromEmail, $mailConfig->fromName);
            $mail->addAddress($to);

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $content;

            $mail->send();

            // var_dump($send);
            
            return array('status'=>true);
        } catch (Exception $e) {
            return array('status'=>false,'message'=>$mail->ErrorInfo);
        }
    }
}