@extends('layouts.admin')
@section('content')
<h2>{{__('tpl.add.advertisement')}}</h2>
    <form action="/advertisement/store" method="POST" role="form">
        @method('POST')
        @csrf
        <div class="form-group{{$errors->has('name') ? 'has-error': ''}}">
            <label for="name" >{{__('tpl.name')}}</label>
            <input type="text" placeholder="name" class="form-control @if($errors->has('content'))name_error @endif" name="name">
            @if($errors->has('name'))
                <span class="help-block">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="content" >{{__('tpl.content')}}</label>
            <textarea type="text" class="form-control @if($errors->has('content')) name_error @endif" name="content" rows="5"> </textarea>
            @if($errors->has('content'))
                <span class="help-block">
                    <strong>{{$errors->first('content')}}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="location">{{__('tpl.location')}}</label>
            <input type="text" name="location" id="" class="form-control">
            @if($errors->has('location'))
                <span class="help-block">
                    <strong>{{$errors->first('location')}}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="id_loaitin" >{{__('tpl.newstype')}}</label>
            <select name="id_loaitin" id="">
                @foreach ($newstype as $type_news )
                <option value="{{$type_news->id}}">{{$type_news->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="url_hinh" >{{__('tpl.image')}}</label>
            <input type="file" class="form-control-file" name="url_hinh" accept="image/*">
            @if($errors->has('url_images'))
                <span class="help-block">
                    <strong>{{$errors->first('url_images')}}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="status">{{__('tpl.status')}}</label>
            <select name="status" id="">
            <option value="0">Ẩn</option>
            <option value="1">Hiện</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary">{{__('tpl.db.add')}}</button>
    </form>
@endsection
