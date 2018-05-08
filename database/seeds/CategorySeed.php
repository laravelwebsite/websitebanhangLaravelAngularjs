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
                        'slug'=>'dien-tu',
                        'delete'=>1,
        	],
        	[
        		'name'=>'Thời trang',
                        'slug'=>'thoi-trang',
                        'delete'=>1,
        	],
        	[
        		'name'=>'Đồng hồ,Túi và Phụ kiện',
                        'slug'=>'dong-ho-va-phu-kien',
                        'delete'=>1,
        	],
        	[
        		'name'=>'Nhà cửa và Đời sống',
                        'slug'=>'nha-cua-va-doi-song',
                        'delete'=>1,
        	],
        	[
        		'name'=>'Sức khỏe và sắc đẹp',
                        'slug'=>'suc-khoe-va-sac-dep',
                        'delete'=>1,
        	],
        	[
        		'name'=>'Bách hóa gia đình',
                        'slug'=>'bach-hoa-gia-dinh',
                        'delete'=>1,
        	],
        	[
        		'name'=>'Thể thao và Du lịch',
                        'slug'=>'the-thao-va-du-lich',
                        'delete'=>1,
        	],
        ]);
    }
}
