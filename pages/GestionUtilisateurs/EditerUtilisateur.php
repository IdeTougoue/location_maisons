<?= include ( '../_Includes/Header.php' ); ?>

  <!-- Emballage de contenu. Contient le contenu de la page -->
  <div  class = " content-wrapper ">
    <!-- En-tête de contenu (En-tête de page) -->
    <section class="content-header">
      <div class="container-fluid">
      <section>
        <div class="form-group">
                <label for="inputName">Nom de l'utilisateur</label>
                <input type="text" id="inputName" class="form-control" value="Nom de l'utilisateur">
              </div>
              <div class="form-group">
                <label for="inputPoste">poste</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option disabled>choisir un poste</option>
                  <option>consultant fiscal </option>
                  <option>consultant comptable</option>
                  <option selected>secrétaire</option>
                </select>
               </div>
              <div class="form-group">
                <label for="inputStatus">statut de l'utilisateur </label>
                <select id="inputStatus" class="form-control custom-select">
                  <option disabled>choisir le statut</option>
                  <option>Administrateur </option>
                  <option selected>simple utilisateur</option>
                </select>
              </div>
           
            </div>
            <div class="row">
            <div class="col-12">
              <a href="ListeUtilisateurs.php" class="btn btn-secondary">Annuler</a>
              <input type="submit" value="Save Changes" class="btn btn-success float-right " >
            </div>
            </div>
        </section>

      </div> 
      <!-- /.conteneur-fluide -->
    </section>
    <!-- /.contenu -->
  </div>

<?= include ( '../_Includes/footer.php' ); ?> 