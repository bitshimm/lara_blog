@extends('layouts.main')
@section('content')
<div class="max-w-7xl mx-auto">
    <div class="mb-5">
        <a class="btn btn-primary" href="{{ route('main.post.create') }}" role="button">Добавить</a>
    </div>
    <div class="grid grid-cols-1 gap-2 text-gray-800">
        @foreach ($posts as $post)
            <div class="p-3 flex flex-wrap shadow-md shadow-indigo-500/50">
                <div class="w-9/12">
                    <a href="{{ route('main.post.show', $post->id) }}" class="block w-full">
                        {{ $post->id }}. {{ $post->title }}<br>
                    </a>
                </div>
                <div class="flex-1 text-center">
                    <a href="{{ route('main.post.edit', $post->id) }}" class="block w-full">
                        Редактировать
                    </a>
                </div>
                <div class="flex-1 text-center">
                    <form action="{{ route('main.post.destroy', $post->id) }}" method="post" class="block w-full">
                        @csrf
                        @method('delete')
                        <button>
                            Удалить
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    {{ $posts->links() }}
</div>
    
@endsection
