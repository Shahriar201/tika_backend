<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SMS;
use Nexmo;

class PhoneVerification extends Controller
{
    public function index(Request $request){
        $code = rand(0000,9999);

        $sms = new SMS();
        $sms->phone = $request->phone;
        $sms->verify_code = $code;
        $sms->save();

        $nexmo = app('Nexmo\Client');

        $nexmo->message()->send([
            'to'   => '+88' .$request->phone,
            'from' => 'OTP',
            'text' => 'Verify code: '.$code,
        ]);

        return response()->json($status);
    }
    
    public function phoneVerifyCode(Request $request){
        $check = SMS::where('verify_code', $request->verify_code)->first();

        if ($check) {
            $check->verify_code = '';
            $check->save();
            return response()->with('success');
        }else {
            return back()->with('Verification code is not correct');
        }
    }
}
