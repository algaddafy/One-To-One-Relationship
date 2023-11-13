<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function add_customer()
    {
        $customer = new Customer();
        $customer->name = 'Gaddafy';
        $customer->email = 'gaddafy@gmail.com';
        
        $mobile = new Mobile();
        $mobile->model = 'iPhone';

        $customer->save();
        $customer->mobile()->save($mobile);
    }

    public function show_mobile($id)
    {
        $mobile = Customer::find($id)->mobile;
        return $mobile;
    }
}
