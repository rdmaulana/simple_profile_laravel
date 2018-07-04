<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Home extends Controller
{
    function showHome() {
        return view('index');
    }

    function sendMail(Request $request){

        $subject = "Pesan dari " . $request->input('name');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = 'anepcgame@gmail.com';
            $mail->Password = 'maulanaraden@yahoo.co.id';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            //sender
            $mail->setFrom("anepcgame@gmail.com","BOT radenmau.ga");

            //receiver
            $mail->addAddress("rdmaulana01@gmail.com", "Raden Maulana");

            //who receive by reply
            $mail->addReplyTo($emailAddress, $name);

            //content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->AltBody = $message;

            $mail->send();

            $request->session()->flash('status', 'Thank you for your message, it will be processed quickly');

            return view('index');
        } catch(Exception $e){
            echo 'Message could be not send';
            echo 'Mailer error :' . $mail->ErrorInfo;
        }
    }
}
