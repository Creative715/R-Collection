<form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-danger px-5" type="submit">Search</button>
</form>
<hr>
<h3>Categories list</h3>
<hr>
<ul class="list-group">
    @foreach ($categories as $category)
        <li class="list-group-item"><a
                href="{{ route('category.more', $category->slug) }}">{{ $category->title }}</a>
        </li>
    @endforeach
</ul>