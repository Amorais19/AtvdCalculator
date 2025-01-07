<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCalculo extends Controller
{
    public function calcular(Request $request)
{
    $nome = $request->input('nome');
    $emprestimo = $request->input('valor_emprestimo');
    $juros = $request->input('taxa_juros') / 100;
    $parcelas = $request->input('quantidade_parcelas');

    $saldoDevedor = $emprestimo;
    $resultados = [];
    $totalPago = 0;

    for ($i = 1; $i <= $parcelas; $i++) {
        $jurosMensal = $saldoDevedor * $juros;
        $valorAtualizado = $saldoDevedor + $jurosMensal;
        $parcela = $valorAtualizado / ($parcelas - $i + 1);
        $saldoDevedor = $valorAtualizado - $parcela;

        $resultados[] = [
            'parcela' => $i,
            'valor_atualizado' => number_format($valorAtualizado, 2, ',', '.'),
            'juros' => number_format($jurosMensal, 2, ',', '.'),
            'valor_parcela' => number_format($parcela, 2, ',', '.'),
            'restante' => number_format($saldoDevedor, 2, ',', '.'),
        ];

        $totalPago += $parcela;
    }

    $totalPago = number_format($totalPago, 2, ',', '.');

    return view('resposta', compact('nome', 'emprestimo', 'resultados', 'totalPago'));
}
}
