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
        factory(App\User::class,1)->create();
        factory(App\Category::class)->times(5)->create();
        factory(App\Publication::class)->times(25)->create();
        factory(App\Image::class)->times(50)->create();
        //factory(App\File::class)->times(50)->create();
    }

}
