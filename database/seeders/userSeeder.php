<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $andres = [
            'nombre'=>'andres',
            'email'=>'andres@illo.com',
            'password'=>'admin',
            'rol_users_id'=> 1,
        ];
        $biblio = [
            'nombre'=>'biblio',
            'email'=>'biblio@tecario.com',
            'password'=>'bibliotecario',
            'rol_users_id'=> 2,
        ];
        $lector = [
            'nombre'=>'lec',
            'email'=>'lec@tor.com',
            'password'=>'lector',
            'rol_users_id'=> 3,
        ];
        $user = [
            $andres,
            $biblio,
            $lector,
        ];

        foreach ($user as $value) {
            User::create([
                'nombre' => $value['nombre'],
                'email' => $value['email'],
                'password' =>  $value['password'],
                'rol_users_id' =>  $value['rol_users_id'],
                'estado' => true,
            ]);
        }
    }
}
