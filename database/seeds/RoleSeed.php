<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	[
            'id'=>4,
            'name'=>'Super Admin',
            'delete'=>1,
            ],
            [
            'id'=>3,
            'name'=>'Admin',
            'delete'=>1,
            ],
            [
            'id'=>2,
            'name'=>'Store',
            'delete'=>1,
            ],
            [
            'id'=>1,
            'name'=>'User',
            'delete'=>1,
            ]
            
            ]);
    }
}
