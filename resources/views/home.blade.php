

@extends('layout')
@section('conteudo')

<table class="table table-bordered">

<!-- On rows -->
<tr class="active">...</tr>
<tr class="success">...</tr>
<tr class="warning">...</tr>
<tr class="danger">...</tr>
<tr class="info">...</tr>

<!-- On cells (`td` or `th`) -->
<tr>
  <td class="active">...</td>
  <td class="success">...</td>
  <td class="warning">...</td>
  <td class="danger">...</td>
  <td class="info">...</td>
</tr>
</table>

<ul>
@foreach($dados as $dado)
    <li>{{$dado->titulo}}</li>
    @endforeach
</ul>
@endsection
