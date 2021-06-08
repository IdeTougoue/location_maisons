<?= include ( '../_Includes/Header.php' ); ?>

  <!-- Emballage de contenu. Contient le contenu de la page -->
  <div  class = " content-wrapper ">
    <!-- En-tête de contenu (En-tête de page) -->
    <section class="content-header">
      <div class="container-fluid">
      <div class="col-md-12">
      <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Formulaire d'ajout d'un utilisateur</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group col-md-4">
                <label for="Name">Nom de l'utilisateur</label>
                <input type="text" class="form-control" id="nameUser" placeholder="Entrer le nom">
              </div>
              <div class="form-group">
                <label for="Prenom">Prenom</label>
                <input type="text" class="form-control" id="Prenom" placeholder="Entrer le Prenom">
              </div>
              <div class="form-group">
                <label for="Poste">Poste</label>
                <div class="form-group">
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">sécrétariat</option>
                    <option>consultant fiscal</option>
                    <option>consultant comptable</option>
                    <option>Directeur fiscal</option>
                    <option>directeur comptable</option>
                    <option>Chargé de missions</option>
                    <option>Administrateur adjoint </option>
                  </select>
                </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">VALIDER</button>
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