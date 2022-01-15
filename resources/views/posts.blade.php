@extends('layout.main')

@section('container')

@if($page==='category')
    <a class="btn btn-secondary mb-2" href="/category"> < Back</a>
@endif
<h1>
    {{ ($page==='category')? 'Post berdasarkan Kategori '.$name : 'Halaman Post' }}</h1>

@foreach ($posts as $p)
<article class="mt-5 border-bottom">
    <h3><a href="/post/{{ $p->slug }}">{{ $p->title }}</a></h3>
    <p>{{ $p->short }} </p>
    <a href="/post/{{ $p->slug }}">read more...</a>
</article>
@endforeach


@endsection
