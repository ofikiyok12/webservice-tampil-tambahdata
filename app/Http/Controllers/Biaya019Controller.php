<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerModel;

class Biaya019Controller extends Controller
{
    public function index()
    {
       $customer = CustomerModel::all();
        return response()->json($customer, 200);  
        //  return view('customer.index', compact('customer')); 
        
    }

    // cara 1
    // public function show(Biaya019Model $id)
    // {
    //     return response()->json($id, 200); 
        
    // }


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
                'data' => $customer9
            ],200);


    }

    public function store(Request $request)
    {
       return CustomerModel::create($request->all());


    }

    public function destroy(CustomerModel $id)
    {
       $id->delete();
       return response()->json([
            'message'=> 'data berhasil dihapus'
       ]);


    }

    // public function create()
    // {
    //     return view('Cost.create-uts');
    // }

    // public function store(Request $request)
    // {
    //     $data  = Biaya019Model::create($request->all());
    //     return redirect('uts');
    // }

    // public function edit(Biaya019Model $data)
    // {
    //     return view('Cost.edit-uts', compact('data'));
    // }

    // public function update(Request $request, Biaya019Model $data)
    // {
    //     $data->update($request->all());
    //     return redirect('uts');
    //    }

    //  public function destroy(Biaya019Model $id) 
    // {
    //        $id->delete();
    //        return redirect('uts');
    //    }   
}
