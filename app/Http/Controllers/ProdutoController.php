<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
   public function index()
   {
        $produto = DB::table('view_produto_farmacia')->get();
        //dd($produto);
        return view('welcome',compact('produto'));
   }
  
   public function procurar($resultado)
   {
        $resultado = str_replace("*","/","$resultado");
        $resultado = str_replace("!","%","$resultado");
            //dd($resultado);
        
        $dados = DB::table('view_produto_farmacia')
        ->where('produto_farmacia' , '=', $resultado)
            ->whereIn('farmacia', ["FARMACIA CENTRAL","FARMÁCIA POLO I", "FARMACIA POLO III","FARMACIA POLO IV"])
                ->get();
        //dd($dados);
        //$dados = str_replace('ALMOXARIFADO', "","$resultado->farmacia");

        return view('show',compact('dados'));

   }
}
