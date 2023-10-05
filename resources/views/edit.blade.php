@include('cabecalho.cabecalho')

<form action="{{ route('sheet.update', ['sheet' => $sheet->id]) }}" class="row g-3" style="width: 70%" method="POST">
    @csrf
    <input type="hidden" name="_method" value="put">
    <div class="row g-3" id="container_divs_cadastro">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Numero da Vaca</label>
            <input type="text" class="form-control" value="{{ $sheet->tag }}" name="tag" required>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Raça do Touro</label>
            <select class="form-select" id="bull_tag" name="bull_tag" required>
                <option selected disabled value="">Selecione...</option>
                @foreach ($racadotouro as $touro)
                    <option value="{{ $touro->id }}" {{ $sheet->bull_tag == $touro->id ? 'selected' : '' }}>{{ $touro->bull_tag }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nome do Inseminador</label>
            <select class="form-select" id="inseminator_name" name="inseminator_name" required>
                <option selected disabled value="">Selecione...</option>
                @foreach ($inseminador  as $insemi)
                <option value="{{ $insemi->id }}" {{ $sheet->inseminator_name == $insemi->id ? 'selected' : '' }}>{{ $insemi->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Dia do inseminação</label>
            <input type="date" class="form-control" value="{{ $sheet->insemination_date }}" name="insemination_date" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Obs sobre a Insemeninação</label>
            <textarea class="form-control" id="obsinseminacao" name="obsinseminacao" rows="3" value="{{ $sheet->obsinseminacao }}">{{ $sheet->obsinseminacao }}</textarea>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">ATUALIZAR</button>
        </div>
</form>
