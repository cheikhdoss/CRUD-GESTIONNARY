<?php
require_once('./model/modelusers.php');


function indexusers(){
$users=getallusers();
require_once './view/utilisateur/list.php';

}
function listusers()
{
    require_once './view/utilisateur/add.php';

}

function saveusers()
{
    $nom =$_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $ok=addusers($nom,$prenom,$email,$password);
    if($ok) {
        header('location:index.php?controller=users&&ajout=true');

    } else{
        header('location:index.php?controller=users&&ajout=false');
    }
    
}

function deleteus()
      {
          $id = $_GET['id'];
          deleteusers($id);
          header('location:index.php?controller=users');;
      }
      function updatepage()
      {
        $id= $_GET['id'];
        $us = pg_fetch_assoc(getbyid($id));

        require_once('./view/utilisateur/update.php');
      
      }
      function updateus()
      {
        $id =$_POST['id'];
        $nom =$_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
       $ok= updateusers($id, $nom, $prenom, $email, $password);
       if($ok) {
        header('location:index.php?controller=users&&success=true');

    } else{
        header('location:index.php?controller=users&&success=false');
    }

      }


?>