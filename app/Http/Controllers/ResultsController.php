<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ResultsController extends Controller
{
    public function results()
    {
        $results = Session::get('teste');
        return view('results')->with('results', $results);
    }
}
