<?php

use Illuminate\Database\Seeder;

class PollsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('polls')->insert([
            'score' => '1',
            'comment' => '¡Pesimo!'
        ]);

        DB::table('polls')->insert([
            'score' => '10',
            'comment' => '¡Excelente!'
        ]);
    }
}
