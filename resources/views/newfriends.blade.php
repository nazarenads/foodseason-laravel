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
            <div class="col-lg-4">
                <div class="text-center card-box-friends">
                    <div class="member-card pt-2 pb-2">
                        <div class="followavatar"><img src="https://images.unsplash.com/photo-1430931071372-38127bd472b8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" ></div>
                        <div class="">
                            <h4>Pepito</h4>
                            <p class="text-muted">@Chef <span>| </span><span><a href="#" class="text-pink"> Biografia</a></span></p>
                        </div>
                        @if (Auth::check())
                          @if (Auth::user()->isFollowing($user))
                          <form action="/{{$user->username}}/unfollow" method="post">
                            {{ csrf_field() }}
                            @if (session('success'))
                                <span class="text-success">{{ session('success') }}</span>
                            @endif
                            <button class="btn btn-danger">Unfollow</button>
                          </form>
                          @else
                          <form action="/{{$user->username}}/follow" method="post">
                            {{ csrf_field() }}
                            @if (session('success'))
                                <span class="text-success">{{ session('success') }}</span>
                            @endif
                            <button class="btn btn-primary">Follow</button>
                          </form>
                          @endif
                        @endif
        
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4 class="mb-0 text-muted">1753</h4>
                                        <p class="mb-0 text-muted">Recetas</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4 class="mb-0 text-muted">3569</h4>
                                        <p class="mb-0 text-muted">Seguidores</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-3">
                                        <p class="mb-0 text-muted">2563</p>
                                        <p class="mb-0 text-muted">Seguidos</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>

@endsection
</body>
</html>
