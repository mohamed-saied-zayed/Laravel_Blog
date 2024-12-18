@extends('admin.layouts.master')
@section('admin.content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>General Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">General</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Posts</h5>
                            <div>
                                <a href="{{route('post.create')}}" class="btn btn-primary">Add</a>
                            </div>
                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Created_At</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <th scope="row">{{ $post->id }}</th>
                                            <td>{{ $post->user_id}}</td>
                                            <td>{{ $post->title}}</td>
                                            <td>{{\Str::limit($post->content,20)}}</td>
                                            <td><img src="{{'storage/'.$post->image}}" alt="" width="25%" height="25%"></td>
                                            <td>{{ $post->created_at}}</td>
                                            <td>
                                                <form action="{{ route('post.edit', $post->id) }}" method="GET"
                                                    class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-warning">edit</button>
                                                </form>
                                                <form action="{{ route('post.delete', $post->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                <div class="float-right">
                                    {{ $posts->links() }}
                                </div>
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
