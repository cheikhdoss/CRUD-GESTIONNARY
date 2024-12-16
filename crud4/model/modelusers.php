<?php
require_once('./model/conn.php');
//methode pour afficher les utilisateur

function getallusers()
{
    global $connexion;
$sql = "SELECT * FROM users";
return pg_query($connexion,$sql);


}
//methode pour Ajouter les utilisateur

function addusers($nom,$prenom,$email,$password)
{
global $connexion;
$sql = "INSERT INTO users (nom,prenom,email,pass)
VALUES ('$nom','$prenom','$email','$password')";
return pg_query($connexion,$sql);

}
//methode pour supprimer les utilisateurs avec id

function deleteusers($id)
{
    global $connexion;
    $sql = "DELETE FROM users WHERE id =$id";
return pg_query($connexion,$sql);

}
//methode pour recupeerer les informations utilisateurs avec id
function getbyid($id)
{
    global $connexion;
    $sql = "SELECT * FROM users WHERE id =$id";
    return pg_query($connexion,$sql);
}
// methode pour modifier les utilisateurs avec id

function updateusers($id,$name,$prenom,$email,$password)
{
    global $connexion;
    $sql = "UPDATE users SET nom ='$name',prenom ='$prenom',email ='$email',pass ='$password' WHERE id = $id";
    return pg_query($connexion,$sql);
}

?>