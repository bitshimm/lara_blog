@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p class="text-bg-danger p-2 rounded">{{ $error }}</p>
    @endforeach
@endif