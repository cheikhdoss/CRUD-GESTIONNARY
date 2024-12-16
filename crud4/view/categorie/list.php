


<link rel="stylesheet" href="stylenav.css">
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
    color: rgba(255, 255, 255, 0.658);
}

.btn2{
    display: flex;
    margin-bottom: 300px;
    width: 90px;
    background-color: transparent;
    height: 40px;
    transform: translate(120px,-120px);
    text-align: center;
    border-radius: 15px;
    outline: none;
    backdrop-filter: blur(10px);
    
}

.btn2 a{
width: 100px;
height: 10px;
justify-content: center;
text-align: center;
text-decoration: solid;
    color: rgba(255, 255, 255, 0.721);
}

.btn2:hover{
    margin-top: 20px;
    background-color: brown;
    transition: 1s;
    }






</style>
<nav class="navbar">
    <div class="navdiv">
<div class="logo">Le gestionnaire</div>
<ul>
<button><li><a href="?controller=categorie&&action=addcat">ajouter categorie</a></li></button>
<li><a href="?controller=produit">liste produit</a></li>
<li><a href="?controller=users">liste des utilisateur</a></li>
</ul>
    </div>
</nav>



<table class="table">
<thead class="heat">
    <tr>
        <th>ID</th>
        <th>Libelle</th>
        <th>OPERATION</th>
    </tr>
    </thead>
    <?php while( $row = pg_fetch_assoc($categories)){ ?>
        <section class="sec">
        <tr class = "roro">
            <td><?= $row['id'] ?></td>
            <td><?= $row['nomcat'] ?></td>
            <td>
                <button class="btnz"><a href="?controller=categorie&&action=deletecat&&id=<?= $row['id'] ?>">Delete</a></button>
               <button class= "btn"> <a href="?controller=categorie&&action=editcat&&id=<?= $row['id'] ?>">Update</a></button>
            </td>
        </tr>
        </section>
        
    <?php } ?>    
</table>