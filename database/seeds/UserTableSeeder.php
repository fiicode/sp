<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'root',
            'username' => 'root',
            'email' => 'root@spmobile.com',
            'password' => '$2y$10$/SKm74T0fwAFIehMEdxYau2Kx/sCqdI1rXEy8AZo3JtmFkRomXxQC'
        ]);
    }
}
