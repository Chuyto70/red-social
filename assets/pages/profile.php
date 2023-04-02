<style lang="">
  body {
    padding: 0px 0px 0 0px !important;
  }

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }



  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

  /*==Scroll==*/

  .contenedor-scroll::-webkit-scrollbar {
    width: 7px;
    background: rgba(70, 70, 70, 0.393);
  }

  .contenedor-scroll::-webkit-scrollbar-thumb {
    background: rgba(166, 166, 166, 0.716);
    border-radius: 10px;
    border-right: 2px solid rgba(138, 138, 138, 0.382);
  }


  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/


  /*==Header y sus movimientos==*/

  header {
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

  header h1 {
    font-size: 20px;
    color: white;
    line-height: 60px;
    font-weight: 300;
    transition: all 0.3s ease;
  }

  header h1 i {
    font-weight: bold;
    text-transform: uppercase;
  }

  header nav {
    position: absolute;
    bottom: 0;
    height: 50px;
    line-height: 39px;
    width: 100%;
    background: #404040;
    padding: 5px 5%;

  }

  header nav a {
    color: white;
    display: inline-block;
    padding: 10px 15px;
    line-height: 1;
    text-decoration: none;
    border-radius: 15px;
  }


  header nav a:hover {
    background: rgba(0, 0, 0, 0.2);
  }



  body.sticky-header {
    padding-top: 100px;
  }

  body.sticky-header header {
    height: 55px;
    background: #404040;
  }

  body.sticky-header header h1 {
    transform: scale(0, 0);
  }

  /*==Buscador==*/
  .buscar {
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

  .buscar_texto {
    border: none;
    background: none;
    outline: none;
    color: rgb(255, 255, 255);
    font-size: 15px;
    float: left;
    line-height: 20px;
  }

  .boton {
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
    border-right: 1px solid black;

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

  .nav_link {
    border-bottom: 1px solid #ccc;
  }

  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

  /*==Left-Sidebar==*/
  .logo-barra img {
    width: 30px;
    height: 30px;
  }

  .container {
    display: flex;
    justify-content: space-between;
    padding: 13px 5%;
  }

  .left-sidebar {
    flex-basis: 25%;
    position: sticky;
    top: 32px;
    align-self: flex-start;
  }

  .right-sidebar {
    flex-basis: 25%;
    position: sticky;
    top: 70px;
    align-self: flex-start;
    background: #404040;
    padding: 20px;
    border-radius: 4px;
    color: #9c9c9c;
  }

  .main-content {
    flex-basis: 45%;
  }

  .imp-links a,
  .shortcut-links a {
    text-decoration: none;
    display: flex;
    text-align: center;
    margin-bottom: 30px;
    color: white;
    width: fit-content;
  }

  .imp-links a img {
    width: 20px;
    margin-right: 15px;
  }

  .imp-links a:last-child {
    color: #757474;
  }

  .imp-links {
    border-bottom: 1px solid #ccc;
  }

  .shortcut-links a img {
    width: 25px;
    border-radius: 4px;
    margin-right: 15px;
  }

  .shortcut-links p {
    margin: 25px 0px;
    color: #aaaaaa;
  }


  /*==Right-Sidebar==*/

  .sidebar-title {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 18px;
  }

  .right-sidebar h4 {
    font-weight: 600;
    font-size: 16px;
  }

  .sidebar-title a {
    text-decoration: none;
    color: #1876f2;
    font-size: 16px;
  }

  .event {
    display: flex;
    font-size: 14px;
    margin-bottom: 20px;
  }

  .left-event {
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

  .event p {
    font-size: 12px;
  }

  .event a {
    font-size: 12px;
    text-decoration: none;
    color: #1876f2;
  }

  .left-event span {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: #1876f2;
    color: #fff;
    font-size: 10px;
    padding: 4px 0;
  }

  .sidebar-title {
    border-bottom: 1px solid #ccc;
  }

  .sidebar-ads {
    width: 100%;
    margin-bottom: 20px;
    border-radius: 4px;
  }

  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/


  /*====Barra derecha=====*/


  .sidebar-2 {
    border-left: 1px solid black;

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


  .brand,
  .list-item-text {
    display: none;
  }


  .sidebar-top,
  .sidebar-center {
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

  .sidebar-2 a {
    text-decoration: none;
    color: white;
  }

  .list-item-icon {
    width: 10px;
    font-size: 15px;
  }

  .list-item:hover,
  .list-item.active {
    background-color: rgba(0, 0, 0, 0.2);
  }


  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/



  /*==Main perfil==*/


  .perfil-usuario {
    background: linear-gradient(#7a797944, transparent);
    color: rgb(255, 255, 255);
  }

  .perfil-usuario .sombra {
    position: absolute;
    display: block;
    background: linear-gradient(transparent, rgba(0, 0, 0, .5));
    width: 100%;
    height: 50%;
    bottom: 0;
    left: 0;
  }

  .perfil-usuario .portada-perfil,
  .perfil-usuario .sombra {
    border-radius: 0 0 20px 20px;
  }

  .perfil-usuario img {
    width: 100%;
    height: 100%;
  }

  .contenedor-perfil {
    max-width: 1024px;
    margin-left: auto;
    margin-right: auto;

  }

  .perfil-usuario .contenedor-perfil {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 90%;
  }

  .perfil-usuario .portada-perfil {
    display: block;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    height: 20rem;
    margin-bottom: .5rem;
  }

  .perfil-usuario .avatar-perfil {
    display: block;
    width: 230px;
    height: 230px;
    background-color: #D9DCF1;
    position: absolute;
    bottom: -65px;
    left: 4rem;
    border-radius: 50%;
    overflow: hidden;
    border: 8px solid #FFFFFF;
    box-shadow: 0 0 12px 2px rgba(0, 0, 0, .2);

  }

  .perfil-usuario .cambiar-foto {
    position: absolute;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    background-color: rgba(0, 0, 0, .5);
    height: 57%;
    bottom: 0;
    left: 0;
    color: #fff;
    text-decoration: none;
    transform: translateY(50%);
    opacity: 0;
    transition: all ease-in 200ms;
  }

  .perfil-usuario .cambiar-foto i {
    margin-bottom: .5rem;
    font-size: 2rem;
  }

  .perfil-usuario .avatar-perfil:hover .cambiar-foto {
    transform: translateY(0);
    opacity: 1;
  }

  .perfil-usuario .datos-perfil {
    position: absolute;
    display: block;
    width: calc(100% - 230px - 8rem);
    right: 0;
    bottom: 0;
    color: #fff;
    text-shadow: 0 0 5px rgba(0, 0, 0, .2);
    padding-bottom: 1rem;
    padding-right: 1rem;
  }

  .perfil-usuario .titulo-usuario {
    font-size: 2.3rem;
    white-space: nowrap;
    margin-bottom: .5rem;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .perfil-usuario .bio-usuario {
    font-size: 1em;
    margin-bottom: .75rem;
  }

  .perfil-usuario .lista-perfil {
    list-style: none;
  }

  .perfil-usuario .lista-perfil li {
    display: inline-block;
    font-size: 1em;
    margin-right: 1rem;
  }

  .perfil-usuario .opcciones-perfil {
    display: block;
    position: absolute;
    right: 2rem;
    top: 1rem;
  }

  .perfil-usuario .opcciones-perfil button {
    border: 0;
    padding: 8px 20px;
    border-radius: 8px;
    background-color: rgba(0, 0, 0, .5);
    color: #fff;
    cursor: pointer;
  }

  .perfil-usuario .menu-perfil ul {
    display: flex;
    list-style: none;
    margin-left: calc(200px + 8rem);
    width: calc(100% - 200px - 8rem);
  }

  .perfil-usuario .menu-perfil ul li {
    margin-right: 1rem;
  }

  .perfil-usuario .menu-perfil a {
    display: block;
    text-decoration: none;
    color: inherit;
    padding: 10px 10px;
    font-weight: bold;
    border-radius: 8px;
    transition: all ease-in 100ms;
  }

  .perfil-usuario .menu-perfil a:hover {
    background-color: #a5a5a5;
    color: #fff;
  }

  .perfil-usuario .icono-perfil {
    display: none;
    margin-right: .75rem;
  }

  /*==Main-Datos==*/



  .seccion-perfil-usuario .perfil-usuario-footer,
  .seccion-perfil-usuario .perfil-usuario-bio {
    display: flex;
    flex-wrap: wrap;
    padding: 2rem 2rem;
    box-shadow: 0 0 12px rgb(0, 0, 0);
    background-color: rgb(53, 53, 53);
    border-radius: 10px;
    width: 100%;

  }

  .seccion-perfil-usuario .lista-datos {
    width: 50%;
    list-style: none;
  }

  .seccion-perfil-usuario .lista-datos li {
    padding: 10px 0;
  }

  .seccion-perfil-usuario .lista-datos li>.icono {
    margin-right: 1.5rem;
    font-size: 1rem;
    vertical-align: middle;
  }



  /*======main biografica==========*/


  .seccion-perfil-publicacion .perfil-usuario-body .titulo {
    display: block;
    width: 100%;
    font-size: 1.75em;
    margin-bottom: rem;
    text-align: center;

  }

  .seccion-perfil-publicacion .perfil-usuario-body .texto {
    color: #b5b5b5;
    font-size: 0.95em;
  }

  .seccion-perfil-publicacion .perfil-usuario-footer,
  .seccion-perfil-publicacion .perfil-usuario-bio {
    display: flex;
    flex-wrap: wrap;
    padding: 1.5rem 2rem;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.544);
    background-color: rgb(75, 75, 75);
    border-radius: 10px;
    width: 100%;

  }


  /*======main publicacion==========*/

  .container2 {
    display: flex;
    justify-content: center;
    padding: 30px 0%;
    position: relative;
    width: 100%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

  }



  .main-content {
    flex-basis: 100%;
    width: 60%;
  }


  .write-post-container {
    width: 100%;
    background: #404040;
    border-radius: 6px;
    padding: 20px;
    color: rgb(165, 165, 165);
  }

  .user-profile {
    display: flex;
    align-items: center;
  }

  .user-profile img {
    width: 45px;
    border-radius: 50%;
    margin-right: 10px;
  }

  .user-profile p {
    margin-bottom: -5px;
    font-weight: 500;
    color: #fff;
  }

  .user-profile small {
    font-size: 12px;
  }

  .post-input-container {
    padding-left: 55px;
    padding-top: 20px;

  }

  .post-input-container textarea {
    width: 100%;
    border: 0;
    outline: 0;
    border-bottom: 1px solid #ccc;
    background: transparent;
    resize: none;
  }

  .add-post-links {
    display: flex;
    margin-top: 10px;
  }

  .add-post-links a {
    text-decoration: none;
    display: flex;
    align-items: center;
    color: rgb(192, 192, 192);
    margin-right: 30px;
    font-size: 13px;
  }

  .add-post-links a img {
    width: 20px;
    margin-right: 10px;
  }

  .post-container {
    width: 100%;
    background: #404040;
    border-radius: 6px;
    padding: 20px;
    color: #aaaaaa;
    margin: 20px 0;
  }

  .user-profile span {
    font-size: 13px;
    color: #9c9c9c;
  }

  .post-text {
    color: #fff;
    margin: 15px 0;
    font-size: 15px;
  }

  .post-text span {
    color: forestgreen;
    font-weight: 500;
  }

  .post-text a {
    color: #1876f2;
    text-decoration: none;
  }

  .post-img {
    width: 100%;
    border-radius: 4px;
    margin-bottom: 5px;
  }

  .post-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .activity-icons div img {
    width: 18px;
    margin-right: 10px;
  }

  .activity-icons div {
    display: inline-flex;
    align-items: center;
    margin-right: 30px;
  }

  .post-row a {
    color: rgb(201, 198, 198);
  }




  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/




  /*==Footer==*/

  .footer {
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


  /*==Media de perfil==*/


  @media (max-width: 780px) {
    .perfil-usuario .contenedor-perfil {
      width: 100%;
    }

    .perfil-usuario .avatar-perfil {
      left: calc(50% - 115px)
    }

    .perfil-usuario .datos-perfil {
      bottom: 200px;
      left: 0;
      width: 100%;
      padding: 15px;
      text-align: center;
    }

    .perfil-usuario .bio-usuario {
      font-size: 1em;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .perfil-usuario .titulo-usuario {
      font-size: 2.1rem;
    }

    .perfil-usuario .portada-perfil {
      height: 28rem;
    }

    .perfil-usuario .menu-perfil ul {
      flex-direction: column;
    }

    .perfil-usuario .lista-perfil {
      display: block;
    }

    .perfil-usuario .menu-perfil {
      margin-top: 2rem;
    }

    .perfil-usuario .menu-perfil ul {
      display: flex;
      list-style: none;
      margin-left: auto;
      margin-right: auto;
      padding-top: 2.5rem;
      width: 70%;
      background-color: rgb(147, 142, 142);
      border-radius: 12px;
      box-shadow: 0 0 12px 2px rgba(0, 0, 0, .1);
    }

    .perfil-usuario .icono-perfil {
      display: inline-block;
    }

    .seccion-perfil-usuario .lista-datos {
      width: 100%;
    }

  }
</style>


<?php
global $profile;
global $profile_post;
global $user;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pefil NavHer</title>
  <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" integrity="sha384-3B6NwesSXE7YJlcLI9RpRqGf2p/EgVH8BgoKTaUrmKNDkHPStTQ3EyoYjCGXaOTS" crossorigin="anonymous" />
  <link rel="icon" href="imagenes/logo.ico">
  <link rel="stylesheet" href="perfil.css">
</head>

<body>





  <!--    Barra izquierda     -->

  <section class="nav" id="navbar">
    <a href="social.html" class="nav_link nav_logo ">
      <i class="fa-solid fa-bars nav_icon"></i>
      <span class="logo_name">
        <i class="logo-barra"><img src="imagenes/logo.png" alt=""></i>
        NavHer
      </span>
    </a>
    <nav class="nav_container">
      <div class="left-sidebar">
        <div class="imp-links">
          <a href="#"><img src="imagenes/play.png"> Videos</a>

          <a href="#"><img src="imagenes/logo.png"> Noticias</a>

          <a href="#"><img src="imagenes/stream.png"> Stream</a>

          <a href="amigos.html"><img src="imagenes/amigos.png"> Amigos</a>

          <a href="game.html"><img src="imagenes/juegos.png"> Games</a>

          <a href="#">Mas Categorias</a>
        </div>
        <div class="shortcut-links">
          <p>Conectados</p>

          <a href="#"><img src="imagenes/tiktok.png"> TikTok </a>

          <a href="#"><img src="imagenes/youtube.png"> Youtube </a>

          <a href="#"><img src="imagenes/face.png"> Facebook </a>

          <a href="#"><img src="imagenes/twitter.png"> Twitter </a>

          <a href="fundadores.html"><img src="imagenes/logo.png"> Fundadores </a>
        </div>

      </div>
    </nav>
  </section>

  <!--    Main     -->

  <section class="perfil-usuario">
    <div class="contenedor-perfil">
      <div class="portada-perfil" style="background-image: url(imagenes/con.jpeg);">
        <div class="sombra"></div>
        <div class="avatar-perfil">
          <img src="assets/images/profile/<?= $profile['profile_pic'] ?>" alt="Profile pic">
          <a href="#" class="cambiar-foto">
            <i class="fas fa-camera"></i>
            <span>Cambiar foto</span>
          </a>
        </div>
        <div class="datos-perfil">
          <h4 class="titulo-usuario"><?= $profile['first_name'] ?> <?= $profile['last_name'] ?></h4>
          <p class="bio-usuario"><i>INSTITUCION:</i> UAM-1</p>
          <ul class="lista-perfil">
          <?php
if(!checkBS($profile['id'])){
    ?>
            <li><?=count($profile['followers'])?> Seguidores</li>
            <li> <?=count($profile['following'])?> Siguiendo</li>
            <li><?=count($profile_post)?> Publicaciones</li>
            <?php
}
?>

            <li>
              <?php
              if ($user['id'] != $profile['id']) {
              ?>
                <div class="dropdown">
                  <span class="" style="font-size:xx-large" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots"></i> </span>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#chatbox" onclick="popchat(<?= $profile['id'] ?>)"><i class="bi bi-chat-fill"></i> Message</a></li>
                    <li><a class="dropdown-item " href="assets/php/actions.php?block=<?= $profile['id'] ?>&username=<?= $profile['username'] ?>"><i class="bi bi-x-circle-fill"></i> Block</a></li>
                  </ul>
                </div>
              <?php
              }
              ?>
            </li>

          </ul>
        </div>
        <div class="opcciones-perfil">
          <button type="">Cambiar portada</button>
          <button type=""><i class="fas fa-wrench"></i></button>
        </div>
      </div>
      <div class="menu-perfil">
        <ul>
          <li><a href="social.html" title=""><i class="icono-perfil fas fa-bullhorn"></i> Publicaciones</a></li>
          <li><a href="#" title=""><i class="icono-perfil fas fa-info-circle"></i> Informacion</a></li>
          <li><a href="#" title=""><i class="icono-perfil fas fa-grin"></i> Amigos 2</a></li>
          <li><a href="#" title=""><i class="icono-perfil fas fa-camera"></i> Fotos</a></li>
        </ul>
      </div>

      <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-footer">
          <ul class="lista-datos">
            <li><i class="icono fas fa-map-signs"></i>Direccion de usuario:</li>
            <li><i class="icono fas fa-phone-alt"></i>Telefono:</li>
            <li><i class="icono fas fa-briefcase"></i>Trabaja en: CEO de NAVHER, NEZZ, AVADISK</li>
            <li><i class="icono fas fa-building"></i>Cargo: CEO</li>
          </ul>
          <ul class="lista-datos">
            <li><i class="icono fas fa-map-marker-alt"></i>Ubicacion:</li>
            <li><i class="icono fas fa-calendar-alt"></i>Fecha nacimiento: 09/09/2003</li>
            <li><i class="icono fas fa-user-check"></i>Registro: 19/12/2022</li>
            <li><i class="icono fas fa-share-alt"></i>Redes sociales:</li>
          </ul>
        </div>
      </section>




      <section class="seccion-perfil-publicacion">
        <div class="perfil-usuario-footer">
          <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
              <h3 class="titulo">Biografia</h3>
              <p class="texto">Las redes sociales son plataformas digitales formadas por comunidades de individuos con intereses, actividades o relaciones en común (como amistad, parentesco, trabajo). Las redes sociales permiten el contacto entre personas y funcionan como un medio para comunicarse e intercambiar información.

                Los individuos no necesariamente se tienen que conocer antes de entrar en contacto a través de una red social, sino que pueden hacerlo a través de ella, y ese es uno de los mayores beneficios de las comunidades virtuales.



                Fuente: https://concepto.de/redes-sociales/#ixzz7qVpVPdoC</p>
            </div>
          </div>
      </section>


      <!--    Main publicaciones     -->


      <div class="container2">

        <div class="main-content">
          <div class="write-post-container">
            <div class="user-profile">
              <img src="imagenes/pollolen.jfif" alt="">

              <div>
                <p><?= $profile['first_name'] ?> <?= $profile['last_name'] ?></p>
                <small>CEO <i class="fas fa-caret-down"></i></small>
              </div>
            </div>

            <div class="post-input-container">
              <textarea rows="3" placeholder="Cuentanos Tu Vida!"></textarea>

              <div class="add-post-links">
                <a href="#"><img src="imagenes/compartir.png" alt="">Informar</a>
              </div>

              <div class="add-post-links">
                <a href="#"><img src="imagenes/compartir.png" alt="">Pasear</a>
              </div>
            </div>

          </div>

          <!-- <div class="post-container">
    <div class="post-row">
        <div class="user-profile">
            <img src="imagenes/pollolen.jfif" alt="">

            <div>
            <a href="perfil.html">
                <p>Yoshi Manuel</p>
                <small>CEO <i class="fas fa-caret-down"></i></small>

                <span>ceo</span></a>
            </div>
        </div>
        <a href="#"><i class="fas fa-ellipsis-v"></i></a>
    </div>

    <p class="post-text">Trabajando Pa</a></p>

    <img src="imagenes/yosh.jpeg" class="post-img">

    <div class="post-row">
        <div class="activity-icons">
            <div><img src="imagenes/corazon.png" alt="">0</div>

            <div><img src="imagenes/mensaje.png" alt="">0</div>

            <div><img src="imagenes/compartir.png" alt="">0</div>
        </div>
        
    </div>

</div> -->
          <?php

          foreach ($profile_post as $post) {
          ?>

            <div class="post-container">
              <div class="post-row">
                <div class="user-profile">
                  <img src="assets/images/profile/<?= $profile['profile_pic'] ?>" alt="Rajeev's profile pic">

                  <div>
                    <p><?= $profile['first_name'] ?> <?= $profile['last_name'] ?></p>
                    <small>Empresa <i class="fas fa-caret-down"></i></small>

                    <span>ceo</span>
                  </div>
                </div>
                <a href="#"><i class="fas fa-ellipsis-v"></i></a>
              </div>

              <p class="post-text"><?= $post['post_text'] ?></p>

              <img src="assets/images/posts/<?= $post['post_img'] ?>">

              <!-- <div class="post-row">
          <div class="activity-icons">
              <div><img src="imagenes/logo.png" alt="">0</div>

              <div><img src="imagenes/logo.png" alt="">0</div>

              <div><img src="imagenes/logo.png" alt="">0</div>
          </div>
          
      </div> -->

            </div>
          <?php
          }
          ?>

        </div>



      </div>
  </section>



  <!--    Barra-Derecha      -->

  <div class="sidebar-2">

    <a href="social.html">
      <div class="sidebar-top">
        <i class="logoL fa-solid fa-house"> <a href="social.html"></a></i>
        <span class="brand">Inicio</span>
    </a>
  </div>
  </a>

  <div class="sidebar-center">
    <ul class="list">

      <a href="#">
        <li class="list-item">
          <i class="list-item-icon fa-solid fa-user"></i>
          <span class="list-item-text">Perfil</span>
        </li>
      </a>

      <a href="Eventos.html">
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

      <a href="#">
        <li class="list-item">
          <i class="list-item-icon fa-solid fa-bomb"></i>
          <span class="list-item-text">P</span>
        </li>
      </a>


    </ul>
  </div>
  </div>

  <div class="footer">
    <p>Copyright 2022 AvaDisk</p>
  </div>
  s