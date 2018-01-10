<?php

use Illuminate\Database\Seeder;

use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = ['name' => 'Java'];
		$category2 = ['name' => 'PHP'];
		$category3 = ['name' => 'SQL'];
		$category4 = ['name' => 'SPARK'];
		$category5 = ['name' => 'Javascript'];
		$category6 = ['name' => 'Forge'];
		$category7 = ['name' => 'CSS3'];
		$category8 = ['name' => 'HTML'];
		
		Category::create($category1);
		Category::create($category2);
		Category::create($category3);
		Category::create($category4);
		Category::create($category5);
		Category::create($category6);
		Category::create($category7);
		Category::create($category8);
    }
}
