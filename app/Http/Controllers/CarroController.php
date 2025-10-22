<?php

namespace App\Http\Controllers;
use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function formulario(Request $request){

      return view("formulario");

    }


 public function salvar_carro(Request $request){

        $model_Carro = new Carro();

        $model_Carro->nome = $request->nome;
        $model_Carro->modelo = $request->modelo;
        $model_Carro->data_fabri = $request->data_fabri;
        $model_Carro->endereco = $request->endereco;
        $model_Carro->kilometragem = $request->kilometragem;
        $model_Carro->preco = $request->preco;

        $model_Carro->save();

         return redirect('/carro');
            
       
    }

        public function deleta_carro($id)
    {
        $carro = Carro::find($id);

        return view('deleta_carro')->with('carro', $carro);

    }

    public function deleta(Request $request)
    {
        Carro::where('id', $request->id)->delete();

        return redirect('/deleta_carro');
    }

        public function alterar_carro ($id)
    {
        $carro = Carro::find($id);

        return view('alterar_carro')->with('carro', $carro);

    }

}
