<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NewsType;
use App\Models\Category;
use App\Http\Resources\newsTypeResource;

class NewsTypeController extends Controller
{
    //
    public function index(){
        $newstype = NewsType::all();
        return view('admin\newstype.index',array('newstype' => $newstype));
    }
    public function create(){
        $category = Category::all();
        return view('admin\newstype.create',compact('category'));
    }
    public function store(request $request){
        $newstype = new NewsType;
        $category = new Category;
        $newstype->name = $request->name;
        $newstype->status = $request->status;
        $newstype->id_theloai = $request->id_theloai;

        $newstype->save();
        return redirect()->action('NewsTypeController@index');
    }
    public function edit($id){
        $categories = Category::all();
        $newstype = NewsType::findOrFail($id);
        return view('admin\newstype.edit',compact('newstype','categories'));
    }
    public function update(request $request,$id){
        $newstype = NewsType::find($id);
        $newstype->name = $request->name;
        $newstype->status = $request->status;
        $newstype->id_theloai = $request->id_theloai;
        $newstype->save();
        return redirect()->action('NewsTypeController@index');
    }
    public function destroy($id){
        $newstype = NewsType::find($id);
        $newstype->delete();
        return redirect()->action('NewsTypeController@index');
    }
    public function show($id){
        $newstype = NewsType::where('id','=',$id)->select('*')->first();
        return view('admin\newstype.show',compact('newstype'));
    }
}
