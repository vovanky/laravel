@extends('layouts.admin')
@section('title',"show category")
@section('content')
    <h2>{{__('tpl.category.detail')}}</h2>
    <table class="table">
        <h3>thể loại</h3>
        <label for="name">{{__('tpl.name')}}</label>
        <input type="text" value="{{$category->name}}">
        <label for="status">{{__('tpl.status')}}</label>
        <input type="text" value="@if($category->status==1){{"Hiện"}} @else($category->status==0) {{"Ẩn"}} @endif">
    </table>
@endsection
