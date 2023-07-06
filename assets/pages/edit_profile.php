<?php global $user;?>
<style>
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

</style>

<!-- BARRA izquierda -->
<section  
  style="margin-top:95px;"
  class="nav position-fixed top-0" id="navbar">
    <a
    style="width: 100%;"
     href="social.html" class="nav_link nav_logo ">
      <i class="fa-solid fa-bars nav_icon"></i>
      <span class="logo_name">
        <i class="logo-barra"><img src="assets/images/home/logo.png" alt=""></i>
        NavHer
      </span>
    </a>
    <nav class="nav_container">
      <div class="left-sidebar">
        <div class="imp-links">
         <!-- <a href="#"><img src="assets/images/home/play.png"> Videos</a>-->

          <a href="#"><img src="assets/images/home/logo.png"> Noticias</a>

          <!-- <a href="#"><img src="assets/images/home/stream.png"> Stream</a>-->

          <a href="amigos.html"><img src="assets/images/home/amigos.png"> Amigos</a>

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
          <a href="fundadores.html"><img src="assets/images/home/logo.png"> Fundadores </a>
        </div>

      </div>
    </nav>
  </section>

  <!-- BARRA derecha -->
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

      <!-- <a href="#">
        <li class="list-item">
          <i class="list-item-icon fa-solid fa-bomb"></i>
          <span class="list-item-text">P</span>
        </li>
      </a> -->


    </ul>
  </div>
  </div>



  <div 
style="height: 85vh !important;"
class="container col-4 rounded-0 d-flex justify-content-between align-items-center position-relative">


    <div 
    style="padding-top: 0 !important;
           margin-top: 50px !important;
           padding-bottom: 5px !important;
           max-height:100% !important;
           width:100% !important;
           background-color:rgba(0, 0, 0, 0.9) !important;
           border-radius:20px;
           position:relative !important;"
    class="col-12  border-0  p-4 mt-4 shadow-sm ">
    <form method="post" action="assets/php/actions.php?updateprofile" enctype="multipart/form-data" class="d-f flex-column gap-3">
            <div 
                style="width:120px; height:120px; top: calc(-45px);  left: calc(50% - 60px);"
                class="rounded-circle overflow-hidden position-absolute">
    <img  src="assets/images/profile/<?=$user['profile_pic']?>" class="img-thumbnail   " style="height:100%; width: 100%; object-fit: cover; " alt="...">
    

  </div>
  <div
    style=" cursor:pointer;
    height: 100px;
          background-color: rgba(0,0,0,0.1) !important;"
   class="mb-3 position-relative text-center m-0 p-0 bg-dark d-flex flex-column  justify-content-start">
                        <div 
                        style="cursor: default;"
                        class="d-flex justify-content-center align-items-start">
                         <label  
                         style="cursor:pointer;"for="formFile"
                         class="form-label d-flex flex-column justify-content-start ">
                            <i class="bi bi-plus-square-fill text-white"></i> 
                            <span class="text-white">Cambiar foto</span> 
                        </label>
                        <input style="display: none;" class="form-control" type="file" name="profile_pic" id="formFile">
                        </div>
                       
    </div>
    
            <!--<div class="d-flex justify-content-center text-center">-->
                <!-- Coloca aquí tu contenido que quieres centrar -->
               <!-- <h1 class="h5 mb-3 fw-normal text-white">Editar Perfil</h1>
            </div>-->
            
                <?php
if(isset($_GET['success'])){
    ?>
<p class="text-white">Perfil actualizado !</p>

<?php
}
                ?>
                <div class="form-floating mt-1 col-6 ">
                <div class="d-flex justify-content-center">
  
</div>

                    
                </div>
                <?=showError('profile_pic')?>

               
                    <div class="form-floating mt-1  text-white ">
                        <input style="height:35px; type="text" name="first_name" value="<?=$user['first_name']?>" class="form-control rounded py-1 ps-2 pe-0 mb-3" placeholder="username/email">
                        <label for="floatingInput">first name</label>
                    </div>
                    <div 
                    
                    class="form-floating mt-1  text-white">
                        <input style="height:35px;" type="text" name="last_name" value="<?=$user['last_name']?>" class="form-control rounded py-1 ps-2 pe-0 mb-3"  placeholder="username/email">
                        <label for="floatingInput">last name</label>
                    </div>
               


                <?=showError('first_name')?>
                <?=showError('last_name')?>
                <div class="d-flex gap-3 my-3">
                    <div style="display: flex; align-items: center;" class="form-check">
                        <input 
                        class="form-check-input " type="radio" name="exampleRadios" id="exampleRadios1"
                            value="option1" <?=$user['gender']==1?'checked':''?> disabled>
                        <label class="form-check-label text-white" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div style="display: flex; align-items: center;" class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                            value="option2" <?=$user['gender']==2?'checked':''?> disabled>
                        <label class="form-check-label text-white" for="exampleRadios3">
                            Female
                        </label>
                    </div>
                    <div style="display: flex; align-items: center;" class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                            value="option2" <?=$user['gender']==0?'checked':''?> disabled>
                        <label class="form-check-label text-white" for="exampleRadios2">
                            Other
                        </label>
                    </div>
                </div>
                <div class="form-floating mt-1">
                    <input style="height:35px;"
                    type="email" value="<?=$user['email']?>"  class="form-control rounded py-1 ps-2 pe-0 mb-3" placeholder="email" disabled>
                </div>
                <div class="form-floating mt-1">
                    <input 
                    style="height:35px;"
                    type="text"  value="<?=$user['username']?>" name="username"  class="form-control rounded py-1 ps-2 pe-0 mb-3" placeholder="username/email">
                </div>
                <?=showError('username')?>

                <div class="form-floating mt-1">
                    <input
                    style="height:35px;" 
                    type="password" name="password"  class="form-control rounded py-1 ps-2 pe-0 mb-3" id="floatingPassword" placeholder="Password">
                    <label 
                    style="padding: 5px;"
                    for="floatingPassword text-white ">new password</label>
                </div>

                <div class="mt-3 d-flex justify-content-center ">
                    <button 
                    style="background-color: #203864;
                           width: 80%;
                           border-radius: 50px;"
                    class="btn btn-primary py-3" type="submit">Update Profile</button>



                </div>
        
            </form>
        </div>

  <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    </div>
