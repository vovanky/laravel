@extends('layouts.admin')
@section('content')
<h2>{{__('tpl.add.users')}}</h2>
    <form action="/user/store" method="POST" role="form" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="form-group">
            <label for="name" >{{__('tpl.name')}}</label>
            <input type="text" placeholder="name" class="form-control" name="name">
            @if($errors->has('name'))
            <span class="help-block">
                <strong>{{$errors->first('name')}}</strong>
            </span>
            @endif
        </div>
        <div class="form-group">
            <label for="email" >{{__('tpl.email')}}</label>
            <input type="email" placeholder="email" class="form-control" name="email">
            @if($errors->has('email'))
            <span class="help-block">
                <strong>{{$errors->first('email')}}</strong>
            </span>
            @endif
        </div>
        <div class="form-group">
            <label for="date_of_birth" >{{__('tpl.birthday')}}</label>
            <input type="date" lass="form-control" name="date_of_birth">
        </div>
        <div class="form-group">
            <label for="is_admin" >{{__('tpl.is_admin')}}</label>
            <select name="is_admin" id="is_admin">
                <option value="1">admin</option>
                <option value="0">Người Dùng</option>
            </select>
        </div>
        <div class="form-group">
            <label for="url_images" >{{__('tpl.image')}}</label>
            <input type="file" lass="form-control" name="url_images" accept="image/*">
        </div>
        <div class="form-group">
            <label for="gender" >{{__('tpl.gender')}}</label>
            <select name="gender" id="gender">
                <option value="1">Nam</option>
                <option value="0">Nữ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password" >{{__('tpl.password')}}</label>
            <input type="text"  class="form-control" name="password">
            @if($errors->has('password'))
            <span class="help-block">
                <strong>{{$errors->first('password')}}</strong>
            </span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">{{__('tpl.db.add')}}</button>
    </form>
@endsection
