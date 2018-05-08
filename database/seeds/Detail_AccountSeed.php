<?php

use Illuminate\Database\Seeder;

class Detail_AccountSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('detail_accounts')->insert([
    		[
    		'id'=>1,
    		'user_id'=>1,
    		'phone'=>'0963560780',
    		'address'=>'',
    		'sex'=>1,
                            'delete'=>1,
    		],
    		[
    		'id'=>2,
    		'user_id'=>2,
    		'phone'=>'0963560780',
    		'address'=>'',
    		'sex'=>1,
                            'delete'=>1,
    		],
    		[
    		'id'=>3,
    		'user_id'=>3,
    		'phone'=>'0963560780',
    		'address'=>'',
    		'sex'=>1,
                            'delete'=>1,
    		],
    		[
    		'id'=>4,
    		'user_id'=>4,
    		'phone'=>'0963560780',
    		'address'=>'',
    		'sex'=>1,
                            'delete'=>1,
    		],
    		[
    		'id'=>5,
    		'user_id'=>5,
    		'phone'=>'0963560780',
    		'address'=>'',
    		'sex'=>1,
                            'delete'=>1,
    		],
    		[
    		'id'=>6,
    		'user_id'=>6,
    		'phone'=>'0963560780',
    		'address'=>'',
    		'sex'=>1,
                            'delete'=>1,
    		],
           ]);
    }
}
