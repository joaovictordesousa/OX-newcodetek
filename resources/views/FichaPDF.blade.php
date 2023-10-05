<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" href="../icones/vaca2.png">
    <title>OX - NewCodeTek</title>
</head>

<style>
    /* Estilos gerais para a tabela */

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .container_header_ficha {
        background-color: rgb(3, 210, 3); 
        background: url();
    }

    .titulo_pdf_ficha {
        font-family: 'Borel', cursive;
    }

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
        text-align: center;
        font-size: 26px;
        margin-bottom: 10px;
        margin: 2em 0;
    }
</style>

<header class="container_header_ficha">
    <h1 class="titulo_pdf_ficha">Fazenda Trombas</h1><hr>
</header>

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
                                <td>{{ $sheet->Racadotouro->bull_tag }}</td>
                            </tr>
                            <tr>
                                <td><b>Nome do Inseminador:</b></td>
                                <td>{{ $sheet->Inseminador->name }}</td>
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
