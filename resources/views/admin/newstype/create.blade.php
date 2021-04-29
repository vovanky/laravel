@extends('layouts.admin')
@section('content')
<h2>{{__('tpl.news_type.add')}}</h2>
    <form action="/newstype/store" method="POST" role="form">
        @method('POST')
        @csrf
        <div class="form-group">
        <label for="name" >{{__('tpl.name')}}</label>
        <input type="text" placeholder="name" class="form-control @if ($errors->has('name')) name_error  @endif" name="name">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{$errors->first('name')}}</strong>
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
        <div class="form-group">
            <label for="id_theloai">{{__('tpl.news_type.cat')}}</label>
            <select name="id_theloai" id="">
                @foreach ($category as $category )
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        {{-- <div class="form-group">
            <label for="">created at</label>
            <input type="datetime-local">
        </div>
        <div class="form-group">
            <label for="">updated at</label>
            <input type="datetime-local">
        </div> --}}
        <button type="submit" class="btn btn-primary">{{__('tpl.db.add')}}</button>
    </form>
@endsection
