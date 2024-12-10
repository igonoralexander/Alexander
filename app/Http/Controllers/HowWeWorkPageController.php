<?php

namespace App\Http\Controllers;
use App\Models\HowWeWorkPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HowWeWorkPageController extends Controller
{    
    public function index()
    {
        $howweworkpages = HowWeWorkPage::all();
        return view('backend.how-we-work.index', compact('howweworkpages'));
    }

    public function create()
    {
        return view('backend.how-we-work.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'main_title' => 'required|string|max:255|unique:how_we_work_pages,main_title,',
            'content' => 'required|min:5|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
        ]);
        
        HowWeWorkPage::create([
            'main_title' => $request->main_title,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);        

        return redirect()->route('admin.how-we-work')->with('message', 'Content saved successfully!');
    }

    public function edit(string $id)
    {
        $howweworkpage = HowWeWorkPage::findOrFail($id);
        return view('backend.how-we-work.edit', compact('howweworkpage'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'main_title' => 'nullable|string|max:255|',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
        ]);

        $howweworkpage = HowWeWorkPage::findOrFail($id);
        $howweworkpage->update([
            'main_title' => $request->main_title,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()->route('admin.how-we-work')->with('message', 'Content saved successfully!');
    }

    public function destroy(string $id)
    {
            $howweworkpage = HowWeWorkPage::findOrFail($id);
            $howweworkpage->delete();
    
            return redirect()->route('admin.how-we-work')->with('message', 'Content saved successfully!');
    }
}