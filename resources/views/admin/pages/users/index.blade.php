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
                            <h5 class="card-title">Users</h5>
                            <div>
                                <a href="{{route('user.create')}}" class="btn btn-primary">Add</a>
                            </div>
                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">name</th>
                                        <th scope="col">email</th>
                                        <th scope="col">email_verified_at</th>
                                        <th scope="col">role</th>
                                        <th scope="col">Created_At</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $user->id}}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->email_verified_at}}</td>
                                            <td>{{ $user->role}}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>
                                                <form action="{{ route('user.edit', $user->id) }}" method="GET"
                                                    class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-warning">edit</button>
                                                </form>
                                                <form action="{{ route('user.delete', $user->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">delete</button>
                                                </form>
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
