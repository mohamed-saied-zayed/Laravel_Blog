@extends('writer.layouts.master')
@section('admin.content')
    <main id="main" class="main">
        <div class="pagetitle">
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Posts</h5>
                            <div>
                                <a href="{{route('writer.posts.create')}}" class="btn btn-primary">Add Post</a>
                            </div>
                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Post ID</th>
                                        <th scope="col">User ID</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Created_At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <th scope="row">{{ $post->id }}</th>
                                            <td>{{ $post->user->id}}</td>
                                            <th scope="row">{{ $post->user->name}}</th>
                                            <td>{{ $post->title}}</td>
                                            <td>{{\Str::limit($post->content,20)}}</td>
                                            <td><img src="{{'storage/'.$post->image}}" alt="" width="25%" height="25%"></td>
                                            <td>{{ $post->created_at}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                    {{ $posts->links() }}
                            </div>
                            </div>
                            <!-- End Default Table Example -->
                        </div>
                    </div>
                </div>
            </div>

            </div>
            </div>
        </section>
        

    </main><!-- End #main -->
@endsection


