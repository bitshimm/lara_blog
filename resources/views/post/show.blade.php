@extends('layouts.main')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->content }}</p>
        <p class="card-text">{{ $post->image }}</p>
        <h5>Теги:</h5>
        <div>
            @foreach($post->tags as $tag)
            <a href="" class="link-success d-inline-block m-1">#{{ $tag->title }}</a>
            @endforeach
        </div>
        <div class="row justify-content-between">
            <div class="col-auto">
                <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}" role="button">Изменить</a>
            </div>
            <div class="col-auto">
                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Удалить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection