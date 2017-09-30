<?php

use Illuminate\Database\Seeder;

class SubCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([
        	[
        		'name'=>'ĐỊÊN THOẠI VÀ MÁY TÍNH BẢNG',
        		'slug'=>'dien-thoai-va-may-tinh-bang',
        		'categories_id'=>1
        	],
        	[
        		'name'=>'MÁY TÍNH VÀ LAPTOP',
        		'slug'=>'may-tinh-va-laptop',
        		'categories_id'=>1
        	],
        	[
        		'name'=>'MÁY ẢNH VÀ MÁY QUAY PHIM',
        		'slug'=>'may-anh-va-may-quay-phim',
        		'categories_id'=>1
        	],
        	[
        		'name'=>'TV,VIDEO,ÂM THANH,GAME VÀ THÍÊT BỊ SỐ ',
        		'slug'=>'tv-video-am-thanh-game-va-thiet-bi-so',
        		'categories_id'=>1
        	],
        	[
        		'name'=>'PHỤ KỊÊN CÔNG NGHỆ ',
        		'slug'=>'phu-kien-cong-nghe',
        		'categories_id'=>1
        	],
        	[
        		'name'=>'THƯƠNG HỊÊU HÀNG ĐÂÙ ',
        		'slug'=>'thuong-hieu-hang-dau',
        		'categories_id'=>1
        	],
        ]);
    }
}
