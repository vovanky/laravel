@extends('layouts.admin')
@section('title',"show type news")
@section('content')
    <h2>{{__('tpl.ad.detail')}}</h2>
    <table class="table">
        <div class="form-group">
            <label for="name" >{{__('tpl.name')}}</label>
            <input type="text" value="{{$advertisements->name}}" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="conent" >{{__('tpl.content')}}</label>
            <input type="text" value="{{$advertisements->content}}" class="form-control" name="content">
        </div>
        <div class="form-group">
            <label for="location" >{{__('tpl.location')}}</label>
            <input type="text" value="{{$advertisements->location}}" class="col-2 form-control" name="location">
        </div>
        <label for="id_loaitin">{{__('tpl.newstype')}}</label>
        <input type="text" value="{{$advertisements->loaitin->name}}">
        <div class="form-group">
            <label for="url_images" >{{__('tpl.image')}}</label>
            <div class="img_div" style="width:100px;">
                <img src="{{ URL::to('upload/images/' . $advertisements->url_hinh) }}" width="100%" height="100">
            </div>
        </div>
        <div class="form-group">
            <label for="status">{{__('tpl.status')}}</label>
            <input type="text" value="@if($advertisements->status==1){{"Hiện"}} @else($advertisements->status==0) {{"Ẩn"}} @endif" name="id_user">
        </div>
    </table>
@endsection
