<?php

use Illuminate\Database\Seeder;

use App\cliente;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(cliente::class,80)->create();
    }
}
