<?php

use Illuminate\Database\Seeder;
use App\Tabela_a;

class TabelaASeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tabela_a::create([
            'desc' => 'Venda de productos',
            'valor' => 1500.5,
        ]);
    }
}
