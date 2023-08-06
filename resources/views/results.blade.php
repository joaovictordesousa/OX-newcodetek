@include('cabecalho.cabecalho')

<style>
th {
    text-align: center;
}

td {
    text-align: center;
}
</style>

<table class="table table-bordered">
    <thead>
        <tr style="border: 2px solid black">
          <th scope="col">Nome ou Nº da Vaca</th>
          <th scope="col">Nome ou Nº do Touro</th>
          <th scope="col">Data de nascimento</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <tr>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
      </tbody>
</table>
{{-- 
@foreach ($results as $item)
    <p>{{$item->tag}}</p>
@endforeach --}}