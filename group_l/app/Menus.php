<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    //
    protected $table = 'menus';
    protected $primaryKey = 'menu_id';
    public $timestamps = false;
    protected $fillable = [
    	'menu_id',
    	'menu_title',
    	'menu_level',
    	'menu_parents'
	];

	public function getParent(){
		return self::where('menu_level', '1')->get();
	}

	public $result = null;
	public function getData($key){
		$hierarchy = self::where('menu_parents', "")->get();

		/*var_dump($hierarchy->toArray());
		die();*/

		foreach ($hierarchy as $key => $value) {
			$this->result .= $value->menu_title.';';
			foreach ($this->getData($value->menu_id) as $key => $value) {
				$this->result .= $value->menu_title.'/';
			}
			/*if ($value->menu_parents != null){
				$this->result .= $value->menu_title.'/';
				return $this->getData($value->menu_parents);
			}
			else {
				$this->result .= $value->menu_title.'/';
				return $this->getData($value->menu_parents);
			} */
		}
		return $this->result;
	}
}
