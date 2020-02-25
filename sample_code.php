<?php
use DataTable;

//first make array of your id that which are you want to update
public function myFunc(){
	$id_list = [1, 2, 3, 4, 5];
	//then do like below suppose your model is 'DataTable'
	DataTable::whereIn('id', $id_list)
	    ->update([
		'colour' => 'black',
		'size' => 'XL', 
		'price' => 10000
	    ]);

}
	


//even you can get data from array of id 
public function myFunc2(){

	$id_list = [1, 2, 3, 4, 5];

	DataTable::whereIn('id', $id_list)
			->with('category')
			->get();
}


