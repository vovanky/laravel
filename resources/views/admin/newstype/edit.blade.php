@extends('layouts.admin')
@section('content')
    <h2>{{__('tpl.newstype.detail')}}</h2>
    <form action="/newstype/update/{{$newstype->id}}" method="POST" role="form">
        {{method_field('PATCH')}}
        @csrf
        <input type="hidden" name="id" value="{{$newstype->id}}">
        <div class="form-group">
            <label for="name" >{{__('tpl.name')}}</label>
            <input type="text" value="{{$newstype->name}}" class="form-control @if($errors->has('name')) name_error @endif" name="name">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="status">{{__('tpl.status')}}</label>
            <select name="status" id="">
                <option value="1" @if($newstype->status==1){{"selected"}}@endif>Hiện</option>
                <option value="0" @if($newstype->status==0){{"selected"}}@endif>Ẩn</option>
            </select>
        </div>
        <div class="from-group">
            <label for="theloai">{{__('tpl.news_type.cat')}}</label>
            <select name="id_theloai" id="">
                @foreach ($categories as $category )
                <option value="{{$category->id}}" @if($category->id==$newstype->id_theloai){{"selected"}}@endif>{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">{{__('tpl.edit')}}</button>
@endsection
