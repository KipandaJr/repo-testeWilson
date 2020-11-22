<?php

use Illuminate\Database\Seeder;
use App\Tabela_beneficiarios;

class TabelaBeneficiarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tabela_beneficiarios::create([
            'name' => 'José',
            'bonus' => 750.0,
        ]);

        Tabela_beneficiarios::create([
            'name' => 'João',
            'bonus' => 530.0,
        ]);

        Tabela_beneficiarios::create([
            'name' => 'António',
            'bonus' => 230.0,
        ]);
    }
}
