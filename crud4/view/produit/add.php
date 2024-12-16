<?php

require_once('./controller/controlcat.php') ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
    padding: 60px;
    padding-left:30px;
    backdrop-filter: blur(10px);
    width: 400px;
}
h1{
    margin-bottom: 270px;
    margin-right: 0;
    text-align: center;
    font-size: 30px;
    color: white;
    text-decoration: overline;
}
input {
    background-color:;
    border-radius: 10px;
    height: 20px;
    padding: 10px;
    
    width: 88%;
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

<body>

<div class="form">  
<form action="?controller=produit&&action=save" method="POST">
    <label for=""></label>
    <input type="text" name="libelle" placeholder="Libelle"class="form-control"required><br>
    <br>
    <label for=""></label>
    <input type="number" name="quantite"  placeholder="Quantite"class="form-control"required><br>
    <br>
    <label for=""></label>
    <input type="number" name="prix"  placeholder="Prix Unitaire"class="form-control"required><br>
    <br>
    
    <select name="categorie" id=""class="cate"required>
        <option value="" disabled selected>Veuillez choisir une categorie</option>
        <?php 
        
            while ($row = pg_fetch_assoc($categories)) { ?>
            <option value="<?= $row['id']; ?>">
                    <?= $row['nomcat']; ?>
                </option>
            <?php }
        
        ?>
    </select>
    <br>
    <br>
    <label for=""></label>
    <input type="text"class="form-control" placeholder="Description"name="message"><br>
    <br>
    <button type="submit"class="sub">Ajouter</button>
</form>
</div> 

</body>
</html>