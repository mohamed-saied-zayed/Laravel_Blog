@foreach ($posts as  $post)                        
<div class="post-preview">
    <a href="{{url('posts/'.$post->id)}}">
        <h2 class="post-title">{{$post->title}}</h2>
        @php
            $image = File::exists('storage/'.$post->image) ? 'storage/'.$post->image : 'uploads/1.png';
        @endphp
        <div class="my-3">
            <img src="{{$image}}" width="100%" height="350px">
        </div>
        <h3 class="post-subtitle">{{\Str::limit($post->content,100)}}</h3>
    </a>
    <p class="post-meta">
        Posted by
        <a href="{{url('posts/'.$post->id)}}">{{$post->user->name}}</a>
        on {{$post->created_at->format('Y-m-d')}}
    </p>
</div>
<!-- Divider-->
<hr class="my-4" />
@endforeach
