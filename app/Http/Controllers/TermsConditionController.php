<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TermsCondition;
use App\Models\Admin;

class TermsConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $termsConditions = TermsCondition::all();
        return view('backend.terms-conditions.index', compact('termsConditions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.terms-conditions.create');
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
            'content' => 'required|min:5',
        ]);

        TermsCondition::create([
            'content' => $request->content,
        ]);

        return redirect()->route('admin.terms-conditions')->with('message', 'Content saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.terms-conditions.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $termsCondition = TermsCondition::findOrFail($id);
        return view('backend.terms-conditions.edit', compact('termsCondition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|min:5',
        ]);

        $termsCondition = TermsCondition::findOrFail($id);
        $termsCondition->update([
            'content' => $request->content,
        ]);

        return redirect()->route('admin.terms-conditions')->with('message', 'Content saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $termsCondition = TermsCondition::findOrFail($id);
        $termsCondition->delete();

        return redirect()->route('admin.terms-conditions.index')->with('message', 'Content saved successfully!');
    }
}
