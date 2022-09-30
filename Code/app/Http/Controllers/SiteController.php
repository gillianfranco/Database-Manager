<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**Coleta e redireciona os dados do banco de dados para a view index*/
    public function index(){
        $clients = Client::get();
        return view('index', ['clients' => $clients]);
    }

    /**Coleta os dados de um único cliente no banco de dados e Redireciona para uma página onde será mostrado estes dados */
    public function data_client(int $id){
        $clients = Client::find($id);
        return view('client', ['clients' => $clients]);
    }

    /**Redireciona o usuário para a página de cadastro */
    public function register_get(){
        return view('register');
    }

    /**Coleta os dados indicados no formulário e amarzena no banco de dados */
    public function register_post(Request $request){
        $data = $request->except('_token');

        Client::create($data);

        return redirect('/');
    }
}
