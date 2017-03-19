<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UsuarioController extends Controller
{
    public function login(Request $request){
        $dados = $request->all();
        
        $usuarioValido = Auth::attempt([
            'email'=>$dados['email'],
            'password'=>$dados['password']
        ]);
        
        if($usuarioValido){
            return redirect()->route('admin.principal');
        }
        \Session::flash('mensagem', [
            'msg' => 'Usuário ou senha incorretos.',
            'class' => 'red white-text'
        ]);
        return redirect()->route('admin.login');
    }
}
