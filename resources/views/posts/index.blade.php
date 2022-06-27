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
                                <div><a title="show the details" href="/posts/{{$post->id}} ">{{$post->title}}</a></div>  
                                <img src="{{$post->image}}" alt="">
                                <p>{{$post->description}}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="mt-2">
                <a class="btn btn-success btn-sm" href="/posts/create"><i class="fa-solid fa-circle-plus"></i> Create New Post</a>
            </div>
        </div>
    </div>
</div>
@endsection