<?php
namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pagina;

class PaginaController extends Controller
{

    public function sobre()
    {
        $pagina = Pagina::where('tipo', '=', 'sobre')->first();
        return view('site.sobre', compact('pagina'));
    }

    public function contato()
    {
        $pagina = Pagina::where('tipo', '=', 'contato')->first();
        return view('site.contato', compact('pagina'));
    }

    public function enviarContato(Request $request)
    {
        $pagina = Pagina::where('tipo', '=', 'contato')->first();
        $email = $pagina->email;
        $params = ['request' => $request];
        \Mail::send('emails.contato', $params, function($m) use($request, $email) {
            $m->from($request['email'], $request['nome']);
            $m->replyTo($request['email'], $request['nome']);
            $m->subject('Contato pelo site');
            $m->to($email, 'Contato do Site');
        });
        
        \Session::flash('mensagem', [
            'msg' => 'Contato enviado com sucesso.',
            'class' => 'light-green lighten-4 light-green-text text-darken-2 z-depth-0'
        ]);
        return redirect()->route('site.contato');
    }
}
