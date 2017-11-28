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
        		'name'=>'Super Admin'
        	],
        	[
                            'id'=>3,
        		'name'=>'Admin'
        	],
             [
                        'id'=>2,
                        'name'=>'Store'
            ],
        	[
                            'id'=>1,
        		'name'=>'User'
        	]
           
        ]);
    }
}
