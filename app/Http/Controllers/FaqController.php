<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $questions = Faq::paginate(6);
        return view('admin.faq.index',compact('questions'));
    }


    public function create()
    {
        return view('admin.faq.create');
    }


    public function store(Request $request)
    {
        $request -> validate([
            'question' => 'required|min:5',
            'answer' => 'required|min:10',
        ]);

        Faq::create($request -> all());

        return redirect()->to('admin/faq')->with([
            'success' => 'تمت إضافة السؤال بنجاح'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $question = Faq::find($id);
        return view('admin.faq.edit',compact('question'));

    }

    public function update(Request $request, $id)
    {
        $request -> validate([
            'question' => 'required|min:5',
            'answer' => 'required|min:10',
        ]);

        Faq::find($id)->update($request -> all());

        return redirect()->to('admin/faq')->with([
            'success' => 'تمت تعديل السؤال بنجاح'
        ]);
    }


    public function destroy($id)
    {
        Faq::find($id)->delete();
        return redirect()->to('admin/faq')->with([
            'success' => 'تم حذف السؤال بنجاح'
        ]);
    }



}
