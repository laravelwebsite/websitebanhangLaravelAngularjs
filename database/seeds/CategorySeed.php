<?php

use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
        	[
        		'name'=>'Điện tử',
                        'slug'=>'dien-tu'
        	],
        	[
        		'name'=>'Thời trang',
                        'slug'=>'thoi-trang'
        	],
        	[
        		'name'=>'Đồng hồ,Túi và Phụ kiện',
                        'slug'=>'dong-ho-va-phu-kien'
        	],
        	[
        		'name'=>'Nhà cửa và Đời sống',
                        'slug'=>'nha-cua-va-doi-song'
        	],
        	[
        		'name'=>'Sức khỏe và sắc đẹp',
                        'slug'=>'suc-khoe-va-sac-dep'
        	],
        	[
        		'name'=>'Bách hóa gia đình',
                        'slug'=>'bach-hoa-gia-dinh'
        	],
        	[
        		'name'=>'Thể thao và Du lịch',
                        'slug'=>'the-thao-va-du-lich'
        	],
        ]);
    }
}
