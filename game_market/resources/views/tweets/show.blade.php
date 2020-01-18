@extends('layout')

@section('content')

<div class="show_contents">
  <section class="item_box">
    <h1>{{ $product->title }}</h1>
  <div class="item_box2">
    <img src="images/{{$product->product_image}}" alt="">
    <div class="item_description">
      <h4>商品説明</h4>
      <p><div class="price">￥{{ $product->price }}</p></div>
      <p>{{ $product->detail}}</p>
      <p>{{ $product->category->category}}</p>
      </div>
  </div>
</section>
</div>

@endsection
