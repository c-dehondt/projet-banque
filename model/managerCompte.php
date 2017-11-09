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
        'numeroDeCompte'=>$addCompte->getNumeroDeCompte(),

        ));
      }

      public function updateMoney($solde, $numeroDeCompte)
      {
        $request = $this->bdd->prepare('UPDATE compte SET solde=:solde WHERE numeroDeCompte=:numeroDeCompte');
        $request->execute(array(
          'solde'=> $solde->getSolde(),
          'numeroDeCompte'=> $numeroDeCompte
        ));
      }
}
?>
