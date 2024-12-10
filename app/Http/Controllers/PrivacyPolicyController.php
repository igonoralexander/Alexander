<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Models\Admin;

class PrivacyPolicyController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function index()
    {
        $PrivacyPolicy = PrivacyPolicy::all();
        return view('backend.privacy-policy.index', compact('PrivacyPolicy'));
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
        return view('backend.privacy-policy.create'); 
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
 
         PrivacyPolicy::create([
             'content' => $request->content,
         ]);
 
         return redirect()->route('admin.privacy-policy')->with('message', 'Content saved successfully!');
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
        return view('backend.privacy-policy.create');
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
        $PrivacyPolicy = PrivacyPolicy::findOrFail($id);
        return view('backend.privacy-policy.edit', compact('PrivacyPolicy'));
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
 
         $PrivacyPolicy = PrivacyPolicy::findOrFail($id);
         $PrivacyPolicy->update([
             'content' => $request->content,
         ]);
 
         return redirect()->route('admin.privacy-policy')->with('message', 'Content saved successfully!');
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         
         $PrivacyPolicy = PrivacyPolicy::findOrFail($id);
         $PrivacyPolicy->delete();
 
         return redirect()->route('privacy-policy.index')->with('message', 'Content saved successfully!');
     } 
}