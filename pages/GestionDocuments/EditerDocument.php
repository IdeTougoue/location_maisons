<?= include ( '../_Includes/Header.php' ); ?>

  <!-- Emballage de contenu. Contient le contenu de la page -->
  <div  class = " content-wrapper ">
    <!-- En-tête de contenu (En-tête de page) -->
    <section class="content-header">
      <div class="container-fluid">
      <section>
        <div class="form-group">
                <label for="inputName">Nom du document</label>
                <input type="text" id="inputName" class="form-control" value="Marché du...">
              </div>
              <div class="form-group">
                <label for="inputDescription">Détails du document  </label>
                <textarea id="inputDescription" class="form-control" rows="4"  placeholder="entrer les details"> </textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">statut du document</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option disabled>choisir un élément de la liste</option>
                  <option>En attente </option>
                  <option>En cours</option>
                  <option selected>Bouclé</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Secteur concerné</label>
                <input type="text" id="inputSector" class="form-control" value="information sur la structure concernée">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Chef de projet</label>
                <input type="text" id="inputProjectLeader" class="form-control" value="Fiscagest">
              </div>
            </div>
            <div class="row">
            <div class="col-12">
              <a href="ListeDocuments.php" class="btn btn-secondary">Annuler</a>
              <input type="submit" value="Save Changes" class="btn btn-success float-right">
            </div>
            </div>
        </section>

      </div> 
      <!-- /.conteneur-fluide -->
    </section>
    <!-- /.contenu -->
  </div>

<?= include ( '../_Includes/footer.php' ); ?> 