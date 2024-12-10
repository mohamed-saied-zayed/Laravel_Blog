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
              <h5 class="card-title">Add Tag</h5>
              <!-- General Form Elements -->
              <form method="POST" action="{{route('post.store')}}">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="title" class="form-control">
                    @error('title')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">content</label>
                  <div class="col-sm-10">
                    <input type="text" name="content" class="form-control">
                    @error('content')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Add Post</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add Post</button>
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