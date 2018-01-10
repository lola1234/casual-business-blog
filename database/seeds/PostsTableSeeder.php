<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1="first";
		$t2="second";
		$t3="third";
		$t4="fourth";
		$t5="fifth";
		
		$p1=[
			'title' =>$t1,
			'content' =>'First, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
			'category_id' =>5,
			'slug' =>str_slug($t1),
			'featured' =>'/uploads/images/slide1.jpg',
			'user_id' => 1
		];
		
		$p2=[
			'title' =>$t2,
			'content' =>'First, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
			'category_id' =>3,
			'slug' =>str_slug($t2),
			'featured' =>'/uploads/images/slide2.jpg',
			'user_id' => 1
		];
		
		$p3=[
			'title' =>$t3,
			'content' =>'First, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
			'category_id' =>5,
			'slug' =>str_slug($t3),
			'featured' =>'/uploads/images/slide3.jpg',
			'user_id' => 1
		];
		
		$p4=[
			'title' =>$t4,
			'content' =>'First, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
			'category_id' =>3,
			'slug' =>str_slug($t4),
			'featured' =>'/uploads/images/slide1.jpg',
			'user_id' => 1
		];
		
		$p5=[
			'title' =>$t5,
			'content' =>'First, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
			'category_id' =>7,
			'slug' =>str_slug($t5),
			'featured' =>'/uploads/images/slide2.jpg',
			'user_id' => 1
		];
		
		Post::create($p1);
		Post::create($p2);
		Post::create($p3);
		Post::create($p4);
		Post::create($p5);		
    }
}
