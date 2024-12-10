@extends('admin.layouts.master')
@section('admin.content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tags</h1>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tags</h5>
                            <div>
                                <div>
                                    <a href="{{ route('tag.create') }}" class="btn btn-primary">Add</a>
                                </div>
                                @if (session('success') != null)
                                    <alert class="alert alert-success p-2 text-center">{{ session('success') }}</alert>
                                @endif
                            </div>
                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Created_At</th>
                                        <th scope="col">Updated_At</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tags as $tag)
                                        <tr>
                                            <th scope="row">{{ $tag->id }}</th>
                                            <td>{{ $tag->name }}</td>
                                            <td>{{ $tag->created_at }}</td>
                                            <td>{{ $tag->updated_at }}</td>
                                            <td>
                                                <form action="{{ route('tag.edit', $tag->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-warning">edit</button>
                                                </form>
                                                <form action="{{ route('tag.delete', $tag->id) }}" method="POST"
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
