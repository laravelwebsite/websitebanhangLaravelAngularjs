<?php

use Illuminate\Database\Seeder;

class MenuSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
        	[
        		'name'=>'User',
        		'src'=>'user'
        	],
        	[
        		'name'=>'Menu',
        		'src'=>'menu'
        	],
            [
                            'name'=>'Role',
                            'src'=>'role'
            ],
            [
                            'name'=>'User_Menu',
                            'src'=>'UserMenu'
            ],
        ]);
    }
}
