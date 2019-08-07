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
          @foreach($users as $user)
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
                            <a href="/{{$user->username}}" style="text-decoration:none;"> <h4 style="color:black;" >{{$user->username}}</h4> </a>
                            <p class="text-muted">{{$user->username}} <span>| </span><span><a href="#" class="text-pink"> {{$user->bio}}</a></span></p>
                        </div>
                        @if (Auth::check())
                          @if (Auth::user()->isFollowing($user))
                          <form action="/{{$user->username}}/unfollow" method="post">
                            {{ csrf_field() }}
                            @if (session('success'))
                                <span class="text-success">{{ session('success') }}</span>
                            @endif
                            <button class="btn btn-danger" style="color:white; background-color: #E24E42">Unfollow</button>
                          </form>
                          @else
                          <form action="/{{$user->username}}/follow" method="post">
                            {{ csrf_field() }}
                            @if (session('success'))
                                <span class="text-success">{{ session('success') }}</span>
                            @endif
                            <button class="btn btn-info" style="color:white; background-color: #008F95">Follow</button>
                          </form>
                          @endif
                        @endif

                        <div class="mt-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mt-3">
                                        <h4 class="mb-0 text-muted">{{$user->followers_count}}</h4>
                                        <p class="mb-0 text-muted">Seguidores</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mt-3">
                                        <h4 class="mb-0 text-muted">{{$user->follows_count}}</h4>
                                        <p class="mb-0 text-muted">Seguidos</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
