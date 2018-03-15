<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\User::class, 100)->create();

    	factory(App\Category::class, 100)->create();

    	factory(App\Tag::class, 100)->create();
    }
}
