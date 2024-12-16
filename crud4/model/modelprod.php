<?php

require_once('./model/conn.php');
//methode pour afficher tout les produits
function getAll(){
    global $connexion;
    $sql ="SELECT p.*,c.nomcat FROM produit p LEFT JOIN categorie c on p.idcat=c.id";
    return pg_query($connexion,$sql);
}
//methode pour  afficher les informations du produit par id correspondant
function getallprod($id)
{
    global $connexion;
    $sql = "SELECT * FROM produit WHERE id = $id ";
    return pg_query($connexion,$sql);
}
//methode pour supprimer un prodit par id correspondant
function delete($id){
    global $connexion;
    $sql ="DELETE FROM produit WHERE id =$id";
   return pg_query($connexion,$sql);
}
//methode pour ajouter un produit
function add($libelle,$quantite,$prix,$idcat,$message){
    global $connexion;
    $sql ="INSERT INTO produit (libelle,quantite,prix,idcat,commentaire) values
     ('$libelle',$quantite,$prix,$idcat,'$message')";
   return pg_query($connexion,$sql);
}
//methode pour mettre a jour le produit par id correspondant
function update($id,$libelle,$quantite,$prix,$idcat,$message){
    global $connexion;
    $sql="UPDATE produit SET libelle='$libelle',quantite=$quantite,prix=$prix,idcat=$idcat,commentaire='$message' WHERE id=$id ";
   return pg_query($connexion,$sql);
}



?>


