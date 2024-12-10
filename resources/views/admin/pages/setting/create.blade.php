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
              <form method="POST" action="{{route('tag.store')}}">
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
                  <label class="col-sm-2 col-form-label">Add Tag</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add Tag</button>
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