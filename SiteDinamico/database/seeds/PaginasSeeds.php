<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$existe = Pagina::where('tipo','=','sobre')->count();
        if($existe){
            $paginaSobre = Pagina::where('tipo','=','sobre')->first();
        }else{
            $paginaSobre = new Pagina();
        }
        $paginaSobre->titulo = "Título da empresa";
        $paginaSobre->descricao = "Descrição breve sobre a empresa.";
        $paginaSobre->texto = "Texto sobre a empresa.";
        $paginaSobre->imagem = "img/001.jpg";
        $paginaSobre->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14402.72971568889!2d-49.21848415!3d-25.5156357!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcfa5ff91d8f63%3A0xe55e4920ae22bae9!2sR.+Carlos+Essenfelder%2C+4079+-+Boqueir%C3%A3o%2C+Curitiba+-+PR!5e0!3m2!1spt-BR!2sbr!4v1492568664869" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
        $paginaSobre->tipo = "sobre";
        $paginaSobre->save();
        
        echo "Pagina Sobre criada com sucesso.";*/
        
        $existe = Pagina::where('tipo','=','contato')->count();
        if($existe){
            $pagina = Pagina::where('tipo','=','contato')->first();
        }else{
            $pagina = new Pagina();
        }
        $pagina->titulo = "Entre em contato";
        $pagina->descricao = "Página de contato.";
        $pagina->texto = "Contato.";
        $pagina->imagem = "img/001.jpg";
        $pagina->email = "oliveira.marques.renato@gmail.com";
        $pagina->tipo = "contato";
        $pagina->save();
        
        echo "Pagina Contato criada com sucesso.";
    }
}
