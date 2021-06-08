<?= include ( '../_Includes/Header.php' ); ?>

  <!-- Emballage de contenu. Contient le contenu de la page -->
  <div  class = " content-wrapper ">
    <!-- En-tête de contenu (En-tête de page) -->
    <section class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>AJOUTER UNE CATEGORIE </h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
    <!-- En-tête de contenu (En-tête de page) -->
    <section class="content-header">
      <div class="container-fluid">
      <div class="col-md-12">
      <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Formulaire d'ajout de catégories</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group col-md-4">
                <label for="exampleInputName">Nom de la catégorie</label>
                <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name">
              </div>
              <div class="form-group">
                <label for="exampleInputDetail">Details</label>
                <input type="text" class="form-control" id="exampleInputDetails" placeholder="details">
              </div>
             
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">OK</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

          </div>
      </div> 
      <!-- /.conteneur-fluide -->
    </section>
    <!-- /.contenu -->
  </div>

<?= include ( '../_Includes/footer.php' ); ?> 