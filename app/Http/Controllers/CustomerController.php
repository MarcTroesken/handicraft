<?php

namespace App\Http\Controllers;

use App\Customer;

class CustomerController extends Controller
{
    /**
     * Return all customers from database
     *
     * @return json
     */
    public function index()
    {
        // ToDo: Add user scope, after authentication is done
        return Customer::latest()->get();
    }
    /**
     * Stote a new customer in database
     *
     * @return json
     */
    public function store()
    {
        $customer = Customer::create(request()->all());

        return response()->json([
            'status' => 'ok',
            'customer' => $customer,
        ]);
    }

    /**
     * Update a customer instance in database
     *
     * @param Customer $customer
     * @return json
     */
    public function update(Customer $customer)
    {
        $customer->update(request()->all());

        return response()->json([
            'status' => 'ok',
            'customer' => $customer->fresh(),
        ]);
    }
}
