<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $customer = Customer::all();
        // $customer = DB::table('customers')->where('customer_name', 'sohan')->first();

        // More efficient
        // $customer = Customer::where('customer_name', 'sohan')->first();  

        // find instance using id 
        // $customer = Customer::find(1);

        // $customer = Customer::pluck('city', 'customer_name');

        
        // $customer = Customer::count();

        // $customer = Order::max('price');

        // $customer = Order::min('price');

        $customer = "no data";

        // if (Order::where('is_completed',1)->exists()){

        //     $customer = Order::where('is_completed',1)->avg('price');
        // }
        // if (Order::where('is_completed',1)->doesntExist()){

        //     $customer = "did not get any information";
        // }
        // $querys = Customer::select('customer_name as name', 'city');
        // $customer = $querys->addSelect('country')->get();
        // $customer = Customer::distinct()->get();

        // $orders = DB::table('orders')
        //         ->select('department', DB::raw('SUM(price) as total_sales'))
        //         ->groupBy('department')
        //         ->havingRaw('SUM(price) > ?', [2500])
        //         ->get();

                $customer = Customer::select('customer_name', DB::raw('SUM(price) as total_sales'))->groupBy('price')
                ->havingRaw('SUM(price) > ?', [2500])->get();




        return $customer;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
