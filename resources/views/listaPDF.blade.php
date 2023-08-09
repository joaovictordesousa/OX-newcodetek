<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de PDF</title>
</head>
<body>
    <style>

        th {
            border: 2px solid black;
        }

        td {
            text-align: center;
            gap: 10px;
            font-size: 18px;
        }

        .cabecalho_pdf {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            margin: 0 0 3em 0;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2; /* Cor de fundo para linhas pares */
        }
        
    </style>

    <header class="cabecalho_pdf">
        <h2 class="titulo_historico_animais">Relatório de prenhez</h2>
    </header>

    <div class="container">
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
