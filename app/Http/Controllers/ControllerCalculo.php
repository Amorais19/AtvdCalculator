<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCalculo extends Controller
{
    public function Calcular(Request $request)
    {
        $nome = $request->input('nome');
        $emprestimo = $request->input('valor_emprestimo');
        $juros = $request->input('taxa_juros') / 100;
        $parcelas = $request->input('quantidade_parcelas');

        $resultados = [];
        $montante = $emprestimo;

        for ($i = 1; $i <= $parcelas; $i++) {
            $jurosMensal = $montante * $juros;
            $montante += $jurosMensal;
            $parcela = $montante / $parcelas;

            $resultados[] = [
                'parcela' => $i,
                'restante' => number_format($montante - $parcela * ($parcelas - $i), 2),
                'juros' => number_format($jurosMensal, 2),
                'valor_parcela' => number_format($parcela, 2),
            ];

            $montante -= $parcela;
        }

        $totalPago = array_sum(array_column($resultados, 'valor_parcela'));

        return view('resposta', compact('nome', 'emprestimo', 'resultados', 'totalPago'));
    }
}
