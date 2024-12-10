<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory()
    {
        $category = Category::orderBy('id', 'ASC')->paginate(10);
        return view('admin.addcategory', compact('category'));
    }

    public function saveCategory(Request $request)
    {

        $request-> validate([
            'name'     => 'required|unique:categories',   
            'slug'     => 'required',
            'description'     => 'required|max:5000',
            'image'   =>  'required',
            'meta_title'   =>  'required',
            'meta_keywords'   =>  'required',
            'meta_descp'   =>  'required'
            ]);

        if (request()->hasFile('image'))
        {
            $extension = $request->file('image')->getClientOriginalExtension();
            $folder = 'categories_img';
            
            if( $extension == 'jpeg' || $extension == 'png' || $extension == 'jpg')
            {
            $imageName = time() . "." . $extension;
            $file = $request->file('image')->storeAs($folder, $imageName, 'public');

            $category = new Category ();
        
            $category ->name            = $request ->name;
            $category->slug             = $request ->slug;
            $category ->description     = $request ->description;
            $category->status           = $request -> status == TRUE ? '1' : '0';
            $category ->popular         = $request -> popular == TRUE ? '1' : '0';
            $category->image            = 'storage/' . $file;
            $category ->meta_title      = $request -> meta_title;
            $category ->meta_keywords   = $request -> meta_keywords;
            $category->meta_descp       = $request -> meta_descp;
            
            $category -> save();

            return back()->with('status', "Category Added Successfully!", "success");
            }
        }
    }

    public function edit(Category $category)
    {
        $category = Category::find($category->id);
        return view('admin.editcategory', compact('category'));
    }

    
    public function update(Request $request, Category $category)
    {
        $category = Category::find($category->id);    
        
        if (request()->hasFile('image'))
        {
            $path = 'storage/categories_img/'.$category->image;

            if (File::exists($path))
            {
                File::delete($path);
            }

            $extension = $request->file('image')->getClientOriginalExtension();
            $folder = 'categories_img';
            $imageName      = time() . "1" . "." . $extension;

            $file = $request->file('image')->storeAs($folder, $imageName, 'public');
           
            $category->image             = 'storage/' . $file;
        }
            $category ->name                    = $request ->name;
            $category->slug                     = $request ->slug;
            $category ->description             = $request ->description;
            $category->status                   = $request -> status == TRUE ? '1' : '0';
            $category ->popular                = $request -> popular == TRUE ? '1' : '0';
            $category ->meta_title              = $request -> meta_title;
            $category ->meta_keywords           = $request -> meta_keywords;
            $category->meta_descp               = $request -> meta_descp;
            
            $category -> update();
            return back()->with ('status', "Category updated Successfully!", "success");
    }



    public function destroy(Category $category)
    {
        $category = Category::find($category->id);
        
        $path = 'storage/categories_img/'.$category->image;

        if (File::exists($path))
        {
            File::delete($path);
        }
        $category->delete();

        return redirect('/addcategory.php')->with('status', 'Category Deleted Successfully!', "success");

    }
}
