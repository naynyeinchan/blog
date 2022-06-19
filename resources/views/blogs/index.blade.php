@extends('layouts.app')
@section('content')

<div class="card w-75 pt-3 pb-3">
<div class="container">
    <div class="row">
        <div class="col-12 justify-content-end d-flex mb-3">
            <form action="" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Post" name="search">
                    <button class="btn btn-outline-secondary me-2" type="submit">Search</button>
                </div>
            </form>
            <a href="{{ route('blogs.create') }}" class="btn btn-outline-secondary">Create New Blog</a>
        </div>
        <hr>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Posts</th>
                    <th scope="col">Created</th>
                    <th scope="col" class="text-end">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td class="small">
                            <span class="fw-bold">{{ Str::words($blog->title,10) }}</span>
                            <br>
                            <span class="text-black-50">{{ Str::words($blog->description,12) }}</span>
                        </td>
                        <td class="small">{{ $blog->created_at->diffForHumans() }}</td>
                        <td class="text-end">
                            <form action="{{ route('blogs.destroy',$blog->id) }}" method="post" class="d-inline-block" id="delete-form">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-outline-danger" id="delete">Del</button>
                            </form>
                            <a href="{{ route('blogs.edit',$blog->id) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                            <a href="{{ route('blogs.show',$blog->id) }}" class="btn btn-sm btn-outline-info">More</a>
                        </td>
                    </tr>
                @endforeach
                <tbody>
            </table>
            {{ $blogs->links() }}
        </div>
    </div>
</div>
</div>
@endsection
