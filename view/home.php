<?php include '../view/header.php';?>

<section class="row">
  <h2>Mes comptes</h2>
        <div class="col s12 ">
          <div class="blue-grey darken-1">

            <div class="card-content white-text row">
              <ul class="container col s12">
              <li class="col s12 m3">Titulaire du compte.</li>
              <li class="col s12 m3">Numéro de compte</li>
              <li class="col s12 m2">Solde </li>
              <li class="col s12 m3">date modif</li>
              <li <li class="tab col s12 m1"><a href="#"><i class="fa fa-trash fa-2" aria-hidden="true"></i></a></li></li>
            </ul>
            </div>

            <!-- <div class="card-action">
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
                </div> -->

            </div>
        </div>
        <?php

            $number = '0123456789X';
            $letter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

            $randstring = '';
            for ($i = 0; $i < 10; $i++) {
                $randstring .= $number[rand(0, strlen($number))];
            }
                $randstring .= $letter[rand(0, strlen($letter))];


        echo $randstring;
        ?>
      </section>

<?php   include '../view/footer.php'; ?>
