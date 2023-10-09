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

<form action="{{ route('touro.update', ['Racadotouro' => $touro->id]) }}" method="POST" id="form_cadastro">
    @csrf
    @method('PUT')

    <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Raça do Touro</label>
        <input type="text" class="form-control" value="{{ $touro->bull_tag }}" name="bull_tag" required>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-success">CADASTRAR</button>
        <a href="{{ route('touro.cadastratouro') }}" class="btn btn-danger">CANCELAR</a>
    </div>

</form>
