@extends('layouts.main')
@section('content')
<div class="mb-3">
    <a class="btn btn-primary" href="{{ route('posts.create') }}" role="button">Добавить</a>
</div>
<div class="row">
@foreach($posts as $post)
    <div class="col-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-text">{{ $post->image }}</p>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Посмотреть</a>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection