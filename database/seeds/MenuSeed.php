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
            'name'=>'Quản lý người dùng',
            'src'=>'user',
            'delete'=>1,
            ],
            [
            'id'=>2,
            'name'=>'Quản lý Menu',
            'src'=>'menu',
            'delete'=>1,
            ],
            [
            'id'=>3,
            'name'=>'Quản lý Quyền',
            'src'=>'role',
            'delete'=>1,
            ],
            [
            'id'=>4,
            'name'=>'Phân quyền',
            'src'=>'UserMenu',
            'delete'=>1,
            ],
            [
            'id'=>5,
            'name'=>'Danh mục cấp 1',
            'src'=>'category',
            'delete'=>1,
            ],
            [
            'id'=>6,
            'name'=>'Danh mục cấp 2',
            'src'=>'subcategory',
            'delete'=>1,
            ],
            [
            'id'=>7,
            'name'=>'Danh mục cấp 3',
            'src'=>'detailsubcategory',
            'delete'=>1,
            ],
            [
            'id'=>8,
            'name'=>'Sản phẩm',
            'src'=>'product',
            'delete'=>1,
            ],
            [
            'id'=>9,
            'name'=>'Hóa đơn',
            'src'=>'hoadon',
            'delete'=>1,
            ],
            [
            'id'=>10,
            'name'=>'Thống kê',
            'src'=>'thongke',
            'delete'=>1,
            ],
            [
            'id'=>11,
            'name'=>'Truy cập',
            'src'=>'truycap',
            'delete'=>1,
            ],
            ]);
    }
}
