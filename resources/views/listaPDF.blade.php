<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de PDF</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo_historico_animais">Animais com parto previsto para essa data:</h2>
        <table class="table table-hover text-center shadow">
            <thead class="table-dark">
                <tr>
                    <th>Nome ou Nº da Vaca</th>
                    <th>Nome ou Nº do Touro</th>
                    <th>Nome do Inseminador</th>
                    <th>Data da Inseminação</th>
                    <th>Data de nascimento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->tag }}</td>
                        <td>{{ $item->bull_tag }}</td>
                        <td>{{ $item->inseminator_name }}</td>
                        <td>{{ $item->FormatDate($item->insemination_date) }}</td>
                        <td>{{ $item->FormatDate($item->birth_prediction) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
