@extends('layouts.website')
@section('content')
<div class="site-section bg-light">
    <div class="container">
        <div class="row align-items-stretch retro-layout">
            @foreach($lastFooterPost as $post)
            <div class="col-md-5 order-md-2">
                <a href="{{ route('website.post', ['slug' => $post->slug]) }}" class="hentry img-1 h-100 gradient"
                    style="background-image: url('./{{ $post->image }}');">
                    <span class="post-category text-white bg-danger">{{ $post->category->name }}</span>
                    <div class="text">
                        <h2>{{ $post->title }}</h2>
                        <span class="date">{{ $post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="col-md-7">
                @foreach($firstFooterPost as $post)
                <a href="{{ route('website.post', ['slug' => $post->slug]) }}"
                    class="hentry img-2 v-height mb30 gradient"
                    style="background-image: url('./{{ $post->image }}');">
                    <span class="post-category text-white bg-success">{{ $post->category->name }}</span>
                    <div class="text text-sm">
                        <h2>{{ $post->title }}</h2>
                        <span class="date">{{ $post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
                @endforeach
                <div class="two-col d-block d-md-flex justify-content-between">
                    @foreach($firstfooterPosts2 as $post)
                    <a href="{{ route('website.post', ['slug' => $post->slug]) }}"
                        class="hentry v-height img-2 gradient" style="background-image: url('./{{ $post->image }}');">
                        <span class="post-category text-white bg-primary">{{ $post->category->name }}</span>
                        <div class="text text-sm">
                            <h2>{{ $post->title }}</h2>
                            <span class="date">{{ $post->created_at->format('M d, Y')}}</span>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h2>Recent Posts</h2>
            </div>
        </div>
        <div class="row">
            @foreach($recentPosts as $post)
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <a href="{{ route('website.post', ['slug' => $post->slug]) }}"><img src="./{{ $post->image }}"
                            alt="Image" class="img-fluid rounded" style="height: 210px;"></a>
                    <div class="card-body">
                        <span class="post-category text-white bg-warning mb-3">{{ $post->category->name }}</span>

                        <h2 class="post-title"><a href="{{ route('website.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <figure class="author-figure mb-0 mr-3 float-left"><img
                                    src="@if($post->user->image) ./{{ $post->user->image }} @else {{ asset('website/images/user.png') }} @endif"
                                    alt="Image" class="img-fluid" style="width: 20px;"></figure>
                            <span class="d-inline-block mt-1">By <a href="#">{{ $post->user->name }}</a></span>
                            <span>&nbsp;-&nbsp; {{ $post->created_at->format('M d, Y') }} </span>
                        </div>
                        <p> {{ Str::limit($post->description, 100) }} <a href="{{ route('website.post', ['slug' => $post->slug]) }}">Read More</a> </p>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row text-center pt-5 border-top">
            {{ $recentPosts->links() }}
            {{-- <div class="col-md-12">
          <div class="custom-pagination">
            <span>1</span>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <span>...</span>
            <a href="#">15</a>
          </div>
        </div>
      </div> --}}
        </div>
    </div>
</div>

@endsection
