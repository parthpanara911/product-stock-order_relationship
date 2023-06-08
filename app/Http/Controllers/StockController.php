<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\Stock;
use App\Models\Product;

class StockController extends Controller
{
    public function create()
    {

        $url = url('/stock');
        $value_stock = old('stock');
        $value_date = old('date');
        $value_product= old('product');
        $title = "Stock";
        $products = Product::all();
        $data = compact('url', 'value_stock', 'value_date', 'value_product' , 'title', 'products');
        return view('/task/stock-form')->with($data);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product' => 'required',
            'stock' => 'required|numeric|min:0',
            'date' => 'required|date',
        ]);

        $stock = new Stock();
        $stock->product = $request['product'];
        $stock->stock = $request['stock'];
        $stock->stock = $validatedData['stock'];
        $stock->date = $request['date'];
        $stock->save();

        return redirect('/stock/view');
    }

    // View Data
    public function view()
    {
        $stocks = stock::all();
        $data = compact('stocks');
        return view('task/stock')->with($data);
        // return view('data')->with('data', $data);
    }

   // Delete Data
    public function delete(Request $request)
    {
        $id = $request->input('id');
        $stock = Stock::find($id);
        if (!is_null($stock)) {
            $stock->delete();
            // session()->flash('success', 'data is deleted successfully');
        }
        return response()->json();
    }
    
}
