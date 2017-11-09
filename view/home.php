<?php include '../view/header.php';?>

<section class="row container">
  <h2>Mes comptes</h2>
  <!-- view customer accounts -->
        <div class="col s12">
          <?php foreach ($comptes as $compte): ?>
          <div class="blue-grey darken-1">
            <div class="card-content white-text row center-align">
              <p class="col s12 m2"><?php echo htmlspecialchars($compte->getNom()) ?></p>
              <p class="col s12 m2"><?php echo htmlspecialchars($compte->getNumeroDeCompte()) ?></p>
              <p class="col s12 m2"><?php echo htmlspecialchars($compte->getSolde()) ?> €</p>
              <p class="col s12 m2"><?php echo htmlspecialchars($compte->getDate()) ?></p>
              <p> <?php echo $compte->getIdCompte()?></p>
              <p class="col s12 m4 offset-s3">
                <a href="../controller/deleteCompte.php?cancel=<?php echo $compte->getIdCompte()?>"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
              </p>
              </div>
          </div>
        <?php endforeach;?>

        </div>
                  <!-- Modal Structure1 -->
           <div id="modal1" class="modal">
             <div class="modal-content">
               <h4>creer un compte</h4>
               <form action="../controller/addCompte.php" method="post" class="col s12" enctype="multipart/form-data">
                  <div class="input-field col s12">
                    <input name='numeroDeCompte' id="numeroDeCompte" type="hidden">
                    <input  id="nom" type="text" name="nom" class="validate">
                    <label for="non">Nom</label>
                  </div>

                  <div class="input-field col s12">
                    <input name='solde' id="virement" type="number" class="validate">
                    <label for="Prix">Sommes </label>
                    <small>Entrer une somme de type chiffre:15899</small>
                  </div>





               <div class="card-action">
                 <input class="waves-effect waves-light btn" type="submit"  value="valider">
               </div>
               </form>

             </div>
           </div>

                <!-- Modal Structure1 -->
         <div id="modal2" class="modal">
           <div class="modal-content">
             <h4>Faire un virement</h4>
             <form action="../controller/updateMoney.php" method="post" class="col s12" enctype="multipart/form-data">
                <div class="input-field col s12">
                  <select>
                    <?php foreach ($comptes as $compte): ?>
                    <option value="<?php echo htmlspecialchars($compte->getNumeroDeCompte()) ?>"><?php echo htmlspecialchars($compte->getNumeroDeCompte())?></option>
                  <?php endforeach; ?>
                  </select>
                  <label>sélectionner un compte</label>

                  <input name='money' id="virement" type="number" class="validate">
                  <label for="Prix">Sommes </label>
                  <small>Entrer une somme de type chiffre:15899</small>

                </div>
             <div class="card-action">
               <input class="waves-effect waves-light btn" type="submit" name="" value="valider">
             </div>
             </form>

           </div>
         </div>

               <!-- Modal Structur2 -->
        <div id="modal3" class="modal">
          <div class="modal-content">
            <h4>Faire un retrait</h4>
            <form action="../controller/updateMoney.php" method="post" class="col s12" enctype="multipart/form-data">
              <div class="input-field col s12 m12">
                <select>
                  <?php foreach ($comptes as $compte): ?>
                  <option value="<?php echo htmlspecialchars($compte->getNumeroDeCompte()) ?>"><?php echo htmlspecialchars($compte->getNumeroDeCompte())?></option>
                <?php endforeach; ?>
                </select>
                <label>sélectionner un compte</label>

                <input name='money' id="addmoney" type="number" class="validate">
                <label for="Prix">Sommes </label>
                <small>Entrer une somme de type chiffre:15899</small>
              </div>
            <div class="card-action">
              <input class="waves-effect waves-light btn" type="submit" name="" value="valider">
            </div>
          </form>
          </div>

        </div>

                <!-- Modal Structur3 -->
         <div id="modal4" class="modal">
           <div class="modal-content">
             <h4>Faire un depot</h4>
             <form action="../controller/updateMoney.php" method="post" class="col s12" enctype="multipart/form-data">
               <div class="input-field col s12 m12">
                 <select>
                   <?php foreach ($comptes as $compte): ?>
                   <option value="<?php echo htmlspecialchars($compte->getNumeroDeCompte()) ?>"><?php echo htmlspecialchars($compte->getNumeroDeCompte())?></option>
                 <?php endforeach; ?>
                 </select>
                 <label>sélectionner un compte</label>

                 <input name='money' id="-money" type="number" class="validate">
                 <label for="Prix">Sommes </label>
                 <small>Entrer une somme de type chiffre:15899</small>
               </div>
             <div class="card-action">
               <input class="waves-effect waves-light btn" type="submit" name="" value="valider">
             </div>
           </div>
           </form>
         </div>
      </section>

<?php   include '../view/footer.php'; ?>
