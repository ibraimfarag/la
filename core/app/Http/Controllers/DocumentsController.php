<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DocumentsController extends Controller
{
    public function index_en()
        {

            $docments = DB::select('select * FROM   tatmeen_products   WHERE section="documents" ');
        $lang = 'en';
        return view('documents',[ 'lang'=>$lang,'docments'=>$docments, compact('lang')]);


        }
        public function index_ar()
        {
            $docments = DB::select('select * FROM   tatmeen_products    WHERE section="documents" ');

        $lang = 'ar';
        return view('documents',[ 'lang'=>$lang,'docments'=>$docments, compact('lang')]);
        }
}
