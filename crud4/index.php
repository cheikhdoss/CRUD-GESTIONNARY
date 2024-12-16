<?php
//condition pour que l on puisse acceder a une page meme si on n a pas de controller dans url//
if (!isset($_GET["controller"])) {
    require_once './controller/controlprod.php';
        index();
} else{
    $controller = $_GET['controller'];


//preference du switch car plus flexible et dynamic//
switch ($controller) {
    case 'produit':
        require_once './controller/controlprod.php';
// on affiche une notif de succes en cas d'insertion ou echec//
        if (isset($_GET['success']) && !empty($_GET['success'])) {
            if($_GET['success'] == 'true') {
                echo'<script>alert("la mise a jour reussi");</script>';
            if($_GET['success'] == 'false')
            {
                echo'<script>alert("la mise a jour a echoue");</script>';
            }
            
            }
        }

// on affiche une notif de succes en cas d'insertion ou echec//
        if (isset($_GET['ajout']) && !empty($_GET['ajout'])) {
            if($_GET['ajout'] == 'true') {
                echo'<script>alert("ajouter avec succes");</script>';
            if($_GET['ajout'] == 'false')
            {
                echo'<script>alert("ya erreur quelque part");</script>';
            }
            
            }
        }



        if (isset($_GET['action']) && !empty($_GET['action'])) {
            if ($_GET['action'] == 'add') {
                pageAdd();
            }
            if ($_GET['action'] == 'delete') {
                remove();
            }
            if ($_GET['action'] == 'save') {
                save();
            }
            if ($_GET['action'] == 'edit') {
                getCategorie();
            }
            if ($_GET['action'] == 'maj') {
                getupdate();
            }
            if ($_GET['action'] == 'update') {
                updateprod();
            }
           

        } else {
            index();
        }
        break; 

    case 'categorie':
        require_once './controller/controlcat.php';
       
       // on affiche une notif de succes en cas d'insertion ou echec//
        if (isset($_GET['success']) && !empty($_GET['success'])) {
            if($_GET['success'] == 'true') {
                echo'<script>alert("la mise a jour a reussi");</script>';
            if($_GET['success'] == 'false')
            {
                echo'<script>alert("la mise a jour a echoue");</script>';
            }
            
            }
        }

// on affiche une notif de succes en cas d'insertion ou echec//
        if (isset($_GET['ajout']) && !empty($_GET['ajout'])) {
            if($_GET['ajout'] == 'true') {
                echo'<script>alert("ajouter avec succes");</script>';
            if($_GET['ajout'] == 'false')
            {
                echo'<script>alert("ya erreur quelque part");</script>';
            }
            
            }
        }








        if (isset($_GET['action']) && !empty($_GET['action'])) {

            

            if ($_GET['action'] == 'addcat') {
                pageaddcat();
            }
            if ($_GET['action'] == 'deletecat') {
                removecat();
            }
            if ($_GET['action'] == 'savecat') {
                savecat();
            }
            if ($_GET['action'] == 'editcat') {
                getcategoriecat();
            }
            if ($_GET['action'] == 'updatecat') {
                updatecat();
            }
            if ($_GET['action'] == 'update') {
                updateprod();
            }
        } else {
            indexcat();
        }

        break;

        case 'users':
            require_once './controller/controllerusers.php';
            if (isset($_GET['success']) && !empty($_GET['success'])) {
            if($_GET['success'] == 'true') {
                echo'<script>alert("la mise a jour a reussi");</script>';
            if($_GET['success'] == 'false')
            {
                echo'<script>alert("la mise a jour a echoue");</script>';
            }
            
            }
        }


        if (isset($_GET['ajout']) && !empty($_GET['ajout'])) {
            if($_GET['ajout'] == 'true') {
                echo'<script>alert("ajouter avec succes");</script>';
            if($_GET['ajout'] == 'false')
            {
                echo'<script>alert("ya erreur quelque part");</script>';
            }
            
            }
        }



            
            if (isset($_GET['action']) && !empty($_GET['action'])) {
                if ($_GET['action'] == 'saveusers') {
                    saveusers();
                
                }
                if ($_GET['action'] == 'add') {
                    listusers();
                
                }
                if ($_GET['action'] == 'delete') {
                    deleteus();
                
                }
               
                if ($_GET['action'] == 'updatepage') {
                    updatepage();
                
                }
                if ($_GET['action'] == 'updateusers') {
                    updateus();
                
                }


            }else
            {
                indexusers();
            }
            break;

    default:
    echo"404";
        break;
}
}
?>







<?php

/*
    if($controller == 'produit'){
        require_once './controller/controlprod.php';
        if(isset($_GET['action']) && !empty($_GET['action'])){
            if($_GET['action']=='add'){
                pageAdd();
            }
            
            if($_GET['action']=='delete'){
                remove();
            }
            if($_GET['action']=='save'){
                save();
            }
            if($_GET['action']=='edit'){
                getCategorie();
            }
            if($_GET['action']=='update'){
                update();
            }
        }else{
            index();
        
        }
    
    }else{
        require_once './controller/controlcat.php';
    }

   
   */ 
 
  
?>