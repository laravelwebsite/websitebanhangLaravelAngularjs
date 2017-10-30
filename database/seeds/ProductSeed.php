<?php

use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	[
        		'id'=>1,
        		'name'=>'Iphone 6 Plus 64Gb trắng quốc tế',
        		'slug'=>'iphone-6-plus-64gb-trang-quoc-te',
        		'title'=>'iphone-6-plus-64gb-trang-quoc-te',
        		'description'=>'Iphone 6 Plus 64Gb trắng quốc tế',
                        'price'=>500000,
                        'album'=>"",
        		'image'=>'1.png',
        		'status'=>'Khuyến mãi',
        		'active'=>1,
        		'detail_sub_categories_id'=>1,
        		'key'=>'iphone 6 plus',
        		'user_id'=>5
        	],
        	[
        		'id'=>2,
        		'name'=>'Iphone 6 Plus 64Gb trắng quốc tế 2',
        		'slug'=>'iphone-6-plus-64gb-trang-quoc-te-2',
        		'title'=>'iphone-6-plus-64gb-trang-quoc-te',
        		'description'=>'Iphone 6 Plus 64Gb trắng quốc tế',
                        'price'=>500000,
                        'album'=>"",
        		'image'=>'1.png',
        		'status'=>'Khuyến mãi',
        		'active'=>1,
        		'detail_sub_categories_id'=>2,
        		'key'=>'iphone 6 plus',
        		'user_id'=>5
        	],
        	[
        		'id'=>3,
        		'name'=>'Iphone 6 Plus 64Gb trắng quốc tế 3',
        		'slug'=>'iphone-6-plus-64gb-trang-quoc-te-3',
        		'title'=>'iphone-6-plus-64gb-trang-quoc-te',
        		'description'=>'Iphone 6 Plus 64Gb trắng quốc tế',
                        'price'=>500000,
                        'album'=>"",
        		'image'=>'1.png',
        		'status'=>'Khuyến mãi',
        		'active'=>1,
        		'detail_sub_categories_id'=>1,
        		'key'=>'iphone 6 plus',
        		'user_id'=>5
        	],
        	[
        		'id'=>4,
        		'name'=>'Iphone 6 Plus 64Gb trắng quốc tế 4',
        		'slug'=>'iphone-6-plus-64gb-trang-quoc-te-4',
        		'title'=>'iphone-6-plus-64gb-trang-quoc-te',
        		'description'=>'Iphone 6 Plus 64Gb trắng quốc tế',
                        'price'=>500000,
                        'album'=>"",
        		'image'=>'1.png',
        		'status'=>'Khuyến mãi',
        		'active'=>1,
        		'detail_sub_categories_id'=>1,
        		'key'=>'iphone 6 plus',
        		'user_id'=>5
        	],
            [
                'id'=>5,
                'name'=>'Iphone 6 Plus 64Gb trắng quốc tế 5',
                'slug'=>'iphone-6-plus-64gb-trang-quoc-te-5',
                'title'=>'iphone-6-plus-64gb-trang-quoc-te',
                'description'=>'Iphone 6 Plus 64Gb trắng quốc tế',
                'price'=>500000,
                'album'=>"",
                'image'=>'1.png',
                'status'=>'Khuyến mãi',
                'active'=>1,
                'detail_sub_categories_id'=>1,
                'key'=>'iphone 6 plus',
                'user_id'=>5
            ],
            [
                'id'=>6,
                'name'=>'Iphone 6 Plus 64Gb trắng quốc tế-6',
                'slug'=>'iphone-6-plus-64gb-trang-quoc-te-6',
                'title'=>'iphone-6-plus-64gb-trang-quoc-te',
                'description'=>'Iphone 6 Plus 64Gb trắng quốc tế',
                'price'=>500000,
                'album'=>"",
                'image'=>'1.png',
                'status'=>'Khuyến mãi',
                'active'=>1,
                'detail_sub_categories_id'=>1,
                'key'=>'iphone 6 plus',
                'user_id'=>5
            ],
            [
                'id'=>7,
                'name'=>'Iphone 6 Plus 64Gb trắng quốc tế 7',
                'slug'=>'iphone-6-plus-64gb-trang-quoc-te-7',
                'title'=>'iphone-6-plus-64gb-trang-quoc-te',
                'description'=>'Iphone 6 Plus 64Gb trắng quốc tế',
                        'price'=>500000,
                        'album'=>"",
                 'image'=>'1.png',
                'status'=>'Khuyến mãi',
                'active'=>1,
                'detail_sub_categories_id'=>1,
                'key'=>'iphone 6 plus',
                'user_id'=>5
            ],
            [
                'id'=>8,
                'name'=>'Iphone 6 Plus 64Gb trắng quốc tế 8',
                'slug'=>'iphone-6-plus-64gb-trang-quoc-te-8',
                'title'=>'iphone-6-plus-64gb-trang-quoc-te',
                'description'=>'Iphone 6 Plus 64Gb trắng quốc tế',
                        'price'=>500000,
                        'album'=>"",
                 'image'=>'1.png',
                'status'=>'Khuyến mãi',
                'active'=>1,
                'detail_sub_categories_id'=>2,
                'key'=>'iphone 6 plus',
                'user_id'=>5
            ],
            [
                'id'=>9,
                'name'=>'Iphone 6 Plus 64Gb trắng quốc tế 9',
                'slug'=>'iphone-6-plus-64gb-trang-quoc-te-9',
                'title'=>'iphone-6-plus-64gb-trang-quoc-te',
                'description'=>'Iphone 6 Plus 64Gb trắng quốc tế',
                        'price'=>500000,
                        'album'=>"",
                 'image'=>'1.png',
                'status'=>'Khuyến mãi',
                'active'=>1,
                'detail_sub_categories_id'=>2,
                'key'=>'iphone 6 plus',
                'user_id'=>5
            ],
            [
                'id'=>10,
                'name'=>'Iphone 6 Plus 64Gb trắng quốc tế 10',
                'slug'=>'iphone-6-plus-64gb-trang-quoc-te-10',
                'title'=>'iphone-6-plus-64gb-trang-quoc-te',
                'description'=>'Iphone 6 Plus 64Gb trắng quốc tế',
                'price'=>500000,
                'album'=>"",
                 'image'=>'1.png',
                'status'=>'Khuyến mãi',
                'active'=>1,
                'detail_sub_categories_id'=>2,
                'key'=>'iphone 6 plus',
                'user_id'=>5
            ],
       ]);
    }
}
