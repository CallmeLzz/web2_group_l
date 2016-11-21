<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $table = 'menus';
    protected $primaryKey = 'menu_id';
    public $timestamps = false;
    protected $fillable = [
    	'menu_title',
    	'menu_level',
    	'menu_parents'
	];
}
