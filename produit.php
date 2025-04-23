<?php
class Produit{
    private string $nom;
    private $prix;
    private $quantite;

    public function __construct($nom,$quantite,$prix) {
        $this->prix = $prix;
        $this->nom = $nom;
        $this->quantite = $quantite;
    }
    
    public function afficheInfos(){
        echo "le nom du produit est: $this->nom"."<br>"."la quantite est: $this->quantite"."<br>"."le prix est de: $this->prix"."<br>";
    }

    public function getNom(){
        return $this->nom;
    }
    
    public function getQuantite(){
        return $this->quantite;
    }
    
    public function getPrix(){
        return  $this->prix;
    }

    public function setNom($name){
        $this->nom=$name;
    }
    public function setQte($qte){
        $this->quantite=$qte;
    }
    public function setPrix($prx){
        $this->prix=$prx;
    }

}
$produit = new Produit("megane",105,3000);
echo $produit->getPrix(); echo "<br>";
$produit->afficheInfos();

echo $produit->getPrix(); echo "<br>";

// echo"----------------------Affichage le résultat de SET--------------". "<br>";

// echo "Le nouveau prix est: ". $produit->setPrix(156000)." <br>";
// echo "Le nouveau nom est: ". $produit->setNom("Golf")." <br>";
// echo "La quantité maintenant est : ". $produit->setQte(6)." <br>";
echo"-------------- Get ------------------"." <br>";
echo "Le prix est de: ".$produit->getPrix(); echo "<br>";
echo "Le produit: ".$produit->getNom(); echo "<br>";
echo "La quantité: ".$produit->getQuantite(); echo "<br>";

echo"-----------------------exo affichage carte de visite---------------"."<br>";

class Client{
    private string $prenom;
    private string $nom;
    private string $email;

    public function __construct($nom,$prenom,$email){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
    }


    public function setNom($name){
        $this->nom=$name;
    }

    public function setPrenom($prnm){
        $this->prenom=$prnm;
    }

    public function setEmail($email){
        $this->nom=$email;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getEmail(){
        return $this->email;
    }

    public function afficherCarteClient(){
        echo "Le nom du client est : ".$this->getNom()." <br>".
        "le prenom du client est: ". $this->getPrenom()."<br>". 
        "L'adresse mail de ".$this->getNom()." est: ".$this->getEmail()."<br>";
    }
}

$client = new Client("Amine","HAMIDI","amine060692@gmail.com");
$client->afficherCarteClient();


?>