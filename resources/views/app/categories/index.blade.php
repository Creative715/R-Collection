@foreach ($categories as $category)
    <h2>{{ $category->name }}</h2>
    <a href="{{ route('categories.show', ['id' => $category->id]) }}">Переглянути підкатегорії</a>
@endforeach
