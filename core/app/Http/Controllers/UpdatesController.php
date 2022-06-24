<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UpdatesController extends Controller
{
    public function index_en()
    {
        $updates = DB::select('select * FROM   tatmeen_products    WHERE section="updates" ');

        $updates_timleline = DB::select('select field_value FROM   tatmeen_topic_fields    WHERE topic_id="16" and field_id="202" ');

    $lang = 'en';
    return view('updates',[ 'lang'=>$lang,'updates'=>$updates,'updates_timleline'=>$updates_timleline, compact('lang')]);


    }
    public function index_ar()
    {
        $updates_timleline = DB::select('select field_value FROM   tatmeen_topic_fields    WHERE topic_id="16" and field_id="202" ');

        $updates = DB::select('select * FROM   tatmeen_products    WHERE section="updates" ');
    $lang = 'ar';
    return view('updates',[ 'lang'=>$lang,'updates'=>$updates,'updates_timleline'=>$updates_timleline, compact('lang')]);


    }
}
