<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
    	$cates = Category::all();
    	return view('admin.category.index', ['cates' => $cates]);
    }
    public function addNew(Request $request){
    	$model = new Category();
    	$model->name = $request->input('name');
    	$model->parent_id = $request->input('parent_id');
    	$model->save();
    	return redirect(route('category.index'));
    }
}
