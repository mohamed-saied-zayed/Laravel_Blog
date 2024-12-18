<footer class="border-top">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="{{$setting->twitter_link}}" target="_blank">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{$setting->facebook_link}}" target="_blank">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{$setting->github_link}}" target="_blank">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                </ul>
                <div>
                    <ul class="list-inline text-center">
                        <li >
                            {{$site_data->phone}}
                        </li>
                        <li>
                            {{$site_data->address}}
                        </li>
                    </ul>
                </div>
                <div class="small text-center text-muted fst-italic">Copyright &copy; <a href="{{route('home')}}">{{$setting->site_name}}</a> {{date('Y')}}</div>
            </div>
        </div>
    </div>
</footer>