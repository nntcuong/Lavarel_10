@extends('layouts.master')

@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-md-4">
            <h2>Login</h2> <!-- Removed unnecessary class -->
            @if ($errors->any())
                @for ($i = 0; $i < count($errors->all()); $i++)
                    <div class="alert alert-danger">{{ $errors->all()[$i] }}</div>
                @endfor
            @endif

            <div class="card">

                <div class="card-body">
                    <form action="{{ route('login.submit') }}" method="POST"> <!-- Specify the action and method -->
                        @csrf<!-- Add CSRF protection -->
                        <div class="mb-2">
                            <label for="name" class="form-label">User name</label>
                            <!-- Corrected misspelling of "label" -->
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Email</label>
                            <!-- Corrected misspelling of "label" -->
                            <input name="email" type="email" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <!-- Corrected misspelling of "label" -->
                            <input name="password" type="password" class="form-control">
                            <!-- Changed type to "password" for security -->
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
