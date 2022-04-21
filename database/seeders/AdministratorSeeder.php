<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Administrator;
use Illuminate\Support\Facades\Hash;


class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Administrator::factory([
            'nombre' => 'Juanmi',
            'contrasenya' => Hash::make('juanmi'),
        ])->create();

        Administrator::factory([
            'nombre' => 'jaume',
            'contrasenya' => Hash::make('jaume'),
        ])->create();

        Administrator::factory()
            ->count(1)
            ->create();
    }
}
