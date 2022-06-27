@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">All The Posts</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($posts as $post)
                            <li class="list-group-item">
                                <p>{{$post->name}}</p> 
                                <img src="{{$post->image}}" alt="">
                                <p>{{$post->description}}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection