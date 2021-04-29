@extends('layouts.admin')
@section('content')
    <h2>{{__('tpl.ad.detail')}}</h2>
    <form action="/advertisement/update/{{$advertisements->id}}" method="POST" role="form">
        {{method_field('PATCH')}}
        @csrf
        <input type="hidden" name="id" value="{{$advertisements->id}}">
        <div class="form-group">
            <label for="name" >{{__('tpl.name')}}</label>
            <input type="text" value="{{$advertisements->name}}" class="form-control" name="name">
            @if($errors->has('name'))
            <span class="help-block">
                <strong>{{$errors->first('name')}}</strong>
            </span>
        @endif
        </div>
        <div class="form-group">
            <label for="summary" >{{__('tpl.summary')}}</label>
            <textarea class="form-control" name="content">{{$advertisements->content}}</textarea>
            @if($errors->has('name'))
            <span class="help-block">
                <strong>{{$errors->first('name')}}</strong>
            </span>
        @endif
        </div>
        <div class="form-group">
            <label for="content" >{{__('tpl.content')}}</label>
            <textarea class="form-control" name="location">{{$advertisements->location}}</textarea>
            @if($errors->has('name'))
            <span class="help-block">
                <strong>{{$errors->first('name')}}</strong>
            </span>
        @endif
        </div>
        <div class="from-group">
            <label for="id_loaitin">{{__('tpl.newstype')}}</label>
            <select name="id_loaitin" id="">
                @foreach ($newstype as $type_news )
                <option value="{{$type_news->id}}" @if($type_news->id==$advertisements->id_loaitin){{"selected"}}@endif>{{$type_news->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group" style="width:200px;">
            <label for="url_hinh" >{{__('tpl.image')}}</label>
            <input type="file" class="form-control" name="url_hinh">
            <img src="{{ URL::to('upload/images/'.$advertisements->url_hinh) }}" alt="" width="100%" height="100px">
        </div>
        <div class="form-group">
            <label for="status">{{__('tpl.status')}}</label>
            <select name="status" id="">
                <option value="1" @if($advertisements->status==1){{"selected"}}@endif>Hiện</option>
                <option value="0" @if($advertisements->status==0){{"selected"}}@endif>Ẩn</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">{{__('tpl.edit')}}</button>
@endsection
