<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    //
    protected $table = 'banners';
    protected $primaryKey = 'banner_id';
    public $timestamps = false;
    protected $fillable = [
    	'banner_title',
    	'banner_img'
	];

	public function getData(){
		return self::all();
	}
}
