@include('cabecalho.cabecalho')

<h1 class="titulo_relatoriomes">Relatorio do mês</h1>

<form action="{{ route('NovoCadastro.store') }}" class="row g-3" style="width: 70%" method="POST">
    @csrf
    <div class="col-12"> 
    <label for="inputAddress" class="form-label">Raça do touro</label>
    <select class="form-select" aria-label="Default select example" id="racaboi" name="racaboi" required>
      <option selected >Selecione</option>
      <option value="Senepol">Curraleiro</option>
      <option value="Angus">Guzerá</option>
      <option value="Nelore">Nelore</option>
      <option value="Brahman">Brahman</option>
      <option value="Brangus">Brangus</option>
      <option value="Senepol">Senepol</option>
      <option value="Senepol">Hereford</option>
      <option value="Senepol">Angus</option>
      <option value="Senepol">Tabapuã</option>
      <option value="Senepol">Gir</option>
      <option value="Senepol">Gir leiteiro</option>
      <option value="Senepol">Caracu</option>
    </select>
    </div>

    <div class="col-12"> 
    <label for="inputAddress" class="form-label">Data do relatorio</label>
    <div class="input-group mb-3">
        <input type="date" class="form-control" placeholder="Username" aria-label="Username">
        <span class="input-group-text">a</span>
        <input type="date" class="form-control" placeholder="Server" aria-label="Server">
      </div>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">CADASTRAR</button>
    </div>
  </form>
  

@yield('scripts')
<script src="js/color-modes.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"     ></script>

</body>
</html>