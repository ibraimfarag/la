<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MainHomeController extends Controller
{
    public function home_en()
    {


        $top_title_en= DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="20"');
        $top_title_ar= DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="1"');
        $main = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="3"');
        $ar_desc = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="2"');
        $en_desc = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="21"');

           // section one

        $sectiononphoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="4"');
        $sectiononnum = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="22"');
        $sectiononuniten = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="23"');
        $sectiononunitar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="6"');
        $sectionondescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="7"');
        $sectionondescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="24"');

        // section two

        $section_to_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="8"');
        $section_to_num = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="25"');
        $section_to_uniten = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="26"');
        $section_to_unitar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="10"');
        $section_to_descar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="11"');
        $section_to_descen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="27"');



        // section three

        $section_th_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="12"');
        $section_th_num = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="28"');
        $section_th_uniten = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="29"');
        $section_th_unitar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="14"');
        $section_th_descar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="15"');
        $section_th_descen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="30"');



        // middel sction
        $middeltitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="16"');
        $middeltitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="31"');
        $middeldescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="32"');
        $middeldescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="17"');


        //timeline
        //one
        $timeonephoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="33"');
        $timeonetitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="34"');
        $timeonetitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="36"');
        $timeonedescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="35"');
        $timeonedescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="37"');

        //two
        $timetwophoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="38"');
        $timetwotitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="39"');
        $timetwotitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="41"');
        $timetwodescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="40"');
        $timetwodescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="42"');

        //three
        $timethreephoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="43"');
        $timethreetitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="44"');
        $timethreetitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="46"');
        $timethreedescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="45"');
        $timethreedescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="47"');

        //four
        $timefourphoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="48"');
        $timefourtitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="49"');
        $timefourtitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="51"');
        $timefourdescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="50"');
        $timefourdescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="52"');

        //five
        $timefivephoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="53"');
        $timefivetitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="54"');
        $timefivetitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="56"');
        $timefivedescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="55"');
        $timefivedescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="57"');


        //six
        $timesixphoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="58"');
        $timesixtitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="59"');
        $timesixtitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="61"');
        $timesixdescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="60"');
        $timesixdescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="62"');

        //forward
        //title
        $forwardtitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="65"');
        $forwardtitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="64"');

        //one
        $forwardonephoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="70"');
        $forwardonetitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="66"');
        $forwardonetitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="67"');
        $forwardonedescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="68"');
        $forwardonedescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="69"');


        //two
        $forwardtwophoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="75"');
        $forwardtwotitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="71"');
        $forwardtwotitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="72"');
        $forwardtwodescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="73"');
        $forwardtwodescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="74"');




        //three
        $forwardthreephoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="80"');
        $forwardthreetitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="76"');
        $forwardthreetitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="77"');
        $forwardthreedescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="78"');
        $forwardthreedescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="79"');


        //four
        $forwardfourphoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="85"');
        $forwardfourtitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="81"');
        $forwardfourtitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="82"');
        $forwardfourdescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="83"');
        $forwardfourdescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="84"');


        //five
        $forwardfivephoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="90"');
        $forwardfivetitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="86"');
        $forwardfivetitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="87"');
        $forwardfivedescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="88"');
        $forwardfivedescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="89"');



        $lang = 'en';
        return view('home',[
           'top_title_en'=>$top_title_en,
           'top_title_ar'=>$top_title_ar,
           'main'=>$main,
           'ar_desc'=>$ar_desc,
           'en_desc'=>$en_desc,
           'sectiononphoto'=>$sectiononphoto,
           'sectiononnum'=>$sectiononnum,
           'sectiononuniten'=>$sectiononuniten,
           'sectiononunitar'=>$sectiononunitar,
           'sectionondescar'=>$sectionondescar,
           'sectionondescen'=>$sectionondescen,
           'section_to_photo'=>$section_to_photo,
           'section_to_num'=>$section_to_num,
           'section_to_uniten'=>$section_to_uniten,
           'section_to_unitar'=>$section_to_unitar,
           'section_to_descar'=>$section_to_descar,
           'section_to_descen'=>$section_to_descen,
           'section_th_photo'=> $section_th_photo,
           'section_th_num'=>$section_th_num,
           'section_th_uniten'=>$section_th_uniten,
           'section_th_unitar'=>$section_th_unitar,
           'section_th_descar'=>$section_th_descar,
           'section_th_descen'=>$section_th_descen,
           'middeltitlear'=> $middeltitlear,
           'middeltitleen'=>$middeltitleen,
           'middeldescen'=>$middeldescen,
           'middeldescar'=>$middeldescar,
           'timeonephoto'=> $timeonephoto,
           'timeonetitlear'=>$timeonetitlear,
           'timeonetitleen'=>$timeonetitleen,
           'timeonedescar'=>$timeonedescar,
           'timeonedescen'=>$timeonedescen,
           'timetwophoto'=> $timetwophoto,
           'timetwotitlear'=>$timetwotitlear,
           'timetwotitleen'=>$timetwotitleen,
           'timetwodescar'=>$timetwodescar,
           'timetwodescen'=>$timetwodescen,
           'timethreephoto'=> $timethreephoto,
           'timethreetitlear'=>$timethreetitlear,
           'timethreetitleen'=>$timethreetitleen,
           'timethreedescar'=>$timethreedescar,
           'timethreedescen'=>$timethreedescen,
           'timefourphoto'=>$timefourphoto,
           'timefourtitlear'=>$timefourtitlear,
           'timefourtitleen'=>$timefourtitleen,
           'timefourdescar'=>$timefourdescar,
           'timefourdescen'=>$timefourdescen,
           'timefivephoto'=> $timefivephoto,
           'timefivetitlear'=>$timefivetitlear,
           'timefivetitleen'=>$timefivetitleen,
           'timefivedescar'=>$timefivedescar,
           'timefivedescen'=>$timefivedescen,
           'timesixphoto'=> $timesixphoto,
           'timesixtitleen'=>$timesixtitleen,
           'timesixtitlear'=>$timesixtitlear,
           'timesixdescar'=>$timesixdescar,
           'timesixdescen'=>$timesixdescen,
           'forwardtitlear'=>$forwardtitlear,
           'forwardtitleen'=> $forwardtitleen,
           'forwardonephoto'=>$forwardonephoto,
           'forwardonetitlear'=>$forwardonetitlear,
           'forwardonetitleen'=>$forwardonetitleen,
           'forwardonedescar'=>$forwardonedescar,
           'forwardonedescen'=>$forwardonedescen,
           'forwardtwophoto'=>$forwardtwophoto,
           'forwardtwotitlear'=>$forwardtwotitlear,
           'forwardtwotitleen'=>$forwardtwotitleen,
           'forwardtwodescar'=>$forwardtwodescar,
           'forwardtwodescen'=>$forwardtwodescen,
           'forwardthreephoto'=>$forwardthreephoto,
           'forwardthreetitlear'=>$forwardthreetitlear,
           'forwardthreetitleen'=>$forwardthreetitleen,
           'forwardthreedescar'=>$forwardthreedescar,
           'forwardthreedescen'=>$forwardthreedescen,
           'forwardfourphoto'=> $forwardfourphoto,
           'forwardfourtitlear'=>$forwardfourtitlear,
           'forwardfourtitleen'=>$forwardfourtitleen,
           'forwardfourdescar'=>$forwardfourdescar,
           'forwardfourdescen'=>$forwardfourdescen,
           'forwardfivephoto'=> $forwardfivephoto,
           'forwardfivetitlear'=>$forwardfivetitlear,
           'forwardfivetitleen'=>$forwardfivetitleen,
           'forwardfivedescar'=>$forwardfivedescar,
           'forwardfivedescen'=>$forwardfivedescen,
           'lang'=>$lang,
            compact('lang')]);



    }
    public function home_ar()
    {


        $top_title_en= DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="20"');
        $top_title_ar= DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="1"');
        $main = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="3"');
        $ar_desc = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="2"');
        $en_desc = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="21"');

           // section one

        $sectiononphoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="4"');
        $sectiononnum = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="22"');
        $sectiononuniten = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="23"');
        $sectiononunitar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="6"');
        $sectionondescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="7"');
        $sectionondescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="24"');

        // section two

        $section_to_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="8"');
        $section_to_num = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="25"');
        $section_to_uniten = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="26"');
        $section_to_unitar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="10"');
        $section_to_descar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="11"');
        $section_to_descen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="27"');



        // section three

        $section_th_photo = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="12"');
        $section_th_num = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="28"');
        $section_th_uniten = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="29"');
        $section_th_unitar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="14"');
        $section_th_descar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="15"');
        $section_th_descen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="30"');


        // middel sction
        $middeltitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="16"');
        $middeltitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="31"');
        $middeldescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="32"');
        $middeldescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="6" and field_id="17"');


        //timeline
        //one
        $timeonephoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="33"');
        $timeonetitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="34"');
        $timeonetitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="36"');
        $timeonedescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="35"');
        $timeonedescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="37"');

        //two
        $timetwophoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="38"');
        $timetwotitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="39"');
        $timetwotitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="41"');
        $timetwodescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="40"');
        $timetwodescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="42"');

        //three
        $timethreephoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="43"');
        $timethreetitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="44"');
        $timethreetitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="46"');
        $timethreedescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="45"');
        $timethreedescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="47"');

        //four
        $timefourphoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="48"');
        $timefourtitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="49"');
        $timefourtitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="51"');
        $timefourdescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="50"');
        $timefourdescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="52"');

        //five
        $timefivephoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="53"');
        $timefivetitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="54"');
        $timefivetitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="56"');
        $timefivedescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="55"');
        $timefivedescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="57"');


        //six
        $timesixphoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="58"');
        $timesixtitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="59"');
        $timesixtitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="61"');
        $timesixdescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="60"');
        $timesixdescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="7" and field_id="62"');

        //forward
        //title
        $forwardtitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="65"');
        $forwardtitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="64"');

        //one
        $forwardonephoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="70"');
        $forwardonetitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="66"');
        $forwardonetitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="67"');
        $forwardonedescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="68"');
        $forwardonedescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="69"');


        //two
        $forwardtwophoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="75"');
        $forwardtwotitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="71"');
        $forwardtwotitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="72"');
        $forwardtwodescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="73"');
        $forwardtwodescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="74"');




        //three
        $forwardthreephoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="80"');
        $forwardthreetitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="76"');
        $forwardthreetitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="77"');
        $forwardthreedescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="78"');
        $forwardthreedescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="79"');


        //four
        $forwardfourphoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="85"');
        $forwardfourtitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="81"');
        $forwardfourtitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="82"');
        $forwardfourdescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="83"');
        $forwardfourdescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="84"');


        //five
        $forwardfivephoto = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="90"');
        $forwardfivetitlear = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="86"');
        $forwardfivetitleen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="87"');
        $forwardfivedescar = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="88"');
        $forwardfivedescen = DB::select('select * FROM   tatmeen_topic_fields   WHERE topic_id="8" and field_id="89"');



        $lang = 'ar';
        return view('home',[
            'top_title_en'=>$top_title_en,
            'top_title_ar'=>$top_title_ar,
            'main'=>$main,
            'ar_desc'=>$ar_desc,
            'en_desc'=>$en_desc,
            'sectiononphoto'=>$sectiononphoto,
            'sectiononnum'=>$sectiononnum,
            'sectiononuniten'=>$sectiononuniten,
            'sectiononunitar'=>$sectiononunitar,
            'sectionondescar'=>$sectionondescar,
            'sectionondescen'=>$sectionondescen,
            'section_to_photo'=>$section_to_photo,
            'section_to_num'=>$section_to_num,
            'section_to_uniten'=>$section_to_uniten,
            'section_to_unitar'=>$section_to_unitar,
            'section_to_descar'=>$section_to_descar,
            'section_to_descen'=>$section_to_descen,
            'section_th_photo'=> $section_th_photo,
            'section_th_num'=>$section_th_num,
            'section_th_uniten'=>$section_th_uniten,
            'section_th_unitar'=>$section_th_unitar,
            'section_th_descar'=>$section_th_descar,
            'section_th_descen'=>$section_th_descen,
            'middeltitlear'=> $middeltitlear,
            'middeltitleen'=>$middeltitleen,
            'middeldescen'=>$middeldescen,
            'middeldescar'=>$middeldescar,
            'timeonephoto'=> $timeonephoto,
            'timeonetitlear'=>$timeonetitlear,
            'timeonetitleen'=>$timeonetitleen,
            'timeonedescar'=>$timeonedescar,
            'timeonedescen'=>$timeonedescen,
            'timetwophoto'=> $timetwophoto,
            'timetwotitlear'=>$timetwotitlear,
            'timetwotitleen'=>$timetwotitleen,
            'timetwodescar'=>$timetwodescar,
            'timetwodescen'=>$timetwodescen,
            'timethreephoto'=> $timethreephoto,
            'timethreetitlear'=>$timethreetitlear,
            'timethreetitleen'=>$timethreetitleen,
            'timethreedescar'=>$timethreedescar,
            'timethreedescen'=>$timethreedescen,
            'timefourphoto'=>$timefourphoto,
            'timefourtitlear'=>$timefourtitlear,
            'timefourtitleen'=>$timefourtitleen,
            'timefourdescar'=>$timefourdescar,
            'timefourdescen'=>$timefourdescen,
            'timefivephoto'=> $timefivephoto,
            'timefivetitlear'=>$timefivetitlear,
            'timefivetitleen'=>$timefivetitleen,
            'timefivedescar'=>$timefivedescar,
            'timefivedescen'=>$timefivedescen,
            'timesixphoto'=> $timesixphoto,
            'timesixtitleen'=>$timesixtitleen,
            'timesixtitlear'=>$timesixtitlear,
            'timesixdescar'=>$timesixdescar,
            'timesixdescen'=>$timesixdescen,
            'forwardtitlear'=>$forwardtitlear,
            'forwardtitleen'=> $forwardtitleen,
            'forwardonephoto'=>$forwardonephoto,
            'forwardonetitlear'=>$forwardonetitlear,
            'forwardonetitleen'=>$forwardonetitleen,
            'forwardonedescar'=>$forwardonedescar,
            'forwardonedescen'=>$forwardonedescen,
            'forwardtwophoto'=>$forwardtwophoto,
            'forwardtwotitlear'=>$forwardtwotitlear,
            'forwardtwotitleen'=>$forwardtwotitleen,
            'forwardtwodescar'=>$forwardtwodescar,
            'forwardtwodescen'=>$forwardtwodescen,
            'forwardthreephoto'=>$forwardthreephoto,
            'forwardthreetitlear'=>$forwardthreetitlear,
            'forwardthreetitleen'=>$forwardthreetitleen,
            'forwardthreedescar'=>$forwardthreedescar,
            'forwardthreedescen'=>$forwardthreedescen,
            'forwardfourphoto'=> $forwardfourphoto,
            'forwardfourtitlear'=>$forwardfourtitlear,
            'forwardfourtitleen'=>$forwardfourtitleen,
            'forwardfourdescar'=>$forwardfourdescar,
            'forwardfourdescen'=>$forwardfourdescen,
            'forwardfivephoto'=> $forwardfivephoto,
            'forwardfivetitlear'=>$forwardfivetitlear,
            'forwardfivetitleen'=>$forwardfivetitleen,
            'forwardfivedescar'=>$forwardfivedescar,
            'forwardfivedescen'=>$forwardfivedescen,
            'lang'=>$lang,
             compact('lang')]);



    }
}
