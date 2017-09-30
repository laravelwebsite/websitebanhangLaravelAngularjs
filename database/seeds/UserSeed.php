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
                'name'=>'HUYNH PHI HUNG-5',
                'email'=>'huynhphihung1995@gmail.com',
                'password'=>bcrypt(123456),
                'role_id'=>4
            ], 
            [
                'name'=>'HUYNH PHI HUNG-6',
                'email'=>'huynhphihung1996@gmail.com',
                'password'=>bcrypt(123456),
                'role_id'=>3
            ], 
            [
                'name'=>'HUYNH PHI HUNG-7',
                'email'=>'huynhphihung1997@gmail.com',
                'password'=>bcrypt(123456),
                'role_id'=>3
            ], 
            [
                'name'=>'HUYNH PHI HUNG-8',
                'email'=>'huynhphihung1998@gmail.com',
                'password'=>bcrypt(123456),
                'role_id'=>2
            ],
             [
                'name'=>'HUYNH PHI HUNG-9',
                'email'=>'huynhphihung1999@gmail.com',
                'password'=>bcrypt(123456),
                'role_id'=>2
            ],
            [
                'name'=>'HUYNH PHI HUNG-9',
                'email'=>'huynhphihung2000@gmail.com',
                'password'=>bcrypt(123456),
                'role_id'=>1
            ],
        ]);
    }
}
