@extends('layouts.admin')
@section('content')
<div class="mb-5">
    <a class="btn btn-primary" href="{{ route('admin.post.create') }}" role="button">Добавить</a>
</div>
@foreach($posts as $post)
<div class="btn-group mb-3 w-100" role="group">
    <a href="{{ route('admin.post.show', $post->id) }}" class="btn btn-outline-secondary w-75 text-start">
        {{ $post->id }}. {{ $post->title }}<br>
    </a>
    <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-primary">
        Редактировать
    </a>
    <form action="{{ route('admin.post.destroy', $post->id) }}" method="post" class="btn btn-danger">
        @csrf
        @method('delete')
        <button style="background: no-repeat;border: none;color: #fff;">
            Удалить
        </button>
    </form>
</div>
@endforeach

{{ $posts->links() }}

@endsection