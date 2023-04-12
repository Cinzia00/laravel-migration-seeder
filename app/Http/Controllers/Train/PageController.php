<?php

namespace App\Http\Controllers\Train;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $trains = Train::where('orario_di_partenza', '>=', date("Y-m-d"))->get();
        
        $data = [
            'trains' => $trains
        ];

    
        return view('welcome', $data);
    }
}
