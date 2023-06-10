@extends('layouts.dashboard')
@section('title', 'Add category')
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
                                <h3 class="card-title">@yield('title')</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form enctype="multipart/form-data" action="{{ route('encategory.store') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" id="title"
                                            placeholder="Enter title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="seo_title">Seo title</label>
                                        <input type="text" name="seo_title" class="form-control" id="seo_title"
                                            placeholder="Enter Seo title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="parent_id">Parent category</label>
                                        <select name="parent_id" class="custom-select rounded-0" id="parent_id">
                                            <option value="">No parent category</option>
                                            @foreach ($encategories as $encategory)
                                                <option value="{{ $encategory->id }}">{{ $encategory->seo_title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" name="description" class="form-control" id="description"
                                            placeholder="Enter Description" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Image</label>
                                        <input name="img" class="form-control" type="file">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Adress (url)</label>
                                        <input type="slug" name="slug" class="form-control" id="slug"
                                            placeholder="Enter addressу" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="published">Published</label>
                                        <select name="published" class="custom-select rounded-0" id="published">
                                            <option value="{{ $post['published'] = '1' }}">Yes</option>
                                            <option value="{{ $post['published'] = '0' }}">No</option>
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
