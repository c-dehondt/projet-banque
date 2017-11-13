<?php
class managerCompte
{
    protected $bdd;


    public function __construct($bdd)
    {
        $this->setBdd($bdd);

      }

      public function setBdd($bdd)
      {
        $this->bdd=$bdd;
      }

      public function getCompte()
      {

          $request= $this->bdd->query('SELECT * FROM compte');
          $compte= $request->fetchAll(PDO::FETCH_ASSOC);
          foreach ($compte as $key => $value) {
            $compte[$key]= new compte($value);
          }
          return $compte;
      }

      // add an account
      public function addCompte(compte $addCompte)
      {
        $request = $this->bdd->prepare('INSERT INTO compte (Nom, solde, numeroDeCompte, date)
                                                      VALUES(:Nom, :solde, :numeroDeCompte, NOW())');
        // $request->bindValue(':Nom', $addcompte->getnom());
        // $request->bindValue(':solde', $addcompte->getsolde());
        // $request->bindValue(':numeroDeCompte', $addcompte->getnumeroDeCompte());
        $request->execute(array(
        'Nom'=>$addCompte->getNom(),
        'solde'=>$addCompte->getSolde(),
        'numeroDeCompte'=>$addCompte->getNumeroDeCompte()
        ));
      }

      public function getIdCompte(compte $compte)
      {
          $request = $this->bdd->prepare('SELECT * FROM compte WHERE idCompte = :idCompte');
          $request->execute(array('idCompte' => $compte->getIdCompte()));
          $donnees = $request->fetch(PDO::FETCH_ASSOC);
          $compte->hydrate($donnees);
          return $compte;
      }

      // delete an account
      public function deleteCompte($idCompte)
      {
        $request=$this->bdd->prepare('DELETE FROM compte WHERE idCompte = :idCompte');
        $request->execute(array('idCompte'=> $idCompte));
      }



      // updateMoneys
      public function addMoney(compte $solde)
      {
        $request = $this->bdd->prepare('UPDATE compte SET solde=:solde WHERE idCompte=:idCompte');
        $request->execute(array(
          'solde'=> $addsolde->getSolde(),
          'idCompte'=> $addsolde->getIdCompte()
        ));
      }

      public function updadeMoney(compte $solde)
      {
        $request = $this->bdd->prepare('UPDATE compte SET solde=:solde WHERE idCompte=:idCompte');
        $request->execute(array(
          'solde'=> $solde->getSolde(),
          'idCompte'=> $solde->getIdCompte()
        ));
      }
}
?>
