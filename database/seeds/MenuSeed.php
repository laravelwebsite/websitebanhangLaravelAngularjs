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
            'id'=>1,
            'name'=>'User',
            'src'=>'user'
            ],
            [
            'id'=>2,
            'name'=>'Menu',
            'src'=>'menu'
            ],
            [
            'id'=>3,
            'name'=>'Role',
            'src'=>'role'
            ],
            [
            'id'=>4,
            'name'=>'User_Menu',
            'src'=>'UserMenu'
            ],
            [
            'id'=>5,
            'name'=>'Category',
            'src'=>'category'
            ],
            [
            'id'=>6,
            'name'=>'Sub Category',
            'src'=>'subcategory'
            ],
            [
            'id'=>7,
            'name'=>'Detail Sub Category',
            'src'=>'detailsubcategory'
            ],
            [
            'id'=>8,
            'name'=>'Product',
            'src'=>'product'
            ],
            ]);
    }
}
