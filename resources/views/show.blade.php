@include('cabecalho.cabecalho')

<div class="">
    <div class="card">
        <div class="card-body text-center">
            <h4 class="card-title ">Ficha completa</h4>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nome ou
                                        Nº da Vaca</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $sheet->tag }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nome ou Nº
                                        do Touro</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $sheet->bull_tag }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nome do
                                        Inseminador</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $sheet->inseminator_name }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Data da inseminação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $sheet->insemination_date }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Data prevista para o nascimento</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $sheet->birth_prediction }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <a href="#" class="btn btn-primary">Button</a>
        </div>
    </div>
</div>
