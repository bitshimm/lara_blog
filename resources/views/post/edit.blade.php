@extends('layouts.main')
@section('content')
<form action="{{ route('posts.update', $post->id) }}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
        <label for="title" class="form-label">Заголовок</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Контент</label>
        <textarea class="form-control" id="content" rows="3" name="content">{{ $post->content }}</textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Изображение</label>
        <!-- <input class="form-control" type="file" id="image" multiple name="image" value="{{ $post->image }}"> -->
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>
@endsection