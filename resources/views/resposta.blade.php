@extends('layout')

@section('content')
<div class="container">
    <h1>Resultados para {{ $nome }}</h1>
    <p>Valor do Empréstimo: R$ {{ number_format($emprestimo, 2) }}</p>
    <table class="table">
    <thead>
        <tr>
            <th>Parcela</th>
            <th>Valor Atualizado</th>
            <th>Juros</th>
            <th>Valor da Parcela</th>
            <th>Restante</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($resultados as $resultado)
        <tr>
            <td>{{ $resultado['parcela'] }}</td>
            <td>R$ {{ $resultado['valor_atualizado'] }}</td>
            <td>R$ {{ $resultado['juros'] }}</td>
            <td>R$ {{ $resultado['valor_parcela'] }}</td>
            <td>R$ {{ $resultado['restante'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<p>Total Pago: R$ {{ $totalPago }}</p>

</div>
<button onclick="window.location.href='/';" type="button" class="btn btn-lg btn-primary btn-block botao">Voltar</button>
@endsection
