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
            [
                'id'=>4,
                'name'=>'Pin Sạc dự phòng',
                'slug'=>'pin-sac-du-phong',
                'sub_categories_id'=>1
            ],
            [
                'id'=>5,
                'name'=>'Ốp lưng',
                'slug'=>'op-lung',
                'sub_categories_id'=>1
            ],
            [
                'id'=>6,
                'name'=>'Phụ kiện máy tính bảng',
                'slug'=>'phu-kien-may-tinh-bang',
                'sub_categories_id'=>1
            ],
            [
                'id'=>7,
                'name'=>'Ốp & Bao da',
                'slug'=>'op-va-bao-da',
                'sub_categories_id'=>1
            ],
            [
                'id'=>8,
                'name'=>'Bàn phím cho máy tính bảng',
                'slug'=>'ban-phim-cho-may-tinh-bang',
                'sub_categories_id'=>1
            ],
            [
                'id'=>9,
                'name'=>'Laptop',
                'slug'=>'laptop',
                'sub_categories_id'=>2
            ],
            [
                'id'=>10,
                'name'=>'Macbook',
                'slug'=>'macbook',
                'sub_categories_id'=>2
            ],
            [
                'id'=>11,
                'name'=>'Laptop game thủ',
                'slug'=>'laptop-game-thu',
                'sub_categories_id'=>2
            ],
            [
                'id'=>12,
                'name'=>'Laptop 2 trong 1',
                'slug'=>'laptop-2-trong-1',
                'sub_categories_id'=>2
            ],
            [
                'id'=>13,
                'name'=>'Máy tính để bàn',
                'slug'=>'mat-tinh-de-ban',
                'sub_categories_id'=>2
            ],
            [
                'id'=>14,
                'name'=>'Phụ kiện máy tính',
                'slug'=>'phu-kien-may-tinh',
                'sub_categories_id'=>2
            ],
            [
                'id'=>15,
                'name'=>'Thiết bị lưu trữ',
                'slug'=>'thiet-bi-luu-tru',
                'sub_categories_id'=>2
            ],
            [
                'id'=>16,
                'name'=>'Màn hình',
                'slug'=>'man-hinh',
                'sub_categories_id'=>2
            ],
            [
                'id'=>17,
                'name'=>'Máy in & Phụ kiện',
                'slug'=>'may-in-va-phu-kien',
                'sub_categories_id'=>2
            ],
            [
                'id'=>18,
                'name'=>'Linh kiện máy tính',
                'slug'=>'linh-kien-may-tinh',
                'sub_categories_id'=>2
            ],
            [
                'id'=>19,
                'name'=>'DSLR',
                'slug'=>'dslr',
                'sub_categories_id'=>3
            ],  
            [
                'id'=>20,
                'name'=>'Máy quay phim & Máy quay hành động',
                'slug'=>'may-quay-phim-va-may-quay-hanh-dong',
                'sub_categories_id'=>3
            ],
            [
                'id'=>21,
                'name'=>'Máy ảnh không gương lật',
                'slug'=>'may-anh-khong-guong-lat',
                'sub_categories_id'=>3
            ],
            [
                'id'=>22,
                'name'=>'Camera giám sát',
                'slug'=>'camera-giam-sat',
                'sub_categories_id'=>3
            ],
            [
                'id'=>23,
                'name'=>'Phụ kiện máy ảnh',
                'slug'=>'phu-kien-may-anh',
                'sub_categories_id'=>3
            ],
            [
                'id'=>24,
                'name'=>'Ống kính',
                'slug'=>'ong-kinh',
                'sub_categories_id'=>3
            ],
            [
                'id'=>25,
                'name'=>'Thẻ nhớ',
                'slug'=>'the-nho',
                'sub_categories_id'=>3
            ],
            [
                'id'=>26,
                'name'=>'Tivi',
                'slug'=>'tivi',
                'sub_categories_id'=>4
            ],
            [
                'id'=>27,
                'name'=>'Dưới 32 inches',
                'slug'=>'duoi-32-inches',
                'sub_categories_id'=>4
            ],
            [
                'id'=>28,
                'name'=>'33-43 inches',
                'slug'=>'33-43-inches',
                'sub_categories_id'=>4
            ],
            [
                'id'=>29,
                'name'=>'44-49 inches',
                'slug'=>'44-49-inches',
                'sub_categories_id'=>4
            ],
            [
                'id'=>30,
                'name'=>'Trên 50 inches',
                'slug'=>'tren-50-inches',
                'sub_categories_id'=>4
            ],
            [
                'id'=>31,
                'name'=>'Phụ kiện Tivi',
                'slug'=>'phu-kien-tivi',
                'sub_categories_id'=>4
            ],
            [
                'id'=>32,
                'name'=>'Thiết bị âm thanh',
                'slug'=>'thiet-bi-am-thanh',
                'sub_categories_id'=>4
            ],
            [
                'id'=>33,
                'name'=>'Loa di động',
                'slug'=>'loa-di-dong',
                'sub_categories_id'=>4
            ],
            [
                'id'=>34,
                'name'=>'Game',
                'slug'=>'game',
                'sub_categories_id'=>4
            ],
            [
                'id'=>35,
                'name'=>'Thiết bị đeo công nghệ',
                'slug'=>'thiet-bi-deo-cong-nghe',
                'sub_categories_id'=>4
            ],
            [
                'id'=>36,
                'name'=>'Thiết bị video',
                'slug'=>'thiet-bi-video',
                'sub_categories_id'=>4
            ],
            [
                'id'=>37,
                'name'=>'Samsung',
                'slug'=>'samsung',
                'sub_categories_id'=>5
            ],
            [
                'id'=>38,
                'name'=>'Iphone',
                'slug'=>'iphone',
                'sub_categories_id'=>5
            ],
            [
                'id'=>39,
                'name'=>'Sony',
                'slug'=>'sony',
                'sub_categories_id'=>5
            ],
            [
                'id'=>40,
                'name'=>'LG',
                'slug'=>'lg',
                'sub_categories_id'=>5
            ],
            [
                'id'=>41,
                'name'=>'Cellphones',
                'slug'=>'cellphones',
                'sub_categories_id'=>6
            ],
            [
                'id'=>42,
                'name'=>'Nhất tín',
                'slug'=>'nhat-tin',
                'sub_categories_id'=>6
            ],
            [
                'id'=>43,
                'name'=>'FPT shop',
                'slug'=>'fpt-shop',
                'sub_categories_id'=>6
            ],
            [
                'id'=>44,
                'name'=>'Trang phục nam',
                'slug'=>'trang-phuc-nam',
                'sub_categories_id'=>7
            ],
            [
                'id'=>45,
                'name'=>'Áo khoác nam',
                'slug'=>'ao-khoac-nam',
                'sub_categories_id'=>7
            ],
            [
                'id'=>46,
                'name'=>'Áo thun nam',
                'slug'=>'ao-thun-nam',
                'sub_categories_id'=>7
            ],
            [
                'id'=>47,
                'name'=>'Áo sơ mi',
                'slug'=>'ao-so-mi',
                'sub_categories_id'=>7
            ],
            [
                'id'=>48,
                'name'=>'Đồ lót nam',
                'slug'=>'do-lot-nam',
                'sub_categories_id'=>7
            ],
            [
                'id'=>49,
                'name'=>'Quần nam',
                'slug'=>'quan-nam',
                'sub_categories_id'=>7
            ],
            [
                'id'=>50,
                'name'=>'Quần Jeans',
                'slug'=>'quan-jeans',
                'sub_categories_id'=>7
            ],
            [
                'id'=>51,
                'name'=>'Thắt lưng',
                'slug'=>'that-lung',
                'sub_categories_id'=>7
            ],
            [
                'id'=>52,
                'name'=>'Bộ vest nam',
                'slug'=>'bo-vest-nam',
                'sub_categories_id'=>7
            ],
            [
                'id'=>53,
                'name'=>'Phụ kiện nam',
                'slug'=>'phu-kien-nam',
                'sub_categories_id'=>7
            ],
            [
                'id'=>54,
                'name'=>'Giày nam',
                'slug'=>'giay-nam',
                'sub_categories_id'=>7
            ],
            [
                'id'=>55,
                'name'=>'Giày công sở',
                'slug'=>'giay-cong-so',
                'sub_categories_id'=>7
            ],
            [
                'id'=>56,
                'name'=>'Trang phục nữ',
                'slug'=>'trang-phuc-nu',
                'sub_categories_id'=>8
            ],
            [
                'id'=>57,
                'name'=>'Áo khoác nữ',
                'slug'=>'ao-khoac-nu',
                'sub_categories_id'=>8
            ],
            [
                'id'=>58,
                'name'=>'Áo thun và áo kiểu nữ',
                'slug'=>'ao-thun-va-ao-kieu-nu',
                'sub_categories_id'=>8
            ],
            [
                'id'=>59,
                'name'=>'Đầm nữ',
                'slug'=>'dam-nu',
                'sub_categories_id'=>8
            ],
            [
                'id'=>60,
                'name'=>'Quần nữ',
                'slug'=>'quan-nu',
                'sub_categories_id'=>8
            ],
            [
                'id'=>62,
                'name'=>'Nội y nữ',
                'slug'=>'noi-y-nu',
                'sub_categories_id'=>8
            ],
            [
                'id'=>63,
                'name'=>'Đầm ngủ sexy',
                'slug'=>'dam-ngu-sexy',
                'sub_categories_id'=>8
            ],
            [
                'id'=>64,
                'name'=>'Phụ kiện nữ',
                'slug'=>'phu-kien-nu',
                'sub_categories_id'=>8
            ],
            [
                'id'=>65,
                'name'=>'Giày dép nữ',
                'slug'=>'giay-dep-nu',
                'sub_categories_id'=>8
            ],
            [
                'id'=>66,
                'name'=>'Giày cao gót',
                'slug'=>'giay-cao-got',
                'sub_categories_id'=>8
            ],
            [
                'id'=>67,
                'name'=>'Giày đế bằng',
                'slug'=>'giay-de-bang',
                'sub_categories_id'=>8
            ],
            [
                'id'=>68,
                'name'=>'Giày sneaker',
                'slug'=>'giay-sneaker',
                'sub_categories_id'=>8
            ],
            [
                'id'=>69,
                'name'=>'Dép nữ',
                'slug'=>'dep-nu',
                'sub_categories_id'=>8
            ],
            [
                'id'=>70,
                'name'=>'Giày dép nữ dưới 199K',
                'slug'=>'giay-dep-nu-duoi-199k',
                'sub_categories_id'=>8
            ],
            [
                'id'=>71,
                'name'=>'HOT-Đồng hồ cơ',
                'slug'=>'hot-dong-ho-co',
                'sub_categories_id'=>9
            ],
            [
                'id'=>72,
                'name'=>'Đồng hồ thời trang',
                'slug'=>'dong-ho-thoi-trang',
                'sub_categories_id'=>9
            ],
            [
                'id'=>73,
                'name'=>'Đồng hồ dây da',
                'slug'=>'dong-ho-day-da',
                'sub_categories_id'=>9
            ],
            [
                'id'=>74,
                'name'=>'Đồng hồ dây thép',
                'slug'=>'dong-ho-day-thep',
                'sub_categories_id'=>9
            ],
            [
                'id'=>75,
                'name'=>'Đồng hồ chống nước',
                'slug'=>'dong-ho-chong-nuoc',
                'sub_categories_id'=>9
            ],
            [
                'id'=>76,
                'name'=>'HOT-Đồng hồ đính đá',
                'slug'=>'hot-dong-ho-dinh-da',
                'sub_categories_id'=>10
            ],

            [
                'id'=>79,
                'name'=>'Đồng hồ trẻ em',
                'slug'=>'dong-ho-tre-em',
                'sub_categories_id'=>10
            ],
            [
                'id'=>80,
                'name'=>'Túi đeo chéo nam',
                'slug'=>'tui-deo-cheo-nam',
                'sub_categories_id'=>11
            ],
            [
                'id'=>81,
                'name'=>'Balo nam',
                'slug'=>'balo-nam',
                'sub_categories_id'=>11
            ],
            [
                'id'=>82,
                'name'=>'Ví nam',
                'slug'=>'vi-nam',
                'sub_categories_id'=>11
            ],
            [
                'id'=>83,
                'name'=>'Túi xách công sở',
                'slug'=>'tui-xach-cong-so',
                'sub_categories_id'=>11
            ],
            [
                'id'=>84,
                'name'=>'Túi Messager',
                'slug'=>'tui-messager',
                'sub_categories_id'=>11
            ],
            [
                'id'=>85,
                'name'=>'Balo nữ',
                'slug'=>'balo-nu',
                'sub_categories_id'=>12
            ],
            [
                'id'=>86,
                'name'=>'Túi đeo chéo nữ',
                'slug'=>'tui-deo-cheo-nu',
                'sub_categories_id'=>12
            ],
            [
                'id'=>87,
                'name'=>'Túi xách tay nữ',
                'slug'=>'tui-xach-tay-nu',
                'sub_categories_id'=>12
            ],
            [
                'id'=>88,
                'name'=>'Ví cầm tay',
                'slug'=>'vi-cam-tay',
                'sub_categories_id'=>12
            ],
            [
                'id'=>89,
                'name'=>'Túi tote nữ',
                'slug'=>'tui-tote-nu',
                'sub_categories_id'=>12
            ],
        ]);
    }
}
