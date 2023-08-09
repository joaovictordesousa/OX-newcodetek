@include('cabecalho.cabecalho')

<style>
th {
    text-align: center;
}

td {
    text-align: center;
}
</style>

<main class="col-md-9 ms-sm-5 col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            </div>
        </div>
    </div>

    <br><br>
    <h2 class="titulo_historico_animais">Previsão de parto dos animais para esta data:</h2>
    <div class="table-responsive small">
        <table class="table table-striped table-sm">

            <thead>
                <tr>
                    <th>Nome ou Nº da Vaca</th>
                    <th>Nome ou Nº do Touro</th>
                    <th>Nome do Inseminador</th>
                    <th>Data da Inseminação</th>
                    <th>Data de nascimento</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $sheet)
                    <tr>
                        <td>{{ $sheet->tag }}</td>
                        <td>{{ $sheet->bull_tag }}</td>
                        <td>{{ $sheet->inseminator_name }}</td>
                        <td>{{ $sheet->FormatDate($sheet->insemination_date) }}</td>
                        <td>{{ $sheet->FormatDate($sheet->birth_prediction) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('report.pdf') }}" class="btn btn-success" target="_blank"
        style="padding: 10px 2em"><ion-icon name="download-outline"></ion-icon>Baixar PDF</a>

</main>
</div>
</div>

@yield('scripts')
<script src="js/color-modes.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>

</body>

</html>
<br><br><br><br>