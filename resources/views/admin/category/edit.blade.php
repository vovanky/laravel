@extends('layouts.admin')
@section('content')
    <h2>{{__('tpl.category.detail')}}</h2>
    <form action="{{route('category.update',$category->id)}}" method="POST" role="form" enctype="multipart/form-data">
        {{method_field('PATCH')}}
        @csrf
        <input type="hidden" name="id" value="{{$category->id}}">
        <div class="form-group">
            <label for="name" >{{__('tpl.name')}}</label>
            <input type="text" value="{{$category->name}}" class="form-control @if($errors->has('name')) name_error @endif" name="name">
            @if($errors->has('name'))
                <span class="help-block">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="status">{{__('tpl.status')}}</label>
            <select name="status" id="">
                <option value="1" @if($category->status==1){{"selected"}}@endif>Hiện</option>
                <option value="0" @if($category->status==0){{"selected"}}@endif>Ẩn</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">{{__('tpl.edit')}}</button>
@endsection
