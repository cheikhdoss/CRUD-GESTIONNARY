<?php

 require_once('./controller/controlcat.php') ;
 
?>

    <style>
body{
    background-color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: url(img.png);
    background-position: center;
    background-size: cover;
    padding-right: 50px;
}
form{
   background-color: transparent;
   border: 2px solid rgb(255, 255, 255,0.2 );
    padding: 30px;
    padding-left:30px;
    backdrop-filter: blur(10px);
    width: 400px;
}
h1{
    margin-bottom: 40px;
    margin-right: 0;
    text-align: center;
    font-size: 30px;
    color: white;
    text-decoration: overline;
}
input {
    background-color:;
    border-radius: 10px;
    height: 40px;
    padding: 10px;
    
    width: 98%;
}
input::placeholder{
    color: gray;
    font-weight: 200;
}



.sub{
    width: 100%;
    padding: 20px;
    border-radius: 15px;
    outline: none;
    font-weight: bold;
    cursor:  pointer;
    color: rgba(0, 0, 0, 0.644);
    border: 2px solid transparent;
    transition: 1s;
}
.sub:hover{
background-color: green;
transition: 0.5s;
margin-bottom: 15px;
}
.cate{
    width: 88%;
    padding: 15px;
    border-radius: 15px;
    outline: none;
    font-weight: bold;
    cursor:  pointer;
    color: rgba(0, 0, 0, 0.644);
    border: 2px solid transparent;
    transition: 1s;
}
.cate:hover{
background-color: green;
transition: 0.5s;
}



</style>

<div class="form"> 
<form action="?controller=produit&&action=update" method="POST">
<input type="hidden" name="id" value="<?= $prod['id']; ?>">
<label for=""></label>
    <input type="text" name="libelle" value="<?=$prod['libelle']?>"><br>
    <br>
    <label for=""></label>
    <input type="text" name="quantite" value="<?=$prod['quantite']?>"><br>
    <br>
    <label for=""></label>
    <input type="text" name="prix" value="<?=$prod['prix']?>"><br>
    
    <br>
    <label for=""></label>
    <input type="text"name="message" value="<?=$prod['commentaire']?>"><br>
    <br>

    <select name="categorie" class="cate" id="">
        
        <?php 
        
            while ($row = pg_fetch_assoc($categories)) { ?>
            <option value="<?= $row['id']; ?>">
                    <?= $row['nomcat']; ?>
                </option>
            <?php }
        
        ?>
    </select>
    <br><br>
    <button class="sub"type="submit">Ajouter</button>
</form>
</div>