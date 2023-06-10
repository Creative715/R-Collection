@extends('layouts.dashboard')
@section('title', 'Edit product')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('mainAdmin') }}">Home</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-12">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                            </div>
                        @endif
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">@yield('title') - {{ $enproduct['title'] }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form enctype="multipart/form-data" action="{{ route('enproduct.update', $enproduct['id']) }}"
                                method="post">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" value="{{ $enproduct['title'] }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Title SEO</label>
                                        <input type="text" name="seo_title" value="{{ $enproduct['seo_title'] }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="encategory_id">Category</label>
                                        <select name="encategory_id" class="custom-select rounded-0" id="encategory_id" multiple>
                                            @foreach ($encategories as $category)
                                                <option value="{{ $category['id'] }}"
                                                    @if ($category['id'] == $enproduct['encategory_id']) selected @endif>
                                                    {{ $category['seo_title'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Product description</label>
                                        <textarea id="content" name="content" class="form-control" rows="4">{{ $enproduct['content'] }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" name="price" value="{{ $enproduct['price'] }}"
                                            class="form-control" id="price">
                                    </div>
                                    <div class="form-group">
                                        <label>Product description (SEO)</label>
                                        <input type="text" name="description" value="{{ $enproduct['description'] }}"
                                            class="form-control" id="description" placeholder="Введіть опис" required>
                                    </div>
                                    <div class="form-group">
                                        <img class="img-thumbnail" src="{{ $enproduct->img }}" alt="{{ $enproduct->title }}"
                                            title="{{ $enproduct->title }}" width="150" height="auto">
                                    </div>
                                    <div class="form-group">
                                        <label>Main image</label>
                                        <input name="img" class="form-control" type="file"
                                            value="{{ $enproduct->img }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="images[]">Additional images:</label>
                                        <input type="file" class="form-control m-2" name="images[]" multiple>
                                    </div>
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" name="slug" class="form-control"
                                            value="{{ $enproduct['slug'] }}" placeholder="url">
                                    </div>
                                    <div class="form-group">
                                        <label for="published">Published</label>
                                        <select name="published" class="custom-select rounded-0" id="published">
                                            <option value="1" {{ $enproduct['published'] == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $enproduct['published'] == 0 ? 'selected' : '' }}>No</option>
                                        </select>
                                    </div>

                                </div>

                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12"><h5>Additional images:</h5></div>
                                    <div class="mt-4"></div>
                                    @if (count($enproduct->images)>0)
                                        @foreach ($enproduct->images as $img)
                                            <div class="card col-md-2">

                                                <form action="/deleteimage/{{ $img->id }}" method="post">
                                                    <button class="btn text-danger">X</button>
                                                    @csrf
                                                    @method('delete')
                                                </form>

                                                <img src="/img/gallery/{{ $img->image }}" class="img-thumbnail" style="height: auto; max-width: 200px;" alt="" srcset="">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
