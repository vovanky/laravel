@extends('layouts.admin')
@section('title',"show type news")
@section('content')
    <h2>{{__('tpl.user.detail')}}</h2>
    <input type="hidden" name="id" value="{{$users->id}}">
        <div class="form-group">
            <label for="name" >{{__('tpl.name')}}</label>
            <input type="text" value="{{$users->name}}" class="form-control" name="name">
        </div>
        <div class="from-group">
            <label for="email">{{__('tpl.email')}}</label>
            <input type="text" class="form-control" value="{{$users->email}}" name="email">
        </div>
        <div class="form-group">
            <label for="date_of_birth" >{{__('tpl.birthday')}}</label>
            <input type="date" class="form-control" name="date_of_birth" value="{{$users->date_of_birth}}">
        </div>
        <div class="form-group">
            <label for="is_admin" >{{__('tpl.is_admin')}}</label>
            <select name="is_admin" id="is_admin">
                <option value="1"@if($users->is_admin==1){{"selected"}}@endif>admin</option>
                <option value="0"@if($users->is_admin==0){{"selected"}}@endif>Người Dùng</option>
            </select>
        </div>
        <div class="form-group">
            <label for="url_images" >{{__('tpl.image')}}</label>
            <div class="img_div" style="width:100px;">
                <img src="{{ asset('upload/images/' . $users->url_images) }}" width="100%" height="100">
            </div>
        </div>
        <div class="form-group">
            <label for="gender" >{{__('tpl.gender')}}</label>
            <select name="gender" id="gender">
                <option value="1"@if($users->gender==1){{"selected"}}@endif>Nam</option>
                <option value="0"@if($users->gender==0){{"selected"}}@endif>Nữ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password" >{{__('tpl.password')}}</label>
            <input type="text"  class="form-control" name="password" value="{{$users->password}}">
        </div>
@endsection
