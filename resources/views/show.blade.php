@include('cabecalho.cabecalho')

    <div class="card shadow" style="width: 50%; margin: 4em 10em;">
        <div class="card-body text-center shadow" >
            <h4 class="card-title ">Ficha completa</h4>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <table class="table show_show">
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
                              <tr>
                
                            </tbody>
                          </table>
                    </div>
                </div>
                <br><br>
            <a href="{{ route('sheet.index') }}" class="btn btn-primary" style="padding: 10px 2em">Voltar</a>
            <a href="{{ route('sheet.pdf', ['sheet' => $sheet]) }}" class="btn btn-success" target="_blank" style="padding: 10px 2em"><ion-icon name="download-outline"></ion-icon>Baixar PDF</a>
        </div>
    </div>
</div>
