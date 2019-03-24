<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [ 'To Do', 'Doing', 'Done' ];
        foreach($categories as $c) {
            Category::create(['name' => $c]);
        }        
    }
}
