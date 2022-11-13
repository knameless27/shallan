<?php

namespace Database\Seeders;

use App\Models\rol_user;
use Illuminate\Database\Seeder;

class rol_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol_user = [
            'ADMIN',
            'BIBLIOTECARIO',
            'LECTOR',
        ];

        foreach ($rol_user as $rol) {
            rol_user::create([
            'nombre' => $rol,
            'estado' => true,
            ]);
        }
    }
}
