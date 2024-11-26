@extends('app')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Create New Blog</h3>
                </div>
                <div class="card-body">
                    <!-- Display Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Blog Form -->
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Blog Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Blog Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter blog title" value="{{ old('title') }}" required>
                        </div>

                        <!-- Blog Content -->
                        <div class="mb-3">
                            <label for="content" class="form-label">Blog Content</label>
                            <textarea name="content" id="content" class="form-control" rows="5" placeholder="Write your blog content here..." required>{{ old('content') }}</textarea>
                        </div>

                        <!-- Blog Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image (optional)</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Publish Blog</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection