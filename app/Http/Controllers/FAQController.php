<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.faq.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request-> validate([
            'question'  => 'required|unique:f_a_q_s',
            'answer'    => 'required',
        ],
        [
                'question.required' => 'Enter Questions',
                'answer.required' => 'Enter Answers',
        ]);

                $faq = new FAQ ();
            
                $faq->question     = $request ->question;
                $faq->answer       = $request ->answer;
                $faq -> save();

            return back ()->with('success', 'Data has been Saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(FAQ $faq)
    {
        //
        $faq = FAQ::find($faq->id);
        return view('backend.faq.show', compact(['faq']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FAQ $faq)
    {
        //
        $faq = FAQ::find($faq->id);
        return view('backend.faq.edit', compact(['faq']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FAQ $faq)
    {
        //
        $faq = FAQ::find($faq->id);    
        
        $faq->question         = $request ->question;
        $faq->answer   = $request ->answer;

        $faq -> update();
 
         return back()->with ('success', 'Info updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FAQ $faq)
    {
        //
        $faq = FAQ::find($faq->id);

        if (File::exists($path))
        {
            File::delete($path);
        }
        $faq->delete();

        return back()->with('success', 'Deleted!');
    }
}
