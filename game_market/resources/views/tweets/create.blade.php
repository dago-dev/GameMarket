<!DOCTYPE html>
@extends('layout')

@section('content')

<div class="contents row">
    <div class="container">
      {{ Form::open(['url' => '/tweets', 'method' => 'post', 'files' => true]) }}
<h1>出品</h1>
  <p>
    <label for="realname">商品の名前</label><br>
    <input type="text" name="title" id="realname" autofocus required>
  </p>
  <p>
    <label for="category">ゲームのジャンル</label><br>
    <select name="category_id" id="category">
      <!-- <option value=""selected>選択してください</option>
      <option value="1">RPG</option>
      <option value="2">アクションゲーム</option>
      <option value="3">シミュレーションゲーム</option>
      <option value="4">シューティングゲーム</option>
      <option value="5">レースゲーム</option>
      <option value="6">格闘ゲーム</option>
      <option value="7">スポーツゲーム</option> -->
      @foreach($categories as $category)
        <option value="{{$category->id}}">{{ $category->category }}</option>
      @endforeach
    </select>
  </p>
  <p>
    <label for="image_file">商品のファイルを選択してください</label><br>
    <input type="file" name="product_image" id="image_file">
  </p>
  <!-- <p><input type="submit" value="アップロード">
  </p> -->
  <p>
    <label for="message">商品の説明</label><br>
    <textarea name="detail" id="detail" placeholder="例）ドラゴンクエスト１１の初回限定版特典付き、新品未使用です。目立った傷、汚れ等はありません。"></textarea>
  </p>
  <p>
    <label for="price">商品の価格</lanel><br>
      <input type="number" name="price" id="price">
  </p>
  <p><input type="submit" value="送信"></p>
      {{ Form::close() }}
  </div>
</div>
</html>
@endsection
