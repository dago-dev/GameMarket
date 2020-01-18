<!DOCTYPE html>
<html>
  <head>
     <meta charset="UTF-8" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/contact.css">
    <title>Connect</title>
  </head>
  <body>
    <header>
      <div class="heading">
        <a href="/tweets"><img src="/images/connect.png" alt="" id="connect"></a>
        <form id="form5" action='/tweets.serch'>
          <input id="sbox5" name="keyword" type="text" placeholder="キーワードを入力" />
           <input id="sbtn5" type="submit" value="検索" onclick="/tweets.serch"/></a>
          </form>
      <div class="btn">
        @if (Auth::check())
            <a class="square_btn" href="/logout">ログアウト</a>
            <a class="square_btn2" href="/tweets/create">投稿する</a>
        @else
            <a href="/login" class="square_btn">ログイン</a>
            <a href="/register" class="square_btn2">新規登録</a>
        @endif
      </div>
    </div>
      <div class="navi">
      <ul>
         <li><a href="/categories/category">カテゴリーから探す</a></li>
         <li><a href="#">connectについて</a></li>
         <li><a href="/tweets/contact">お問い合わせ</a></li>
         <li><a href="/tweets/create">出品</a></li>
      </ul>
      </div>

    </header>

    @yield('content')

    <footer>
      <div class="footer-container">
        <p>Copyright(C) connect RIGHTS RESERVED.</p>
      </div>
    </footer>
  </body>
</html>
