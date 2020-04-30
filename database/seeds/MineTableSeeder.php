<?php

use Illuminate\Database\Seeder;

class MineTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    DB::table('mines')->truncate(); //2回目実行の際にシーダー情報をクリア
    DB::table('mines')->insert([
      'name' => 'やまだ',
      'age' => '40'
    ]);
  }
}
