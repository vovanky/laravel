<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Newstype;
use App\Http\Resources\AdvertisementResource;
use App\Http\Requests\AdvertisementRequest;

class AdvertisementController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('check_admin');
    }
    public function index(){
        $advertisements = AdvertisementResource::collection(Advertisement::all());
        return view('admin\advertisement.index',compact('advertisements'));
    }
    public function create(){
        $newstype = Newstype::all();
        return view('admin\advertisement.create',compact('newstype'));
    }
    public function store(AdvertisementRequest $request){
        $advertisements = new Advertisement;
        // $advertisements->name = $request->name;
        // $advertisements->content = $request->content;
        // $advertisements->location = $request->location;
        // $advertisements->id_loaitin = $request->id_loaitin;
        // $advertisements->url_hinh = $request->url_hinh;
        // $advertisements->status = $request->status;
        // $advertisements->save();
        $advertisements->create($request->all());
        return redirect()->action('AdvertisementController@index');
    }
    public function show($id){
        $advertisements = Advertisement::find($id);
        return view('admin\advertisement.show',compact('advertisements'));
    }
    public function edit($id){
        $newstype= Newstype::all();
        $advertisements = Advertisement::find($id);
        return view('admin\advertisement.edit',compact('advertisements','newstype'));
    }
    public function update(AdvertisementRequest $request,$id){
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $advertisements = Advertisement::find($id);
        $advertisements->name = $request->name;
        $advertisements->content = $request->content;
        $advertisements->location = $request->location;
        $advertisements->id_loaitin = $request->id_loaitin;
        $advertisements->status = $request->status;
        $advertisements->url_hinh = $request->url_hinh;
        $advertisements->save();
        return redirect()->action('AdvertisementController@index')->with('success','Cập Nhật thành công');
    }
    public function destroy($id){
        $advertisements = Advertisement::find($id);
        $advertisements->delete();
        return redirect()->action('AdvertisementController@index')->with('delete_success','delete thành công');
    }
}
