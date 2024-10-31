<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Docente;
use App\Models\Inscripcion;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesYPermisosSeeder::class);

        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $user->assignRole('Gestor');

//        Curso::factory()->count(10)->create();

        Docente::factory()->count(40)->create();

//        User::factory()->count(40)
//            ->create()
//            ->each(function (User $user) {
//                $user->assignRole('Alumno');
//            });

        Inscripcion::factory()->count(10)->create();

        Inscripcion::factory()->count(10)->create([
            'curso_id' => Curso::first()->id
        ]);

    }
}
