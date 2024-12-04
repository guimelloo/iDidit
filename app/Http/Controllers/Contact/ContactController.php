<?php

namespace App\Http\Controllers\Contact;

use App\Models\Email;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class ContactController
{
    public function __construct(private Email $eloquent)
    {}  

    // public function index()
    // {
    //     return $this->eloquent->newQuery()->get();
    // }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'message' => 'nullable|string'
        ]);
        
        $this->eloquent->newQuery()->create($data);

        $this->send($data['email'], $data['message'],$data['name']);

    }

    private function send(string $reciver, string $content, string $name)
    {
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  
        $mail->SMTPAuth = true;
        $mail->Username = 'negromonteguilherme@gmail.com';  
        $mail->Password = 'ytpoqeasucxvvjrp';    
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('negromonteguilherme@gmail.com', 'guilherme');
        $mail->addAddress($reciver, $name);

        $mail->isHTML(false);

        $mail->Subject = '';

        $mail->Body = $content;
        
        $mail->send();

        return view('/');
    }
}