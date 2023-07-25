
<style>
    /* BARRA IZQUIERDA */
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
    border-bottom: 1px solid #ccc;
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
.logo-barra img {
    width: 30px;
    height: 30px;
  }

  .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding:0;
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
    height: 20px;
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


    /* BARRA DERECHA */

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
  .nav {
      left: 0;
      padding: 19px 22px 0;
      width: 75px;
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


    /* Main content */
    #container{
    width: 700px;
    overflow-y: hidden;
    border-radius: 10px;
    box-shadow: 0 10px 30px #000;
    margin: 70px auto;
    border: 1px solid #0000004a;
    color: white;
}

.Fundadores{
    color: rgb(214, 214, 214);
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 15px;
    text-align: center;
    margin: 80px auto;
    text-shadow: 0 10px 30px #000;
}
h1{
    font-size: 2rem;
}
h2{
    font-size: 1.5rem;
}

/* Estilos para navbar en mascategorias */

#primera_nav{
    position: absolute;
    top: 0;
    width: 100%;
}
#segunda_nav{
        position: absolute;
    top: 41px;
    width: 100%;
}
</style>




<!-- Barra izquierda -->
<section  
  style="margin-top:95px;"
  class="nav position-fixed top-0" id="navbar">
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
  <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>

















<!-- Barra derecha -->

<div
  style="    margin-top: 95px;"
   class="sidebar-2 position-fixed top-0" >

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







  <!-- Main content -->
        <div id="container" class="filter">
            <div class="Fundadores">
                <h1>Disponible en próximas actualizaciones</h1>
                <img src="assets/images/home/perroe.png" alt="" width="175px">
            </div>
        </div>
    