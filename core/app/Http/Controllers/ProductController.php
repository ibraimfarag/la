<?php

namespace App\Http\Controllers;




use Auth;
use Redirect;
use App\Models\Product;

use Illuminate\Http\Request;



class ProductController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');

        // Check Permissions
        if(!@Auth::user()->permissionsGroup->settings_status){
            return Redirect::to(route('NoPermission'))->send();
        }



    }
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $products = Product::latest()->paginate(5);



        return view('products.index',compact('products'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('products.create');

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
         $request->validate([

            'title_arabic' => 'required',

            'date_arabic'  ,

            'title_english' => 'required',

            'date_english',

            'section' => 'required',

            'file_ar' => 'file|mimes:pdf,doc,docx',

            'file_en' => 'file|mimes:pdf,doc,docx',

        ]);



        $input = $request->all();




        if ($file_en = $request->file('file_en')) {

            $destinationPath = "assets/pdfs/en";

            $file_en_name = $file_en->getClientOriginalName();

            $file_en->move($destinationPath, $file_en_name);

            $input['file_en'] = "$file_en_name";

        }

        if ($file_ar = $request->file('file_ar')) {

            $destinationPath = "assets/pdfs/ar";

            $file_ar_name =  $file_ar->getClientOriginalName();

            $file_ar->move($destinationPath, $file_ar_name);

            $input['file_ar'] = "$file_ar_name";

        }



        Product::create($input);



        return redirect()->route('products.index')

                        ->with('success','add created successfully.');

    }



    /**

     * Display the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function show(Product $product)

    {

        return view('products.show',compact('product'));

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function edit(Product $product)

    {

        return view('products.edit',compact('product'));

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Product $product)

    {

        $request->validate([

            'title_arabic' => 'required',

            'date_arabic'  ,

            'title_english' => 'required',

            'date_english' ,

            'section' => 'required',

            'file_ar' => 'file|mimes:pdf,doc,docx',

            'file_en' => 'file|mimes:pdf,doc,docx',

        ]);



        $input = $request->all();







        if ($file_ar = $request->file('file_ar')) {

            $destinationPath = "assets/pdfs/ar";

            $file_ar_name = $file_ar->getClientOriginalName();

            $file_ar->move($destinationPath, $file_ar_name);

            $input['file_ar'] = "$file_ar_name";


        }else{

            unset($input['file_ar']);

        }

        if ($file_en = $request->file('file_en')) {

            $destinationPath = "assets/pdfs/en";

            $file_en_name =$file_en->getClientOriginalName();

            $file_en->move($destinationPath, $file_en_name);

            $input['file_en'] = "$file_en_name";


        }else{

            unset($input['file_en']);

        }



        $product->update($input);



        return redirect()->route('products.index')

                        ->with('success','add updated successfully');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function destroy(Product $product)

    {

        $product->delete();



        return redirect()->route('products.index')

                         ->with('success','add deleted successfully');

    }

}
