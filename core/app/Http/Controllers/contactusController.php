<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Webmail;
use Helper;

class contactusController extends Controller
{
    public function store_en(Request $request)
    {
        $site_title_var = "site_title_" . @Helper::currentLanguage()->code;
        $site_email = @Helper::GeneralSiteSettings("site_webmails");
        $webmail = new Webmail;
        $webmail->from_name = $request->from_name;
        $webmail->from_email = $request->from_email;
        $webmail->from_phone = $request->from_phone;
        $webmail->title = $request->title;
        $webmail->details = $request->details;
        $webmail->to_email = @Helper::GeneralSiteSettings("site_webmails");
        $webmail->to_name = @Helper::GeneralSiteSettings($site_title_var);
        $webmail->status = 0;
        $webmail->flag = 0;
        $webmail->date = date("Y-m-d H:i:s");
        $webmail->cat_id = 0;
        $webmail->group_id = null;
        $webmail->save();
        return redirect()->route('faqs_en')->with('status', 'Thank you for getting in touch!

        We appreciate you contacting us . One of our colleagues will get back in touch with you soon!Have a great day!');
    }
    public function store_ar(Request $request)
    {
        $site_title_var = "site_title_" . @Helper::currentLanguage()->code;
        $site_email = @Helper::GeneralSiteSettings("site_webmails");
        $webmail = new Webmail;
        $webmail->from_name = $request->from_name;
        $webmail->from_email = $request->from_email;
        $webmail->from_phone = $request->from_phone;
        $webmail->title = $request->title;
        $webmail->details = $request->details;
        $webmail->to_email = @Helper::GeneralSiteSettings("site_webmails");
        $webmail->to_name = @Helper::GeneralSiteSettings($site_title_var);
        $webmail->status = 0;
        $webmail->flag = 0;
        $webmail->date = date("Y-m-d H:i:s");
        $webmail->cat_id = 0;
        $webmail->group_id = null;
        $webmail->save();
        $lang = 'ar';

        return redirect()->route('faqs_ar')->with('status', 'شكرا لك على تواصلك!

        نحن نقدر اتصالك بنا. سيتواصل معك أحد زملائنا قريبًا! أتمنى لك يومًا سعيدًا!');
    }
}
