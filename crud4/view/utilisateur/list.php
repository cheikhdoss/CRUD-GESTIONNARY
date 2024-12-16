<?php
//require_once('./controller/controlprod.php');

?>

<style>
    .logo{
font-size: 30px; color:white; font-weight: bold; text-transform: uppercase; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; ?>
}
    *{
    text-decoration: none;
}
    .navbar{
 font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;padding-left: 20px;
padding-right: 90px;    
width:1279px ;
border: 4px solid rgb(255, 255, 255,0.2 );
background-color: transparent;
backdrop-filter: blur(2px);
    }
    .navdiv{
    display: flex; justify-content: space-between; align-items: center;
}
li{
    display: inline-block; list-style: none;
}
li a {
    text-decoration:none; color: white; padding: 10px; font: optional;;
}
li button{
        background-color: rgba(0, 0, 0, 0.34); border: none; cursor: pointer; color: white; font-size: 20px;
        padding: auto; margin: 5px;
    }
li button:hover{
background-color: rgb(229, 239, 232); color: #141e54; font-size: 25px; border-radius: 10px; transition-duration: 0.5s;
}
.navbar a:hover{
    color:rgb(0, 0, 0); transition:2s;padding-top:5px;
        }






*{
    margin: 0;
    padding: 0px;
    box-sizing: border-box;
}


body{
    background-color: brown;
    width: 100%;

    height: 100vh;
    background: url(img2.jpg);
    background-position: center;
    background-size: cover;
    padding-right: 50px;
   
}

table {
    background-color: transparent;
   border: 2px solid rgb(255, 255, 255,0.2 );
    padding: 10px;
    background-color: ;
    backdrop-filter: blur(5px);
    height: 200px;
    justify-content: center;
    align-items: center ;

    width: 1000px;
    margin-left: 130px;
    margin-right: 90px;
    margin-top: 40px;

    margin-bottom: 299px;
}
.heat {
background-color: rgba(0, 0, 0, 0.425);
color: rgb(254, 254, 254);
}
.sec {
    padding-left: 10px;
    justify-content: center;
    text-align: center;
    color: rgba(255, 255, 255, 0.441);
    background-color: black;
}
.roro{
    padding-left: 100px;
    text-align: center;
    background-color: rgba(255, 255, 255, 0.374);
}

.btn{
    color: rgb(50, 0, 249);
    background-color: rgba(0, 30, 255, 0.242);
    outline: none;
    border-radius: 10%;
    border: 2px solid transparent;
    font-weight: bold;
    cursor:  pointer;
}
.btnz{
    color: rgb(50, 0, 249);
    background-color: rgba(0, 30, 255, 0.242);
    outline: none;
    border-radius: 10%;
    border: 2px solid transparent;
    font-weight: bold;
    cursor:  pointer;
}

.btnz:hover{
    background-color: transparent;
    transition: 1s;
    margin-bottom: 15px;
    height: 30px;
    background-color: rgba(180, 11, 11, 0.619);
    
}
.btnz a{
    outline: none;
    text-decoration: solid;
    color: rgba(255, 255, 255, 0.658);
}
.btn:hover{
    background-color: transparent;
    transition: 1s;
    margin-bottom: 15px;
    height: 30px;
    background-color: rgba(61, 244, 0, 0.776);
    
    }
.btn a{
    outline: none;
    text-decoration: solid;
    color: rgba(0, 0, 0, 0.66);
}





</style>





<table class="table">
<nav class="navbar">
    <div class="navdiv">
<div class="logo">Le gestionnaire</div>
<ul>
<button><li><a href="?controller=users&&action=add">AJOUTER UN UTILISATEUR</a></li></button>
<li><a href="?controller=categorie">list des categorie</a></li>
<li><a href="?controller=produit">liste les produit</a></li>
</ul>
    </div>
</nav>

<thead class="heat">
    <tr>
        <th>ID</th>
        <th>nom</th>
        <th>prenom</th>
        <th>email</th>
        <th>mot de passe</th>
        <th>OPERATION</th>
         
    </tr>
    </thead>
    <?php while( $row = pg_fetch_assoc($users)){ ?>
        <section class="sec">
        <tr class="roro">
            <td><?= $row['id'] ?></td>
            <td><?= $row['nom'] ?></td>
            <td><?= $row['prenom'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['pass'] ?></td>
            <td>
                <button class="btnz"><a href="?controller=users&&action=delete&&id=<?= $row['id'] ?>">Delete</a></button>
                <button class="btn"><a href="?controller=users&&action=updatepage&&id=<?= $row['id'] ?>">Update</a></button>
            </td>
        </tr>
        </section>
    <?php } ?>    
</table>