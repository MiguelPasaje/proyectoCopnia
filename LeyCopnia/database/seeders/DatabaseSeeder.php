<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     

        /* self::seedUser();
        $this->command->info('Tabla usuarios inicializada con datos!'); */
        self::seedLeyes();
        $this->command->info('Tabla leyes inicializada con datos!');

    }

    private function seedUser(){
        DB::table('users')->delete();
        
        $u = new User;
        $u->name = 'Felipe Hidalgo';
        $u->email = 'juanfehidalgo@gmail.com';
        $u->password = bcrypt('1234');
        $u->rol = 'Editor';
        $u->save();

        $u = new User;
        $u->name = 'Diana Arcos';
        $u->email = 'dianarcos@gmail.com';
        $u->password = bcrypt('4321');
        $u->rol = 'Visitante';
        $u->save();

    }

    private function seedLeyes(){
        DB::table('leyes')->delete();
        foreach( $this->arrayLeyes as $leyes ) {
            $p = new Movie;
            $p->nombre = $nombre['nombre'];
            $p->imagen = $imagen['imagen'];
            $p->descripcion = $descripcion['director'];
            $p->poster = $pelicula['poster'];
            $p->rented = $pelicula['rented'];
            $p->synopsis = $pelicula['synopsis']; 
            $p->save();
      }


    }



}
