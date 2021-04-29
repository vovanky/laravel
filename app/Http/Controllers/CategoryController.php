<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Models\Category;
//use App\Theloai;

class CategoryController extends Controller
{
    public function index(){
        $categories = DB::table('theloai')->simplePaginate(5);
        return view('admin\category.index',compact('categories'));
    }
    public function show($id){
        $category = Category::where('id','=',$id)->select('*')->first();
        return view('admin\category.show',compact('category'));
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        $listTheLoai= 'news - update';
        return view('admin\category.edit',compact('category','listTheLoai'));
    }
    public function update(request $request,$id){
        $category = Category::find($id);
        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();
        return redirect()->action('CategoryController@index');
    }
    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->action('CategoryController@index')->with('success','dữ liệu xóa thành công ! ');
    }
    public function store(Request $request){
        $category = new Category;
        $category->name = $request->name;
        $category->status = $request ->status;
        $category -> save();
        return redirect()->action('CategoryController@index');
    }
    public function create(){
        return view('admin\category.create');
    }
}
