<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class ProductController extends Controller
{
    public function create()
    {
        $url = url('/product');
        $value_name = old('name');
        $value_date = old('date');
        $value_skucode = old('skucode');
        $value_prize = old('prize');
        $title = "Product";
        $data = compact('url', 'value_name', 'value_date', 'value_skucode', 'value_prize', 'title');
        return view('/task/product-form')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'skucode' => 'required|min:8|max:8|regex:/^[A-Z0-9]+$/',
            'category' => 'required',
            'prize' => 'required|numeric',
        ]);

        $product = new Product();
        $product->name = $request['name'];
        $product->date = $request['date'];
        $product->skucode = $request['skucode'];
        $product->category = $request['category'];
        $product->prize = $request['prize'];
        $product->save();

        return redirect('/product/view');
    }

    // View Data
    public function view()
    {
        $products = Product::all();
        $data = compact('products');
        return view('task/product')->with($data);
    }

    // Delete Data
    public function delete(Request $request)
    {
        $id = $request->input('id');
        $product = Product::find($id);
        if (!is_null($product)) {
            $product->delete();
            // session()->flash('success', 'data is deleted successfully');
        }
        return response()->json();
    }
}
