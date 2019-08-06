<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    @extends("layouts.template")
    @section("title")
    Foodseason - Follow
    @endsection
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  @section("body")
  <body class="body-friends">
        @include('partials.header')

<div class="content">
    <div class="container">
        <div class="row">
          @foreach($follows as $follow)
            <div class="col-lg-4">
                <div class="text-center card-box-friends">
                    <div class="member-card pt-2 pb-2">
                        <div class="followavatar"><img src="https://images.unsplash.com/photo-1430931071372-38127bd472b8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" ></div>
                        <div class="">
                            <a href="/{{$follow->username}}"> <h4 style="color:black;" >{{$follow->username}}</h4> </a>
                            <p class="text-muted">{{$follow->username}} <span>| </span><span><a href="#" class="text-pink"> {{$follow->bio}}</a></span></p>
                        </div>
                        @if (Auth::check())
                          @if (Auth::user()->isFollowing($follow))
                          <form action="/{{$follow->username}}/unfollow" method="post">
                            {{ csrf_field() }}
                            @if (session('success'))
                                <span class="text-success">{{ session('success') }}</span>
                            @endif
                            <button class="btn btn-danger" style="color:white; background-color: #E24E42">Unfollow</button>
                          </form>
                          @else
                          <form action="/{{$follow->username}}/follow" method="post">
                            {{ csrf_field() }}
                            @if (session('success'))
                                <span class="text-success">{{ session('success') }}</span>
                            @endif
                            <button class="btn btn-primary" style="color:white; background-color: #008F95">Follow</button>
                          </form>
                          @endif
                        @endif


                    </div>
                </div>
            </div>
            <!-- end col -->
          @endforeach
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>

@endsection
</body>
</html>
