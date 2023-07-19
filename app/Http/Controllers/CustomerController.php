<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerModel;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = CustomerModel::all();
        return response()->json($data, 200);  
        // return view('Cost.index', compact('customer'))
    }


    //cara 2
    public function show($id)
    {
        $customer = CustomerModel::where('id', $id)->first();
        if (empty($customer)){
            return response()->json([
                'pesan' => 'Data Tidak ditemukan',
                'data' => null
            ],404);
        }

        return response()->json([
                'pesan' => 'Data Ditemukan',
                'data' => $customer
            ],200);


    }
}
