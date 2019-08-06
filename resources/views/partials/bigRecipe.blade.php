<div class="container">
<div class="page-header header-filter" data-parallax="true"></div>
<div class=" main-raised" style="width:50%;">
<div class="profile-content" >
        <div class="row">
          <div class="col-md-6 col-lg-10 ml-auto mr-auto">
             <div class="profile">
                 <h2 class="recipe-title">{{$recipe->title}}</h2>
                  <div class="recipeimg center">
                    <img alt="" class="img-with-border" src="/storage/recipesPictures/{{$recipe->image}}">
                    <br>
                  </div>
                  <div class="name">
                  <h3 style="color:#696969;">{{$recipe->title}}</h3>
                  <div class="recipeBody">
                    <textarea rows="3" name="recipeBody" class="form-control" style="height:30%;">{{$recipe->recipeBody}}</textarea>

                  </div>
                    <a href="recipe/{{$recipe->id}}" class="special-link" style="text-decoration:none; background-color:#008F95;"> <i class="fas fa-glasses"></i> Ver más</a>
                    @auth<a href="editrecipe/{{$recipe->id}}" class="special-link" style="text-decoration:none;background-color:#EB6E80;"><i class="far fa-edit"></i></a>@endauth

                  <hr>
                  <hr>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
