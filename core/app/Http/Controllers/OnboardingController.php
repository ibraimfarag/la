<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class OnboardingController extends Controller
{
    public function index_en()
    {

        $onbording = DB::select('select * FROM   tatmeen_products    WHERE section="onbording" ');
    $lang = 'en';
    return view('onboarding',[ 'lang'=>$lang,'onbording'=>$onbording, compact('lang')]);


    }
    public function index_ar()
    {
        $onbording = DB::select('select * FROM   tatmeen_products   WHERE section="onbording" ');

    $lang = 'ar';
    return view('onboarding',[ 'lang'=>$lang, 'onbording'=>$onbording,compact('lang')]);
    }
}
