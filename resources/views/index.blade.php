@include('cabecalho.cabecalho')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Historico de animais</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          </div>
        </div>
      </div>
      
      <br><br>

      <h2>Section title</h2>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Numero do Animal</th>
              <th scope="col">Dia do inseminação</th>
              <th scope="col">Data prevista para parir</th>
              <th scope="col">Editar</th>
              <th scope="col">Deletar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>03</td>
              <td>23/02/2022</td>
              <td>23/02/2023</td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

@yield('scripts')
<script src="js/color-modes.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"     ></script>

</body>
</html>
