<?php

use Illuminate\Database\Seeder;

class User_MenuSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usermenus')->insert([
        	[
          'user_id'=>1,
          'menu_id'=>1
          ],
          [
          'user_id'=>1,
          'menu_id'=>2
          ],
          [
          'user_id'=>1,
          'menu_id'=>3
          ],
          [
          'user_id'=>1,
          'menu_id'=>4
          ],
          [
          'user_id'=>2,
          'menu_id'=>1
          ],
          [
          'user_id'=>2,
          'menu_id'=>2
          ],
          [
          'user_id'=>2,
          'menu_id'=>3
          ],
          ]);
    }
}
