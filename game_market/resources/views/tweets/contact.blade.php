@extends('layout')

@section('content')
<div class="content">
  <h1>お問い合わせ</h1>
  <form action="#" method="POST">
    <p>
      <label for="realname">お名前</label><br>
      <input type="text" name="realname" id="realname" autofocus required>
    </p>
    <p>
      <label for="mail">メールアドレス</label><br>
      <input type="email" name="mail" id="mail" required>
    </p>
    <p>
      <label for="phone">電話番号</label><br>
      <input type="tel" name="phone" id="phone" required>
    </p>
    <p>
      <label for="message">お問い合わせ内容</label><br>
      <textarea name="message" id="message"></textarea>
    </p>
    <p><input type="submit" value="送信"></p>
  </form>
</div>
@endsection
