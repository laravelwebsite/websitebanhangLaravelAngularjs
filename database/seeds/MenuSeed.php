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
            'src'=>'user'
            ],
            [
            'id'=>2,
            'name'=>'Quản lý Menu',
            'src'=>'menu'
            ],
            [
            'id'=>3,
            'name'=>'Quản lý Quyền',
            'src'=>'role'
            ],
            [
            'id'=>4,
            'name'=>'Phân quyền',
            'src'=>'UserMenu'
            ],
            [
            'id'=>5,
            'name'=>'Danh mục cấp 1',
            'src'=>'category'
            ],
            [
            'id'=>6,
            'name'=>'Danh mục cấp 2',
            'src'=>'subcategory'
            ],
            [
            'id'=>7,
            'name'=>'Danh mục cấp 3',
            'src'=>'detailsubcategory'
            ],
            [
            'id'=>8,
            'name'=>'Sản phẩm',
            'src'=>'product'
            ],
            [
            'id'=>9,
            'name'=>'Hóa đơn',
            'src'=>'hoadon'
            ],
            [
            'id'=>10,
            'name'=>'Thống kê',
            'src'=>'thongke'
            ],
            [
            'id'=>11,
            'name'=>'Truy cập',
            'src'=>'truycap'
            ],
            ]);
    }
}
