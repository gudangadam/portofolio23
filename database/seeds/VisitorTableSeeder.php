<?php

use App\visitor;
use Illuminate\Database\Seeder;


class VisitorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
	DB::table('visitor')->delete();

	$data = array(
		array('id'=>1, 'name'=>'adam', 'phone'=>'0898998', 'email'=>'adam@gmail.com','occupation'=>'proggrammer'),
		array('id'=>2, 'name'=>'fathira', 'phone'=>'08213123', 'email'=>'tira@gmail.com','occupation'=>'secretary')
	);

	DB::table('visitor')->insert($data);
	
    }
}
