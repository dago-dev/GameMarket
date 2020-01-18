@extends('layout')

@section('content')

<div class="category_navi">
  @foreach($categories as $category)
  <a href="/category/{{$category->category}}">{{$category->category}}</a>
  @endforeach
</div>



@endsection
