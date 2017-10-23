<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('coordenadors')->insert([
            'nome'=>'admin admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('123456'),
            'rg'=>'121354',
            'cpf'=>'4654648',
            'endereco'=>'rua marco 123',
            'telefone'=>'33548796',
            'data_nasc'=>'1869/09/10',


        ]);
    }
}
