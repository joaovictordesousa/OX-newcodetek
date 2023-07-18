@include('cabecalho.cabecalho')

  <form action="/cadastro" class="row g-3" style="width: 70%" method="POST">

    <div class="col-12"> 
      <label for="inputAddress" class="form-label">Numero do Animal</label>
      <input type="number" class="form-control" id="nranimal" placeholder="Numero do Animal" required>
    </div>

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

    <div class="col-md-6">
      <label for="dtinseminacao" class="form-label">Dia do inseminação</label>
      <input type="date" class="form-control" id="dtinseminacao" name="dtinseminacao" required>
    </div>
    <div class="col-md-6">
      <label for="dtprevista" class="form-label">Data prevista para parir</label>
      <input type="date" class="form-control" id="dtprevista" name="dtprevista" required>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">CADASTRAR</button>
    </div>
  </form>

