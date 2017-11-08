<?php
 /**
  *
  */
 class client
 {
   protected $idCompte;
   protected $idUser;
   protected $numeroDeCompte;
   protected $date;

   function __construct($comptes)
   {
     $this->hydrate($comptes);
   }

   public function hydrate(array $comptes)
   {
       foreach ($comptes as $key => $compte) {
           $method = 'set'.ucfirst($key);
           if (method_exists($this, $method)) {
               $this->$method($compte);
           }
       }
   }

  //  *******************setter*******************
   public function setIdCompte($idCompte)
   {
     $idCompte = (int) $idCompte;

     if ($idVCompte > 0) {
         $this->idVCompte = $idVCompte;
     }
   }

   public function setIdUser($idUser)
   {
     $idUser = (int) $idUser;
     if($idUser > 0){
     $this->idUser= $idUser;
    }
   }

   public function setNumeroDeCompte($numeroDeCompte)
   {
     $number = '0123456789';
     $letter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

      $numeroDeCompte = '';
     for ($i = 0; $i < 10; $i++) {
         $numeroDeCompte .= $number[rand(0, strlen($number))];
     }
         $numeroDeCompte .= $letter[rand(0, strlen($letter))];

         $this->idnumeroDeCompte = $numeroDeCompte;
   }

   public function setDate($date)
   {
     $this->date = $date;
   }

  //  *********************getter******************
  public function getIdCompte()
  {
    return $this->$idCompte;
  }

  public function getIdUser()
  {
    return $this->$idUser;
  }

  public function getNumeroDeCompte()
  {
      return $this->$numeroDeCompte;
  }

  public function getDate()
  {
    return $this->$date;
  }
 }

 ?>
