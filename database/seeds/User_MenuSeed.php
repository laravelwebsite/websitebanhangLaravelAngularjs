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
          'id'=>1,
          'user_id'=>1,
          'menu_id'=>1
          ],
          [
          'id'=>2,
          'user_id'=>1,
          'menu_id'=>2
          ],
          [
          'id'=>3,
          'user_id'=>1,
          'menu_id'=>3
          ],
          [
          'id'=>4,
          'user_id'=>1,
          'menu_id'=>4
          ],
          [
          'id'=>5,
          'user_id'=>2,
          'menu_id'=>1
          ],
          [
          'id'=>6,
          'user_id'=>2,
          'menu_id'=>2
          ],
          [
          'id'=>7,
          'user_id'=>2,
          'menu_id'=>3
          ],
          [
          'id'=>8,
          'user_id'=>1,
          'menu_id'=>5
          ],
          [
          'id'=>9,
          'user_id'=>1,
          'menu_id'=>6
          ],
          [
          'id'=>10,
          'user_id'=>1,
          'menu_id'=>7
          ],
          [
          'id'=>11,
          'user_id'=>1,
          'menu_id'=>8
          ],
            [
          'id'=>12,
          'user_id'=>1,
          'menu_id'=>9
          ],
          ]);
    }
}
