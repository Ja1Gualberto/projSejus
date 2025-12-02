<?php

namespace App\Http\Controllers;

use App\Http\Controllers\sitecontroler;
use App\Models\Enderecos;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userControler extends Controller
{
    public function store(Request $request){

        $user = new User();
        $endereco= new Enderecos();

        $endereco->rua = $request->rua;
        $endereco->numero = $request->numero;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->cep = $request->cep;
        $endereco->bairro = $request->bairro;
        $endereco->save();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->cpf = $request->cpf;
        $user->password = Hash::make($request->password);
        $user->data_nascimento = $request->idade;
        $user->id_endereco = $endereco->id;
        // Preenchendo Parte tabela endereços

        $user->save();
        return redirect()->route('login');
    }

    public function authenticate(Request $request) {
        $credenciais = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return view('myprofile');
        } else {
            return redirect()->back()->withErrors('error', 'Login ou Senha Incorretos');
        }
    }
}
// class userControler extends Controller
// {
//     public function myprofile()
//     {
//     return view('myprofile');
//     }
//     // Função Página de Registro
//     public function registerPage(){
//         return view('registerPage');
//     }

//     // Função Registrar Usuario
//     public function store(Request $request){

//         // Função de Validação dos Campos
//         $validatedData = $request->validate([
//             // Usuario
//             'name' => 'required|string|max:255',
//             'email' => 'required|string|email|max:255|unique:users',
//             'cpf' => 'required|string|max:14|unique:users',
//             'password' => 'required|string|min:3|confirmed',
//             'data_nascimento' => 'required|date',
//             // Endereço
//             'rua' => 'required|string|max:255',
//             'numero' => 'required|string|max:10',
//             'cidade' => 'required|string|max:150',
//             'estado' => 'required|string|max:150',
//             'cep' => 'required|string|max:20',
//             'bairro' => 'required|string|max:150',
//         ]);

//         // Sanitização dos Dados
//         $nameLimpo = strip_tags($validatedData['name']);
//         $ruaLimpo = strip_tags($validatedData['rua']);
//         $cidadeLimpo = strip_tags($validatedData['cidade']);
//         $estadoLimpo = strip_tags($validatedData['estado']);
//         $bairroLimpo = strip_tags($validatedData['bairro']);

//         $cpfLimpo = preg_replace('/[^0-9]/', '', $validatedData['cpf']);
//         $cepLimpo = preg_replace('/[^0-9]/', '', $validatedData['cep']);

//         // Salva Endereço
//         $endereco= new Enderecos();
//         $endereco->rua = $ruaLimpo;
//         $endereco->numero = $validatedData['numero'];
//         $endereco->cidade = $cidadeLimpo;
//         $endereco->estado = $estadoLimpo;
//         $endereco->cep = $cepLimpo;
//         $endereco->bairro = $bairroLimpo;
//         $endereco->save();

//         // Salva Usuario
//         $user = new user();
//         $user->name = $nameLimpo;
//         $user->email = $validatedData['email'];
//         $user->cpf = $cpfLimpo;
//         $user->password = Hash::make($validatedData['password']);
//         $user->data_nascimento = $validatedData['data_nascimento'];
//         $user->id_endereco = $endereco->id;

//         $user->save();
//         return redirect()->route('login');
//     }
//     // Função Autenticar Usuario
//     public function authenticate(Request $request) {
//         $credenciais = $request->validate([
//             'email' => ['required','email'],
//             'password' => ['required']
//         ]);

//         if (Auth::attempt($credenciais)){
//             $request->session()->regenerate();
//             return redirect('/myprofile');
//         } else {
//             return redirect()->back()->withErrors('error', 'Login ou Senha Incorretos');
//         }
//     }
// }

