@extends('layouts.dashboard')
@section('title', 'Add product')
@section('content')
    <!-- Content Wrapper. Contains article content -->
    <div class="content-wrapper">
        <!-- Content Header (Article header) -->
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
                                <h3 class="card-title">@yield('title')</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form enctype="multipart/form-data" action="{{ route('enproduct.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Введіть назву" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title (SEO)</label>
                                        <input type="text" name="seo_title" class="form-control"
                                            placeholder="Введіть назву" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="categories">Category</label>
                                        <select name="categories[]" id="categories"  class="custom-select rounded-0" multiple required>
                                            @foreach($encategories as $category)
                                                <option value="{{ $category->id }}">{{ $category['seo_title'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Product description</label>
                                        <textarea id="content" name="content" class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price (SEO)</label>
                                        <input type="text" name="price" class="form-control" id="price"
                                            placeholder="Enter price" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Product description (SEO)</label>
                                        <input type="text" name="description" class="form-control" id="description"
                                            placeholder="Enter description" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Image</label>
                                        <input name="img" class="form-control" type="file">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="images[]">Additional images:</label>
                                        <input type="file" class="form-control m-2" name="images[]" multiple>
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Slug</label>
                                        <input type="text" name="slug" class="form-control" placeholder="url">
                                    </div>
                                    <div class="form-group">
                                        <label for="published">Published</label>
                                        <select name="published" class="custom-select rounded-0" id="published">
                                            <option value="{{ $enproduct['published'] = '1' }}">Yes</option>
                                            <option value="{{ $enproduct['published'] = '0' }}">No</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
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
