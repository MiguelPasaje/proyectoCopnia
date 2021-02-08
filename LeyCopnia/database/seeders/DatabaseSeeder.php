<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;
use App\Models\User;
use App\Models\leyes;



class DatabaseSeeder extends Seeder
{
    private $arrayLeyes=array(
        array(
            'titulo' => '842 de 2003',
            'imagen' => 'imagenes/842_2003.png',
			'desc' => 'Por la cual se modifica la reglamentación del ejercicio de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares, se adopta el Código de Ética Profesional y se dictan otras disposiciones.'
		),
		array(
            'titulo' => '843 de 2003',
            'imagen' => 'https://dialogocim.files.wordpress.com/2015/06/ley.jpg?w=584',
			'desc' => 'Por la cual se modifica la reglamentación del ejercicio de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares, se adopta el Código de Ética Profesional y se dictan otras disposiciones.'
		),
		array(
            'titulo' => '844 de 2003',
            'imagen' => 'https://dialogocim.files.wordpress.com/2015/06/ley.jpg?w=584',
			'desc' => 'Por la cual se modifica la reglamentación del ejercicio de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares, se adopta el Código de Ética Profesional y se dictan otras disposiciones.'
		),
		array(
            'titulo' => '845 de 2003',
            'imagen' => 'https://dialogocim.files.wordpress.com/2015/06/ley.jpg?w=584',
			'desc' => 'Por la cual se modifica la reglamentación del ejercicio de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares, se adopta el Código de Ética Profesional y se dictan otras disposiciones.'
		)
    );



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
            $p = new leyes;
            $p->nombre = $leyes['titulo'];
            $p->imagen = $leyes['imagen'];
            $p->descripcion = $leyes['desc'];
            $p->save();
      }


    }



}
