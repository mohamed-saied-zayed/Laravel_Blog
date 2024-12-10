@extends('admin.layouts.master')
@section('admin.content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add User</h5>
              <!-- General Form Elements -->
              <form method="POST" action="{{route('user.store')}}">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control">
                    @error('name')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" name="email" class="form-control">
                    @error('email')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                  <div class="row mb-3 my-2">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control">
                      @error('password')
                      <div class="alert alert-danger">
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Add User</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add User</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>
        </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection