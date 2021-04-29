@extends('layouts.admin')
@section('title',"show type news")
@section('content')
    <h2>{{__('tpl.newstype.detail')}}</h2>
    <table class="table">
        <h3>{{__('News Type')}}</h3>
        <label for="name">{{__('tpl.name')}} : </label>
        <input type="text" value="{{$newstype->name}}">
        <label for="status">{{__('tpl.status')}} : </label>
        <input type="text" value="@if($newstype->status==1){{"Hiện"}} @else($newstype->status==0) {{"Ẩn"}} @endif">
        <label for="id_theloai">{{__('tpl.news_type.cat')}} : </label>
        <input type="text" value="{{$newstype->category->name}}">
    </table>
@endsection
