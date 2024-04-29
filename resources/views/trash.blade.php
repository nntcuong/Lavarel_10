@extends('layouts.master')
@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        Trash Posts
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-success mx-1" href="{{ route('posts.create') }}" class="btn btn-success">Create</a>
                        <a class="btn btn-warning mx-1" href="" class="btn btn-warning">Trashed</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col width: 5%">#</th>
                            <th scope="col" style="width: 10%">Image</th>
                            <th scope="col" style="width: 20%">Title</th>
                            <th scope="col" style="width: 30%">Description</th>
                            <th scope="col" style="width: 10%">Category</th>
                            <th scope="col" style="width: 10%">Publish Date</th>
                            <th scope="col" style="width: 20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td scope="row">{{ $post->id }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="" width="80">

                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ date('d-m-Y', $post->created) }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a class="btn-sm btn-success btn" href="{{route('posts.restore',$post->id)}}">Restore</a>
                                        <form action="{{ route('posts.force-delete', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div> 
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
