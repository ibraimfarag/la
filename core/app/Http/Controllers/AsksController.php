<?php

namespace App\Http\Controllers;
use App\Models\Asks;
use Illuminate\Http\Request;

class AsksController extends Controller
{
    public function index()
    {
        $Asks =Asks::latest()->paginate(10);
        return view('asks.index',compact('Asks'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('asks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_ar' => 'required',
            'answer_ar' => 'required',
            'question_en' => 'required',
            'answer_en' => 'required',
        ]);

       Asks::create($request->all());
        return redirect()->route('asks.index')->with('success','Asks created successfully.');
    }

    public function show(Asks $Asks)
    {
        return view('asks.show',compact('Asks'));
    }

    public function edit(Asks $Asks)
    {
        return view('asks.edit',compact('Asks'));
    }

    public function update(Request $request,Asks $Asks)
    {
        $request->validate([
            'question_ar' => 'required',
            'answer_ar' => 'required',
            'question_en' => 'required',
            'answer_en' => 'required',


        ]);
        $Asks->update($request->all());
        return redirect()->route('asks.index')->with('success','Asks updated successfully');
    }

    public function destroy(Asks $Asks)
    {
        $Asks->delete();
        return redirect()->route('asks.index')->with('success','Asks deleted successfully');
    }
}
