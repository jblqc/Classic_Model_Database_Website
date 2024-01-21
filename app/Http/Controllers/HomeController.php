<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $products = DB::table('Productlines')
        ->get();

        $categories  = DB::table('products')
        ->skip(10)
        ->take(2)
        ->get();

         $categories2  = DB::table('products')
        ->skip(40)
        ->take(3)
        ->get();

          $categories3  = DB::table('products')
        ->skip(20)
        ->take(1)
        ->get();

         $categories4  = DB::table('products')
        ->skip(10)
        ->take(2)
        ->get();

         $footer = DB::table('productlines')
        ->skip(0)
        ->take(5)
        ->get();

         $footertwo = DB::table('productlines')
        ->skip(5)
        ->take(15)
        ->get();

                return view('user.home', compact('products','categories','categories2','categories3','categories4','footer','footertwo'));
            } else if(Auth::user()->usertype=='1'){
                return view('admin.home');
            }
        } else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        $products = DB::table('Productlines')
        ->get();

        $categories  = DB::table('products')
        ->skip(10)
        ->take(2)
        ->get();

         $categories2  = DB::table('products')
        ->skip(40)
        ->take(3)
        ->get();

          $categories3  = DB::table('products')
        ->skip(20)
        ->take(1)
        ->get();

         $categories4  = DB::table('products')
        ->skip(10)
        ->take(2)
        ->get();

         $footer = DB::table('productlines')
        ->skip(0)
        ->take(5)
        ->get();

         $footertwo = DB::table('productlines')
        ->skip(5)
        ->take(15)
        ->get();

        return view('user.home', compact('products','categories','categories2','categories3','categories4','footer','footertwo'));
    }

    

}
