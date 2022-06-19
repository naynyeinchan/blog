@extends('layouts.app')
@section('content')
    <div class="card w-75 pt-3 pb-3">

    <div class="container">
        <div class="row">
            <div class="col-12 justify-content-end d-flex mb-3">
                <a href="{{ route('blogs.index') }}" class="btn btn-outline-secondary">Home</a>
            </div>
            <hr>
            <div class="col-12">
                <form action="{{ route('blogs.update',$blog->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Blog Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title',$blog->title) }}">
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Blog Description</label>
                        <textarea name="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ old('description',$blog->description) }}</textarea>
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-outline-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
