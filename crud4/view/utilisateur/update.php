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
<form action="?controller=users&&action=updateusers" method="POST">
    <input type="hidden" name="id"  value="<?=$us['id']?>" >
    <label for=""></label>
    <input type="text" name="nom"  value="<?=$us['nom']?>"><br>
    <br>
    <label for=""></label>
    <input type="text" name="prenom"  value="<?=$us['prenom']?>"><br>
    <br>
    <label for=""></label>
    <input type="email" name="email" value="<?=$us['email']?>"><br>
    <br>
    <label for=""></label>
    <input type="text" name="password"  value="<?=$us['pass']?>"><br>
    <br>
    <br>
    <button class="sub" type="submit">Ajouter</button>
</form>
</div>
