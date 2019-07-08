@extends('template')
  <body class = "home-body">
  
    <section>
      <div class="container-fluid">
        <div class="row d-flex">
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card card-home">
              <div class="card-body">
                <h4 class="card-title"  style="margin-bottom: 15%;   font-size: 1.5em;" >¡Llegaste a la red de recetas más cómoda!</h4>
                <p class="card-text">Encontrá y subí tus propias recetas con fotos y comentarios reales.</p>
                <p class="card-text">¡Averigüá los ingredientes que usa tu vecina en su cocina que huele tan bien!</p>
                <?php if(isset($_SESSION['username'])){?>
                  <a href=CRUDrecipes/uploadRecipe.php><button type="button" name="button">Subir recetas</button></a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
