<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
    public function index()
    {
        // if (request()->ajax()) {
        //     return DataTables::eloquent(User::query())->make(true);
        // }
        // $users = User::all();
        $products = Product::all();
        return view('product_table', compact('products'));
    }
    //
    public function addProductPage()
    {
        return view('add_product');
    }

    public function storeProduct(Request $request)
    {
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'assets/uploads/';
            $file->move(public_path($path), $filename);
        }
        $product = new Product();
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = "$path$filename";
        $product->status = $request->status;
        $product->stock = $request->stock;
        $product->tags = $request->tags;
        $product->save();
        return redirect('/all_products');
    }

    public function editProductPage($id)
    {
        $decryptedId = Crypt::decrypt($id);
        $product = Product::find($decryptedId);

        return view('update_product', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'assets/uploads/';
            $file->move(public_path($path), $filename);
        }

        $product = Product::find($id);
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = "$path$filename";
        $product->status = $request->status;
        $product->stock = $request->stock;
        $product->tags = $request->tags;
        $product->save();
        return redirect('/all_products');
    }

    public function deletProduct($id)
    {
        $decryptedId = Crypt::decrypt($id);
        $product = Product::find($decryptedId);

        if ($product) {
            $product->delete();
            return redirect('/all_products');
        }
    }

    public function viewProduct($id)
    {
        $decryptedId = Crypt::decrypt($id);
        $product = Product::find($decryptedId);
        return view('view_product', compact('product'));
    }
}
