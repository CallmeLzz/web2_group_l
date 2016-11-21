<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Prices;

class Categories extends Model
{
    //
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    public $timestamps = false;
    protected $fillable = [
    	'category_title',
    	'category_type',
    	'category_content',
    	'category_img'
	];

    public function getData($type){
        $result = DB::table('categories')
            ->join('prices', 'categories.category_type', '=', 'prices.price_type')
            ->select('categories.category_title', 'categories.category_content', 'categories.category_img',
                    'prices.price_rate')
            ->where('category_type', 'like', $type)
            ->get();
        return $result;
        //return self::where('category_type', $type)->get();
    }
}