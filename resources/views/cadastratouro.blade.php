@include('cabecalho.cabecalho')

<style>
        #campo_tabela_insemi {
        width: 40%
    }

    th {
        text-align: center;
    }

    td {
        text-align: center;
    }

    @media (max-width: 768px) {
        #campo_tabela_insemi {
        width: 100%
    }
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

    <form action="{{ route('touro.store') }}" method="POST" id="form_cadastro">
        @csrf


        <div class="col-md-4">
            <label for="inputPassword4" class="form-label">Raça do Touro</label>
            <input type="text" class="form-control" id="bull_tag" name="bull_tag" required>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-success">CADASTRAR</button>
            <a href="{{ route('sheet.dashboard') }}" class="btn btn-danger">CANCELAR</a>
        </div>

    </form>

    <br><br>
<div class="table-responsive small" id="campo_tabela_insemi" >
    <table class="table table-striped table-sm">

        <thead>
            <tr>
                <th>Nome do Inseminador</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($AllTouro as $touro)
                <tr>
                    <td>{{ $touro->bull_tag }}</td>

                    <td>
                        <a type="button" class="btn btn-primary"
                            href="{{ route('touro.edit', ['Racadotouro' => $touro->id]) }}" title="Editar"><ion-icon name="pencil-outline"></ion-icon></a>
                    </td>

                    <td>
                        <form action="{{ route('touro.destroy', ['Racadotouro' => $touro->id]) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?')">
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

