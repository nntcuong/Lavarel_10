@extends('layouts.master')
@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                All Posts
                <a href="{{route('posts.create')}}" class="btn btn-success">Create</a>
                <a href="" class="btn btn-warning">Trashed</a>

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
                        @foreach ($posts as $post )
                            
                      
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img src="{{ asset('storage/'.$post->image) }}" alt="" width="80">

                            </td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td>{{$post->category_id}}</td>
                            <td>{{date('d-m-Y',$post->created)}}</td>
                            <td>
                                <a class="btn-sm btn-success btn" href="">Show</a>
                                <a class="btn-sm btn-primary btn" href="{{route('posts.edit',$post->id)}}">Edit</a>
                                <a class="btn-sm btn-danger btn" href="">Delete</a>

                                
                            </td>
                      
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
