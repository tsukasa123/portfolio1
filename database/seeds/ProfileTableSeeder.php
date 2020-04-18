<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'avatar' => 'storage/sample.JPG',
            'background_image' => 'storage/sample.JPG',
            'introduction' => 'This is practice for using seeds and making fake twitter.'
        ]);
    }
}
