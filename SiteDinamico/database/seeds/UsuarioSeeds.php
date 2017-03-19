<?php

use Illuminate\Database\Seeder;
use App\User;
class UsuarioSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->name = "Renato Marques";
        $usuario->email = "oliveira.marques.renato@gmail.com";
        $usuario->password = bcrypt("123");
        $usuario->save();
    }
}
