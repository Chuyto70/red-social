 
 <style>
    html {
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    text-size-adjust: 100%;
    line-height: 1.4;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Roboto Condensed', sans-serif;
    background: #272727;   
    padding-top: 170px; 
    transition: padding-top 0.5s ease;
}

/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/*==Scroll==*/

.contenedor-scroll::-webkit-scrollbar{
  width: 7px;
  background: rgba(70, 70, 70, 0.393);
}

.contenedor-scroll::-webkit-scrollbar-thumb{
  background: rgba(166, 166, 166, 0.716);
  border-radius: 10px;
  border-right: 2px solid rgba(138, 138, 138, 0.382);
}


.descripcion::-webkit-scrollbar{
  width: 7px;
  background: rgba(70, 70, 70, 0.393);
}

.descripcion::-webkit-scrollbar-thumb{
  background: rgba(166, 166, 166, 0.716);
  border-radius: 10px;
  border-right: 2px solid rgba(138, 138, 138, 0.382);
}
/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

/*==Header y sus movimientos==*/

header{
    left: 0;
    width: 100%;
    height: 110px;
    justify-content: space-between;
    background: black;
    text-align: center;
    position: fixed;
    top: 0;
    overflow: hidden;
    transition: all 0.5s ease;
    z-index: 100;
    margin: 0;
    box-shadow: 0 0 12px rgb(0, 0, 0);
}

header h1{
    font-size: 20px;
    color: white;
    line-height: 60px;
    font-weight: 300;
    transition: all 0.3s ease;
}

header h1 i{
    font-weight: bold;
    text-transform: uppercase;
}

header nav{
    position: absolute;
    bottom: 0;
    height: 50px;
    line-height: 39px;
    width: 100%;
    background: #404040;
    padding: 5px 5%;

}

header nav a{
    color: white;
    display: inline-block;
    padding: 10px 15px;
    line-height: 1;
    text-decoration: none;
    border-radius: 15px;
}


header nav a:hover{
    background: rgba(0, 0, 0, 0.2);
}



body.sticky-header{
    padding-top: 100px;
}

body.sticky-header header{
    height: 55px;
    background: #404040;
}

body.sticky-header header h1{
    transform: scale(0, 0);
}

/*==Buscador==*/
.buscar{
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    left: 84%;
    top: 50%;
    transform: translate(-50%, -50%);
    background: rgb(82, 82, 82);
    padding: 19px;
    height: 5px;
    border-radius: 40px;
}

.buscar_texto{
    border: none;
    background: none;
    outline: none;
    color: rgb(255, 255, 255);
    font-size: 15px;
    float: left;
    line-height: 20px;
}

.boton{
    width: 30px;
    height: 40px;
    text-decoration: none;
    color: rgb(118, 118, 118);
    font-size: 20px;
}
/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

/*==Barra izquierda==*/

.nav {
  position: fixed;
  top: 60px;
  left: -100%;
  height: 100vh;
  padding: 16px 16px 0;
  background: #1c1c1c;
  box-shadow: 5px 0 0 rgba(22, 8, 43, 0.1);
  z-index: 100;
  transition: 0.5s;
  border-right:1px solid black;

}

.nav_container {
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding-bottom: 48px;
  overflow: auto;
  scrollbar-width: none;
}

.nav_container::-webkit-scrollbar {
  display: none;
}


.logo_name {
  display: flex;
}

.logo_name i {
  font-size: 70;
  margin-right: 1px;
  color: #afafaf;
  width: 30px;
  height: 30px;
}

.nav_link {
  display: flex;
  align-items: center;
  color: #fff;
}

.nav_link:hover {
  color: #494949;
}

.nav_icon {
  width: 20px;
  font-size: 19px;
}


.nav_subititle {
  font-size: 16px;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #a5a1aa;
}

.nav_link{
  border-bottom: 1px solid #ccc;
}

/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

/*==Left-Sidebar==*/
.logo-barra img{
  width: 30px;
  height: 30px;
}

.container{
  display: flex;
  justify-content: space-between;
  padding: 13px 5%;
}

.left-sidebar{
  flex-basis: 25%;
  position: sticky;
  top: 32px;
  align-self: flex-start;    
}

.right-sidebar{
  flex-basis: 25%;
  position: sticky;
  top: 70px;
  align-self: flex-start;
  background: #404040;
  padding: 20px;
  border-radius: 4px;
  color: #9c9c9c;
}

.main-content{
  flex-basis: 45%;
}

.imp-links a, .shortcut-links a{
  text-decoration: none;
  display: flex;
  text-align: center;
  margin-bottom: 30px;
  color: white;
  width: fit-content;
}

.imp-links a img{
  width: 20px;
  margin-right: 15px;
}

.imp-links a:last-child{
  color: #757474;
}

.imp-links{
  border-bottom: 1px solid #ccc;
}

.shortcut-links a img{
  width: 25px;
  border-radius: 4px;
  margin-right: 15px;
}

.shortcut-links p{
  margin: 25px 0px;
  color: #aaaaaa;
}


/*==Right-Sidebar==*/

.sidebar-title{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 18px;
  }
  
  .right-sidebar h4{
    font-weight: 600;
    font-size: 16px;
  }
  
  .sidebar-title a{
    text-decoration: none;
    color: #1876f2;
    font-size: 16px;
  }
  
  .event{
    display: flex;
    font-size: 14px;
    margin-bottom: 20px;
  }
  
  .left-event{
    border-radius: 10px;
    height: 65px;
    width: 65px;
    margin-right: 15px;
    padding-top: 10px;
    text-align: center;
    position: relative;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
  }
  
  .event p{
    font-size: 12px;
  }
  
  .event a{
    font-size: 12px;
    text-decoration: none;
    color: #1876f2;
  }
  
  .left-event span{
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: #1876f2;
    color: #fff;
    font-size: 10px;
    padding: 4px 0;
  }
  
  .sidebar-title{
    border-bottom: 1px solid #ccc;
  }
  
  .sidebar-ads{
    width: 100%;
    margin-bottom: 20px;
    border-radius: 4px;
  }


 /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
  
  
/*==Main==*/

.eventos{
    display: flex;
    min-height: 10vh;
    align-items: center;
    justify-content: center;
    padding: 30px 15px;
}

.content{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
    max-width: 1000px;
    margin: auto;
}

.post-img-1{
    background: url(assets/images/home/gatocum.jpg);
    width: 100%;
    height: 200px;
    background-size: cover;
    background-position: center;
    transition: .2s;
}

.post-img-2{
    background: url(assets/images/home/gatocum.jpg);
    width: 100%;
    height: 200px;
    background-size: cover;
    background-position: center;
    transition: .2s;
}

.post-img-3{
    background: url(assets/images/home/meteorito.jpg);
    width: 100%;
    height: 200px;
    background-size: cover;
    background-position: center;
    transition: .2s;
}

.post{
    box-shadow: 0 0 12px rgb(0, 0, 0);
    overflow: hidden;
    transition: .2s;
    height: 470px;
    max-height: 470px;
}

.post:hover{
    transform: translateY(-4px);
    box-shadow: 0 0 30px rgb(0, 0, 0);
}

.post-header{
    width: 100%;
    height: 200px;
    overflow: hidden;
    cursor: pointer;
}

.post:hover .post-img-1,
.post:hover .post-img-2,
.post:hover .post-img-3{
    transform: scale(1.1);
}

.post-body{
    padding: 15px;
    text-align: center;
}

.post-body span{
    display: inline-block;
    color: rgb(255, 255, 255);
    margin-bottom: 10px;
}

.post-body{
    margin-bottom: 15px;
}

.post-body p{
    line-height: 1.5;
    margin-bottom: 20px;
    color: rgb(133, 133, 133);
    word-break: break-word;
    height: 100px;
    max-height: 100%;
    overflow: auto;
}

.post-body h2{
  color: rgb(162, 162, 162);
}

.post-body .post-link{
    display: block;
    text-decoration: none;
    padding: 10px;
    background:  #4b4b4b;
    color: white;
    width: 50%;
    margin: auto;
    border-radius: 10px;
    box-shadow: 1px 2px 6px 1px rgba(0, 0, 0, 0.475);
    transition: .2s;
  
    bottom: 30px;
    left: calc(50% - 80px);
}

.post-body .post-link:hover{
    background:  #6f6f6f;
    box-shadow: 1px 2px 6px 1px rgba(0, 0, 0, 0.27);
    transform: translateY(-2px);
}

@media (max-width:840px){
    .content{
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width:450px){
    .content{
        grid-template-columns: repeat(1, 1fr);
    }
}

/*==contenedor-anucnio==*/

.container-evento-h{
  width: 100%;
  height: 400px;
  top: -23px;
  background-image: linear-gradient(
      0deg,
      rgba(0,0,0,0.5),
      rgba(0,0,0,0.5)
  ) 
  , url("assets/images/home/mundo-conectado.png");background-repeat: no-repeat;/*============================Aqui se pone el contenedor del medio, donde dice "NAVHER"========================*/

  background-size: cover;
  background-position: center center;
  animation: movimiento 10s infinite linear alternate;
  position: relative;
}

@keyframes movimiento{
  from{
      background-position: bottom left;
  }to{
      background-position: top right;
  }
}

.capa-gradient{
  width: 100%;
  height: 100%;
  position: absolute;
  background: -webkit-linear-gradient(left, black, rgb(74, 74, 95));
  opacity: 0.5;
}

.container-details{
  width: 100%;
  max-width: 1200px;
  position: relative;
  margin: auto;
}

.details{
  width: 100%;
  max-width: 500px;
  position: relative;
  top: 20px;
  color: white;
  margin-left: 10px;
}

.details h1{
  font-size: 40px;
  font-weight: 100;
  margin-left: 10px;
}

.details p{
  margin-top: 10px;
  font-size: 20px;
  font-weight: 100;
  margin-left: 10px;
}

.details button{
  padding: 10px 20px;
  font-size: 16px;
  background: none;
  border-style: none;
  border: 1px solid white;
  color: white;
  margin-top: 20px;
  transition: 300ms;
  cursor: pointer;
  margin-left: 10px;
}

.details button:hover{
  background: white;
  color: black;
}

@media screen and (max-width: 500px){
  .details p{
      font-size: 18px;
  }
}






  
/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/


/*====Barra derecha=====*/


.sidebar-2{
  border-left:1px solid black;

  right: 0%;
  width: 75px;
  height: 100vh;
  background-color: #1c1c1c;
  color: #ffffff;
  display: flex;
  flex-direction: column;
  align-items: center;
  z-index: 100;
  top: 60px;
  position: fixed;

}


.brand,.list-item-text{
  display: none;
}


.sidebar-top,
.sidebar-center{
display: flex;
align-items: center;
width: 80%;
border-bottom: 1px solid #4b4b4b;
padding: 10px 0;
margin-bottom: 10px;
}

.sidebar-center {
padding: 0;
}

.sidebar-bottom {
justify-content: center;
border: none;
}

.logoL {
font-size: 35px;
margin-right: 10px;
cursor: pointer;
padding-left: 10px;
}

.brand {
font-weight: bold;
cursor: pointer;
}

.list {
list-style: none;
padding: 0;
width: 100%;
}

.list-item {
margin-bottom: 5px;
font-size: 14px;
font-weight: 500;
cursor: pointer;
padding: 20px;
border-radius: 10px;
}

.sidebar-2 a{
  text-decoration: none;
  color: white;
}

.list-item-icon{
  width: 10px;
  font-size: 15px;
}

.list-item:hover,
.list-item.active{
  background-color: rgba(0, 0, 0, 0.2);
}



/*==Footer==*/

.footer{
    text-align: center;
    color: rgb(122, 121, 121);
    padding: 10px 0 20px;
    font-size: 13px;
  }
  
  
  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
  
  
/*==Media de Barra1==*/



@media screen and (min-width:768px) {
    body {
      padding: 110px 0px 0 0px;
    }
  
  
  
  
    .nav {
      left: 0;
      padding: 19px 27px 0;
      width: 75px;
    }
  
    main {
      padding-top: 50px;
      padding-left: 0;
    }
  
    .nav:hover {
      width: 265px;
    }
  
    .nav .nav_subititle,
    .nav .logo_name,
    .nav .nav_dropdown-icon,
    .nav .navtop .nav_link:nth-child(4),
    .nav .subscribe-contain {
      opacity: 0;
      transition: 0.5s;
    }
  
    .nav:hover .nav_subititle,
    .nav:hover .logo_name,
    .nav:hover .nav_dropdown-icon,
    .nav:hover .navtop .nav_link:nth-child(4),
    .nav:hover .subscribe-contain {
      opacity: 1;
    }
  
    .grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 20px;
    }
  }
  
  @media screen and (max-width:420px) {
    header .search {
      width: 70%;
    }
  
    header .none,
    header .user {
      display: none;
    }
  
    .grid {
      grid-template-columns: repeat(1, 1fr);
    }
  
    main {
      padding-top: 20px;
      padding-left: 50px;
    }
  }
  
  @media screen and (min-width:1080px) {
    .grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-gap: 20px;
    }
  }
    #primera_nav{
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 100;
}
#segunda_nav{
    position: fixed;
    top: 41px;
    width: 100%;
    z-index: 100;
}
.contenedor_buscador_mensajes{
  display: flex;
}
 </style>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pefil NavHer</title>
  <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" integrity="sha384-3B6NwesSXE7YJlcLI9RpRqGf2p/EgVH8BgoKTaUrmKNDkHPStTQ3EyoYjCGXaOTS" crossorigin="anonymous" />
  <link rel="icon" href="assets/images/oficial_logo.png">
  <link rel="stylesheet" href="perfil.css">
</head>

<body>
  <?php $user = getUser($_SESSION['userdata']['id']);?>
 <section  class="nav position-fixed" id="navbar" style="top: 95px !important;">
    <a
    style="width: 100%;"
     href="#" class="nav_link nav_logo ">
      <i class="fa-solid fa-bars nav_icon"></i>
      <span class="logo_name">
        <i class="logo-barra"><img style="object-fit: cover;" src="assets/images/oficial_logo.png" alt=""></i>
        NavHer
      </span>
    </a>
    <nav class="nav_container">
      <div class="left-sidebar">
        <div class="imp-links">
         <!-- <a href="#"><img src="assets/images/home/play.png"> Videos</a>-->

          <a href="#"><img style="object-fit: cover;" src="assets/images/oficial_logo.png"> Noticias</a>

          <!-- <a href="#"><img src="assets/images/home/stream.png"> Stream</a>-->

          <a href="#"><img src="assets/images/home/amigos.png"> Amigos</a>

          <!-- <a href="game.html"><img src="assets/images/home/juegos.png"> Games</a>-->

          <a href="#">Mas Categorias</a>
        </div>
        <div class="shortcut-links">
         <!-- <p>Conectados</p>-->

         <!--  <a href="#"><img src="assets/images/home/tiktok.png"> TikTok </a>

          <a href="#"><img src="assets/images/home/youtube.png"> Youtube </a>

          <a href="#"><img src="assets/images/home/face.png"> Facebook </a>

          <a href="#"><img src="assets/images/home/twitter.png"> Twitter </a>-->
          <p>Informacion</p>
          <a href="?fundadores"><img style="object-fit: cover;" src="assets/images/oficial_logo.png"> Fundadores </a>
        </div>

      </div>
    </nav>
  </section>
<div style="display:flex; justify-content: center;" class="contenedor_principal">
    <div style="    display: flex;
    flex-direction: column;
    position: absolute;
    width: calc(100% - 150px    );
    ;
    ">
    <div class="container-evento-h mt-4">
        <div class="capa-gradient"></div>
        <div class="container-details" style="margin-top: 91px;">
        <div class="details">
            <h1>NavHer</h1>
            <p>Eventos #1</p>
            <button>Ver</button>
      </div>
    </div>

  </div>
      
    <section class="eventos">
    <div class="content">

      <?php 
        $eventos = getEventos();
         if($eventos){

         
        foreach($eventos as $evento){

      ?>

        <article class="post position-relative">
            <div class="post-header">
                <img 
                  style="width: 100%;
                  height: 100%;
                  object-fit: cover;" 
                  src="assets/images/eventosImages/<?= $evento['imagen'] ?>" alt="">
            </div>
            <div class="post-body">
                <span>
                  <?php
                  $fecha = date_create($evento['fecha_evento']);

                  $fecha_en = date("j F Y", $fecha->getTimestamp());

                  $meses = array(
                  'January' => 'de Enero',
                  'February' => 'de Febrero',
                  'March' => 'de Marzo',
                  'April' => 'de Abril',
                  'May' => 'de Mayo',
                  'June' => 'de Junio',
                  'July' => 'de Julio',
                  'August' => 'de Agosto',
                  'September' => 'de Septiembre',
                  'October' => 'de Octubre',
                  'November' => 'de Noviembre',
                  'December' => 'de Diciembre'
                  );
                  $fecha_es = str_replace(array_keys($meses), array_values($meses), $fecha_en);
                  echo $fecha_es;

                  ?>
                  </span>
                <h2><?= $evento['nombre'] ?></h2>
                <p class="descripcion"> <?= $evento['descripcion'] ?> </p>
                <a href="#" class="post-link">Leer Mas...</a>
            </div>
        </article>

       <?php }} else{?>
        
          <h1 style="color: white !important;">Aun no hay eventos</h1>
        <?php } ?>




        <!-- Agregar evento -->
        <?php
        if($user['user_rol'] == 'admin'){

        
         ?>
        <article role="button" class="post position-relative d-flex justify-content-center align-items-center" style="height: 5 00px;" data-bs-toggle="modal" data-bs-target="#agregarEvento">
            <i style="font-size: 240px; color:grey;" class="bi bi-plus"></i>
        </article>

        <?php }?>

    </div>
 </section>

</div>

</div>

<div class="sidebar-2 position-fixed" style="top: 95px;" >

    <a 
    href="/facebook99">
      <div class="sidebar-top">
        <i class="logoL fa-solid fa-house"> </i>
        <span class="brand">Inicio</span>
    </a>
  </div>
  </a>

  <div class="sidebar-center">
    <ul class="list">

      <a href="?u=<?= $_SESSION['userdata']['username'] ?>">
        <li class="list-item">
          <i class="list-item-icon fa-solid fa-user"></i>
          <span class="list-item-text">Perfil</span>
        </li>
      </a>

      <a href="?eventos=1">
        <li class="list-item">
          <i class="list-item-icon fa-solid fa-calendar"></i>
          <span class="list-item-text">envetos</span>
        </li>
      </a>

      <a href="#">
        <li class="list-item">
          <i class="list-item-icon fa-solid fa-user-group"></i>
          <span class="list-item-text">Amigos</span>
        </li>
      </a>

      <!-- <a href="#">
        <li class="list-item">
          <i class="list-item-icon fa-solid fa-bomb"></i>
          <span class="list-item-text">P</span>
        </li>
      </a> -->


    </ul>
  </div>
  </div>

       
