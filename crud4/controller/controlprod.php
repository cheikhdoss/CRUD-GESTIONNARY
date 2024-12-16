<?php
    require_once('./model/modelprod.php');

    function index(){
       $produits = getAll();
       require_once './view/produit/list.php';
    }

    function remove(){
        $id = $_GET['id'];
        delete($id);
        header('location:index.php?controller=produit');
    }

    function pageAdd(){
        require_once './view/produit/add.php';
    }

    function save(){
        $libelle =$_POST['libelle'];
        $quantite = $_POST['quantite'];
        $prix = $_POST['prix'];
        $idcat = $_POST['categorie'];
        $message = $_POST['message'];
        if (is_numeric($prix)&&$prix>0  && is_numeric($quantite)&&$quantite>0){
        $ok=add($libelle,$quantite,$prix,$idcat,$message);
        if($ok) {
            header('location:index.php?controller=produit&&ajout=true');
    
        } else{
            header('location:index.php?controller=users&&ajout=false');
        }

       }
       
    }

    function getupdate()
    {
        $id = $_GET['id'];
        $prod=pg_fetch_assoc(getallprod($id));
        require_once './view/produit/edit.php';
    }

    function updateprod()
    {
        $id = $_POST['id'];
        $libelle =$_POST['libelle'];
        $quantite = $_POST['quantite'];
        $prix = $_POST['prix'];
        $idcat = $_POST['categorie'];
        $message = $_POST['message'];
        $ok=update($id,$libelle,$quantite,$prix,$idcat,$message);
        if($ok) {
            header('location:index.php?controller=produit&&success=true');
    
        } else{
            header('location:index.php?controller=users&&success=false');
        }

       }
    


?>