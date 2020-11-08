@extends('layouts.app')

@section('content')
  <div class="col-sm-4">
    <aside class="card">
      <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
      </div>
      <div class="card-body">
        {{-- ユーザのメールアドレスを元にGravatarを取得し、Bootstrapのカードを使って表示 --}}
        <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt="" >
      </div>
    </aside>
    <div class="col-sm-8">
      <ul class="nav nav-tabs nav-justified mb-3">
        {{-- ユーザ詳細タブ --}}
        <li class="nav-item"><a href="# class="nav-link">TimeLine</a></li>
        {{-- フォロー一覧タブ --}}
        <li class="nav-item"><a href="# class="nav-link">Following</a></li>
        {{-- ユーザ詳細タブ --}}
        <li class="nav-item"><a href="# class="nav-link">Followers</a></li>
      </ul>
    </div>
  </div>
@endsection