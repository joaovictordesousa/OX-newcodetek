@include('cabecalho.cabecalho')

<style>
    #form_cadastro {
        width: 70%;
    }

    @media screen and (max-width: 700px) {
        #form_cadastro {
            width: 100%;
        }
    }
</style>

<form action="{{ route('sheet.store') }}" method="POST" id="form_cadastro">
    @csrf
    <div class="row g-3" id="container_divs_cadastro">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Numero da Vaca</label>
            <input type="text" class="form-control" id="tag" name="tag" required>
        </div>

        <div class="col-md-6">
            <label for="validationDefault04" class="form-label">Raça do touro</label>
            <select class="form-select" id="bull_tag" name="bull_tag" required>
                <option selected disabled value="">Selecione...</option>
                @foreach ($racadotouro as $touro)
                <option value="{{ $touro->id }}">{{ $touro->bull_tag }}</option>
                @endforeach
            </select>
        </div>
        

        <div class="col-md-6">
            <label for="validationDefault04" class="form-label">Nome do Inseminador</label>
            <select class="form-select" id="inseminator_name" name="inseminator_name" required>
                <option selected disabled value="">Selecione...</option>
                @foreach ($inseminador  as $insemi)
                <option value="{{ $insemi->id }}">{{ $insemi->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Dia do inseminação</label>
            <input type="date" class="form-control" id="insemination_date" name="insemination_date" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Obs sobre a Insemeninação</label>
            <textarea class="form-control" id="obsinseminacao" name="obsinseminacao" rows="3"></textarea>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-success">CADASTRAR</button>
            <a href="{{ route('sheet.dashboard') }}" class="btn btn-danger">CANCELAR</a>
        </div>
</form>
