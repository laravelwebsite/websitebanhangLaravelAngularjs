<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$this->call(UserSeed::class);
    	$this->call(MenuSeed::class);
    	$this->call(RoleSeed::class);
    	$this->call(User_MenuSeed::class);
    }
}
