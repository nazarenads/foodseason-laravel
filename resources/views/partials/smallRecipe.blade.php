<div class="col-12 col-md-4">
  <article class="small-recipe">
    <h2 class="recipe-title"></h2>
    <img src="" alt="imagen de la noticia" class="img-with-border">
    <h3>Receta 2</h3>
    <p></p>
    <a href="#" class="special-link"></a>
    <hr>
  </article>

</div>

{{$recipe->title}}

{{$recipe->title}}

{{$recipe->recipeBody}}

<a href="recipe/{{$recipe->id}}" class="special-link" style="text-decoration:none; background-color:#008F95;"> <i class="fas fa-glasses"></i> Ver más</a>
@auth<a href="editrecipe/{{$recipe->id}}" class="special-link" style="text-decoration:none;background-color:#EB6E80;"><i class="far fa-edit"></i></a>@endauth


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
