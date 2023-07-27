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


        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

        
        if (!$startDate || !$endDate) {
            return redirect()->back()->with('error', 'Por favor, informe as datas corretamente.');
        }

        
        $startDate = Carbon::parse($startDate)->startOfDay();
        $endDate = Carbon::parse($endDate)->endOfDay();

        $results = Sheet::whereBetween('birth_prediction', [$startDate, $endDate])->get();



        print(count($results));

        //     return redirect()->route('report.results', [
        //         'results' => $results->id
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function results(string $id)
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