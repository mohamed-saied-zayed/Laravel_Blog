@extends('front.layout.app')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{asset('front')}}/assets/img/contact-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>New User</h1>
                            <span class="subheading">Create New Account</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="my-5">

                            <form method="POST" action="{{route('store.user')}}">
                                @csrf
                                @if (session('success') != null)
                                <alert class="alert alert-success p-2 text-center">{{session('success')}}</alert>      
                                @endif
                                <div class="form-floating">
                                    <input class="form-control" id="name" value="{{old('name')}}" type="text" name="name" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Name</label>
                                    @error('name')
                                    <div class="text-danger" data-sb-feedback="name:required">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" value="{{old('email')}}" type="email" name="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                                    @error('email')
                                    <div class="text-danger" data-sb-feedback="name:required">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="password" type="password" name="password"  placeholder="Enter password" data-sb-validations="required" />
                                    <label for="password">password</label>
                                    @error('password')
                                    <div class="text-danger" data-sb-feedback="name:required">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="password confirmation"  type="password" name="password confirmation"  placeholder="password confirmation" data-sb-validations="required" />
                                    <label for="password">password confirmation</label>
                                    @error('password_confirmation')
                                    <div class="text-danger" data-sb-feedback="name:required">{{$message}}</div>
                                    @enderror
                                </div>
                                <br/>
                                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection