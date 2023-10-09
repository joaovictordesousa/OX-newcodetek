@include('cabecalho.cabecalho')

<style>
    #campo_tabela_insemi {
        width: 20%
    }

    th {
        text-align: center;
    }

    td {
        text-align: center;
    }
</style>


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

<form action="{{ route('inseminador.store') }}" method="POST" id="form_cadastro">
    @csrf
    <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Nome do Inseminador</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-success">CADASTRAR</button>
        <a href="{{ route('sheet.dashboard') }}" class="btn btn-danger">CANCELAR</a>
    </div>

</form>
<br><br>
<div class="table-responsive small" id="campo_tabela_insemi">
    <table class="table table-striped table-sm">

        <thead>
            <tr>
                <th>Nome do Inseminador</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($AllInseminador as $insemi)
                <tr>
                    <td>{{ $insemi->name }}</td>

                    <td>
                        <a type="button" class="btn btn-primary"
                            href="{{ route('inseminador.edit', ['Inseminador' => $insemi->id]) }}" title="Editar"><ion-icon name="pencil-outline"></ion-icon></a>
                    </td>

                    <td>
                        <form action="{{ route('inseminador.destroy', ['Inseminador' => $insemi->id]) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" title="Excluir"><ion-icon name="trash-outline"></ion-icon></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>