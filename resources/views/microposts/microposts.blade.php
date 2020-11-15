@if (count($microposts) > 0)
    <ul class="list-unstyled">
        @foreach ($microposts as $micropost)
            <li class="media mb-3">
                {{-- 投稿の所有者のメールアドレスをもとにGravatarを取得して表示 --}}
                <img class="mr-2 rounded" src="{{ Gravatar::get($micropost->user->email, ['size' => 50]) }}" alt="">
                <div class="media-body">
                    <div>
                        {{-- 投稿の所有者のユーザ詳細ページへのリンク --}}
                        {!! link_to_route('users.show', $micropost->user->name, ['user' => $micropost->user->id]) !!}
                        <span class="text-muted">posted at {{ $micropost->created_at }}</span>
                    </div>
                    <div>
                        {{-- 投稿内容 --}}
                        <p class="mb-0">{!! nl2br(e($micropost->content)) !!}</p>
                    </div>
                    <div>
                        @if (Auth::id() == $micropost->user_id)
                            {{-- 投稿削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @else
                            {{-- 投稿お気に入りボタンのフォーム --}}
                            @if (Auth::user()->is_favorite($micropost->id))
                            {{-- お気に入りを外すボタンのフォーム --}}
                            {!! Form::open(['route' => ['micropost.unfavorite', $micropost->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Unfavorite', ['class' => "btn btn-sm btn-outline-danger w-80"]) !!}
                            {!! Form::close() !!}
        
                            @else
                            {{-- お気に入りにするボタンのフォーム --}}
                            {!! Form::open(['route' => ['micropost.favorite', $micropost->id]]) !!}
                                {!! Form::submit('Favorite ❤', ['class' => "btn btn-sm btn-outline-success w-80"]) !!}
                            {!! Form::close() !!}
                             @endif
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $microposts->links() }}

@else
    <h2>お気に入りにした投稿はありません</h2>
@endif