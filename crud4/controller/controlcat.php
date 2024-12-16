<?php
    require_once('./model/modelcat.php');
    $categories = getallcat();
    //fonction pour l'affichage de la liste des categories
     function indexcat(){
        $categories = getAllcat();
        require_once './view/categorie/list.php';
     }
//fonction pour la surpression des categories
     function removecat(){
      $id = $_GET['id'];
      deletecat($id);
      header('location:index.php?controller=categorie');
      }
//fonction pour l'ajout de la categorie(afficher la page ajout categorie)
      function pageaddcat(){
         require_once './view/categorie/add.php';
     }
//fonction pour l'ajout de categories
     function savecat(){
      $libelle =$_POST['libelle'];
     $ok= addcat($libelle);
     if($ok) {
      header('location:index.php?controller=categorie&&ajout=true');

  } else{
      header('location:index.php?controller=categorie&&ajout=false');
  }
//fonction pour la modififcation de la categorie qui catch id et avec une fonction recupere 
// les informations de la categories via cette fonction

 }
     

      function getcategoriecat(){
         $id = $_GET['id'];
         $categorie = pg_fetch_assoc(getidcat($id)); 
         require_once './view/categorie/edit.php';
      }
//fonction pour la modification des catgories
      function updatecat(){
         $id = $_POST['id'];
         $libelle = $_POST['libelle'];
         $ok=updatecategoriecat($id,$libelle);
         if($ok) {
            header('location:index.php?controller=categorie&&success=true');
      
        } else{
            header('location:index.php?controller=categorie&&success=false');
        }
      }
      
?>
 

