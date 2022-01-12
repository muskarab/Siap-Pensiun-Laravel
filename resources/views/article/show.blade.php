@extends('layouts.landing')
@section('content')
<div class="container mt-8">
    @foreach ($article as $article)
    <div class="row">
        <img class="img-fluid" src="../storage/articles/{{ $article->image }}" style="height: 500px">
    </div>
    <div class="row mt-4">
        <h3>{{ $article->header }}</h3>
    </div>
        <p>{!! $article->content !!}</p>
    @endforeach

</div>
@endsection