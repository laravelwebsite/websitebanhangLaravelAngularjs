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
        		'src'=>'admin/user/list'
        	],
        	[
        		'name'=>'Menu',
        		'src'=>'admin/menu/list'
        	],
            [
                            'name'=>'Role',
                            'src'=>'admin/role/list'
            ],
        ]);
    }
}
