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
        DB::table('aircrafts')->truncate();

        $aircrafts = array(
            ['type' => 'F100', 'manufacturer' => '', 'description' => ''],
            ['type' => 'B461', 'manufacturer' => '', 'description' => ''],
            ['type' => 'B463', 'manufacturer' => '', 'description' => ''],
            ['type' => 'A310', 'manufacturer' => '', 'description' => ''],
            ['type' => 'B735', 'manufacturer' => '', 'description' => ''],
            ['type' => 'A30B', 'manufacturer' => '', 'description' => ''],
        );

        DB::table("aircrafts")->insert($aircrafts);

        // $this->call(UsersTableSeeder::class);
    }
}
