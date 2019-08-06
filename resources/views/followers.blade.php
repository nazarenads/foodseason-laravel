<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    @extends("layouts.template")
    @section("title")
    Foodseason - Follow
    @endsection
  
  </head>
  @section("body")
  <body class="body-friends">
        @include('partials.header')
<div class="content">
    <div class="container">
        <div class="row">
          @foreach($followers as $follower)
            <div class="col-lg-4">
                <div class="text-center card-box-friends">
                    <div class="member-card pt-2 pb-2">
                      <div class="followavatar">
                      @if ($user->profile_image)
                        <img src="storage/profilePictures/{{$user->profile_image}}"  class="img-raised rounded-circle img-fluid">
                      @else
                        <img src="img/profiledefault.png"  class="img-raised rounded-circle img-fluid">
                      @endif
                      {{ $user->username }}
                        </div>
                        <div class="">
                            <a href="/{{$follower->username}}"> <h4 style="color:black;" >{{$follower->username}}</h4> </a>
                            <p class="text-muted">{{$follow->username}} <span>| </span><span><a href="#" class="text-pink"> {{$follow->bio}}</a></span></p>
                        </div>
                        @if (Auth::check())
                          @if (Auth::user()->isFollowing($follower))
                          <form action="/{{$follower->username}}/unfollow" method="post">
                            {{ csrf_field() }}
                            @if (session('success'))
                                <span class="text-success">{{ session('success') }}</span>
                            @endif
                            <button class="btn btn-danger" style="color:white; background-color: #E24E42">Unfollow</button>
                          </form>
                          @else
                          <form action="/{{$follower->username}}/follow" method="post">
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
