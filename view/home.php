<?php include '../view/header.php';?>

<section class="row container">
  <h2 class="center-align">Mes comptes</h2>
  <!-- view customer accounts -->
        <div class="col s12">
          <div class="card">
          <?php foreach ($comptes as $compte): ?>
          <div class="card blue-grey darken-4">
            <div class="card-content white-text row center-align">
              <p class="col s12 m2">Titulaire du compte<br><?php echo htmlspecialchars($compte->getNom()) ?></p>
              <p class="col s12 m2">Numéro du compte<br><?php echo htmlspecialchars($compte->getNumeroDeCompte()) ?></p>
              <p class="col s12 m2">Solde du compte<br><?php echo htmlspecialchars($compte->getSolde()) ?> €</p>
              <p class="col s12 m2">Date du compte<br><?php echo htmlspecialchars($compte->getDate()) ?></p>
              <p class="col s12 m4 offset-s3">
                <a href="../controller/deleteCompte.php?cancel=<?php echo $compte->getIdCompte()?>">
                  <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                </a>
              </p>
            </div>
          </div>
        <?php endforeach;?>
      </div>
        </div>
                  <!-- Modal create a new account-->
           <div id="modal1" class="modal">
             <div class="modal-content">
               <h4>créer un compte</h4>
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
                <input  class="waves-effect waves-light btn" type="submit"  value="valider">
               </div>
               </form>
             </div>
           </div>

                <!-- Modal MAKE A TRANSFER-->
         <div id="modal2" class="modal">
           <div class="modal-content">
             <h4>Faire un virement</h4>
             <form action="../controller/transferMoney.php" method="post" class="col s12" enctype="multipart/form-data">
                <div class="input-field col s12 m6">
                  <select name="idCompte">
                    <?php foreach ($comptes as $compte): ?>
                    <option value="<?php echo htmlspecialchars($compte->getIDCompte())?>"><?php echo htmlspecialchars($compte->getNumeroDeCompte())?></option>
                  <?php endforeach; ?>
                  </select>
                  <label>sélectionner un compte à débiter</label>
                </div>

                <div class="input-field col s12 m6">
                  <select name="idCompteb">
                    <?php foreach ($comptes as $compte): ?>
                    <option value="<?php echo htmlspecialchars($compte->getIDCompte())?>"><?php echo htmlspecialchars($compte->getNumeroDeCompte())?></option>
                  <?php endforeach; ?>
                  </select>
                  <label>sélectionner un compte à </label>
                </div>

                <div class="input-field col s12">
                  <input name='money' id="virement" type="number" class="validate">
                  <label for="Prix">Sommes </label>
                  <small>Entrer une somme de type chiffre:15899</small>
                </div>
             <div class="card-action">
               <input class="waves-effect waves-light btn" name="transfer" type="submit" value="valider">
             </div>
             </form>

           </div>
         </div>
       </section>

               <!-- Modal make a withdrawal-->
        <div id="modal3" class="modal">
          <div class="modal-content">
            <h4>Faire un retrait</h4>
            <form action="../controller/removeMoney.php" method="post" class="col s12" enctype="multipart/form-data">
              <div class="input-field col s12 m12">
                <select name="idCompte">
                  <?php foreach ($comptes as $compte):?>
                    <option value="<?php echo htmlspecialchars($compte->getIDCompte())?>"><?php echo htmlspecialchars($compte->getNumeroDeCompte())?></option>
                  <?php endforeach; ?>
                </select>
                <label>sélectionner un compte</label>
              </div>

              <div class="input-field col s12 m12">
                <input name='updateMoney' id="updateMoney" type="number" class="validate">
                <label for="Prix">Sommes </label>
                <small>Entrer une somme de type chiffre:15899</small>
              </div>

            <div class="card-action">
              <input class="waves-effect waves-light btn" type="submit" value="valider">
            </div>
          </form>
          </div>

        </div>

                <!-- Modal to make a deposit-->
         <div id="modal4" class="modal">
           <div class="modal-content">
             <h4>Faire un depot</h4>
             <form action="../controller/addMoney.php" method="post" class="col s12" enctype="multipart/form-data">
               <div class="input-field col s12 m12">
                 <select name="idCompte">
                   <?php foreach ($comptes as $compte): ?>
                     <option value="<?php echo htmlspecialchars($compte->getIDCompte())?>"><?php echo htmlspecialchars($compte->getNumeroDeCompte())?></option>
                   <?php endforeach; ?>
                 </select>
                 <label>sélectionner un compte</label>
              </div>

              <div class="input-field col s12 m12">
                 <input name='addMoney' id="addMoney" type="number" class="validate">
                 <label for="Prix">Sommes </label>
                 <small>Entrer une somme de type chiffre:15899</small>
               </div>
             <div class="card-action">
               <input class="waves-effect waves-light btn" type="submit" value="valider">
             </div>
           </div>
           </form>
         </div>

<?php   include '../view/footer.php'; ?>
