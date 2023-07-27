<?php

namespace App\Http\Controllers;

use App\Models\Sheet;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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
    public function dfg()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function GetReports(Request $request)
    {
        $dataInicial = Carbon::createFromFormat('Y-m-d', $request->input('data_inicial'))->format('d/m/Y');
        $dataFinal = Carbon::createFromFormat('Y-m-d', $request->input('data_final'))->format('d/m/Y');
    
        $results = Sheet::where('birth_prediction', [$dataInicial, $dataFinal])->get();
       

        print($results);

    //     return redirect()->route('report.results', [
    //         'results' => $results->id
    // ]);
    }

    /**
     * Display the specified resource.
     */
    public function results(String $id )
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
