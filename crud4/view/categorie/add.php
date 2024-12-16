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
    padding: 2px;
    padding-left:30px;
    backdrop-filter: blur(10px);
    width: 430px;
    height: 310px;
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
    padding-top:30px;
    display: flex;
    justify-content: center;
    transform:translate(10px, -190px);
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
    transform:translate(-14px, -220px);
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
<form action="?controller=categorie&&action=savecat" method="POST">
    <h1>gestion des categorie</h1>
    <label for=""></label>
    <input type="text" placeholder="Libelle" name="libelle" class="form-control"><br>
   <br>

    <button type="submit"class="sub">Ajouter</button>

</form>
</div>