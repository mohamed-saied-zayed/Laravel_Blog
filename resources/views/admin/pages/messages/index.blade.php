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
                            <h5 class="card-title">Messages</h5>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">name</th>
                                        <th scope="col">email</th>
                                        <th scope="col">phone</th>
                                        <th scope="col">content</th>
                                        <th scope="col">Created_At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $message)
                                        <tr>
                                            <th scope="row">{{ $message->id }}</th>
                                            <td>{{ $message->name}}</td>
                                            <td>{{ $message->email}}</td>
                                            <td>{{ $message->phone}}</td>
                                            <td>{{$message->content}}</td>
                                            <td>{{ $message->created_at}}</td>
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
