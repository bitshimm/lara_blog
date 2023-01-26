@extends('layouts.main')
@section('content')
<form action="{{ route('main.post.update', $post->id) }}" method="post">
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
        <input class="form-control" type="text" id="image" multiple name="image" value="{{ $post->image }}">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Категория</label>
        <select class="form-select" name="category_id" id="category">
            @foreach($categories as $category)
            <option {{ $category->id == $post->category_id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="tags" class="form-label">Теги</label>
        <select class="form-select" multiple name="tags[]" id="tags">
            @foreach($tags as $tag)
            <option {{ in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : ''}} value="{{ $tag->id }}">
                {{ $tag->title }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>
@endsection