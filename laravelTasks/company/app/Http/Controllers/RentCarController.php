<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Car;
use App\models\Customer;

class RentCarController extends Controller {

    public function index() {
        return view('cars.index', ['listCars' => Car::all()]);
    }

    public function rentCar($id, Request $request) {
        $customer = Customer::where('name', $request->name)
            ->where('surname', $request->surname)
            ->first();
    
        $car = Car::findOrFail($id);
        if ($car->available) {
            if ($customer) {
                $car->update([
                    'available' => 0,
                    'customer_id' => $customer->id
                ]);
                return redirect('/cars');
            } else {
                return back()->withErrors("Customer not found");
            }
    }
}

    public function showRentForm($id) {
        $car = Car::findOrFail($id);
        return view('cars.rentform', compact('car'));
    }
}


