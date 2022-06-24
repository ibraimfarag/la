<?php
use Illuminate\Support\Facades\DB;

if(!function_exists("Homecontent")){

            function Homecontent($string){




                    $top_title_en = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="20"');
                    $top_title_ar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="1"');

                    $lang = 'en';
                    return (['top_title_en'=>$top_title_en,'top_title_ar'=>$top_title_ar,'lang'=>$lang,compact('lang')]);


            }
}
