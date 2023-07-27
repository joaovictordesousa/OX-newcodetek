@include('cabecalho.cabecalho')

<form action="{{ route('sheet.store') }}" method="POST" style="width: 50%;">
    @csrf
           <div class="row g-3" id="container_divs_cadastro">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nome ou Nº da Vaca</label>
                <input type="text" class="form-control"  id="tag"  name="tag" required>
              </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Nome ou Nº do Touro</label>
                <input type="text" class="form-control" id="bull_tag" name="bull_tag" required>
              </div>

              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nome do Inseminador</label>
                <input type="text" class="form-control" id="inseminator_name" name="inseminator_name" required>
              </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Dia do inseminação</label>
                <input type="date" class="form-control" id="insemination_date" name="insemination_date" required>
              </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">CADASTRAR</button>
    </div>
</form>


