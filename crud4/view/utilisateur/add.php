<?php

//require_once('./controller/controlcat.php') ;

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
<form action="?controller=users&&action=saveusers" method="POST">
    <h1>gestionnaire des users</h1>
    <label for=""></label>
    <input type="text" placeholder="nom" class="form-control"name="nom"required><br>
    <br>
    <label for=""></label>
    <input type="text" placeholder="prenom"name="prenom"class="form-control"required><br>
    <br>
    <label for=""></label>
    <input type="email" name="email" placeholder="email"class="form-control"required><br>
    <br>
    <label for=""></label>
    <input type="password" placeholder="password"name="password" class="form-control"required><br>
    <br>
    <br>
    <button type="submit"class="sub">Ajouter</button>
</form>
</div>
