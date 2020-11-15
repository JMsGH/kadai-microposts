@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- お気に入りを外すボタンのフォーム --}}
        {!! Form::open(['route' => ['micropost.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-sm btn-outline-danger w-80"]) !!}
        {!! Form::close() !!}
        
    @else
        {{-- お気に入りにするボタンのフォーム --}}
        {!! Form::open(['route' => ['micropost.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite❤️', ['class' => "btn btn-sm btn-outline-success w-80"]) !!}
        {!! Form::close() !!}
    @endif
@endif