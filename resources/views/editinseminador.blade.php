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

<form action="{{ route('inseminador.update', ['Inseminador' => $insemi->id]) }}" method="POST" id="form_cadastro">
    @csrf
    @method('PUT') <!-- Adicione esta linha para usar o método PUT -->

    <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Nome do Inseminador</label>
        <input type="text" class="form-control" value="{{ $insemi->name }}" name="name" required>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-success">ATUALIZAR</button>
        <a href="{{ route('inseminador.cadastrainseminador') }}" class="btn btn-danger">CANCELAR</a>
    </div>

</form>

