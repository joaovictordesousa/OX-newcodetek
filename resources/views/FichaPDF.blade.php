<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<style>
    /* Estilos gerais para a tabela */
    table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #ccc;
    }

    th,
    td {
        padding: 8px;
        border-bottom: 1px solid #ccc;
        text-align: left;
    }

    /* Estilos para o cabeçalho (primeira linha) */
    th {
        background-color: #f2f2f2;
    }

    /* Estilos para linhas pares (para facilitar a leitura) */
    tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    /* Estilos para os dados em negrito */
    td b {
        font-weight: bold;
    }

    /* Estilos para o título "Ficha completa" */
    h4 {
        font-size: 18px;
        margin-bottom: 10px;
    }
</style>

<div>
    <div>
        <h4>Ficha completa</h4>
        <div>
            <div>
                <div>
                    <table>
                        <tbody>
                            <tr>
                                <td><b>Nome ou Nº da Vaca:</b></td>
                                <td>{{ $sheet->tag }}</td>
                            </tr>
                            <tr>
                                <td><b>Nome ou Nº do Touro:</b></td>
                                <td>{{ $sheet->bull_tag }}</td>
                            </tr>
                            <tr>
                                <td><b>Nome do Inseminador:</b></td>
                                <td>{{ $sheet->inseminator_name }}</td>
                            </tr>
                            <tr>
                                <td><b>Data da inseminação:</b></td>
                                <td>{{ $sheet->insemination_date }}</td>
                            </tr>
                            <tr>
                                <td><b>Data prevista para o nascimento:</b></td>
                                <td>{{ $sheet->birth_prediction }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
