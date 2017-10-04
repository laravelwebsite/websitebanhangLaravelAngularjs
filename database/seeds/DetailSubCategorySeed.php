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
                        'id'=>1,
        		'name'=>'Điện thoại',
                        'slug'=>'dien-thoai',
                        'sub_categories_id'=>1
        	],
            [
                        'id'=>2,
                        'name'=>'Máy tính bảng',
                        'slug'=>'may-tinh-bang',
                        'sub_categories_id'=>1
            ],
            [
                        'id'=>3,
                        'name'=>'Phụ kiện điện thoại và máy tính bảng',
                        'slug'=>'phu-kien-dien-thoai-va-may-tinh-bang',
                        'sub_categories_id'=>1
            ],

        ]);
    }
}
