<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Menus;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function index()
    {
        $menu = new Menus();
        $cate = new Categories();
        $result_menu = $menu->getParent();
        $result_cate = $cate->get();

        return view('front.admin.page.index')->with(['menu' => $result_menu, 'cate' => $result_cate]);
    }

    /*=============================== EDIT ===============================*/
    public function edit(Request $request)
    {
        $id = $request->input('id');
        $menu = new Menus();
        $result_menu = $menu->finWithkey($id);

        return view('front.admin.edit.index')->with('menu', $result_menu);
    }

    /*=============================== UPDATE ===============================*/
    public function update(Request $request)
    {
        $id = $request->input('menu_id');
        $menu_title = $request->input('menu_title');
        $menu_level = $request->input('menu_level');

        $menu = new Menus();
        $result_menu = $menu->updateMenu($id, $menu_title, $menu_level);

        return redirect()->to('/admin');
    }

    /*=============================== DELETE ===============================*/
    public function delete(Request $request)
    {
        $id = $request->input('id');

        $menu = new Menus();
        $result_menu = $menu->deleteMenu($id);

        return redirect()->to('/admin');
    }

    /*=============================== ADD ===============================*/
    public function addView(Request $request)
    {
        return view('front.admin.add.index');
    }

    public function add(Request $request)
    {
        $id = $request->input('menu_id');
        $menu_title = $request->input('menu_title');
        $menu_level = $request->input('menu_level');
        $menu_parents = $request->input('menu_parents');

        $menu = new Menus();
        $result_menu = $menu->addMenu($id, $menu_title, $menu_level, $menu_parents);

        if ($result_menu != null) {
            return response()->view('front.admin.add.index', ['message' => $result_menu]);
        } else return redirect()->to('/admin');
    }

    /*=============================== SEARCH ===============================*/
    public function searchMenu(Request $request)
    {
        $key = $request->input('key');
        $type = $request->input('type');

        $menu = new Menus();
        $result_menu = $menu->searchMenu($type, $key);

        /*var_dump($result_menu->toArray());
        die();*/
        return view('front.admin.search.index')->with('searchResult', $result_menu);
    }

    /*=============================== ADD CATEGORY ===============================*/
    public function addCategory(Request $request)
    {
        return view('front.admin.addCategories.index');
    }

    public function addCategories(Request $request)
    {
        $category_title = $request->input('category_title');
        $category_type = $request->input('category_type');
        $category_content = $request->input('category_content');
        $destinationPath = 'images/upload';
        $extension = Input::file('category_img')->getClientOriginalExtension();
        $fileName = md5($extension);
        Input::file('category_img')->move($destinationPath, $fileName);
        
        $category = new Categories();
        $result_category = $category->addCategories($category_title, $category_type, $category_content, $fileName);

        if ($result_category != null) {
            return response()->view('front.admin.addCategories.index', ['message' => $result_category]);
        } else return redirect()->to('/admin');
    }

    /*=============================== EDIT CATEGORY ===============================*/
    public function editCategory(Request $request)
    {
        $id = $request->input('id');
        $category = new Categories();
        $result_cate = $category->finWithkey($id);
        return view('front.admin.editCategories.index')->with('category', $result_cate);
    }

    /*=============================== UPDATE CATEGORY ===============================*/
    public function updateCategory(Request $request)
    {

        $id = $request->input('category_id');
        $category_title = $request->input('category_title');
        $category_type = $request->input('category_type');
        $category_content = $request->input('category_content');
        if(Input::file('category_img') != null)
        {
            $destinationPath = 'images/upload';
            $extension = Input::file('category_img')->getClientOriginalExtension();
            $fileName = md5($extension);
            Input::file('category_img')->move($destinationPath, $fileName);
            $category = new Categories();
            $result_category = $category->updateCategories($id, $category_title, $category_type, $category_content, $fileName);
        }
        else{
            $category = new Categories();
            $result_category = $category->updateCategories($id, $category_title, $category_type, $category_content, null);
        }
        

        return redirect()->to('/admin');
    }

    /*=============================== DELETE CATEGORY ===============================*/
    public function deleteCategory(Request $request)
    {
        $id = $request->input('id');

        $category = new Categories();
        $result_category = $category->deleteCategories($id);

        return redirect()->to('/admin');
    }
}