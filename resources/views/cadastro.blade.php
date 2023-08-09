@include('cabecalho.cabecalho')

<style>
  #form_cadastro {
    width: 50%;
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
                <label for="inputEmail4" class="form-label">Nome ou Nº da Vaca</label>
                <input type="text" class="form-control"  id="tag"  name="tag" required>
              </div>

              <div class="col-md-6">
                <label for="validationDefault04" class="form-label">State</label>
                <select class="form-select" id="bull_tag" name="bull_tag" required>
                  <option selected disabled value="">Selecione...</option>
                  <option value="angus">Angus</option>
                  <option value="hereford">Hereford</option>
                  <option value="brahman">Brahman</option>
                  <option value="nelore">Nelore</option>
                  <option value="charolais">Charolais</option>
                  <option value="limousin">Limousin</option>
                  <option value="simmental">Simmental</option>
                  <option value="pardo-suico">Pardo Suíço</option>
                  <option value="brangus">Brangus</option>
                  <option value="simental">Simental</option>
                  <option value="red-angus">Red Angus</option>
                  <option value="marchigiana">Marchigiana</option>
                  <option value="guzerá">Guzerá</option>
                  <option value="hereford-branco">Hereford Branco</option>
                  <option value="senepol">Senepol</option>
                  <option value="aberdeen-angus">Aberdeen Angus</option>
                  <option value="romosinuano">Romosinuano</option>
                  <option value="wagyu">Wagyu</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="validationDefault04" class="form-label">Nome do Inseminador</label>
                <select class="form-select" id="inseminator_name" name="inseminator_name" required>
                  <option selected disabled value="">Selecione...</option>
                  <option value="João Victor">João Victor</option>
                  <option value="Fillipe">Fillipe</option>
                  <option value="Raimundão">Raimundão</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Dia do inseminação</label>
                <input type="date" class="form-control" id="insemination_date" name="insemination_date" required>
              </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">CADASTRAR</button>
    </div>
</form>


