<?php

namespace App\Http\Controllers;

use App\Models\Sheet;
use App\Models\Racadotouro;
use App\Models\Inseminador;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class SheetController extends Controller
{
    public function index()
    {
        $AllSheet = Sheet::all();
        $AllSheet = Sheet::orderBy('id', 'desc')->paginate(13);
        return view('index', ['AllSheet' => $AllSheet]);
    }

    public function create()
    {
        $racadotouro = Racadotouro::all();
        $inseminador = Inseminador::all();


        return view('cadastro', [
            'racadotouro' => $racadotouro,
            'inseminador' => $inseminador
        ]);
    }


    public function store(Request $request)
    {
        $bithDate = Sheet::BirthPrediction($request->insemination_date);

        $data = [
            'tag' => $request->input('tag'),
            'bull_tag' => $request->input('bull_tag'),
            'inseminator_name' => $request->input('inseminator_name'),
            'insemination_date' => $request->input('insemination_date'),
            'birth_prediction' => $bithDate,
            'obsinseminacao' => $request->input('obsinseminacao')

        ];

        $validator = Sheet::validateData($data);

        $validated = $validator->validated();

        Sheet::create($validated);


        return redirect()->route('sheet.index')->with('success', 'Cadastrado com sucesso.');
    }

    public function show(Sheet $sheet)
    {
        return view('show', [
            'sheet' => $sheet
        ]);
    }

    public function edit(Sheet $sheet)
    {

        $racadotouro = Racadotouro::all();
        $inseminador = Inseminador::all();

        return view('edit', [
            'sheet' => $sheet,
            'racadotouro' => $racadotouro,
            'inseminador' => $inseminador
        ]);
    }

    public function update(Request $request, string $id)
    {

        $bithDate = Sheet::BirthPrediction($request->insemination_date);

        $data = [
            'tag' => $request->input('tag'),
            'bull_tag' => $request->input('bull_tag'),
            'inseminator_name' => $request->input('inseminator_name'),
            'insemination_date' => $request->input('insemination_date'),
            'birth_prediction' => $bithDate,
            'obsinseminacao' => $request->input('obsinseminacao')
        ];

        $validator = Sheet::validateData($data);


        $validated = $validator->validated();
        Sheet::where('id', $id)->update($validated);

        return redirect()->route('sheet.index');
    }

    public function destroy(Sheet $sheet)
    {
        $sheet->delete();

        return redirect()->route('sheet.index')->with('success', 'Registro excluído com sucesso.');
    }


    public function pdf(Sheet $sheet)
    {
        $pdf = Pdf::loadView('FichaPDF', ['sheet' => $sheet]);
        // return $pdf->download('Ficha_completa.pdf');
        return $pdf->stream('Ficha_completa.pdf');
    }
}
