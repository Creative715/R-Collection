@extends('layouts.app', ['title' => 'Категорії статей про розробку сайтів', 'description' => 'Категорії новин зі світу розробки сайтів, інтернет магазинів, порталів.'])
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">{{ $category->title }}</div>

                        <div class="card-body">
                            <div class="card-img"
                                style="background-image: url({{ $category->img ?? asset('images/mirror-studio.jpg') }});">
                            </div>
                            {!! $category->description !!}
                            <hr>
                            <a class="btn btn-outline-dark"
                                href="{{ route('category.more', $category->slug) }}">Докладніше</a>
                        </div>
                    </div>
                    <div class="my-3">
                        <hr>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
