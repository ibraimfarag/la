<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Changes;
use Illuminate\Http\Request;



class ChangesController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $changess = Changes::latest()->paginate(5);



        return view('dashboard.changes.index',compact('changess'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('dashboard.changes.create');

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

            'title_arabic' ,

            'title_english',

            'date_arabic',

            'date_english',

            'title_english',

            'section',

            'file_ar' => 'filear|mimes:pdf|max:2048',

            'file_en' => 'fileen|mimes:pdf|max:2048'

        ]);



        $input = $request->all();





        if ($file_en = $request->file('fileen')) {

            $destinationPath = "assets/pdfs/en";

            $file_en_name = date('YmdHis') . "." . $file_en->getClientOriginalExtension();

            $file_en->move($destinationPath, $file_en_name);

            $input['file_en'] = "$file_en_name";

        }

        if ($file_ar = $request->file('filear')) {

            $destinationPath = "assets/pdfs/ar";

            $file_ar_name = date('YmdHis') . "." . $file_ar->getClientOriginalExtension();

            $file_ar->move($destinationPath, $file_ar_name);

            $input['file_ar'] = "$file_ar_name";

        }




        Changes::create($input);



        return redirect()->route('taskiy.index')

                        ->with('success','Product created successfully.');

    }



    /**

     * Display the specified resource.

     *

     * @param  \App\Changes  $changes

     * @return \Illuminate\Http\Response

     */

    public function show(Changes $changes)

    {

        return view('dashboard.changes.show',compact('changes'));

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Changes  $changes

     * @return \Illuminate\Http\Response

     */

    public function edit(Changes $changes)

    {

        return view('dashboard.changes.edit',compact('changes'));

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Changes  $changes

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Changes $changes)

    {

        $request->validate([
            'title_arabic' ,

            'title_english',

            'date_arabic',

            'date_english',

            'title_english',

            'section',

            'file_ar' => 'filear|mimes:pdf|max:2048',

            'file_en' => 'fileen|mimes:pdf|max:2048'

        ]);



        $input = $request->all();



        if ($file_en = $request->file('fileen')) {

            $destinationPath = "assets/pdfs/en";

            $file_en_name = date('YmdHis') . "." . $file_en->getClientOriginalExtension();

            $file_en->move($destinationPath, $file_en_name);

            $input['file_en'] = "$file_en_name";

        }

        if ($file_ar = $request->file('filear')) {

            $destinationPath = "assets/pdfs/ar";

            $file_ar_name = date('YmdHis') . "." . $file_ar->getClientOriginalExtension();

            $file_ar->move($destinationPath, $file_ar_name);

            $input['file_ar'] = "$file_ar_name";

        }


        $changes->update($input);



        return redirect()->route('taskiy.index')

                        ->with('success','Product updated successfully');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Changes  $changes

     * @return \Illuminate\Http\Response

     */

    public function destroy(Changes $changes)

    {

        $changes->delete();



        return redirect()->route('taskiy.index')

                        ->with('success','Product deleted successfully');

    }

}
