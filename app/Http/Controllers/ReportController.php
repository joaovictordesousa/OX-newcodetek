<?php

namespace App\Http\Controllers;

use App\Models\Sheet;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('relatoriomes');
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function GetReports(Request $request)
    {
        
        
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        
        
        if (!$startDate || !$endDate) {
            return redirect()->back()->with('error', 'Por favor, informe as datas corretamente.');
        }

        
        $startDate = Carbon::parse($startDate)->startOfDay();
        $endDate = Carbon::parse($endDate)->endOfDay();
        
        $results = Sheet::whereBetween('birth_prediction', [$startDate, $endDate])->get();
        Session::put('teste', $results);
        
        return redirect()->route('results.index');
        
    }
    

    public function pdf()
    {
        $data = Session::get('teste');
        $pdf = Pdf::loadView('listaPDF',compact('data'));
        return $pdf->stream('lista.pdf');
    }
}