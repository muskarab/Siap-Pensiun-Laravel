@extends('layouts.landing')
@section('content')
    <div class="container">
        <div class="card-group mt-8">
            <div class="row">
                @foreach ($articles as $article)
                <div class="col col-sm-4">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                        <a href="javascript:;" class="d-block">
                            <img src="storage/articles/{{$article->image }}" class="img-fluid border-radius-lg" style="height: 200px">
                        </a>
                        </div>
                        <div class="card-body pt-2">
                        <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">{{ $article->created_at }}</span>
                        <a href="javascript:;" class="card-title h5 d-block text-darker">{{ $article->header }}</a>
                        <p class="card-description mb-4">{!! Str::limit($article->content, 200, $end='...') !!}</p>
                        {{-- <div class="author align-items-center">
                            <img src="./assets/img/team-2.jpg" alt="..." class="avatar shadow">
                            <div class="name ps-3">
                            <span>Mathew Glock</span>
                            <div class="stats">
                                <small>Posted on 28 February</small>
                            </div>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection