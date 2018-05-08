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
                        'id'=>1,
        		'name'=>'ĐỊÊN THOẠI VÀ MÁY TÍNH BẢNG',
        		'slug'=>'dien-thoai-va-may-tinh-bang',
        		'categories_id'=>1,
                        'delete'=>1,
        	],
        	[
                        'id'=>2,
        		'name'=>'MÁY TÍNH VÀ LAPTOP',
        		'slug'=>'may-tinh-va-laptop',
        		'categories_id'=>1,
                            'delete'=>1,
        	],
        	[
                         'id'=>3,
        		'name'=>'MÁY ẢNH VÀ MÁY QUAY PHIM',
        		'slug'=>'may-anh-va-may-quay-phim',
        		'categories_id'=>1,
                        'delete'=>1,
        	],
        	[
                         'id'=>4,
        		'name'=>'TV,VIDEO,ÂM THANH,GAME VÀ THÍÊT BỊ SỐ ',
        		'slug'=>'tv-video-am-thanh-game-va-thiet-bi-so',
        		'categories_id'=>1,
                        'delete'=>1,
        	],
        	[
                         'id'=>5,
        		'name'=>'PHỤ KỊÊN CÔNG NGHỆ ',
        		'slug'=>'phu-kien-cong-nghe',
        		'categories_id'=>1,
                        'delete'=>1,
        	],
        	[
                         'id'=>6,
        		'name'=>'THƯƠNG HỊÊU HÀNG ĐÂÙ ',
        		'slug'=>'thuong-hieu-hang-dau',
        		'categories_id'=>1,
                            'delete'=>1,
        	],
            [
                         'id'=>7,
                        'name'=>'THƠÌ TRANG NAM',
                        'slug'=>'thoi-trang-nam',
                        'categories_id'=>2,
                        'delete'=>1,
            ],
            [
                         'id'=>8,
                        'name'=>'THƠÌ TRANG NỮ',
                        'slug'=>'thoi-trang-nu',
                        'categories_id'=>2,
                        'delete'=>1,
            ],
            [
                         'id'=>9,
                        'name'=>'ĐỒNG HỒ NAM',
                        'slug'=>'dong-ho-nam',
                        'categories_id'=>3,
                        'delete'=>1,
            ],
            [
                         'id'=>10,
                        'name'=>'ĐỒNG HỒ NỮ',
                        'slug'=>'dong-ho-nu',
                        'categories_id'=>3,
                        'delete'=>1,
            ],
            [
                         'id'=>11,
                        'name'=>'TÚI XÁCH NAM',
                        'slug'=>'tui-xach-nam',
                        'categories_id'=>3,
                        'delete'=>1,
            ],
            [
                         'id'=>12,
                        'name'=>'TÚI XÁCH NỮ',
                        'slug'=>'tui-xach-nu',
                        'categories_id'=>3,
                        'delete'=>1,
            ],
            [
                         'id'=>13,
                        'name'=>'MẮT KÍNH NAM',
                        'slug'=>'mat-kinh-nam',
                        'categories_id'=>3,
                        'delete'=>1,
            ],
            [

                         'id'=>14,
                        'name'=>'MẮT KÍNH NỮ',
                        'slug'=>'mat-kinh-nu',
                        'categories_id'=>3,
                        'delete'=>1,
            ],
            [
                         'id'=>15,
                        'name'=>'TRANG SỨC NAM ',
                        'slug'=>'trang-suc-nam',
                        'categories_id'=>3,
                        'delete'=>1,
            ],
            [
                         'id'=>16,
                        'name'=>'TRANG SỨC NỮ',
                        'slug'=>'trang-suc-nu',
                        'categories_id'=>3,
                        'delete'=>1,
            ],
        ]);
    }
}
