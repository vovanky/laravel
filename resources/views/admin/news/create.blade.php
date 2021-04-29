@extends('layouts.admin')
@section('content')
<h2>{{__('tpl.add.news')}}</h2>
    <form action="/news/store" method="POST" role="form" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="form-group{{$errors->has('name') ? 'has-error': ''}}">
            <label for="name" >{{__('tpl.name')}}</label>
            <input type="text" class="form-control" name="name">
            @if($errors->has('name'))
                <span class="help-block">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="summary" >{{__('tpl.summary')}}</label>
            <input type="text" class="form-control" name="summary">
            @if($errors->has('summary'))
                <span class="help-block">
                    <strong>{{$errors->first('summary')}}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="content" >{{__('tpl.content')}}</label>
            <input type="text" class="form-control" name="content">
            @if($errors->has('content'))
                <span class="help-block">
                    <strong>{{$errors->first('content')}}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="id_loaitin" >{{__('tpl.news.type')}}</label>
            <select name="id_loaitin" id="">
                @foreach ($newstype as $type_news )
                <option value="{{$type_news->id}}">{{$type_news->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_user" >{{__('tpl.auth')}}</label>
            <select name="id_user" id="">
                @foreach ($users as $user )
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="status">{{__('tpl.status')}}</label>
            <select name="status" id="">
            <option value="0">Ẩn</option>
            <option value="1">Hiện</option>
        </select>
        </div>
        <div class="form-group">
            <label for="url_images" >{{__('tpl.image')}}</label>
            <input type="file" placeholder="name" class="form-control-file" name="url_images" accept="image/*">
            @if($errors->has('name'))
                <span class="help-block">
                    <strong>{{$errors->first('url_images')}}</strong>
                </span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">{{__('tpl.db.add')}}</button>
    </form>
@endsection
