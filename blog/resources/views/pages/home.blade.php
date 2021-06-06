@extends('layouts.main-layout')
@section('content')
    <ul>
        @foreach ($posts as $post)
            <h3>{{ $post -> title }}</h3>
            <p>{{ $post -> text }}</p>
            Comments {{{$post -> comments -> count() }}};
            <ul>
                @foreach ($post -> comments as $comment)
                    <p>{{ $comment -> text }}</p>                        
                @endforeach
            </ul>
            Likes {{{ $post -> users -> count() }}};
            <ul>
                @foreach ($post -> users as $user)
                    <li>
                        <p>{{ $user -> name }}</p>
                    </li>
                @endforeach
            </ul>
        @endforeach
    </ul>
@endsection