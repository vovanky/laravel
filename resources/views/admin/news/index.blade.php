@extends('layouts.admin')
@section('title','index')
@section('content')
    <h2>{{ trans('tpl.list.news') }}</h2>
    <a href="{{URL('news/create')}}" class="btn btn-primary">{{ trans('tpl.add.news') }}</a>
    <table class="table">
        <thead>
          <tr>
            <th class="col-1" scope="col">{{__('tpl.id')}}</th>
            <th class="col-2" scope="col">{{ trans('tpl.name') }}</th>
            <th class="col-3" scope="col">{{__('tpl.summary')}}</th>
            <th class="col-2" scope="col">{{__('tpl.news.type')}}</th>
            <th class="col-1" scope="col">{{__('tpl.auth')}}</th>
            <th class="col-1" scope="col">{{__('tpl.status')}}</th>
            <th class="col-1" scope="col">{{__('tpl.image')}}</th>
            <th class="col-1" scope="col">{{__('tpl.edit')}}</th>
          </tr>
        </thead>
        @foreach ($news as $news_1)
        <tbody>
          <tr>
            <td class="col-1" scope="col">{{$news_1->id}}</td>
            <td class="col-2" scope="col">{{$news_1->name}}</td>
            <td class="col-3" scope="col">{{$news_1->summary}}</td>
            <td class="col-2" scope="col">{{$news_1->newstype->name}}</td>
            <td class="col-1" scope="col">{{$news_1->users->name}}</td>
            <td class="col-1" scope="col">@if($news_1->status==1){{"Hiện"}} @else($news_1->status==0) {{"Ẩn"}} @endif</td>
            <td class="col-1" scope="col" style="width:200px;"><img src="upload/images/{{$news_1->url_images}}" alt="$user->url_images" style="width:100%;"></td>
            <td class="col-1" scope="col"><a href="/news/edit/{{$news_1->id}}" class="col">{{__('tpl.edit')}}</a>
            <br>
            <a href="/news/{{$news_1->id}}" class="col">{{__('tpl.show')}}</a>
            <br>
            <form method="POST" action="news/delete/{{$news_1->id}}" onsubmit="return ConfirmDelete(this)">
                {{method_field('DELETE')}}
            @csrf
            <input type="submit" class="btn btn-danger" value="{{ trans('tpl.delete') }}"/>
            </form>
        </tr>
        </tbody>
        @endforeach
      </table>
@endsection
