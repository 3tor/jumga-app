<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use App\Models\Merchant;
use App\Models\User;
use App\Models\Role;
use App\Mail\MerchantWelcomeMail;
use Mail;

class MerchantService
{
    public function registerMerchant(array $data) : bool {
        //create merchant
        //create merchant as user
        //send payment link to merchant via email
        //if payment is successful send email to merchant of success and ability to login and setup shop
        // $new_merchant = Merchant::create([
        //     'business_name' => $data['business_name'],
        //     'business_phone' => $data['business_phone'],
        //     'business_email' => $data['business_email'],
        //     'country' => $data['country']
        // ]);

        // $new_user = User::create([
        //     'name' => $data['business_name'],
        //     'email' => $data['business_email'],  
        //     'password' => Hash::make($data['password']),
        //     'phone' => $data['business_phone'],
        //     'role_id' => Role::MERCHANT
        // ]);

        // $new_merchant->users()->attach($new_user->id);

        $details = [
            'url' => 'http://jumga-app.test/merchant/setup/payment'
        ];

        // Mail::to($new_user->email)->send(new MerchantWelcomeMail($details));
        Mail::to('kudoloetornam@gmail.com')->send(new MerchantWelcomeMail($details));

        return true;
    }   
}
