@extends('layouts.admin')
@section('content')
    <h2>{{ trans('tpl.list.newstype') }}</h2>
    <a href="{{URL('newstype/create')}}" class="btn btn-primary">{{ trans('tpl.news_type.add') }}</a>
    <table class="table">
        <thead>
          <tr>
            <th class="col-1" scope="col">{{ trans('tpl.id') }}</th>
            <th class="col-3" scope="col">{{ trans('tpl.name') }}</th>
            <th class="col-2" scope="col">{{ trans('tpl.status') }}</th>
            <th class="col-3" scope="col">{{ trans('tpl.news_type.cat') }}</th>
            <th class="col-3" scope="col">{{ trans('tpl.edit') }}</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($newstype as $type_news)
          <tr>
            <th class="col-1" scope="row">{{$type_news->id}}</th>
            <td class="col-3">{{$type_news->name}}</td>
            <td class="col-2" scope="col">@if ($type_news->status==1)
                {{ "Hiện" }}
            @else($type_news->status==0)
                {{ "Ẩn" }}
            @endif</td>
            <td class="col-3">{{$type_news->category->name}}</td>
            <td class="col-3"><a href="/newstype/edit/{{$type_news->id}}" class="col">{{__('tpl.edit')}}</a>
            <br>
            <a href="/newstype/{{$type_news->id}}" class="col">{{__('tpl.show')}}</a>
            <br>
            <form method="POST" action="newstype/delete/{{$type_news->id}}" onsubmit="return ConfirmDelete(this)">
                {{method_field('DELETE')}}
            @csrf
            <input type="submit" class="btn btn-danger" value="{{ trans('tpl.delete') }}"/>
            </form>
        </tr>
        @endforeach
        </tbody>
      </table>
@endsection
