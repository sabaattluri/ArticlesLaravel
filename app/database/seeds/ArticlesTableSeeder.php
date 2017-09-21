<?php


class ArticlesTableSeeder extends Seeder {

	// public function run(){
 // DB::table('Articles')->delete();
	// $Articles = array(
	// array(


 //            'name'=>'Moofwd',
 //        'description'=>'iPhone 8 introduces an allnew glass design. The worlds most popular camera, now even better. The smartest, most powerful chip ever in a smartphone.',
 //           'URL'=>'moofwd.com',
 //          'image'=>'MoofwdImage',
 //           'Status'=>'Draft'

 //                )
	// );
	DB::table('Articles')->insert($Articles);
	}
}