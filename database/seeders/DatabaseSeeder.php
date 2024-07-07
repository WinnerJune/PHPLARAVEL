<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  
    public function run(): void
    {
        DB::table('Docente')->insert([
            'nombre' => 'admin',
            'apellido' => 'admin',
            'email' => 'admin@admin.com',
            'password' =>Hash::make('admin')
        ]);
    }
}
