<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cliente::create([
            "nome"=>"fulano5",
            "email"=>"fulano5@gmail.com",
            "telefone"=>"(21)00000-0000",
            "cep"=>"00000-000"

        ]);
    }
}
