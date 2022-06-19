@extends('layouts.app')
@section('content')
    <div class="card w-75 pt-3 pb-3">

    <div class="container">
        <div class="row">
            <div class="col-12 justify-content-end d-flex mb-3">
                <a href="{{ route('blogs.index') }}" class="btn btn-outline-secondary">Home</a>
            </div>
            <hr>
            <div class="col-12 d-flex justify-content-center">
                    <div class="card-body">
                        <h4 class="card-title">{{ $blog->title }}</h4>
                        <h6 class="card-subtitle mb-2 text-muted text-sm">{{ $blog->created_at->diffForHumans() }}</h6>
                        <p class="card-text">{{ $blog->description }}</p>
                        <div class="d-flex justify-content-end">
                            <form action="{{ route('blogs.destroy',$blog->id) }}" method="post" class="d-inline-block" id="form">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-outline-danger me-1" id="delete">Delete</button>
                            </form>
                            <a href="{{ route('blogs.edit',$blog->id) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
@endsection
