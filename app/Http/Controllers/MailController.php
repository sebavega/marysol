<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function home()
    {
        return view('contact');
    }

    public function send(){
        $data['url'] = $_POST['url'];
        $data['email'] = $_POST['email'];
        $data['subject'] = $_POST['subject'];
        $data['phone'] = $_POST['phone'];
        $data['message'] = $_POST['message'];
        $mail = new Mail;
        $mail->new($data);
    }

    public function delete(){
        $data = $_GET['id'];
        $mail = new Mail;
        $mail->delete($data);
    }
}