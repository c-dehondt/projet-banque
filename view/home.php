<?php include '../view/header.php';?>

<section class="row">
  <h2>Mes comptes</h2>
        <div class="col s12 ">
          <div class="blue-grey darken-1">

            <div class="card-content white-text row">
              <p class="col s12 m3">Titulaire du compte.</p>
              <p class="col s12 m3">Numéro de compte</p>
              <p class="col s12 m3">Solde </p>
              <p class="col s12 m2">date modif</p>
              <p class="col s12 m1"><a></a></p>
            </div>

            <div class="card-action">
                    <ul class="tabs blue-grey darken-4">
                      <li class="tab col s2"><a href="#test-swipe-1"><i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-eur " aria-hidden="true"></i></a></li>
                      <li class="tab col s2"><a href="#test-swipe-2"><i class="fa fa-minus" aria-hidden="true"></i>  <i class="fa fa-eur " aria-hidden="true"></i></a></li>
                      <li class="tab col s2 offset-s6"><a class="active" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                    </ul>

                  <div id="test-swipe-1" class="col s12 blue-grey darken-2">
                    <form action="" method="post" class="col s12" enctype="multipart/form-data">

                        <div class="input-field col s12 m12">
                          <input name='price' id="Prix" type="number" class="validate">
                          <label for="Prix">Sommes </label>
                          <small>Entrer une somme de type chiffre:15899</small>
                        </div>

                      <div class="card-action">
                        <input class="waves-effect waves-light btn" type="submit" name="" value="valider">
                      </div>
                    </form>
                  </div>

                  <div id="test-swipe-2" class="col s12 blue-grey darken-2">
                    <form action="" method="post" class="col s12" enctype="multipart/form-data">

                        <div class="input-field col s12 m12">
                          <input name='price' id="Prix" type="number" class="validate">
                          <label for="Prix">Sommes </label>
                          <small>Entrer une somme de type chiffre:15899</small>
                        </div>

                      <div class="card-action">
                        <input class="waves-effect waves-light btn" type="submit" name="" value="valider">
                      </div>
                    </form>
                  </div>
                </div>

            </div>
        </div>
      </section>

<?php   include '../view/footer.php'; ?>
