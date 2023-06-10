<h2>{{ $category->name }}</h2>
@if ($subcategories->count() > 0)
    <ul>
        @foreach ($subcategories as $subcategory)
            <li>{{ $subcategory->name }}</li>
        @endforeach
    </ul>
@else
    <p>Ця категорія не має підкатегорій.</p>
@endif
