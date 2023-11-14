<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobile;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexFromCustomer($id)
    {
        //get data from Customer Model
        $customer = Customer::find($id);
        // dd($customer);
        var_dump($customer->name);
        var_dump($customer->email);
        var_dump($customer->mobile->model);
    }

    public function indexFromMobile($id)
    {
        //get data from Mobile Model
        $customer = Mobile::find($id)->customer;
        var_dump($customer->name);
        var_dump($customer->email);

        //get data from Customer Model
        $mobile = Customer::find($id)->mobile;
        var_dump($mobile->model);
    }
}
