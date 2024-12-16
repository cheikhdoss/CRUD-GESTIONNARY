<?php

require_once('./model/conn.php');
//methode chargement categorie
function getallcat(){
    global $connexion;
    $sql ="SELECT * FROM categorie";
    return pg_query($connexion,$sql);
}
//methode pour supprimer categorie
function deletecat($id){
    global $connexion;
    $sql ="DELETE FROM categorie WHERE id =$id";
   return pg_query($connexion,$sql);
}
//methode pour ajouter categorie
function addcat($libelle){
    global $connexion;
    $sql ="INSERT INTO categorie (nomcat) values
     ('$libelle')";
   return pg_query($connexion,$sql);
}
//methode pour changer categorie
function updatecategoriecat($id,$libelle){
    global $connexion;
    $sql ="UPDATE categorie SET nomcat='$libelle' where id=$id";
   return pg_query($connexion,$sql);
}
//methode selectionner id categorie pour la mise à jour
function getidcat($id){
    global $connexion;
    $sql ="SELECT * FROM categorie where id = $id";
    return pg_query($connexion,$sql);
}



?>


