<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
                'name'=>'HUYNH PHI HUNG-1',
                'email'=>'huynhphihung1995@gmail.com',
                'password'=>bcrypt(123456),
                'role_id'=>1
            ], 
            [
                'name'=>'HUYNH PHI HUNG-1',
                'email'=>'huynhphihung1996@gmail.com',
                'password'=>bcrypt(123456),
                'role_id'=>0
            ], 
            [
                'name'=>'HUYNH PHI HUNG-1',
                'email'=>'huynhphihung1997@gmail.com',
                'password'=>bcrypt(123456),
                'role_id'=>2
            ], 
        ]);
    }
}
