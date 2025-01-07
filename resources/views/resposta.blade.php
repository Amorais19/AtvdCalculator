@extends('layout')

@section('content')
<div class="texto">
    <h2>Cálculo efetuado</h2>
</div>

<div class="row">
    <div class="col-md-3">Mês</div>
    <div class="col-md-6">Valor inicial</div>
    <div class="col-md-3">Valor atualizado</div>
</div>

<button onclick="window.location.href='/'" type="button" 
        class="btn btn-lg btn-primary btn-block botao">Voltar</button>

@endsection
