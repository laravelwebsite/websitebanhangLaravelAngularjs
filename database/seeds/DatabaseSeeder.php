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
            //$this->call(RoleSeed::class);
        	//$this->call(UserSeed::class);
    	//$this->call(MenuSeed::class);
    	//$this->call(User_MenuSeed::class);
            //$this->call(CategorySeed::class);
            $this->call(SubCategorySeed::class);
    }
}
