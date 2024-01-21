<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productlines;
use App\Models\Products;
use Exception;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // CREATE
    // PRODUCTLINES
    public function addview()
    {
        return view('admin.productlines.add_productlines_view');
    }

    public function upload(Request $request)
    {
        try {
            $productlines = new productlines;
            $image = $request -> image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
    
            $request->image->move('productlinesimage', $imagename);
            $productlines->image=$imagename;
    
            $productlines->id=$request->id;
            $productlines->productLine=$request->productLine;
            $productlines->textDescription=$request->textDescription;
            $productlines->htmlDescription=$request->htmlDescription;
    
            $productlines->save();
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }

        return redirect()->back()->with('message', 'The Product Category has been added successfully.');
    }

    // PRODUCTS
    public function addproductview()
    {
        $data = productlines::all();
        return view('admin.products.add_products_view', compact('data'));
    }

    public function uploadproducts(Request $request)
    {
        try {
            $products = new products;
            $image = $request -> image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
    
            $request->image->move('productsimage', $imagename);
            $products->image=$imagename;
            
            $products->id=$request->id;
            $products->productCode=$request->productCode;
            $products->productName=$request->productName;
            $products->productLine=$request->productLine;
            $products->productScale=$request->productScale;
            $products->productVendor=$request->productVendor;
            $products->productDescription=$request->productDescription;
            $products->quantityInStock=$request->quantityInStock;
            $products->buyPrice=$request->buyPrice;
            $products->MSRP=$request->MSRP;
    
            $products->save();
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }

        return redirect()->back()->with('message', 'The Product Category has been added successfully.');
    }

    // SHOW
    // PRODUCTLINES
    public function showproductlines()
    {
        $data = productlines::all();
        return view('admin.productlines.showproductlines', compact('data'));
    }

    public function showprodpercateg($productLine)
    {
        $data = Products::where('productLine',$productLine)->paginate(100);

        return view('admin.productlines.showproductspercateg', compact('data'));
    }

    // PRODUCTS
    public function showallproducts()
    {
        $data = products::all();
        return view('admin.products.showallproducts', compact('data'));
    }

    public function viewproduct($id)
    {
        $data = DB::table('products')
        ->where('id',$id)->first();
        
        return view('admin.products.viewproduct', compact('data'));
    }

    // UPDATE
    // PRODUCTLINES
    public function updateproductline($id)
    {
        $data = DB::table('productlines')
        ->where('id',$id)->first();
        
        return view('admin.productlines.update_productline', compact('data'));
    }

    public function editproductline(Request $request, $id)
    {
        try {
            $p_line = Productlines::find($id);

            $p_line->productLine=$request->productLine;
            $p_line->textDescription=$request->textDescription;
            $p_line->htmlDescription=$request->htmlDescription;
            $image=$request->image;
            if($image)
            {
                $imagename = time().'.'.$image->getClientOriginalExtension();
                $request->image->move('productlinesimage', $imagename);
                $p_line->image=$imagename;
            }
    
            $p_line->save();
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }

        return redirect()->back()->with('message', 'The Product Category has been successfully updated.');
    }

    // PRODUCTS
    public function updateproduct($id)
    {
        $data = DB::table('products')
        ->where('id',$id)->first();

        $dataa = productlines::all();
        
        return view('admin.products.update_product', compact('data', 'dataa'));
    }

    public function editproduct(Request $request, $id)
    {
        try {
            $prod = Products::find($id);

            $prod->productCode=$request->productCode;
            $prod->productName=$request->productName;
            $prod->productLine=$request->productLine;
            $prod->productScale=$request->productScale;
            $prod->productVendor=$request->productVendor;
            $prod->productDescription=$request->productDescription;
            $prod->quantityInStock=$request->quantityInStock;
            $prod->buyPrice=$request->buyPrice;
            $prod->MSRP=$request->MSRP;
            $image=$request->image;
            if($image)
            {
                $imagename = time().'.'.$image->getClientOriginalExtension();
                $request->image->move('productsimage', $imagename);
                $prod->image=$imagename;
            }

            $prod->save();
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        
        return redirect()->back()->with('message', 'The Product Category has been successfully updated.');
    }

    // DELETE
    // PRODUCTLINES
    public function deleteproductline($productLine)
    {
        try {
            $data = DB::table('productlines')
            ->where('productLine',$productLine)
            ->delete(); 
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        
        return redirect()->back()->with('message', 'The Product Category has been successfully deleted.');
    }

    // PRODUCTS
    public function deleteproduct($productCode)
    {
        $data = DB::table('products')
        ->where('productCode',$productCode)
        ->delete(); 

        return redirect()->back()->with('message', 'The Product has been successfully deleted.');
    }
}
