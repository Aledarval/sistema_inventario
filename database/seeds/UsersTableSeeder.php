<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'informaticalemor@gmail.com',
            'username' => 'administrador',
            'password' => bcrypt('123456'),
        ]);
    }
}
