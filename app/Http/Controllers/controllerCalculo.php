<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerCalculo extends Controller
{
    public function Calcular(Request $request)
    {
        $capital = $request->input('capital');
        $taxa = $request->input('taxa');
        $periodo = $request->input('periodo');
        $juros = $taxa / 100;
        $dados = array();
        for($i = 1; $i <= $periodo; $i++) {
            $dados[$i]['mes'] = $i;
            $dados[$i]['capitalInicial'] = number_format($capital, 2, ',', '.');
            $dados[$i]['capitalAtualizado'] = number_format(($capital + ($capital * $juros)), 2, ',', '.');
            $capital = $capital + ($capital * $juros);
        }
        return view('resposta', compact('dados'));
    }
}
