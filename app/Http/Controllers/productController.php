<?php

namespace App\Http\Controllers;

use App\Models\Productlines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function headmenu()
    {
        $user = Auth::user()->name;
        $products = DB::table('productlines')
        ->get();
        return view('user.headmenu', compact('products', 'user'));
    }

    public function userheader()
    {
        $user = Auth::user()->name;
        $products = DB::table('productlines')
        ->get();
        return view('user.userheader', compact('products', 'user'));
    }

    public function userprods()
    {
        $user = Auth::user()->name;
        $products = DB::table('productlines')
        ->get();
        return view('user.userprods', compact('products', 'user'));
    }

    public function homefooter()
    {
        $footer = DB::table('productlines')
        ->skip(0)
        ->take(5)
        ->get();

         $footertwo = DB::table('productlines')
        ->skip(5)
        ->take(15)
        ->get();

        return view('user.homefooter', compact('footer','footertwo'));
    }

    public function usercontent()
    {
        $user = Auth::user()->name;
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

        return view('user.usercontent', compact('categories','categories2','categories3','categories4', 'name'));
    }

    public function List(Request $request, $productLine)
    {
        $user = Auth::user()->name;
        $products = DB::table('products')
        ->where('productLine',$request->id)
        ->get();

        $categorySide = DB::table('productlines')
        ->where('productLine',$productLine)->first();

        $categories  = DB::table('productlines')->get();

        $footer = DB::table('productlines')
        ->skip(0)
        ->take(5)
        ->get();

        $footertwo = DB::table('productlines')
        ->skip(5)
        ->take(15)
        ->get();
        return view('user.productLine.productListperCateg', compact('products', 'categorySide','categories','footer','footertwo', 'user'));
    }

    
    public function showSpecific($id)
    {
        $user = Auth::user()->name;
        $products = DB::table('products')
        ->where('productCode',$id)->first();

        $categories  = DB::table('productlines')->get();

         $footer = DB::table('productlines')
        ->skip(0)
        ->take(5)
        ->get();

         $footertwo = DB::table('productlines')
        ->skip(5)
        ->take(15)
        ->get();
        return view('user.productLine.specific', compact('products', 'categories','footer','footertwo', 'user'));
    }

    public function about()
    {
        $user = Auth::user()->name;
        $products = DB::table('productlines')
        ->get();

         $footer = DB::table('productlines')
        ->skip(0)
        ->take(5)
        ->get();

         $footertwo = DB::table('productlines')
        ->skip(5)
        ->take(15)
        ->get();

        return view('user.productLine.about', compact('products','footer','footertwo', 'user'));
    }
}
