@extends('layouts.admin')
@section('content')
    <form action="{{route('category.store')}}" method="POST" role="form">
        @method('POST')
        @csrf
        <div class="form-group">
            <label for="{!! trans('tpl.cat.create.name') !!}" >{!! trans('tpl.name') !!}</label>
            <input type="text" class="form-control @if($errors->has('name')) name_error @endif" value="" name="name" >
            @if($errors->has('name'))
                <span class="help-block">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="status">{{trans('tpl.status')}}</label>
            <select name="status" id="">
            <option value="0">Ẩn</option>
            <option value="1">Hiện</option>
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
        <button type="submit" class="btn btn-primary">{{trans('tpl.db.add')}}</button>
    </form>
@endsection
