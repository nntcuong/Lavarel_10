@extends('layouts.master')
@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                Edit Posts
                <a href="" class="btn btn-success">Create</a>
                <a href="" class="btn btn-warning">Trashed</a>

            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="" class="form-label">Image</label>
                   
                       <input type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Title</label>
                   
                       <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Title</label>
                   
                       <select name="" id="" class="form-control">
                        <option value="">test1</option>
                        <option value="">test2</option>
                        <option value="">test3</option>

                       </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Description</label>
                   
                       <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
