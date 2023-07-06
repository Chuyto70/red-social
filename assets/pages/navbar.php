<?php global $user;?>
<nav class="navbar navbar-expand-lg navbar-light bg-black noshow_navbar" id="primera_nav">
    <div class="container-fluid d-flex justify-content-center">
        <div class="form-group">
            <h3 class="text-center text-white fs-6">AvaDisk(<span class="fst-italic">NAVHER</span>)</h3>
        </div>
    </div>  
</nav>

<nav 
id="segunda_nav"
class="navbar navbar-expand-lg navbar-light justify-content-around shadow-lg p-0  noshow_navbar" >
        <div class="col-lg-11 col-sm-12 col-md-10 d-flex flex-lg-row flex-md-row flex-sm-column justify-content-between">
            <div class="d-flex justify-content-between col-lg-7 col-sm-12">
                <a class="navbar-brand" href="?">
                <img src="assets/images/home/logo.png" alt="" height="28">

                </a>

                <form style="position: relative;"  class="d-flex align-items-center col-4 justify-self-end" id="searchform" >
                    <div class="form-control d-flex align-items-center py-0 px-3" style="background-color: #d9d9d9;">
                    <input style="background-color: #d9d9d9;" class="form-control border-0 shadow-none" type="search" id="search" placeholder="Buscar.."
                        aria-label="Search" autocomplete="off">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
                    </div>
                    

<div class="bg-white text-end rounded border shadow py-2 px-1 mt-5" style="display:none;position:absolute;z-index:+99; top:-1px; width:100%;" id="search_result" data-bs-auto-close="true">
<button type="button" class="btn-close" aria-label="Close" id="close_search"></button>
<div id="sra" class="text-start">
<p class="text-center text-muted">enter name or username</p>

</div>
</div>
                </form>

            </div>


            <ul class="navbar-nav flex-row justify-content-evenly mb-lg-1 mb-sm-0 gap-4">

                <li class="nav-item">
                    <a class="nav-link text-dark" href="?"><i class="bi bi-house-door-fill "  style="color: white; font-size: 1.4rem;"></i></a>
                </li>
               
                <li class="nav-item">
                  
                    

 <a  class="nav-link text-dark position-relative " id="show_not" data-bs-toggle="offcanvas" href="#notification_sidebar" role="button" aria-controls="offcanvasExample">
                   

</a>


      

                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="offcanvas" href="#message_sidebar" href="#"><i class="bi bi-chat-right-dots-fill" style="color: white; font-size: 1.4rem;"></i>  <span class="un-count position-absolute start-10 translate-middle badge p-1 rounded-pill bg-danger" id="msgcounter">
  
  </span></a>
                </li>
                <li class="nav-item dropdown dropstart">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/profile/<?=$user['profile_pic']?>" alt="" height="30" width="30" class="rounded-circle border">
                    </a>
                    <ul class="dropdown-menu position-absolute top-100 end-50 bg-black" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-white" href="?u=<?=$user['username']?>"><i class="bi bi-person" style="color: white; font-size: 1.4rem;"></i>Perfil</a></li>
                        <hr>
                        <li><a class="dropdown-item text-white" href="?editprofile"><i class="bi bi-pencil-square"></i>Editar perfil</a></li>
                        <hr>
                       
                        
                        <li><a class="dropdown-item text-white" href="assets/php/actions.php?logout"><i class="bi bi-box-arrow-in-left" style="color: white; font-size: 1.4rem;"></i>Salir</a></li>
                    </ul>
                </li>

            </ul>


        </div>
    </nav>