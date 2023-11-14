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

    <div class="compo_pesquisa">
        <form action="{{ route('sheet.dashboard') }}" method="GET">
            @csrf
            <div class="input-container">
                <label class="label_pesquisa"><b>PESQUISAR</b></label>
                <div class="input_btn">
                    <input class="input_pesquisa" type="text" id="search" name="search"
                        placeholder="Pesquisar por nome..." value="{{ request('search') }}">
                    <button type="submit" class="butao_pesquisar">PESQUISAR</button>
                    @if (request('search'))
                        <a href="{{ route('sheet.dashboard') }}" class="cancelar_pesquisa">Cancelar pesquisa</a>
                    @endif
                </div>
            </div>
        </form>
    </div>

    <br><br>

    <h2 class="titulo_historico_animais">Histórico bovino</h2>
    <div class="table-responsive small">
        @if (count($AllSheet) > 0)
            <table class="table table-striped table-sm">

                <thead>
                    <tr>
                        <th>Nome ou Nº da Vaca</th>
                        <th>Nome ou Nº do Touro</th>
                        <th>Nome do Inseminador</th>
                        <th>Data da Inseminação</th>
                        <th>Data de nascimento</th>
                        <th></th>
                        <th>Ações</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($AllSheet as $sheet)
                        <tr>
                            <td>{{ $sheet->tag }}</td>
                            <td>{{ $sheet->Racadotouro->bull_tag }}</td>
                            <td>{{ $sheet->Inseminador->name }}</td>
                            <td>{{ $sheet->FormatDate($sheet->insemination_date) }}</td>
                            <td>{{ $sheet->FormatDate($sheet->birth_prediction) }}</td>
                            <td>
                                <a type="button" class="btn btn-success"
                                    href="{{ route('sheet.show', ['sheet' => $sheet->id]) }}" title="Ver mais">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </a>
                            </td>
                            <td>
                                <a type="button" class="btn btn-primary"
                                    href="{{ route('sheet.edit', ['sheet' => $sheet->id]) }}" title="Editar"><ion-icon
                                        name="pencil-outline"></ion-icon></a>
                            </td>

                            <td>
                                <form action="{{ route('sheet.destroy', ['sheet' => $sheet->id]) }}" method="POST"
                                    onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" title="Excluir"><ion-icon
                                            name="trash-outline"></ion-icon></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $AllSheet->appends([
                    'search' => request()->get('search', ''),
                ])->links() }}
    </div>
@else
    <p class="alert_naoencontrado">Nenhum resultado encontrado. 😢</p>
    @endif
</main>
</div>
</div>

@yield('scripts')
<script src="js/color-modes.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>

</body>

</html>
