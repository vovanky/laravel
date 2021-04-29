<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Crypt;
class UserController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    //     $this->middleware('check_admin');
    // }
    Public function show($id){
        return view('admin\user.show',['users' => User::findOrFail($id)]);
    }
    public function index(){
        $users = User::all();
        return view('admin\user.index',compact('users'));
    }
    public function create(){
        $users = User::all();
        return view('admin\user.create',compact('users'));
    }
    public function store(UserRequest $request){
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->date_of_birth = $request->date_of_birth;
        $users->is_admin = $request->is_admin;
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
            $users->url_images = $tenhinh;
        } else {
            $users->url_images = "";
        }
        $users->gender = $request->gender;
        $users->password = Hash::make($request->password);
        $users->remember_token = $request->remember_token;
        $users->save();
        // User::create($request->all());
        return redirect()->action('UserController@index');
    }
    public function edit($id){
        $users = User::find($id);
        return view('admin\user.edit',compact('users'));
    }
    public function update(UserRequest $request,$id){
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->date_of_birth = $request->date_of_birth;
        $users->is_admin = $request->is_admin;
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
            $users->url_images = $tenhinh;
        } else {
            $users->url_images = "";
        }
        $users->gender = $request->gender;
        $users->password = Hash::make($request->password);
        $users->save();
        return redirect()->action('UserController@index');
    }
    public function destroy($id){
        $users = User::find($id);
        $users->delete();
        return redirect()->action('UserController@index');
    }
}
