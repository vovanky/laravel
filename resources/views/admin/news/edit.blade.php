@extends('layouts.admin')
@section('content')
    <h2>{{__('tpl.news.detail')}}</h2>
    <form action="/news/update/{{$news->id}}" method="POST" role="form" enctype="multipart/form-data">
        {{method_field('PATCH')}}
        @csrf
        <input type="hidden" name="id" value="{{$news->id}}">
        <div class="form-group">
            <label for="name" >{{__('tpl.name')}}</label>
            <input type="text" value="{{$news->name}}" class="form-control @if($errors->has('name')) name_error  @endif" name="name">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="summary" >{{__('tpl.summary')}}</label>
            <textarea class="form-control @if($errors->has('summary')) name_error  @endif" name="summary" aria-label="With textarea" rows="4">{{$news->summary}}</textarea>
            @if($errors->has('summary'))
                <span class="help-block">
                    <strong>{{$errors->first('summary')}}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="content" >{{__('tpl.content')}}</label>
            <textarea class="form-control @if($errors->has('content')) name_error  @endif" name="content" rows="8">{{$news->content}}</textarea>
            @if ($errors->has('content'))
                <span class="help-block">
                    <strong>{{$errors->first('content')}}</strong>
                </span>
            @endif
        </div>
        <div class="from-group">
            <label for="loaitin">{{__('tpl.news.type')}}</label>
            <select name="id_loaitin" id="">
                @foreach ($newstype as $type_news )
                <option value="{{$type_news->id}}" @if($type_news->id==$news->id_loaitin){{"selected"}}@endif>{{$type_news->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="from-group">
            <label for="user">{{__('tpl.auth')}}</label>
            <select name="id_user" id="">
                @foreach ($users as $user )
                <option value="{{$user->id}}" @if($user->id==$news->id_user){{"selected"}}@endif>{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="status">{{__('tpl.status')}}</label>
            <select name="status" id="">
                <option value="1" @if($news->status==1){{"selected"}}@endif>Hiện</option>
                <option value="0" @if($news->status==0){{"selected"}}@endif>Ẩn</option>
            </select>
        </div>
        <div class="form-group" style="width:200px;">
            <label for="url_images" >{{__('tpl.image')}}</label>
            <input type="file" class="form-control @if($errors->has('url_images')) name_error  @endif" name="url_images" value="{{$news->url_images}}" accept="image/*">
            <img src="{{ URL::to('upload/images/'.$news->url_images) }}" alt="" width="100%" height="100px">
            @if ($errors->has('url_images'))
                <span class="help-block">
                    <strong>{{$errors->first('url_images')}}</strong>
                </span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">{{__('tpl.edit')}}</button>
@endsection
