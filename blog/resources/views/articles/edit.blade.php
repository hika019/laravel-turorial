@extends('layouts.app')
@section('content')
    @include('commons.errors')

    <form action="{{ route('articles.update', $article) }}" method="post">
        @method('patch')
        @include('articles.form')
        <button type="submit">update</button>
        <a href="{{ route('articles.show', $article) }}">cancel</a>
    </form>
@endsection
