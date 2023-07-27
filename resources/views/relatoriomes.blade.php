@include('cabecalho.cabecalho')

<h1 class="titulo_relatoriomes">Relatorio do mês</h1>

<form action="{{ route('report.GetReports') }}" class="row g-3" style="width: 70%" method="POST">
    @csrf
    <div class="col-12"> 
    </div>

    <div class="col-12"> 
    <label for="inputAddress" class="form-label">Data do relatorio</label>
    <div class="input-group mb-3">
        <input type="date" class="form-control" name="data_inicial">
        <span class="input-group-text">a</span>
        <input type="date" class="form-control" name="data_final">
      </div>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Imprimir</button>
    </div>
  </form>
  

@yield('scripts')
<script src="js/color-modes.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>

</body>
</html>