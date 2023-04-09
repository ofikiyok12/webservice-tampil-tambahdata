<?php

namespace App\Http\Controllers;

// use app\Soal;
 use App\Http\Controllers\SoallController;
use Illuminate\Http\Request;

class SoallController extends Controller
{
    public function index()
    {
        $soal = Soal::all();
        dd($soal);

        // return('tes');
    }
}
