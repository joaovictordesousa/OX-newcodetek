@include('cabecalho.cabecalho')

 <style>

#form_retariomes {
  width: 50%
}
@media screen and (max-width: 700px) {
    #form_retariomes {
        width: 100%;
    }
}

 </style>

<h1 class="titulo_relatoriomes">Relatorio do mês</h1>

<form action="{{ route('report.GetReports') }}" class="row g-3" style="" id="form_retariomes" method="POST">
    @csrf
    <div class="col-12"> 
    </div>

    <div class="col-12"> 
    <label for="inputAddress" class="form-label">Data do relatorio</label>
    <div class="input-group mb-3">
        <input type="date" class="form-control" name="startDate">
        <span class="input-group-text">a</span>
        <input type="date" class="form-control" name="endDate">
      </div>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">GERAR RELATORIO</button>
    </div>
  </form>
  

@yield('scripts')
<script src="js/color-modes.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>

</body>
</html>