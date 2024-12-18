@extends('front.layout.app')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{asset('front')}}/assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Laravel Blog</h1>
                            <span class="subheading">A Laravel project by Eraasoft</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <h2>{{$post->title}}</h2>
                <div class="my-3">
                    <img src="{{'storage/'.$post->image}}" width="100%" height="350px">
                </div>
                   <div>
                    <p>
                        {{$post->content}}
                    </p>
                   </div>
                   @auth
                   <h3 class="text-primary">Commments :</h3>
                   @foreach ($post->comments as $comment)
                   <div>
                    <div class="media">
                        <div class="media-body">
                            <h4 class="m-1">Posted by : {{$comment->user->name}}</h4>
                            <small class="text-muted m-1">Posted on : {{ $comment->created_at->format('D-M-Y') }}</small>
                            <p class="p-3">{{ $comment->message }}</p> 
                            @can('delete-comment' ,$comment)                
                            <form action="{{route('comment.destroy',$comment->id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            @endcan
                            <hr>
                        </div>
                    </div>
                   </div>
                   @endforeach
                    <div>
                        @if (session('success') != null)
                        <alert class="alert alert-success p-2 text-center">{{session('success')}}</alert>      
                        @endif
                    </div>
                    @can('add-comment')
                    <form action="{{route('store.comment',$post->id)}}" class="form-group" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="comment">Leave a Comment:</label>
                            <div>
                                @error('comment')
                                <div class="text-danger" data-sb-feedback="name:required">{{$message}}</div>
                                @enderror
                            </div>
                            <textarea class="form-control" name="message" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="add comment" class="btn btn-primary my-3">
                        </div>
                    </form>
                    @endcan
                    @endauth
                </div>
                </div>

            </div>
        </div>
@endsection