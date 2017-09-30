<?php

use Illuminate\Database\Seeder;

class DetailSubCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_sub_categories')->insert([
        	[
        		'name'=>''
        	],

        ]);
    }
}
