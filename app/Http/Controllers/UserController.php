<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class UserController extends Controller
{
    public function create()
    {
        $url = url('/form');
        $value_name = old('name');
        $value_email = old('email');
        $value_password = "";
        $value_file = old('file');
        $title = "Create Form";
        $data = compact('url', 'value_name', 'value_email', 'value_password', 'value_file', 'title');
        return view('form')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            // 'password' => 'required|confirmed|min:6',
            // 'password_confirmation' => 'required|same:password',
            'password' => 'required|min:6',
            'file' => 'required',
        ]);
        // Insert Data
        $customer = new Customer();
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = $request['password'];

        if ($files = $request->file('file')) {
            $name = $files->getClientOriginalName();
            $files->move('images', $name);
            $customer->file = $name;
        }

        $customer->save();
        return redirect('/form/view');
    }

    // View Data
    public function view()
    {
        $customers = Customer::all();
        $data = compact('customers');
        return view('form-view')->with($data);
    }

    // Delete Data
    public function delete($id)
    {
        // Customer::find($id)->delete();
        // return redirect()->back();
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect('/form/view');
    }

    // Edit
    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null(($customer))) {
            // not found
            return redirect('/form/view');
        } else {
            $value_name = $customer->name;
            $value_email = $customer->email;
            $value_password = $customer->password;
            $value_file = $customer->file;
            $title = "Update Form";
            $url = url('/form/update') . "/" . $id;
            $data = compact('customer', 'url', 'value_name', 'value_email', 'value_password', 'value_file', 'title');
            return view('form')->with($data);
        }
    }

    // Update
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            // 'password' => 'required|confirmed|min:6',
            // 'password_confirmation' => 'required',
            'password' => 'required|min:6',
            'file' => 'required',
        ]);
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = $request['password'];

        if ($files = $request->file('file')) {
            $name = $files->getClientOriginalName();
            $files->move('images', $name);
            $customer->file = $name;
        }

        $customer->save();
        return redirect('/form/view');
    }
}
