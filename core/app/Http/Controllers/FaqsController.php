<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\faq;
class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['faqs'] = faq::orderBy('id','desc')->paginate(5);

        return view('dashboard.faqs.cn-faqs',$data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faq   =   faq::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'question_ar' => $request->question_ar,
                        'answer_ar' => $request->answer_ar,
                        'question_en' => $request->question_en,
                        'answer_en' => $request->answer_en,

                    ]);

        return response()->json(['success' => true]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $faq  = faq::where($where)->first();

        return response()->json($faq);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $faq = faq::where('id',$request->id)->delete();

        return response()->json(['success' => true]);
    }
}
