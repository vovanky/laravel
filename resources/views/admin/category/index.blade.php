@extends('layouts.admin')
@section('title','index')
@section('content')
    <h2>{{ trans('tpl.list.category') }}</h2>
    <a href="{{URL('category/create')}}" class="btn btn-primary">{{ trans('tpl.category.add') }}</a>
    <table class="table">
        <thead>
          <tr>
            <th class="col-3" scope="col">{{ trans('tpl.id') }}</th>
            <th class="col-3" scope="col">{{ trans('tpl.name') }}</th>
            <th class="col-3" scope="col">{{ trans('tpl.status') }}</th>
            <th class="col-3" scope="col">{{ trans('tpl.edit') }}</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <th class="col-3" scope="row">{{$category->id}}</th>
                <td class="col-3">{{$category->name}}</td>
                <td class="col-3">@if($category->status==1){{"Hiện"}} @else($category->status==0) {{"Ẩn"}} @endif</td>
                <td class="col-3"><a href="{{route('category.edit',$category->id)}}" class="col">{{__('tpl.edit')}}</a>
                <br>
                <a href="{{route('category.show',$category->id)}}" class="col">{{__('tpl.show')}}</a>
                <br>
                <form method="POST" action="{{route('category.destroy',$category->id)}}" onsubmit="return ConfirmDelete(this)">
                    {{method_field('DELETE')}}
                @csrf
                <input type="submit" class="btn btn-danger" value="{{ trans('tpl.delete') }}"/>
                </form>

            </tr>
            @endforeach
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">{{ $categories->links() }}</li>
        </ul>
    </nav>
@endsection
