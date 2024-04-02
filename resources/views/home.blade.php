@extends('layouts.master')

@section('content')
<main role="main" class="container">
    <h1 class="mt-5 text-danger">Home</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ratione quaerat vero a, ullam reiciendis earum distinctio nihil exercitationem quidem neque odit aliquid quasi esse, repudiandae, adipisci non placeat.</p>
    <div class="row mt-5">
        @for($i=0;$i< count($blogs);$i++)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>{{$blogs[$i]['title']}}</h2>
                    <p>{{$blogs[$i]['body']}}</p>
                </div>
            </div>
        </div>
        @endfor
    </div>
</main>
@endsection
