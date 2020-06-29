<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Address;

class BuscaCepController extends Controller
{
    public function buscarCep(Request $request){
        //dd($request);
        $cep = null;
        $endereco = null;
        if ($request->cep){
            $cep = $request->cep;
            $endereco = new Address();
            //dd($endereco);
            $endereco = $endereco->get_addres($cep);
        }


        return view('index', compact('cep', 'endereco'));
    }
}
