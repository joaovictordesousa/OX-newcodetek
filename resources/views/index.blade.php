@include('cabecalho.cabecalho')

@if (session('success'))
    <div class="alert alert-primary">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function() {
            document.querySelector('.alert-primary').style.display = 'none';
        }, {{ session('display_time', 5000) }});
    </script>
@endif

    <main class="col-md-9 ms-sm-5 col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          </div>
        </div>
      </div>
      
      <br><br>

      <h2 class="titulo_historico_animais">Historico de animais</h2>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Numero do Animal</th>
              <th>Dia do inseminação</th>
              <th>Raça do boi</th>
              <th>Data prevista para parir</th>
              <th>Editar</th>
              <th>Deletar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($registro as $regis)
            <tr>
              <td>{{ $regis->nranimal }}</td>
              <td>{{ $regis->racaboi }}</td>
              <td>{{ $regis->dtinseminacao }}</td>
              <td>{{ $regis->dtprevista }}</td>
              <td>
                <a type="button" class="btn btn-secondary">Editar</a>
              </td>
              
              <td>
                <form action="{{ route('index.delete', ['registro' => $registro->id]) }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger">Deletar</button>
              </form>        
              
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{$registro->appends([
          'search' => request()->get('search','')
       ])->links()}}
      </div>
    </main>
  </div>
</div>

@yield('scripts')
<script src="js/color-modes.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>

</body>
</html>
