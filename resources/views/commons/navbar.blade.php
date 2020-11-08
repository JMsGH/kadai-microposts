<header class="mb-4">
  <nav class="navbar navbar-expand-sm navbardark bg-dark"></nav>
    {{-- トップページへのリンク --}}
    <a href="/" class="navbar-brand"></a>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav-bar">
      <ul class="navbar-nav mr-auto"></ul>
      <ul class="navbar-nav">
        {{-- ユーザ登録ページへのリンク --}}
        <li>{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
        {{-- ログインページへのリンク --}}
        <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
      </ul>
    </div>
</header>