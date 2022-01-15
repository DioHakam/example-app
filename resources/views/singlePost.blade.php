@extends('layout.main')

@section('container')
<div class="back">
    <a href="/post" class="btn btn-secondary"> < Back</a>
</div>

<article class="mt-5 border-bottom">
    <h3>{{ $post->title }}</h3>
    <p class="pb-2 border-bottom">By : {{ $post->user->name }} | <a class="btn btn-sm btn-primary" href="/category/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
    {!! $post->body !!}
</article>
@endsection
