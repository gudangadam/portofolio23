<?php

use Illuminate\Support\Facades\Mail;

//sonstanta
public function constanta ($consName) {
    $constanta = [
        'email-alert'       => env('EMAIL_USERNAME')
    ];

    return $constanta[$consName];
}

//transactional email // using mandrill
public function sendEmail($data, $content)
{
    Mail::send($content, $data, function ($message) use ($data) {
        $message ->to($data['toEmail'], $data['toName'])->subject($data['subject']);

        if (isset($data['attachment'])) {
            $message->attachData($data['attachment']['file'], $data['attachment']['name']);
        };
    });
}


?>