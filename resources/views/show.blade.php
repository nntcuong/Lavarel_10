@extends('layouts.master')
@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                Show Posts
                <a href="{{ route('posts.create') }}" class="btn btn-success">Create</a>
                <a href="" class="btn btn-warning">Trashed</a>

            </div>
            <div class="card-body">
                <table class="table table-striped tble-bordered border-dark">

                    <tbody>
                        <tr>
                            <td>
                                Id
                            </td>
                            <td>
                               {{$post->id}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Image
                            </td>
                            <td>
                                <img width="300" src="{{ asset('storage/' . $post->image) }}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Title
                            </td>
                            <td>
                                {{$post->title}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Description
                            </td>
                            <td>
                                {{$post->description}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Category
                            </td>
                            <td>
                                {{$post->category_id}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Puslish Date
                            </td>
                            <td>
                                {{date('d-m-Y',strtotime($post->created_at))}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
