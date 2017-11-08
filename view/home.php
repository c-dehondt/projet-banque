<?php include '../view/header.php';?>

<section class="row">
  <h2>Mes comptes</h2>
        <div class="col s12 ">
          <div class="blue-grey darken-1">
            <?php var_dump($test) ?>

            <?php foreach ($comptes as $compte): ?>
            <div class="card-content white-text row">
              <ul class="container col s12">
              <li class="col s12 m3"><?php echo htmlspecialchars($compte->getNom()) ?></li>
              <li class="col s12 m3"><?php echo htmlspecialchars($compte->getNumeroDeCompte()) ?></li>
              <li class="col s12 m2"><?php echo htmlspecialchars($compte->getSolde()) ?></li>
              <li class="col s12 m3"><?php echo htmlspecialchars($compte->getDate()) ?></li>
              <li><a href="#"><i class="fa fa-trash fa-2" aria-hidden="true"></i></a></li></li>
            </ul>
            </div>
        <?php endforeach; ?>


            </div>
        </div>
        <?php

        //     $number = '0123456789X';
        //     $letter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        //
        //     $randstring = '';
        //     for ($i = 0; $i < 10; $i++) {
        //         $randstring .= $number[rand(0, strlen($number))];
        //     }
        //         $randstring .= $letter[rand(0, strlen($letter))];
        //
        //
        // echo $randstring;
        ?>
      </section>

<?php   include '../view/footer.php'; ?>
