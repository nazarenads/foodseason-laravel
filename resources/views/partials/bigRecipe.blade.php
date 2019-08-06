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
                    @auth<a href="editrecipe/{{$recipe->id}}" class="special-link" style="text-decoration:none;background-color:#EB6E80;"><i class="far fa-edit"></i> Editar</a>@endauth
                    @auth
                      <form action="deleterecipe/{{$recipe->id}}" method="get">
                    @csrf
                    <input type="hidden" name="id" value="{{$recipe->id}}">
                    <button type= "submit" class="btn btn-info" style="background-color: #008F95; color:white"><i class="far fa-window-close"></i>Eliminar</button>
                    </form>
                    @endauth
                    <hr>
                  <hr>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
