@extends('layouts.dashboard')
@section('title', 'Edit encategory')
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
                                <h3 class="card-title">@yield('title') - {{ $encategory['title'] }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form enctype="multipart/form-data" action="{{ route('encategory.update', $encategory['id']) }}"
                                method="post">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" value="{{ $encategory['title'] }}"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="seo_title">Seo title</label>
                                        <input type="text" name="seo_title" value="{{ $encategory['seo_title'] }}"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="parent_id">Parent category</label>
                                        <select name="parent_id" class="custom-select rounded-0" id="parent_id">
                                            <option value="">No parent category</option>
                                            @foreach ($encategories as $category)
                                                <option value="{{ $category['id'] }}"
                                                    @if ($category['id'] == $encategory['parent_id']) selected @endif>
                                                    {{ $category['seo_title'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" name="description" value="{{ $encategory['description'] }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <img class="img-thumbnail" src="{{ $encategory->img }}"
                                            alt="{{ $encategory->title }}" title="{{ $encategory->title }}" width="250"
                                            height="auto">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="img">Image</label>
                                        <input name="img" class="form-control" type="file"
                                            value="{{ $encategory->img }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" class="form-control"
                                            value="{{ $encategory['slug'] }}" placeholder="url" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="published">Published</label>
                                        <select name="published" class="custom-select rounded-0" id="published">
                                            <option value="1" {{ $encategory['published'] == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $encategory['published'] == 0 ? 'selected' : '' }}>No</option>
                                        </select>   
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
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
