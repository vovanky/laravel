@extends('layouts.admin')
@section('content')
<?php $n=+1; ?>
    <h2>{{ trans('tpl.list.users') }}</h2>
    <a href="{{URL('user/create')}}" class="btn btn-primary">{{ trans('tpl.add.users') }}</a>
    <table class="table">
        <thead>
          <tr>
            <th class="col-1" scope="col">{{__('tpl.id')}}</th>
            <th class="col-2" scope="col">{{__('tpl.name')}}</th>
            <th class="col-3" scope="col">{{__('tpl.email')}}</th>
            <th class="col-2" scope="col">{{__('tpl.is_admin')}}</th>
            <th class="col-1" scope="col">{{__('tpl.avatar')}}</th>
            <th class="col-2" scope="col">{{__('tpl.gender')}}</th>
            <th class="col-1" scope="col">{{__('tpl.edit')}}</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
          <tr>
            <th class="col-1" scope="col">{{$user->id}}</th>
            <td class="col-2" scope="col">{{$user->name}}</td>
            <td class="col-3" scope="col">{{$user->email}}</td>
            <td class="col-2" scope="col">@if ($user->is_admin==1)
                {{ "Admin" }}
            @else($user->is_admin==0)
                {{ "User" }}
            @endif</td>
            <td class="col-1"><img src="upload/images/{{$user->url_images}}" alt="$user->url_images" style="width:100%;height:100%;"></td>
            <td class="col-2" scope="col">@if ($user->gender==1)
                {{ "Nam" }}
            @else($user->gender==0)
                {{ "Nữ" }}
            @endif</td>
            <td class="col-1" scope="col"><a href="/user/edit/{{$user->id}}" class="col">{{__('tpl.edit')}}</a>
            <br>
            <a href="/user/{{$user->id}}" class="col">{{__('tpl.show')}}</a>
            <br>
            <form method="POST" action="user/delete/{{$user->id}}" onsubmit="return ConfirmDelete(this)">
                {{method_field('DELETE')}}
            @csrf
            <input type="submit" class="btn btn-danger" value="{{ trans('tpl.delete') }}"/>
            </form>
        </tr>
        @endforeach
        </tbody>
      </table>
@endsection
