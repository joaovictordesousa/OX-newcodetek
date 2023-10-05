@include('cabecalho.cabecalho')

<style>
  #container_show {
    width: 50%;
    margin: 4em 10em;
  }

  @media screen and (max-width: 600px) {
    #container_show {
      width: 100%;
      text-align: none;
      margin: 0 auto;
    }

    #show_show {
      width: 100%;
    }
    
  }
</style>


    <div class="card shadow" id="container_show">
        <div class="card-body text-center shadow" >
            <h4 class="card-title ">Ficha completa</h4>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <table class="table" id="show_show">
                            <tbody>
                              <tr>
                                <th><b>Nome ou Nº da Vaca:</b></th>
                                <td>{{ $sheet->tag }}</td>
                              </tr>
                              <tr>
                                <th><b>Nome ou Nº do Touro:</b></th>
                                <td>{{ $sheet->Racadotouro->bull_tag }}</td>
                              </tr>
                              <tr>
                                <th><b>Nome do Inseminador:</b></th>
                                <td>{{ $sheet->Inseminador->name }}</td>
                              </tr>
                              <tr>
                                <th><b>Data da inseminação:</b></th>
                                <td>{{ $sheet->insemination_date }}</td>
                              </tr>
                              <tr>
                                <th><b>Data prevista para o nascimento:</b></th>
                                <td>{{ $sheet->birth_prediction }}</td>
                              </tr>
                              <tr>
                                <th><b>Observação:</b></th>
                                <td>{{ $sheet->obsinseminacao }}</td>
                              </tr>               
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
