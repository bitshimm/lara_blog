@extends('layouts.main')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->content }}</p>
        <p class="card-text">{{ $post->image }}</p>
        <!-- <a href="#" class="btn btn-primary">Посмотреть</a> -->
        <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}" role="button">Изменить</a>
    </div>
</div>
@endsection