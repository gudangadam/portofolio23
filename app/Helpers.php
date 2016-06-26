<?php

use Illuminate\Support\Facades\Mail;

use App\Setting;
use App\Month;
use App\Activity;
use App\Continent;
use App\Visitor;
use App\Country;
use App\Region;
use App\City;
use App\Tour;
use App\User;
use App\Currency;
use App\PriceSetup;
use App\Package;
use App\ContactBooking;
use App\Transaction;
use App\TourTransaction;
use App\TransactionLog;
use App\Collection;
use App\Destination;
use App\VoucherRedeem;
use App\Voucher;
use App\Subscriber;
use App\Product;
use Barryvdh\DomPDF\Facade as PDF;

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