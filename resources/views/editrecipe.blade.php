@extends("layouts.template")
@section("title")
Foodseason - Subir una receta
@endsection
@section("body")
      @include('partials.header')
      <body class="profile-body">
      <div class="container ">
      <div class="page-header header-filter" data-parallax="true"></div>
      <div class="main main-raised">
      <div class="profile-content" style="margin:10px;">
        <div class="container center-block">
    <div class="row">
      <div class="col-xs-12 col-sm-9">
        <h4 style="color:#E24E42; margin:20px;"><strong> ¡Editá tu receta!</strong></h4>
        <form class="form-horizontal" action="/editrecipe/{{ $recipe->id }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="form-group">
                <div class="col-sm-10">
                  <label class="col-sm-2 control-label"><i class="fas fa-utensils"></i> Título:</label>
                  <input type="text" name="title" class="form-control" value="{{ old('title', $recipe->title) }}">
                </div>
              </div>
              @if($errors->has('title'))
              <p>{{ $errors->first('title') }}</p>
              @endif
              <br>
              @if($errors->has('title'))
              <p>{{ $errors->first('title') }}</p>
              @endif
              {{-- <div class="form-group">
                <div class="col-sm-10">
                  <label class="col-sm-2 control-label">Subtítulo:</label>
                  <input type="text" name="subtitle" class="form-control">
                </div>
              </div> --}}
              <div class="col-sm-10">
                <label class="col-sm-2 control-label">Foto:</label>
                <input type="file" name="photoName" class="form-control">
              </div>
              <br>
              @error('photoName')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror



            </div>
          <div class="form-group">
            <div class="col-sm-10">
            <label class="col-sm-2 control-label">Procedimiento e ingredientes:</label>
              <textarea rows="3" name="recipeBody" class="form-control">{{ old('recipeBody', $recipe->recipeBody) }}</textarea>
            </div>
            </div>
            @if($errors->has('recipeBody'))
            <p>{{ $errors->first('recipeBody') }}</p>
            @endif
            <div class="form-group">

                  <div id="mainselection">
                    <select>
                      <option value="">¿Cómo definirías a tu receta?</option>
                    @foreach ($listOfTags as $tag)
                      <option value="{{$tag['id']}}">{{$tag['tagName']}}</option>
                    @endforeach
                    </select>
                  </div>




          </div>

              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                  <button type="submit" class="btn btn-danger" style="background-color: #e24e42; color:white"><i class="fas fa-carrot"></i> Aceptar</button>
                  <button type="reset" class="btn btn-warning" style="background-color: #E9B000; color:white"><i class="far fa-window-close"></i> Cancelar</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>
    </div>
    </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
</body>
@endsection
