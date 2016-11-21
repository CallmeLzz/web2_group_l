<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Prices;

class CategoryController extends Controller
{
    //
    public function __construct() {
        $this->data = array();
    }
    public function index(){
    	$cate = new Categories();
    	$price = new Prices();

    	$type_1 = $cate->getData('1');
    	$type_2 = $cate->getData('2');
    	$type_3 = $cate->getData('3');
    	$type_5 = $cate->getData('5');
    	$getPrice = $price->getPrice();

    	/*var_dump($type_1);
    	var_dump($type_2);
    	var_dump($type_3);
    	var_dump($type_5);
    	die();*/
    	
    	return view('front.category.category', [
    			'type_1'=> $type_1,
    			'type_2'=> $type_2,
    			'type_3'=> $type_3,
    			'type_5'=> $type_5,
    			'price'=> $getPrice
    		]);
    }
}
