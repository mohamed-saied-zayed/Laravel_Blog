@extends('admin.layouts.master')
@section('admin.content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Site Settings</h1>
        </div><!-- End Page Title -->
 <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Social Media Links</h5>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">facebook_link</th>
                                        <th scope="col">twitter_link</th>
                                        <th scope="col">youtube_link</th>
                                        <th scope="col">github_link</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($settings as $setting)
                                        <tr>
                                            <td>{{ $setting->facebook_link }}</td>
                                            <td>{{ $setting->twitter_link }}</td>
                                            <td>{{ $setting->youtube_link }}</td>
                                            <td>{{ $setting->github_link }}</td>
                                            <td>
                                                <form action="{{ route('setting.edit', $setting->id) }}" method="GET"
                                                    class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-warning">edit</button>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Site Settings</h5>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Site_name</th>
                                        <th scope="col">Site_logo</th>
                                        <th scope="col">address</th>
                                        <th scope="col">phone</th>
                                        <th scope="col">about_title</th>
                                        <th scope="col">about_content</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($settings as $setting)
                                        <tr>
                                            <td>{{ $setting->site_name }}</td>
                                            <td>{{ $setting->site_logo }}</td>
                                            <td>{{ $setting->address }}</td>
                                            <td>{{ $setting->phone }}</td>
                                            <td>{{ $setting->about_title }}</td>
                                            <td>{{ $setting->about_content }}</td>
                                            <td>
                                                <form action="{{ route('setting.edit', $setting->id) }}" method="GET"
                                                    class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-warning">edit</button>
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
