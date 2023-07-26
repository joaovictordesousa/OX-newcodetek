@include('cabecalho.cabecalho')

<form action="{{ route('sheet.update', ['sheet' => $sheet->id]) }}" class="row g-3" style="width: 70%" method="POST">
    @csrf
    <input type="hidden" name="_method" value="put">
    <div class="col-12">
        <label for="inputAddress" class="form-label">Nome ou
            Nº da Vaca</label>
        <input type="text" class="form-control" value="{{ $sheet->tag }}" name="tag" required>
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Nome ou Nº
            do Touro</label>
        <input type="text" class="form-control" value="{{ $sheet->bull_tag }}" name="bull_tag" required>
    </div>

    <div class="col-12">
        <label class="form-label">Nome do
            Inseminador</label>
        <input type="text" class="form-control" value="{{ $sheet->inseminator_name }}" name="inseminator_name" required>
    </div>


    <div class="col-md-6">
        <label for="dtinseminacao" class="form-label">Dia do inseminação</label>
        <input type="date" class="form-control" value="{{ $sheet->Insemination_date }}" name="insemination_date" required>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
</form>
