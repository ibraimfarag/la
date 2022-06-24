<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MainAboutController extends Controller
{

    public function About_en()
    {

        $top_title_ar  = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="9" and field_id="91"');
        $top_title_en  = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="9" and field_id="92"');
        $under_title_ar   = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="9" and field_id="93"');
        $under_title_en   = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="9" and field_id="94"');
        $descrption_ar    = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="9" and field_id="95"');
        $descrption_en    = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="9" and field_id="96"');

       //partenrs

        $title_ar     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="97"');
        $title_en    = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="98"');

       //Partner_one

        $Partner_one_photo     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="99"');
        $Partner_one_descrption_ar     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="100"');
        $Partner_one_descrption_en     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="101"');


        //Partner_two

        $Partner_two_photo     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="102"');
        $Partner_two_descrption_ar     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="103"');
        $Partner_two_descrption_en     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="104"');


        //Partner_three

        $Partner_three_photo     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="105"');
        $Partner_three_descrption_ar     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="106"');
        $Partner_three_descrption_en     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="107"');


        //Partner_four

        $Partner_four_photo     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="108"');
        $Partner_four_descrption_ar     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="109"');
        $Partner_four_descrption_en     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="110"');



$lang = 'en';
return view('about',[

   'top_title_ar'=>$top_title_ar,
   'top_title_en'=>$top_title_en,
   'under_title_en'=>$under_title_en,
   'under_title_ar'=>$under_title_ar,
   'descrption_en'=>$descrption_en,
   'descrption_ar'=>$descrption_ar,
   'title_ar'=>$title_ar,
   'title_en'=>$title_en,
   'Partner_one_photo'=>$Partner_one_photo,
   'Partner_one_descrption_ar'=> $Partner_one_descrption_ar,
   'Partner_one_descrption_en'=>$Partner_one_descrption_en ,
   'Partner_two_photo'=> $Partner_two_photo ,
   'Partner_two_descrption_ar'=> $Partner_two_descrption_ar ,
   'Partner_two_descrption_en'=> $Partner_two_descrption_en ,
   'Partner_three_photo'=> $Partner_three_photo,
   'Partner_three_descrption_ar'=>$Partner_three_descrption_ar ,
   'Partner_three_descrption_en'=>$Partner_three_descrption_en ,
   'Partner_four_photo'=> $Partner_four_photo  ,
   'Partner_four_descrption_ar'=>$Partner_four_descrption_ar ,
   'Partner_four_descrption_en'=>$Partner_four_descrption_en ,
   'lang'=>$lang,
    compact('lang')]);





    }




    public function About_ar()
    {






        $top_title_ar  = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="9" and field_id="91"');
        $top_title_en  = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="9" and field_id="92"');
        $under_title_ar   = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="9" and field_id="93"');
        $under_title_en   = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="9" and field_id="94"');
        $descrption_ar    = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="9" and field_id="95"');
        $descrption_en    = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="9" and field_id="96"');

       //partenrs

        $title_ar     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="97"');
        $title_en    = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="98"');

       //Partner_one

        $Partner_one_photo     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="99"');
        $Partner_one_descrption_ar     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="100"');
        $Partner_one_descrption_en     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="101"');


        //Partner_two

        $Partner_two_photo     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="102"');
        $Partner_two_descrption_ar     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="103"');
        $Partner_two_descrption_en     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="104"');


        //Partner_three

        $Partner_three_photo     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="105"');
        $Partner_three_descrption_ar     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="106"');
        $Partner_three_descrption_en     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="107"');


        //Partner_four

        $Partner_four_photo     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="108"');
        $Partner_four_descrption_ar     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="109"');
        $Partner_four_descrption_en     = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="10" and field_id="110"');



$lang = 'ar';
return view('about',[

   'top_title_ar'=>$top_title_ar,
   'top_title_en'=>$top_title_en,
   'under_title_en'=>$under_title_en,
   'under_title_ar'=>$under_title_ar,
   'descrption_en'=>$descrption_en,
   'descrption_ar'=>$descrption_ar,
   'title_ar'=>$title_ar,
   'title_en'=>$title_en,
   'Partner_one_photo'=>$Partner_one_photo,
   'Partner_one_descrption_ar'=> $Partner_one_descrption_ar,
   'Partner_one_descrption_en'=>$Partner_one_descrption_en ,
   'Partner_two_photo'=> $Partner_two_photo ,
   'Partner_two_descrption_ar'=> $Partner_two_descrption_ar ,
   'Partner_two_descrption_en'=> $Partner_two_descrption_en ,
   'Partner_three_photo'=> $Partner_three_photo,
   'Partner_three_descrption_ar'=>$Partner_three_descrption_ar ,
   'Partner_three_descrption_en'=>$Partner_three_descrption_en ,
   'Partner_four_photo'=> $Partner_four_photo  ,
   'Partner_four_descrption_ar'=>$Partner_four_descrption_ar ,
   'Partner_four_descrption_en'=>$Partner_four_descrption_en ,
   'lang'=>$lang,
    compact('lang')]);










    }

}
