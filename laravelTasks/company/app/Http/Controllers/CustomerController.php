<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\models\Customer;

class CustomerController extends Controller
{
    public function show($id)
    {
        try {
            $customer = Customer::findOrFail($id);
            $employee = $customer->employee;
            $orders = $customer->orders()->latest()->take(10)->get();
            return view('customers.show', compact('customer', 'employee', 'orders'));
        } catch (ModelNotFoundException $exception) {
            return view('customers.notfound', compact('id'));
        }
    }
}
