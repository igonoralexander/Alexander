<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\Models\Wishlist;
use App\Models\RegisterUser;
use App\Models\Product;
use App\Models\Category;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();

        if (session::has('loginId')) 
        {
            $prod_id = $request->prod_id;

            $data = RegisterUser::where('id', '=', session::get('loginId'))->first();

            $prod_check = Product::where('id', $prod_id)->first();

            if($prod_check)
            {
               if (Wishlist::where('prod_id', $prod_id)->where('user_id', session::get('loginId'))->exists())
               {
                    return back()->with ('status', $prod_check->product_name. " Already Saved");
               }
            
               else
                
               {
                    $saveditem = new Wishlist();

                    $saveditem->prod_id = $request->prod_id;
                    $saveditem->user_id = $request->session()->get('loginId');

                    $saveditem->save();

                    return back()->with ('wishlist', $prod_check->product_name);
                }
            }
        }

        else

        {
            return redirect('/login.php');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(Wishlist $wishlist)
    {
        $data = array();

        if (session::has('loginId'))
        {
            $data = RegisterUser::where('id', '=', session::get('loginId'))->first();

            $category = Category::All();

            $whishlist = Wishlist::Where('user_id', session::get('loginId'))->get();

            $allwishlist = Wishlist::Where('user_id', '=', session::get('loginId'))->first();
    
            return view('pages.viewwishlist', compact(['data', 'whishlist', 'category', 'allwishlist']));

        }

        else
        {
            return redirect('/login.php');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wishlist $wishlist)
    {
            $wishlist = Wishlist::find($wishlist->id);
    
            $wishlist->delete();
    
            return redirect('/view-wishlist')->with ('status', ' Removed from Cart Successfully!');
    
    }

    static function SavedItem()
    {
        
        $data = array();

        if (session::has('loginId')) 
        {
            $data = RegisterUser::where('id', '=', session::get('loginId'))->first();

            $userID = session::get('loginId');
            return Wishlist::where('user_id', $userID)->count();
        }
            
    }
}
