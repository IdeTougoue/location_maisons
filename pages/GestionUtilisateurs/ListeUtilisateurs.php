<?= include ( '../_Includes/Header.php' ); ?>

  <!-- Emballage de contenu. Contient le contenu de la page -->
  <div  class = " content-wrapper ">
    <!-- En-tête de contenu (En-tête de page) -->
    <section class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>LISTES DES UTILISATEURS</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
    <!-- En-tête de contenu (En-tête de page) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-12 row">
          <div class="col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-info"> <img src="../../Libraries/Docs/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .7"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Nombre d'administrateurs</span>
                  <span class="info-box-number">02</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-success"><i class="nav-icon fas fa-users"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Nombre d'utilisateurs </span>
                  <span class="info-box-number">oo1</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
          <!-- /.col -->
        </div>
         
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des utilisateurs </h3>

                <div class="card-tools">
                  <a href="AjouterUtilisateur.php" class="btn-sm shadow btn-success">
                    <i class="fas fa-plus"></i> Ajouter 
                  </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Noms </th>
                      <th>prenoms</th>
                      <th>poste</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> </td>
                      <td> </td>
                      <td> </td>
                      <td> </td>
                    </tr>
                    <tr>
                      <td> </td>
                      <td> </td>
                      <td> </td>
                      <td> </td>
                    </tr>
                  </tbody>
                </table>
                <a href="EditerUtilisateur.php" class="btn-sm shadow btn-info">
                    <i class="fas fa-eye"></i> Editer
                  </a>
              </div>
              <!-- /.card-body -->

            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->

        </div>
      </div> 
      <!-- /.conteneur-fluide -->
    </section>



      </div> 
      <!-- /.conteneur-fluide -->
    </section>
    <!-- /.contenu -->
  </div>

<?= include ( '../_Includes/footer.php' ); ?> 