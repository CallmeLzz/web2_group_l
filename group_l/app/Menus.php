<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Menus extends Model
{
    //
    protected $table = 'menus';
    //protected $primaryKey = 'menu_id';
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
	public function getParentCond($id){
		return self::where('menu_id', $id)->get();
	}
	public function updateMenu($update_id, $update_title, $update_level){
		self::where('menu_id', $update_id)->update(array(
			'menu_title' => $update_title,
			'menu_level' => $update_level));
	}
	public function deleteMenu($id){
		self::where('menu_id', $id)->delete();
	}
	public function addMenu($id, $add_menu_title, $add_menu_level, $add_menu_parents){
		$menu = new self;

		$menu->menu_id = $id;
		$menu->menu_title = $add_menu_title;
		$menu->menu_level = $add_menu_level;
		$menu->menu_parents = $add_menu_parents;

		$menu->save();
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
