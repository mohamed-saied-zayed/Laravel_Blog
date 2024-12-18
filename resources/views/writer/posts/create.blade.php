@extends('writer.layouts.master')
@section('admin.content')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Add Post</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Post</h5>
              <!-- General Form Elements -->
              <form action="{{route('posts.store.writer')}}" method="POST" enctype="multipart/form-data" novalidate>
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

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection