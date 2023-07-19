<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdditionalCost;

class AdditionalCostController extends Controller
{
    public function index()
    {
       $additionalcosts = AdditionalCost::all();
        // return view('Cost.index', compact('additionalcosts')); 
    }

    public function create()
    {
        return view('Cost.create-uts');
    }

    public function store(Request $request)
    {
        $data  = AdditionalCost::create($request->all());
        return redirect('additionalcosts');
    }

    // public function destroy(Siswa $id) 
    // {
    //     $id->delete();
    //     return redirect('siswa');
    // }

    // public function edit(Siswa $data)
    // {
    //     return view('Siswa.edit', compact('data'));
    // }

    // public function update(Request $request, Siswa $data)
    // {
    //     $data->update($request->all());
    //     return redirect('siswa');
    //    }



}
