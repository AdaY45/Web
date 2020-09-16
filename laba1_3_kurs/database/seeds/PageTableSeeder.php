<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 25; $i++)
            DB::table('page')->insert([
                'title' => 'Drawing '.$i,
                'address' => '/drw'.$i,
                'content' => 'Pencil, marker and ink.'
            ]);
    }
}
