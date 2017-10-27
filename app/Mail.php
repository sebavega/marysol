<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mail;

class Mail extends Model
{
    protected $table = 'mails';
    public $timestamps = false;

    public function new($request)
    {
        $mail = new Mail;
        $mail->url = $request->url;
        $mail->email = $request->email;
        $mail->subject = $request->subject;
        $mail->phone = $request->phone;
        $mail->message = $request->message;
        $mail->save();
    }

    public function find(Request $request)
    {
        $mail = App\Mail::find($request->id);
        return $mail;
    }

    public function getAll()
    {
        $mail = App\Mail::all();
    }

    public function delete($request)
    {
        $mail = App\Mail::find($request);   
        $mail->delete();
    }

}
