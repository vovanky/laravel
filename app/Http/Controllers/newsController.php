<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Models\News;
use App\Models\Newstype;
use App\Models\User;
use App\Images;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\newsRequest;
use App\Http\Resources\NewsResource;

class newsController extends Controller
{
    //
    public function index(){
        $news = News::all();
        return view('admin\news.index',compact('news'));
    }
    public function create(){
        $newstype = News::all();
        $users = User::all();
        return view('admin\news.create',compact('newstype','users'));
    }
    public function store(newsRequest $request){
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $news = new tin;
        $news->name = $request->name;
        $news->summary = $request->summary;
        $news->content = $request->content;
        $news->id_loaitin = $request->id_loaitin;
        $news->id_user = $request->id_user;
        $news->status = $request->status;
        if($request->hasFile('url_images')){
            $file = $request->file('url_images');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != "jpg" && $duoi != "png" && $duoi != "jpeg")
            {
                // return redirect('admin/tintuc/them')->with('loi', 'Chỉ được chọn file jpg, png, jpeg');
                return redirect()->back()->with('loi', 'Chỉ được chọn file jpg, png, jpeg');
            }

            $name = $file->getClientOriginalName();
            $tenhinh = str_random()."_".$name;
            while(file_exists("upload/images/".$tenhinh)) {
                $tenhinh = str_random()."_".$name;
            }
            $file->move("upload/images",$tenhinh);
            $news->url_images = $tenhinh;
        } else {
            $news->url_images = "";
        }
        $news->save();
        return redirect()->action('newsController@index');
    }
    public function edit($id){
        // $news=NewsResource::collection(Tin::all());
        $newstype = Newstype::all();
        $users = User::all();
        $news = News::findOrFail($id);
        return view('admin\news.edit',compact('news','newstype','users'));
    }
    public function update(request $request,$id){
        $news = News::find($id);
        $news->name = $request->name;
        $news->summary = $request->summary;
        $news->content = $request->content;
        $news->id_loaitin = $request->id_loaitin;
        $news->id_user = $request->id_user;
        $news->status = $request->status;
        if($request->hasFile('url_images')){
            $file = $request->file('url_images');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != "jpg" && $duoi != "png" && $duoi != "jpeg")
            {
                // return redirect('admin/tintuc/them')->with('loi', 'Chỉ được chọn file jpg, png, jpeg');
                return redirect()->back()->with('loi', 'Chỉ được chọn file jpg, png, jpeg');
            }

            $name = $file->getClientOriginalName();
            $tenhinh = str_random()."_".$name;
            while(file_exists("upload/images/".$tenhinh)) {
                $tenhinh = str_random()."_".$name;
            }
            $file->move("upload/images",$tenhinh);
            $news->url_images = $tenhinh;
        } else {
            $news->url_images = "";
        }
        $news->save();
        // $news->update($request->all());
        return redirect()->action('newsController@index');
    }
    public function destroy($id){
        $news = News::find($id);
        $news->delete();
        return redirect()->action('newsController@index');
    }
    public function show($id){
        $news=NewsResource::collection(News::all());
        $news = News::find($id);
        return view('admin\news.show',compact('news'));
    }
}
