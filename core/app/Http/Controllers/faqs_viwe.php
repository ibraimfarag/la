<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\faq;
use DB;
class faqs_viwe extends Controller
{
    public function index_en()
    {


        $f = DB::select('select * FROM tatmeen_faqs ');





    $lang = 'en';

    return view('faqs',['lang'=>$lang,'f'=>$f,compact('lang')]);

    }
    public function index_ar()
    {


        $f = DB::select('select * FROM tatmeen_faqs ');

    $lang = 'ar';

    return view('faqs',['lang'=>$lang,'f'=>$f,compact('lang')]);

    }
}
