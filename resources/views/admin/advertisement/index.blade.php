@extends('layouts.admin')
@section('content')
    <h2>{{ trans('tpl.list.advertisement') }}</h2>
    @if (session('success'))
    <div class="alert alert-success">
        <p>{{ session('success') }}</p>
    </div>
    @endif
    @if (session('delete_success'))
    <div class="alert alert-success">
        <p>{{ session('delete_success') }}</p>
    </div>
    @endif
    <a href="{{URL('advertisement/create')}}" class="btn btn-primary">{{ trans('tpl.add.advertisement') }}</a>
    <table class="table">
        <thead>
          <tr>
            <th class="col-1" scope="col">{{ trans('tpl.id') }}</th>
            <th class="col-2" scope="col">{{__('tpl.name')}}</th>
            <th class="col-3" scope="col">{{__('tpl.content')}}</th>
            <th class="col-1" scope="col">{{__('tpl.location')}}</th>
            <th class="col-2" scope="col" >{{__('tpl.newstype')}}</th>
            <th class="col-1" scope="col">{{__('tpl.image')}}</th>
            <th class="col-1" scope="col">{{__('tpl.status')}}</th>
            <th class="col-1" scope="col">{{ trans('tpl.edit') }}</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($advertisements as $advertisement)
          <tr>
            <th class="col-1" scope="row">{{$advertisement->id}}</th>
            <td class="col-2">{{$advertisement->name}}</td>
            <td class="col-3">{{$advertisement->content}}</td>
            <td class="col-1">{{$advertisement->location}}</td>
            <td class="col-2">{{$advertisement->newstype->name}}</td>
            <td class="col-1"><img src="upload/images/{{$advertisement->url_hinh}}" alt=""></td>
            <td class="col-1">@if($advertisement->status==1){{"Hiện"}} @else($advertisement->status==0) {{"Ẩn"}} @endif</td>
            <td class="col-1"><a href="/advertisement/edit/{{$advertisement->id}}" class="col">{{__('tpl.edit')}}</a>
            <br>
            <a href="/advertisement/{{$advertisement->id}}" class="col">{{__('tpl.show')}}</a>
            <br>
            <form method="POST" action="advertisement/delete/{{$advertisement->id}}" onsubmit="return ConfirmDelete(this)">
            {{method_field('DELETE')}}
            @csrf
            <input type="submit" class="btn btn-danger" value="{{ trans('tpl.delete') }}"/>
            </form>
        </tr>
        @endforeach
        </tbody>
      </table>
@endsection
