@extends('front.layout.app')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{asset('front')}}/assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Add New Post</h1>
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
                        @if (session('success') != null)
                        <alert class="alert alert-success p-2 text-center">{{session('success')}}</alert>      
                        @endif

                <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title" required>
                        @error('title')
                        <div class="alert alert-danger">
                          {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="10" placeholder="Enter post content" required></textarea>
                        @error('content')
                        <div class="alert alert-danger">
                          {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        @error('image')
                        <div class="alert alert-danger">
                          {{$message}}
                        </div>
                        @enderror
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>

                </div>
                </div>

            </div>
        </div>
@endsection