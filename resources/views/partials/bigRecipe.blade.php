<div class="col-12 col-md-8">
  <article class="big-recipe">
    <h2 class="recipe-title">{{$recipe->title}}</h2>
    <img alt="" class="img-with-border" src="/storage/recipesPictures/{{$recipe->image}}">
    <h3></h3>
    <p>{{$recipe->recipeBody}}</p>
    <div class="col-6 col-md-8" style="display:flex; ">
      <a href="recipe/{{$recipe->id}}" class="special-link" style="text-decoration:none; width:30%;">Ver más</a>
      @auth<a href="recipe/edit/{{$recipe->id}}" class="special-link" style="text-decoration:none; width:30%;">Editar receta</a>@endauth
    </div>
    <hr>
  </article>

</div>
