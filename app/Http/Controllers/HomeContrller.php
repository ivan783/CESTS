<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cest;

class HomeContrller extends Controller
{
    public function __invoke()
    {
        $cests = Cest::where('status','3')->latest('id')->get();
        

        return view('welcome', compact('cests'));
    }
}
