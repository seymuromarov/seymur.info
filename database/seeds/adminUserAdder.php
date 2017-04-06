<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminUserAdder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
        ]);
        DB::table('roles')->insert([
            'name' => 'admin',
        ]);
        DB::table('user_has_roles')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);
    }
}
