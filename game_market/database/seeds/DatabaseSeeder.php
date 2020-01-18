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
        // $this->call(UsersTableSeeder::class);
        DB::table('categories')->truncate();
        $categories = [
          ['id' => '1', 'category' => 'RPG'],
          ['id' => '2', 'category' => 'アクション'],
          ['id' => '3', 'category' => 'シミュレーション'],
          ['id' => '4', 'category' => 'シューティング'],
          ['id' => '5', 'category' => 'レーシング'],
          ['id' => '6', 'category' => '格闘ゲーム'],
          ['id' => '7', 'category' => 'スポーツゲーム'],
          ['id' => '8', 'category' => 'ホラー']
        ];

        DB::table('categories')->insert($categories);
    }
}
