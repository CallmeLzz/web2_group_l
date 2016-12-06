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

    public function get()
    {
        return self::all();
    }

    public function finWithkey($id)
    {
        return self::where('category_id', $id)->get();
    }

    public function getData($type)
    {
        $result = DB::table('categories')
            ->join('prices', 'categories.category_type', '=', 'prices.price_type')
            ->select('categories.category_title', 'categories.category_content', 'categories.category_img',
                'prices.price_rate')
            ->where('category_type', 'like', $type)
            ->get();
        return $result;
        //return self::where('category_type', $type)->get();
    }

    public function addCategories($add_category_title, $add_category_type, $add_category_content, $add_category_img)
    {
            $category = new self;
            $category->category_title = $add_category_title;
            $category->category_type = $add_category_type;
            $category->category_content = $add_category_content;
            $category->category_img = 'images/upload/'.$add_category_img;
            $category->save();
    }

    public function deleteCategories($id)
    {

        self::where('category_id', $id)->delete();
    }

    public function updateCategories($update_category_id, $update_category_title, $update_category_type, $update_category_content, $update_category_img)
    {
        if($update_category_img != null){
        self::where('category_id', $update_category_id)->update(array(
            'category_title' => $update_category_title,
            'category_type' => $update_category_type,
            'category_content' => $update_category_content,
            'category_img' => 'images/upload/'.$update_category_img));
        }
        else{
            self::where('category_id', $update_category_id)->update(array(
            'category_title' => $update_category_title,
            'category_type' => $update_category_type,
            'category_content' => $update_category_content));
        }
    }

    public function checkExistsData($id)
    {
        $check = null;
        foreach (self::where('category_id', $id)->get() as $key => $value) {
            $check = $value->category_id;
        }
        if ($check != null) return true;
        else return false;
    }
}