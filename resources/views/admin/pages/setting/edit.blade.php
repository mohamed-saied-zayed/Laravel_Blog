@extends('admin.layouts.master')
@section('admin.content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Setting</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Setting</h5>
              <!-- General Form Elements -->
              <form method="POST" {{route('setting.update',$setting->id)}}>
                @csrf
                @method('PUT')
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Site Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" value="{{$setting->site_name}}" class="form-control">
                    @error('Site_name')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Site Logo</label>
                  <div class="col-sm-10">
                    <input type="text" name="site_logo" value="{{$setting->site_logo}}" class="form-control">
                    @error('site_logo')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Facebook Link</label>
                  <div class="col-sm-10">
                    <input type="text" name="facebook_link" value="{{$setting->facebook_link}}" class="form-control">
                    @error('facebook_link')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Twitter Link</label>
                  <div class="col-sm-10">
                    <input type="text" name="twitter_link" value="{{$setting->twitter_link}}" class="form-control">
                    @error('twitter_link')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Youtube Link</label>
                  <div class="col-sm-10">
                    <input type="text" name="youtube_link" value="{{$setting->youtube_link}}" class="form-control">
                    @error('youtube_link')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Github Link</label>
                  <div class="col-sm-10">
                    <input type="text" name="github_link" value="{{$setting->github_link}}" class="form-control">
                    @error('github_link')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <input type="text" name="address" value="{{$setting->address}}" class="form-control">
                    @error('address')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-10">
                    <input type="text" name="phone" value="{{$setting->phone}}" class="form-control">
                    @error('phone')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">About Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="about_title" value="{{$setting->about_title}}" class="form-control">
                    @error('about_title')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">About Content</label>
                  <div class="col-sm-10">
                    <input type="text" name="about_content" value="{{$setting->about_content}}" class="form-control">
                    @error('about_content')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Update Setting</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Setting</button>
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