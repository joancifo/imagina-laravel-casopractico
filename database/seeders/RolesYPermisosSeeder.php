<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesYPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumnoBorrar = Permission::create(['name' => 'alumno:borrar']);

        $alumno = Role::create(['name' => 'Alumno']);
        $editor = Role::create(['name' => 'Editor']);
        $gestor =Role::create(['name' => 'Gestor']);

//        $gestor->syncPermissions($alumnoBorrar->id);
    }
}
