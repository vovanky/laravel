@extends('layouts.admin')
@section('title',"show type news")
@section('content')
    <h2>{{__('tpl.news.detail')}}</h2>
        <div class="form-group">
            <label for="name" >{{__('tpl.name')}} : </label>
            <input type="text" value="{{$news->name}}" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="summary" >{{__('tpl.summary')}} : </label>
            <textarea class="form-control" name="summary">{{$news->summary}}</textarea>
        </div>
        <div class="form-group">
            <label for="content" >{{__('tpl.content')}} : </label>
            <textarea class="form-control" name="content">{{$news->content}}</textarea>
        </div>
        <div class="from-group">
            <label for="id_loaitin">{{__('tpl.news.type')}} : </label>
            <input type="text" value="{{$news->loaitin->pluck('name')->implode(', ')}}" name="id_loaitin">
        </div>
        <div class="from-group">
            <label for="id_user">{{__('tpl.auth')}} : </label>
            <input type="text" value="{{$news->users->pluck('name')->implode(', ')}}" name="id_user">
        </div>
        <div class="form-group">
            <label for="status">{{__('tpl.status')}} : </label>
            <input type="text" value="@if($news->status==1){{"Hiện"}} @else($news->status==0) {{"Ẩn"}} @endif" name="id_user">
        </div>
        <div class="form-group">
            <label for="url_images" >{{__('tpl.image')}} : </label>
            <div class="img_div" style="width:100px;">
                <img src="{{ asset('upload/images/' . $news->url_images) }}" width="100%" height="100">
            </div>
        </div>
@endsection
