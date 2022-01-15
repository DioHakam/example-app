@extends('layout.main')

@section('container')

<h3 class="mb-5 border-bottom">Halaman Category</h3>

<ul>
    @foreach($category as $c)
        <li><a href="/category/{{ $c->slug }}">{{ $c->name }}</a></li>
    @endforeach
</ul>


@endsection
