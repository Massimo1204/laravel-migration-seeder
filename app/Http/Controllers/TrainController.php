<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::all();

        return view('trains.index', compact('trains'));
    }

    public function show($id){
        $train = Train::findOrFail($id);
        return view('trains.show', compact('train'));
    }
}
