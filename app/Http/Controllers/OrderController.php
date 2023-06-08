<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;
use App\Models\Product;
use App\Models\Stock;

class OrderController extends Controller
{

    public function create()
    {
        $url = url('/order');
        $value_date = old('date');
        $value_prize = old('prize');
        $value_quantity = old('quantity');
        $value_totalprize = old('totalprize');
        $value_product = old('product');
        $title = "Order";
        $products = Product::all();

        $data = compact('url', 'value_date' , 'value_prize', 'value_quantity', 'value_totalprize', 'value_product', 'title', 'products');
        return view('/task/order-form')->with($data);
    }

    public function getProductPrice(Request $request)
    {
        $product = Product::where('name', $request->input('product'))->first();
        return response()->json(['prize' => $product->prize]);
    }

    // Insert
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product' => 'required',
            'prize' => 'required|numeric',
            'quantity' => 'required|numeric',
            'totalprize' => 'required|numeric',
            'date' => 'required|date',
        ]);

        // Retrieve the available stock for the selected product
        $stock = Stock::where('product', $request->input('product'))->first();

        if (!$stock) {
            // Handle case when stock record is not found for the selected product
            return redirect()->back()->withErrors(['product' => 'Invalid product selected'])->withInput();
        }

        if ($validatedData['quantity'] > $stock->stock) {
            // Quantity exceeds available stock
            return redirect()->back()->withErrors(['quantity' => "The quantity field must be less than or equal to {$stock->stock}."])->withInput();
        }

        // Update the available stock in the stock table
        $stock->stock -= $validatedData['quantity'];
        $stock->save();

        // Process the order

        // Redirect or return a response

        $order = new Order();
        $order->product = $request['product'];
        $order->prize = $request['prize'];
        $order->quantity = $request['quantity'];
        $order->totalprize = $request['totalprize'];
        $order->date = $request['date'];
        $order->save();

        return redirect('/order/view');
    }
    
    // View Data
    public function view()
    {
        $orders = Order::all();
        $data = compact('orders');
        return view('task/order')->with($data);
    }


    // Delete Data
    public function delete(Request $request)
    {
        $id = $request->input('id');
        $order = Order::find($id);
        if (!is_null($order)) {
            $order->delete();
            // session()->flash('success', 'data is deleted successfully');
        }
        return response()->json();
    }
}
