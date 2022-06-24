<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class GoalsController extends Controller
{

public function goals_en()
{



    $top_title_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="111"');
    $top_title_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="112"');
    $top_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="113"');
    $top_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="114"');
    $middle_photo_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="115"');
    $middle_photo_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="116"');

    // Section one

    $item_one_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="117"');
    $item_one_title_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="118"');
    $item_one_title_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="119"');
    $item_one_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="120"');
    $item_one_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="121"');

    // Section two

    $item_two_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="122"');
    $item_two_title_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="123"');
    $item_two_title_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="124"');
    $item_two_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="125"');
    $item_two_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="126"');


    // Section three

    $item_three_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="127"');
    $item_three_title_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="128"');
    $item_three_title_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="129"');
    $item_three_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="130"');
    $item_three_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="131"');

    // Section four

    $item_four_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="132"');
    $item_four_title_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="133"');
    $item_four_title_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="134"');
    $item_four_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="135"');
    $item_four_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="136"');



    // que

    $que_one_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="137"');
    $ans_one_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="138"');


    $que_one_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="139"');
    $ans_one_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="140"');


    $que_two_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="141"');
    $ans_two_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="142"');


    $que_two_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="143"');
    $ans_two_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="144"');




    $BENEFITS_title_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="146"');
    $BENEFITS_title_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="145"');


    $BENEFITS_item_one_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="147"');
    $BENEFITS_item_one_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="149"');
    $BENEFITS_item_one_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="148"');


    $BENEFITS_item_two_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="150"');
    $BENEFITS_item_two_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="152"');
    $BENEFITS_item_two_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="151"');



    $BENEFITS_item_three_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="153"');
    $BENEFITS_item_three_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="155"');
    $BENEFITS_item_three_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="154"');


    $BENEFITS_item_four_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="156"');
    $BENEFITS_item_four_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="158"');
    $BENEFITS_item_four_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="157"');



    $BENEFITS_item_five_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="159"');
    $BENEFITS_item_five_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="161"');
    $BENEFITS_item_five_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="160"');



    $facts_title_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="162"');
    $facts_title_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="163"');


    $facts_item_one_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="164"');
    $facts_item_one_num = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="166"');
    $facts_item_one_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="170"');
    $facts_item_one_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="169"');



    $facts_item_two_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="171"');
    $facts_item_two_num = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="173"');
    $facts_item_two_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="176"');
    $facts_item_two_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="177"');



    $facts_item_three_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="178"');
    $facts_item_three_num = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="180"');
    $facts_item_three_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="184"');
    $facts_item_three_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="183"');




    $facts_item_four_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="185"');
    $facts_item_four_num = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="187"');
    $facts_item_four_unit_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="192"');
    $facts_item_four_unit_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="193"');
    $facts_item_four_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="191"');
    $facts_item_four_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="190"');










    $lang = 'en';
    return view('benefits-and-goals',[
'top_title_ar'=> $top_title_ar,
'top_title_en'=> $top_title_en,
'top_desc_ar'=>$top_desc_ar,
'top_desc_en'=> $top_desc_en,
'middle_photo_ar'=> $middle_photo_ar,
'middle_photo_en'=> $middle_photo_en,
'item_one_photo'=> $item_one_photo,
'item_one_title_ar'=>$item_one_title_ar,
'item_one_title_en'=>$item_one_title_en,
'item_one_desc_ar'=> $item_one_desc_ar,
'item_one_desc_en'=> $item_one_desc_en,
'item_two_photo'=> $item_two_photo,
'item_two_title_ar'=> $item_two_title_ar,
'item_two_title_en'=>$item_two_title_en,
'item_two_desc_ar'=> $item_two_desc_ar,
'item_two_desc_en'=>$item_two_desc_en,
'item_three_photo'=>$item_three_photo,
'item_three_title_ar'=>$item_three_title_ar,
'item_three_title_en'=> $item_three_title_en,
'item_three_desc_ar'=> $item_three_desc_ar,
'item_three_desc_en'=> $item_three_desc_en,
'item_four_photo'=> $item_four_photo,
'item_four_title_ar'=> $item_four_title_ar,
'item_four_title_en'=> $item_four_title_en,
'item_four_desc_ar'=> $item_four_desc_ar,
'item_four_desc_en'=> $item_four_desc_en,
'que_one_ar'=> $que_one_ar,
'ans_one_ar'=> $ans_one_ar,
'que_one_en'=> $que_one_en,
'ans_one_en'=> $ans_one_en,
'que_two_ar'=> $que_two_ar,
'ans_two_ar'=> $ans_two_ar,
'que_two_en'=> $que_two_en,
'ans_two_en'=> $ans_two_en,
'BENEFITS_title_ar'=> $BENEFITS_title_ar,
'BENEFITS_title_en'=> $BENEFITS_title_en,
'BENEFITS_item_one_photo'=> $BENEFITS_item_one_photo,
'BENEFITS_item_one_desc_en'=> $BENEFITS_item_one_desc_en,
'BENEFITS_item_one_desc_ar'=> $BENEFITS_item_one_desc_ar,
'BENEFITS_item_two_photo'=> $BENEFITS_item_two_photo,
'BENEFITS_item_two_desc_en'=>$BENEFITS_item_two_desc_en,
'BENEFITS_item_two_desc_ar'=> $BENEFITS_item_two_desc_ar,
'BENEFITS_item_three_photo'=> $BENEFITS_item_three_photo,
'BENEFITS_item_three_desc_en'=> $BENEFITS_item_three_desc_en,
'BENEFITS_item_three_desc_ar'=> $BENEFITS_item_three_desc_ar,
'BENEFITS_item_four_photo'=> $BENEFITS_item_four_photo,
'BENEFITS_item_four_desc_en'=> $BENEFITS_item_four_desc_en,
'BENEFITS_item_four_desc_ar'=> $BENEFITS_item_four_desc_ar,
'BENEFITS_item_five_photo'=> $BENEFITS_item_five_photo,
'BENEFITS_item_five_desc_en'=> $BENEFITS_item_five_desc_en,
'BENEFITS_item_five_desc_ar'=> $BENEFITS_item_five_desc_ar,
'facts_title_en'=> $facts_title_en,
'facts_title_ar'=> $facts_title_ar,
'facts_item_one_photo'=>$facts_item_one_photo,
'facts_item_one_num'=> $facts_item_one_num,
'facts_item_one_desc_en'=> $facts_item_one_desc_en,
'facts_item_one_desc_ar'=> $facts_item_one_desc_ar,
'facts_item_two_photo'=> $facts_item_two_photo,
'facts_item_two_num'=> $facts_item_two_num,
'facts_item_two_desc_en'=> $facts_item_two_desc_en,
'facts_item_two_desc_ar'=> $facts_item_two_desc_ar,
'facts_item_three_photo'=> $facts_item_three_photo,
'facts_item_three_num'=> $facts_item_three_num,
'facts_item_three_desc_en'=> $facts_item_three_desc_en,
'facts_item_three_desc_ar'=> $facts_item_three_desc_ar,
'facts_item_four_photo'=> $facts_item_four_photo,
'facts_item_four_num'=> $facts_item_four_num,
'facts_item_four_unit_ar'=> $facts_item_four_unit_ar,
'facts_item_four_unit_en'=> $facts_item_four_unit_en,
'facts_item_four_desc_en'=>$facts_item_four_desc_en,
'facts_item_four_desc_ar'=> $facts_item_four_desc_ar,





       'lang'=>$lang,
        compact('lang')]);






}
public function goals_ar()
{



    $top_title_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="111"');
    $top_title_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="112"');
    $top_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="113"');
    $top_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="114"');
    $middle_photo_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="115"');
    $middle_photo_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="116"');

    // Section one

    $item_one_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="117"');
    $item_one_title_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="118"');
    $item_one_title_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="119"');
    $item_one_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="120"');
    $item_one_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="121"');

    // Section two

    $item_two_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="122"');
    $item_two_title_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="123"');
    $item_two_title_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="124"');
    $item_two_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="125"');
    $item_two_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="126"');


    // Section three

    $item_three_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="127"');
    $item_three_title_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="128"');
    $item_three_title_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="129"');
    $item_three_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="130"');
    $item_three_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="131"');

    // Section four

    $item_four_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="132"');
    $item_four_title_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="133"');
    $item_four_title_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="134"');
    $item_four_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="135"');
    $item_four_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="136"');



    // que

    $que_one_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="137"');
    $ans_one_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="138"');


    $que_one_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="139"');
    $ans_one_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="140"');


    $que_two_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="141"');
    $ans_two_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="142"');


    $que_two_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="143"');
    $ans_two_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="11" and field_id="144"');




    $BENEFITS_title_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="146"');
    $BENEFITS_title_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="145"');


    $BENEFITS_item_one_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="147"');
    $BENEFITS_item_one_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="149"');
    $BENEFITS_item_one_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="148"');


    $BENEFITS_item_two_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="150"');
    $BENEFITS_item_two_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="152"');
    $BENEFITS_item_two_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="151"');



    $BENEFITS_item_three_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="153"');
    $BENEFITS_item_three_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="155"');
    $BENEFITS_item_three_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="154"');


    $BENEFITS_item_four_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="156"');
    $BENEFITS_item_four_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="158"');
    $BENEFITS_item_four_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="157"');



    $BENEFITS_item_five_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="159"');
    $BENEFITS_item_five_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="161"');
    $BENEFITS_item_five_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="12" and field_id="160"');



    $facts_title_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="162"');
    $facts_title_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="163"');


    $facts_item_one_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="164"');
    $facts_item_one_num = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="166"');
    $facts_item_one_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="170"');
    $facts_item_one_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="169"');



    $facts_item_two_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="171"');
    $facts_item_two_num = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="173"');
    $facts_item_two_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="176"');
    $facts_item_two_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="177"');



    $facts_item_three_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="178"');
    $facts_item_three_num = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="180"');
    $facts_item_three_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="184"');
    $facts_item_three_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="183"');




    $facts_item_four_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="185"');
    $facts_item_four_num = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="187"');
    $facts_item_four_unit_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="192"');
    $facts_item_four_unit_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="193"');
    $facts_item_four_desc_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="191"');
    $facts_item_four_desc_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="13" and field_id="190"');










    $lang = 'ar';
    return view('benefits-and-goals',[
'top_title_ar'=> $top_title_ar,
'top_title_en'=> $top_title_en,
'top_desc_ar'=>$top_desc_ar,
'top_desc_en'=> $top_desc_en,
'middle_photo_ar'=> $middle_photo_ar,
'middle_photo_en'=> $middle_photo_en,
'item_one_photo'=> $item_one_photo,
'item_one_title_ar'=>$item_one_title_ar,
'item_one_title_en'=>$item_one_title_en,
'item_one_desc_ar'=> $item_one_desc_ar,
'item_one_desc_en'=> $item_one_desc_en,
'item_two_photo'=> $item_two_photo,
'item_two_title_ar'=> $item_two_title_ar,
'item_two_title_en'=>$item_two_title_en,
'item_two_desc_ar'=> $item_two_desc_ar,
'item_two_desc_en'=>$item_two_desc_en,
'item_three_photo'=>$item_three_photo,
'item_three_title_ar'=>$item_three_title_ar,
'item_three_title_en'=> $item_three_title_en,
'item_three_desc_ar'=> $item_three_desc_ar,
'item_three_desc_en'=> $item_three_desc_en,
'item_four_photo'=> $item_four_photo,
'item_four_title_ar'=> $item_four_title_ar,
'item_four_title_en'=> $item_four_title_en,
'item_four_desc_ar'=> $item_four_desc_ar,
'item_four_desc_en'=> $item_four_desc_en,
'que_one_ar'=> $que_one_ar,
'ans_one_ar'=> $ans_one_ar,
'que_one_en'=> $que_one_en,
'ans_one_en'=> $ans_one_en,
'que_two_ar'=> $que_two_ar,
'ans_two_ar'=> $ans_two_ar,
'que_two_en'=> $que_two_en,
'ans_two_en'=> $ans_two_en,
'BENEFITS_title_ar'=> $BENEFITS_title_ar,
'BENEFITS_title_en'=> $BENEFITS_title_en,
'BENEFITS_item_one_photo'=> $BENEFITS_item_one_photo,
'BENEFITS_item_one_desc_en'=> $BENEFITS_item_one_desc_en,
'BENEFITS_item_one_desc_ar'=> $BENEFITS_item_one_desc_ar,
'BENEFITS_item_two_photo'=> $BENEFITS_item_two_photo,
'BENEFITS_item_two_desc_en'=>$BENEFITS_item_two_desc_en,
'BENEFITS_item_two_desc_ar'=> $BENEFITS_item_two_desc_ar,
'BENEFITS_item_three_photo'=> $BENEFITS_item_three_photo,
'BENEFITS_item_three_desc_en'=> $BENEFITS_item_three_desc_en,
'BENEFITS_item_three_desc_ar'=> $BENEFITS_item_three_desc_ar,
'BENEFITS_item_four_photo'=> $BENEFITS_item_four_photo,
'BENEFITS_item_four_desc_en'=> $BENEFITS_item_four_desc_en,
'BENEFITS_item_four_desc_ar'=> $BENEFITS_item_four_desc_ar,
'BENEFITS_item_five_photo'=> $BENEFITS_item_five_photo,
'BENEFITS_item_five_desc_en'=> $BENEFITS_item_five_desc_en,
'BENEFITS_item_five_desc_ar'=> $BENEFITS_item_five_desc_ar,
'facts_title_en'=> $facts_title_en,
'facts_title_ar'=> $facts_title_ar,
'facts_item_one_photo'=>$facts_item_one_photo,
'facts_item_one_num'=> $facts_item_one_num,
'facts_item_one_desc_en'=> $facts_item_one_desc_en,
'facts_item_one_desc_ar'=> $facts_item_one_desc_ar,
'facts_item_two_photo'=> $facts_item_two_photo,
'facts_item_two_num'=> $facts_item_two_num,
'facts_item_two_desc_en'=> $facts_item_two_desc_en,
'facts_item_two_desc_ar'=> $facts_item_two_desc_ar,
'facts_item_three_photo'=> $facts_item_three_photo,
'facts_item_three_num'=> $facts_item_three_num,
'facts_item_three_desc_en'=> $facts_item_three_desc_en,
'facts_item_three_desc_ar'=> $facts_item_three_desc_ar,
'facts_item_four_photo'=> $facts_item_four_photo,
'facts_item_four_num'=> $facts_item_four_num,
'facts_item_four_unit_ar'=> $facts_item_four_unit_ar,
'facts_item_four_unit_en'=> $facts_item_four_unit_en,
'facts_item_four_desc_en'=>$facts_item_four_desc_en,
'facts_item_four_desc_ar'=> $facts_item_four_desc_ar,





       'lang'=>$lang,
        compact('lang')]);






}



}


