<style>
  #miModal{
    display: none;
    position: fixed;
    z-index:1;
    overflow: auto;
    left: 0;
    top:0;
    width: 100%;
    height:100%;
    background: rgba(0, 0, 0, 0.607);
  }
  #flex{
    width: 100%;
    height:100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .contenido-modal{
    position: relative;
    background-color: #fefefe00;
    margin: auto;
    width: 0%;
    box-shadow: 0 0 6px 0 rgba(0, 0, 0, .4);
    animation-name: modal;
    animation-duration: 1s;
  }
  .emergente-containercom{
    font-size: 18px;
    font-family: 'open sans',sans-serif;
    display: grid;
    justify-content: center;
    align-items: center;
    min-height: 10%;
    color: rgb(235, 235, 235);
    position: relative;
}
.public-emer-container{
    position: relative;
    background-color:#404040;
    padding:30px;
    max-width: 600px;
    width: 100vw;
    max-height: 700px;
    border-radius: 10px;
    -webkit-border-radius: 20px;
    -ms-border-radius:10px;
    -o-border-radius: 10px;
}
 #close{
    color: #f2f2f2;
    font-size:30px;
    font-weight: bold;
    position: absolute;
    right: 25px;
    top: 0px;
  }
  #close:hover{
    color:#7f8c8d;
    text-decoration: none;
    cursor: pointer;
  }
  #user-profile{
  display: flex;
  align-items: center;
}

#user-profile a{
  text-decoration: none;
}
#user-profile img{
  width: 45px;
  border-radius: 50%;
  margin-right: 10px;
}

#user-profile p{
  margin-bottom: -5px;
  font-weight: 500;
  color: #fff;
}

#user-profile small{
  font-size: 12px;
}

.vinculo-e {
  color: #aaaaaa;
}

.public-area{
    position: relative;
    /* overflow-y: scroll; */
    scrollbar-width: none;
}
.placeholder{
    position: absolute;
    
    font-size: 100%;
    color: rgb(165, 165, 165);
    pointer-events: none;
    background-color: transparent;
}
.input-editable{
    outline: none;
    color: rgb(255, 255, 255);
    margin-bottom: 30px;
    height: 45px;
    overflow-y: auto;
}

.emergente-yr12{
    display: flex;
    align-items: center;
    justify-content: center;
    background: #404040;
}
.wrapper-s12{
    background: #404040;
    padding: 8px 30px;
    padding-top: 40px;
    width: 420px;
    border-radius: 5px;
}
.wrapper-s12 form {
    height: 140px;
    display: flex;
    margin:0;
    cursor: pointer;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    border-radius: 5px;
    border: 2px dashed #ffffff;
}
.public-btn{
    background-color: rgb(52, 52, 52);
    color: rgb(255, 255, 255);
    cursor: pointer;
    padding: 10px 20px;
    border-radius: 20px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -ms-border-radius: 30px;
    -o-border-radius: 30px;
    border: transparent;
    font-size: 100%;
    opacity: 0.5;
    transition:.3s ease all;
}

.public-btn:hover{
    opacity: 1;
}

.progress-area .row .content{
    width: 100%;
    margin-left: 15px;
  }
  .progress-area .details{
    display: flex;
    align-items: center;
    margin-bottom: 7px;
    justify-content: space-between;
  }
  .progress-area .content .progress-bar{
    height: 6px;
    width: 100%;
    margin-bottom: 4px;
    background: #fff;
    border-radius: 30px;
  }
.uploaded-area{
    max-height: 130px;
    overflow-y: scroll;
  }
  .uploaded-area.onprogress{
    max-height: 150px;
  }
  .uploaded-area::-webkit-scrollbar{
    width: 0px;
  }
  .uploaded-area .row .content{
    display: flex;
    align-items: center;
  }
  .uploaded-area .row .details{
    display: flex;
    margin-left: 15px;
    flex-direction: column;
  }
  .uploaded-area .row .details .size{
    color: #ffffff94;
    font-size: 11px;
  }
  .uploaded-area i.fa-check{
    font-size: 16px;
  }

  .privacy{
        margin-top: 8px;
    font-size: 14px;
    transition: 0.5s;
    -webkit-transition: 0.5s;
    -moz-transition: 0.5s;
    -ms-transiton: 0.5s;
    -o-transition: 0.5s;
    padding: 5px 10px;
    width: 50%;
    cursor: pointer;
    display: flex;
    gap: 8px;
    align-items: center;
}
.footer-box{
    position: relative;
    border-top: 1px solid #737476;
    margin: 20px 5px;
    padding-top: 24px;
}
.footer-icons{
    display: flex;
    list-style: none;
    margin: 0;
}

.footer-icons li{
    margin:5px;
    position: relative;
    right: 8px;
    font-size: 100%;
    border-radius: 60%;
    -webkit-border-radius: 60%;
    -moz-border-radius: 60%;
    -ms-border-radius: 60%;
    -o-border-radius: 60%;
    cursor: pointer;
   
}

.footer-icons li i{
    padding: 10px;
    transition: 0.3s;
    -webkit-transition: 0.3s;
    -moz-transition: 0.3ms;
    -ms-trasition: 0.3s;
    -o-transition: 0,3s;
}

.footer-icons li i:hover{
    background-color: #00000038;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
}

.puclic-limits{
    float: right;
    transform: translateY(-4.3rem);
    -webkit-transform: translateY(-4.3rem);
    -moz-transform: translateY(-4.3rem);
    -ms-transform: translateY(-4.3rem);
    -o-transform: translateY(-4.3rem);

}

.puclic-limits .counter-limit{
    display: inline-block;
    border-right: 1px solid rgb(255, 255, 255);
    padding: 0 18px;
    
    margin: 0 15px;
    font-size: 100%;
    color: #ffffff;
    visibility: hidden;
}

.form_modal:where(i, p){
    color: #ffffff;
  }
  .form_modal i{
    font-size: 40px;
  }
  .form_modal p{
    margin-top: 15px;
    font-size: 14px;
  }
  .form_modal i {
    font-size: 50px;
}

/* ----*************************--------------------***********************-************-*-* */
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
    object-fit: cover;
  }

  .user-profile p {
    margin-bottom: -5px;
    font-weight: 500;
    color: #fff;
  }

  .user-profile small {
    font-size: 12px;
  }
  #post_textarea{
    outline: none !important;
    box-shadow: none !important;
    caret-color: white;
    color: white;
    border-bottom: 1px solid rgb(213 193 193 / 50%)  !important;
    resize: none;
  }

  #select_post_img{
    display: none !important;
    cursor: pointer;
  }
  .cursor {
    cursor: pointer;
  }
  .imagen_post{
    cursor: pointer !important;
  }
  #modal_contenido{
    background-color: #191919;
    color: white    ;
  }

  .text_size_small{
    font-size: 12px !important;
  }
  .background_bubble_chat{
    background-color: #6e6b6b75 !important;
  }
  #button-addon2:hover{
    background-color: #0d6efd !important;
  }
 ::-webkit-scrollbar {
 width: 7px;
  background: rgba(70, 70, 70, 0.393);
}
::-webkit-scrollbar-thumb{
  background: rgba(166, 166, 166, 0.716);
  border-radius: 10px;
  border-right: 2px solid rgba(138, 138, 138, 0.382);
}


/* Menu del comentario */

.menu-comentario {
    position: absolute;
    width: 30px;
    height: 30px;
    background-color: #E9E9E9;
    border-radius: 50%;
    display: none;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    opacity: 0;
}
.menu-comentario {
    position: absolute;
    width: 30px;
    height: 30px;
    background-color: #E9E9E9;
    border-radius: 50%;
    display: none;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    opacity: 0;
}

.background_bubble_chat:hover .menu-comentario{
    opacity: 1;
}

.menu-comentario .menu {
    list-style: none;
    position: absolute;
    right: 100%;
    top: -6px;
    background-color: #fff;
    box-shadow: 0 0 5px 1px rgba(0, 0, 0, .2);
    border-radius: 8px;
    padding-top: 7px;
    padding-bottom: 7px;
    padding-left: 11px;
    opacity: 0;
    visibility: hidden;
    transition: all ease-in 200ms;
}
.menu-comentario {
    top: 5px;
    right: -15px;
    box-shadow: 0 0 5px rgba(0, 0, 0, .4);
}
 .menu-comentario {
    display: flex;
}
.menu-comentario:hover .menu {
    opacity: 1;
    visibility: visible;
}
.menu-comentario .menu a {
    display: block;
    color: #b0b0b0 !important;
    padding: 4px 8px;
    text-decoration: none;

}

.menu-comentario .menu a:hover {
    color: #515151;
}
.toggle {
position: relative;
display: inline-block;
width: 45px;
height: 20px;
}

.toggle input {
opacity: 0;
width: 0;
height: 0;
}

.slider {
position: absolute;
cursor: pointer;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #ccc;
transition: .4s;
border-radius: 8px;
}

.slider:before {
position: absolute;
    content: "";
    height: 12px;
    width: 12px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    transition: .4s;
    border-radius: 50%;
}

input:checked + .slider {
background-color: #2196F3;
}

input:checked + .slider:before {
transform: translateX(26px);
}

.slider.round {
border-radius: 34px;
}

.slider.round:before {
border-radius: 50%;
}

.contenedor_descripcion_post{
    display: flex;
    gap: 0px;
}

#editar_descripcionpost_button{
    display: none;
    transition: all 300ms;
}

.contenedor_descripcion_post:hover  #editar_descripcionpost_button {
    display: inline-block;
}

.contenedor_editar_form{
    display: none;
}
.contenedor_descripcion_post:hover .contenedor_editar_form{
    display: inline-block;
}
#input_editar_comentario{
    transition: all 250ms;
}

.hover_efecto:hover{
    opacity: 0.8;
    cursor: pointer;
  }
  div.modal-backdrop.fade.show {
/* Aplicar la propiedad display con el valor none */
display: none;
}

  </style>

<?php
global $user;
global $posts;
global $follow_suggestions;
global $profile;

?>
<div class="container col-12 rounded-0 d-flex justify-content-between mt-5 gap-1" style="padding: 0;">    


    <div style="
    background-color: #272727 !important;
    height: 100%;
    position: -webkit-sticky;
    position: sticky;
    top: 20px;
    width: 260px;
" class="col-3 mt-0 p-3 rounded shadow">
        <input hidden type="text" id="current_user_localStorage"  value="<?= $_SESSION['userdata']['id'] ?>">
        <!-- Fuente iconos https://icons.getbootstrap.com/icons/newspaper/-->
        <!-- <div class="d-flex align-items-center p-2 " >
            <button
             style="border: 1px solid rgb(255 255 255 / 10%);"
             type="button" class="btn btn-dark btn-block w-75 rounded-pill rounded-10">
                <div class="d-flex align-items-center justify-content-start gap-3 text-center">
                    <i class="bi bi-play-circle-fill mr-2"></i>
                    <span>Videos</span>
                    <div></div>
                </div>
            </button>
        </div> -->
        <div style="width: 100% !important;" class="d-flex align-items-center p-2 ">
            <button
             style=" width: 100% !important;border: 1px solid rgb(255 255 255 / 10%);"
             type="button" class="btn btn-dark btn-block w-75 rounded-pill rounded-10">
                <div class="d-flex align-items-center  justify-content-start gap-3  text-center">
                    <i class="bi bi-newspaper mr-2"></i>
                    <span>Noticias</span>
                    <div></div>
                </div>
            </button>
        </div>
        <!-- <div class="d-flex align-items-center p-2">
            <button 
            style="border: 1px solid rgb(255 255 255 / 10%);"
            type="button" class="btn btn-dark btn-block w-75 rounded-pill rounded-10">
                <div class="d-flex align-items-center justify-content-start gap-3 text-center">
                    <i class="bi bi-globe mr-2"></i>
                    <span>Stream</span>
                    <div></div>
                </div>
            </button>style="width: 100% !important;"
        </div> -->
        <div style="width: 100% !important;" class="d-flex align-items-center p-2 ">
            <button 
            style=" width: 100% !important;border: 1px solid rgb(255 255 255 / 10%);"
            type="button" class="btn btn-dark btn-block w-75 rounded-pill rounded-10">
                <div class="d-flex align-items-center justify-content-start gap-3 text-center">
                    <i class="bi bi-people-fill mr-2"></i>
                    <span>Amigos</span>
                    <div></div>
                </div>
            </button>
        </div>
        <!-- <div class="d-flex align-items-center p-2">
            <button
             style="border: 1px solid rgb(255 255 255 / 10%);"
             type="button" class="btn btn-dark btn-block w-75 rounded-pill rounded-10">
                <div class="d-flex align-items-center justify-content-start gap-3 text-center">
                    <i class="bi bi-controller mr-2"></i>
                    <span>Games</span>
                    <div></div>
                </div>
            </button> style="width: 100% !important;"
        </div> -->
        <div
        style="width: 100% !important;"
         class="d-flex align-items-center p-2">
            <button
             onclick="location.href='?mascategorias'"
             style="width: 100% !important; border: 1px solid rgb(255 255 255 / 10%);"
             type="button" class="btn btn-dark btn-block w-75 rounded-pill rounded-10">
                <div class="d-flex align-items-center justify-content-center text-center">
                    <i class="bi bi-three-dots-vertical mr-2"></i>
                    <span class="text-light">Más Categorias</span>
                    <div></div>
                </div>
            </button>
        </div>
        <div class="d-flex align-items-center p-2">
        </div>
        <div class="border-top border-white"></div>
        <div class="d-flex align-items-center p-2">
        </div>

        <div class="d-flex align-items-center p-2">
            <div class="text-center">
                <p class="text-muted">Conectados</p>
            </div>
        </div>


        <!-- <div class="d-flex align-items-center p-2">
            <button
             style="border: 1px solid rgb(255 255 255 / 10%);"
             type="button" class="btn btn-dark btn-block border-secondary w-75 rounded-pill rounded-10">
                <div class="d-flex align-items-center justify-content-start gap-3 text-center">
                    <i class="bi bi-tiktok mr-2"></i>
                    <span>Tik Tok</span>
                    <div></div>
                </div>
            </button>
        </div> -->
        <!-- <div class="d-flex align-items-center p-2">
            <button 
             style="border: 1px solid rgb(255 255 255 / 10%);"
             type="button" class="btn btn-dark btn-block border-secondary w-75 rounded-pill rounded-10">
                <div class="d-flex align-items-center justify-content-start gap-3 text-center">
                    <i class="bi bi-youtube mr-2"></i>
                    <span>Youtube</span>
                    <div></div>
                </div>
            </button>
        </div> -->
        <div style="width: 100% !important;"class="d-flex align-items-center p-2">
            <button
            style="width: 100% !important; border: 1px solid rgb(255 255 255 / 10%); border-radius:80px !important; "
             type="button" class="btn btn-dark btn-block border-secondary w-75 arounded-pill rounded"
            onclick="location.href='?fundadores'">
                <div class="d-flex align-items-center justify-content-start gap-3 text-center">
                    <img style="object-fit: cover;" width="16px" height="16px" src="assets/images/oficial_logo.png" alt="" srcset="">
                    <span><a style="text-decoration: none; color: white;" href="?fundadores">Fundadores</a></span>
                    <div></div>
                </div>
            </button>
        </div>

        <div class="mt-2">

            <div class="d-flex justify-content-between align-items-center">
                 <h6 style="padding: 0; margin: 0;" class="text-muted p-2">Puedes seguirlos</h6>
                 <a style="text-decoration: none;
                           font-size: 14px;" href="?sugerencias">Sugerencias</a>
            </div>
           
            <?php
            foreach ($follow_suggestions as $suser) {
            ?>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/<?= $suser['profile_pic'] ?>" alt="" height="40" width="40px" style="object-fit: cover;" class="rounded-circle border">
                        </div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <a href='?u=<?= $suser['username'] ?>' class="text-decoration-none text-white">
                                <h6 style="margin: 0px;font-size: small;"><?= $suser['first_name'] ?> <?= $suser['last_name'] ?></h6>
                            </a>
                            <p style="margin:0px;font-size:small" class="text-muted">@<?= $suser['username'] ?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-sm btn-primary followbtn" data-user-id='<?= $suser['id'] ?>'>Follow</button>

                    </div>
                </div>
            <?php
            }

            if (count($follow_suggestions) < 1) {
                echo "<p class='p-2 bg-white border rounded text-center'>No Suggestions For You</p>";
            }
            ?>

        </div>
    </div>










    <div class="bg_dark col-6" >

        <!-- inicio de publicar -->
        <div class=" card shadow mb-4" style="background-color:#272727; color:#ffffff; padding-top:20px;">  
            <div class="card-body">
            <div class="user-profile mb-3   ">
              <img style="background-size: cover;" height="45px" src="assets/images/profile/<?= $user['profile_pic'] ?>" alt="perfil" />

              <div>
                <a href="?u=<?= $user['username'] ?>" 
                style="font-weight: 500;"
                class="d-block text-decoration-none text-white "
                ><?= $user['first_name'] ?> <?= $user['last_name'] ?></a>
                <small style="opacity: .5;" >CEO <i class="bi bi-caret-down-fill"></i></small>
              </div>
            </div>
                <form  method="post" action="assets/php/actions.php?addpost" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="form-group">
                          
                                <textarea name="post_text" class="form-control mb-3 bg-transparent shadow-0 border-0" rows="1" placeholder="¿Qué estás pensando, <?= $user['first_name'] ?>?" style="background-color:#ddd;" id="post_textarea"></textarea>
                        
                        </div>

                    </div>

                    
                    <div class="form-group d-flex flex-column">

                            <button id="boton_de_wall_publicar" class="public-btn ">Publicar</button>

                            
                        <!-- <div class="custom-file d-flex align-items-center gap-1">
                            <input type="file" class="custom-file-input" name="post_img" id="select_post_img">
                            <i class="bi bi-share"></i>
                            <label 
                            style="color:#aaaaaa;"
                            class="custom-file-label cursor" for="select_post_img">Imagen</label>

                        </div> -->
                        <!-- <div class="d-flex align-items-center gap-1">
                            <i class="bi bi-envelope-fill"></i>
                            <input 
                            style="color:#aaaaaa;
                                   background-color:transparent;
                                   border:none;
                                   padding:0;
                                   "
                            type="submit" class="" value="Pasear">  

                        </div> -->
                   
                    </div>

                    
                   
                </form>
            </div>
        </div>



        <!-- ESTADOS -->
        <div class="card shadow mt-4" style="background-color:#272727; color:#ffffff; overflow-y: hidden; overflow-x: auto;">
            <div class="contenedor_estados p-2" 
                 style="display: flex;
                        gap: 8px;
                        align-items: center;">

                    <?php 
                         $miEstado = getMyEstados();
                        if($miEstado){
                        $miEstado = getMyEstados()[0];
                        

                        ?>
                    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; min-width: 90px;">

                        <img  role="button" data-bs-toggle="modal" data-bs-target="#estadoModal<?= $miEstado['id'] ?>"  src="assets/images/estados/<?= $miEstado['imagen'] ?>" style="width: 50px; height: 50px; border-radius: 50%; border: 1px solid #7030a0; object-fit: cover; " alt="">
                        <span>Mi estado</span>
                    </div>

                    <div class="modal fade" id="estadoModal<?= $miEstado['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="estadoModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div style="border-radius: 12px; background-color: #404040; " class="modal-content">


                            <!-- Sub menu ESTADOS  -->

                            <?php if($miEstado['user_id'] == $_SESSION['userdata']['id']){ ?>

                            <i style="position: absolute;
                                      z-index: 10;
                                      right: 0;
                                      font-size: 32px;
                                      color: #404040;" role="button" class="bi bi-three-dots-vertical abrir_menu_estado" >
                            </i>

                            <?php }?>

                            <div style="transform: scale(0);" class="menu_estado" id="<?= $miEstado['id'] ?>">
                                <ul
                                style="position: absolute;
                                       background-color: white;
                                       z-index: 10;
                                       padding: 12px 24px;
                                       color: #404040;
                                       right: -130px;
                                       top: 12px;
                                       list-style: none;"
                                 class="lista_menu_estado">
                                   <li role="button" class="borrarMiEstado" id="<?= $miEstado['id']?>">Eliminar <i class="bi bi-trash-fill"></i> </li> </i>
                                </ul>
                            </div>

                            <div style="padding: 0px; position:relative;" class="modal-body">
                                <img class="imagen_estado" id="<?= $miEstado['id'] ?>" src="assets/images/estados/<?= $miEstado['imagen'] ?>" style="width:100%; height:500px; object-fit: cover;border-radius: 8px 8px 0 0;" alt="" >
                                
                                <?php 
                                if(checkLikeEstadoStatus($miEstado['id'])){
                                    $likeButtonEstado = 'scale(1)';
                                }else{
                                    $likeButtonEstado = 'scale(0)';
                                }
                                ?>
                                <i style="position: absolute;
                                          bottom: 0;
                                          transition: all .3s ease-in-out;
                                          left: calc(50% - 35px);
                                          font-size: 70px;
                                          color: red; transform: <?= $likeButtonEstado ?>;" class="bi bi-heart-fill"></i>
                                
                            </div>
                            <div style="justify-content: start;  border-top: 0px;" class="modal-footer">
                                <p style="color: white;"><?= $miEstado['descripcion'] ?></p>
                            </div>
                            </div>
                        </div>
                    </div>

                    <?php }?>
                    
                    <?php $estados = getEstados();
                        foreach($estados as $estado){

                        
                    ?>
                    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">

                        <img  role="button" data-bs-toggle="modal" data-bs-target="#estadoModal<?= $estado['id'] ?>"  src="assets/images/estados/<?= $estado['imagen'] ?>" style="width: 50px; height: 50px; border-radius: 50%; border: 1px solid #7030a0; object-fit: cover; " alt="">
                        <span><?= getUser($estado['user_id'])['first_name'] ?> </span>
                    </div>
                

                    <!--    hasta aqui las copias -->

                    <div class="modal fade" id="estadoModal<?= $estado['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="estadoModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div style="border-radius: 12px; background-color: #404040; " class="modal-content">


                            <!-- Sub menu ESTADOS  -->

                            <?php if($estado['user_id'] == $_SESSION['userdata']['id']){ ?>

                            <i style="position: absolute;
                                      z-index: 10;
                                      right: 0;
                                      font-size: 32px;
                                      color: #404040;" role="button" class="bi bi-three-dots-vertical abrir_menu_estado" >
                            </i>

                            <?php }?>

                            <div style="transform: scale(0);" class="menu_estado" id="<?= $estado['id'] ?>">
                                <ul
                                style="position: absolute;
                                       background-color: white;
                                       z-index: 10;
                                       padding: 12px 24px;
                                       color: #404040;
                                       right: -130px;
                                       top: 12px;
                                       list-style: none;"
                                 class="lista_menu_estado">
                                   <li role="button">Eliminar <i class="bi bi-trash-fill"></i> </li> </i>
                                </ul>
                            </div>

                            <div style="padding: 0px; position:relative;" class="modal-body">
                                <img class="imagen_estado" id="<?= $estado['id'] ?>" src="assets/images/estados/<?= $estado['imagen'] ?>" style="width:100%; height:500px; object-fit: cover;border-radius: 8px 8px 0 0;" alt="" >
                                
                                <?php 
                                if(checkLikeEstadoStatus($estado['id'])){
                                    $likeButtonEstado = 'scale(1)';
                                }else{
                                    $likeButtonEstado = 'scale(0)';
                                }
                                ?>
                                <i style="position: absolute;
                                          bottom: 0;
                                          transition: all .3s ease-in-out;
                                          left: calc(50% - 35px);
                                          font-size: 70px;
                                          color: red; transform: <?= $likeButtonEstado ?>;" class="bi bi-heart-fill"></i>
                                
                            </div>
                            <div style="justify-content: start;  border-top: 0px;" class="modal-footer">
                                <p style="color: white;"><?= $estado['descripcion'] ?></p>
                            </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                <button 
                id="agregarEstado"
                class="hover_efecto"
                style="width: 50px;
                        min-width: 50px;
                        align-self: baseline;
                        height: 50px;
                        border-radius: 50%;
                        border: 1px solid grey;
                        background-color: #7f7f7f;
                        padding: 0;"><i class="bi bi-plus"></i></button>
            </div>
        </div>
        
        <!-- Button trigger modal -->

        <!-- Fin publicar -->

        <!-- modal -->

        <!-- Modal -->




        <!-- fin modal -->
        <?php

        showError('post_img');
        if (count($posts) < 1) {
            echo "<p style='width:100%' class='p-2 bg-white border rounded text-center my-3 col-12'>Follow Someone or Add a new post</p>";
        }
        foreach ($posts as $post) {
            $likes = getLikes($post['id']);
            $comments = getComments($post['id']);
        ?>

         
            <div class="card mt-4 px-3" style="background-color:#272727; color:#ffffff; max-height:770px;">
                <div class="card-title d-flex justify-content-between  align-items-center">

                    <div class="d-flex align-items-center p-2">
                        <img src="assets/images/profile/<?= $post['profile_pic'] ?>" alt="" height="30" width="30" class="rounded-circle border">&nbsp;&nbsp;
                        
                        <div class="d-flex flex-column ">
                            <a href='?u=<?= $post['username'] ?>' class="text-decoration-none text-white"><?= $post['first_name'] ?> <?= $post['last_name'] ?></a>
                            
                            <small style="opacity: .5;" >CEO <i class="bi bi-caret-down-fill"></i></small>
                        </div>

                       
                    </div>
                    
                  
                    <div class="p-2">
                        <?php
                        if ($post['uid'] == $user['id']) {
                        ?>

                            <div class="dropdown">

                                <i class="bi bi-three-dots-vertical hover_efecto" id="option<?= $post['id'] ?>" data-bs-toggle="dropdown" aria-expanded="false"></i>

                                <ul class="dropdown-menu" aria-labelledby="option<?= $post['id'] ?>">
                                    <li><a class="dropdown-item" href="assets/php/actions.php?deletepost=<?= $post['id'] ?>"><i class="bi bi-trash-fill"></i> Delete Post</a></li>
                                </ul>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
                 <?php
                if ($post['post_text']) {
                ?>
          
                <div class="p-1 contenedor_descripcion_post" style="flex-direction: column;">
                        <p id="texto_descripcipcion_post" style="min-width: 100%; margin: 0;"><?= $post['post_text'] ?></p> 
                    <div class="d-flex gap-1 contenedor_editar_form" >
                          <?php 
                        if($post['user_id'] == $user['id']){?>

                        <i 
                        role="button" class="bi bi-pencil ml-1 editar_descripcionpost_button_2" 
                        id="editar_descripcionpost_button" 
                        >
                        </i>
                             <form id="form_editar_descripcion" method="post" action="assets/php/ajax.php?editarPostDescripcion">

                            <input name="nuevo_descipcionpost" type="text" style="display: none; outline: none;" id="input_descripcionpost" class="input_descripcionpost">
                            <input type="number" value="<?= $post['id'] ?>" name="post_id" style="display: none;" >
                        </form>
                        <?php }?>
                       
                    </div>
                       
                    </div>
                <?php
                }
                ?>

                <?php 
                $extension = pathinfo($post['post_img'], PATHINFO_EXTENSION);

                if ($extension && $extension != "") {
// Verificar si la extensión es .mp4
if ($extension == "mp4") {
// Usar una etiqueta de video
?>
<video style="max-height: 340px; object-fit: cover;border-radius: 8px;" src="assets/images/posts/<?= $post['post_img'] ?>" loading=lazy class="imagen_post" controls ></video>
<?php
} else {
// Usar una etiqueta de imagen
?>
<img style="max-height: 340px; object-fit: cover; border-radius: 8px;" src="assets/images/posts/<?= $post['post_img'] ?>" loading=lazy class="imagen_post" alt="..." data-bs-toggle="modal" data-bs-target="#postview<?= $post['id'] ?>">
<?php
}
} ?>
               

                <!-- HASTA AQUI -->
            <div style="font-size: x-larger" class="p-2 d-flex align-items-center justify-content-between"> 


            <div class="d-flex align-items-center">
                  <span class="cuadro_like_post" style="background: #201e1f;
                                 border-radius: 8px;
                                 cursor: pointer;
                                 display: flex;
                                 gap: 8px;
                                 width: 60px;
                                 height: 40px;
                                 align-items: center;
                                 justify-content: center;">
                        <?php
                        if (checkLikeStatus($post['id'])) {
                            $like_btn_display = 'none';
                            $unlike_btn_display = '';
                        } else {
                            $like_btn_display = '';
                            $unlike_btn_display = 'none';
                        }
                        ?>
                        <!-- <i class="bi bi-heart-fill unlike_btn text-danger" style="display:<?= $unlike_btn_display ?>" data-post-id='<?= $post['id'] ?>'></i> -->
                        <!-- <i class="bi bi-heart like_btn" style="display:<?= $like_btn_display ?>" data-post-id='<?= $post['id'] ?>'></i> -->
                        <svg 
                            style="display:<?= $unlike_btn_display ?>"
                            data-post-id='<?= $post['id'] ?>'
                            xmlns="http://www.w3.org/2000/svg" 
                            width="16" 
                            height="16" 
                            fill="currentColor" 
                            class="bi bi-heart-fill unlike_btn text-danger" 
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg>


                        <svg 
                            style="display:<?= $like_btn_display ?>" data-post-id='<?= $post['id'] ?>'
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                            fill="currentColor" 
                            width="16" 
                            height="16" 
                            class="bi bi-heart like_btn" 
                            viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                         <span
                         style="font-size: small; padding-bottom: 1px;" 
                         id="likecount<?= $post['id'] ?>"><?= count($likes) ?>
                        </span>
                    </span> 
                    &nbsp;&nbsp;
                    
                    <span style="background: #201e1f;
                                 border-radius: 8px;
                                 /* cursor: pointer; */
                                 display: flex;
                                 width: 60px;
                                 height: 40px;
                                 align-items: center;
                                 justify-content: center;">
                         <svg 
                        class="bi bi-chat-left d-flex align-items-center mt-1" 
                        style="font-size:small; margin: 0 !important;"
                        data-bs-toggle="modal" 
                        data-bs-target="#postview<?= $post['id'] ?>"
                        xmlns="http://www.w3.org/2000/svg" 
                        width="16" 
                        height="16" 
                        fill="currentColor" 
                        viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <span class="mx-2 text-small" style="font-size:small; padding-bottom: 2px;" data-bs-toggle="modal" data-bs-target="#postview<?= $post['id'] ?>"><?= count($comments) ?></span>
                    </svg>
                    </span>
                   &nbsp;&nbsp;
                    <span style="background: #201e1f;
                                 border-radius: 8px;
                                 cursor: pointer;
                                 display: flex;
                                 width: 60px;
                                 height: 40px;
                                 align-items: center;
                                 justify-content: center;"
                          role="button"
                          data-bs-target="#compartirPostLink"
                          data-bs-toggle="modal"
                          data-post-username= "<?= $post['username'] ?>"
                          data-post-id = "<?= $post['id'] ?>"
                          >
                         <img src="assets/images/share_icon.png" alt="" width="28px" height="28px" style="object-fit: cover;">
                    </svg>
                    </span>
                    &nbsp;&nbsp;
                    <span style="background: #201e1f;
                                 border-radius: 8px;
                                 cursor: pointer;
                                 display: flex;
                                 width: 60px;
                                 height: 40px;
                                 align-items: center;
                                 justify-content: center;">
                        <i style="font-size: 24px;" class="bi bi-person"></i>
                    </svg>
                    </span>
                 <div>
                </div>
               
            </div>

            <span style="font-size:small" class="text-muted"> <?= show_time($post['created_at']) ?></span>
            </div>
              <?php if(count($comments) > 0){
                ?>    
            
                
            <div id="contenedo_principal_comentarios" style="height:220px; max-height:100%; overflow-y: scroll; padding-right: 30px;">
                 <?php foreach ($comments as $comment) {
                                        $cuser = getUser($comment['user_id']);
                                    ?>
                                        <div class="d-flex align-items-center justify-content-end p-1 gap-1" style="padding-right: 0 !important; padding-top: 8px !important;">
                                            <div class="align-self-start pt-2">
                                                <img src="assets/images/profile/<?= $cuser['profile_pic'] ?>" alt="" height="25" width="25" class="rounded-circle border">
                                            </div>
                                       
                                            <div class="d-flex flex-column justify-content-start align-items-start col-10 px-1 rounded background_bubble_chat position-relative " style="overflow-wrap: break-word;">

                                                <h6 style="margin: 0px;">
                                                    <a href="?u=<?= $cuser['username'] ?>" class="text-decoration-none text-dark text-muted text_size_small">@<?= $cuser['username'] ?></a> 
                                                </h6>
                                                
                                                <p 
                                                class="text_size_small" 
                                                style=" color: #aaaaaa;
                                                        padding: 10px 15px;
                                                        display: inline-block;
                                                        max-width: 100%;
                                                        margin-bottom: 0.25rem;
                                                        font-size: 0.9rem;
                                                        position: relative;
                                                        padding-right: 1.65rem;" ><?= $comment['comment'] ?></p> 

                                                 <form 
                                                 method="post"
                                                 action="assets/php/ajax.php?editarComentario"
                                                 class="form_editar_comentario" style="display: none; outline: none;">
                                                    <input id="input_editar_comentario" class="input_editar_comentario" type="text" value="<?= $comment['comment'] ?>" name="nuevo_comentario" style="transform: scale(0);">
                                                    <input id="input_editar_comentario_id" class="input_editar_comentario_id" type="number" value="<?=$comment['id'] ?>" style="display: none; outline: none;" name="id_comentario">
                                                </form>       
                                    <?php if($user['id'] == $comment['user_id']) {?>  
                                        <div class="menu-comentario">
                                            <i style="color: #b0b0b0;" class="fas fa-pen"></i>
                                            <ul class="menu">
                                                <li ><a class="boton_editar_comentario" id="<?=$comment['id'] ?>" >Editar</a></li>
                                                <li><a class="boton_eliminar_comentario" id="<?=$comment['id'] ?>">Eliminar</a></li>
                                                
                                            </ul>
                                        </div>
                                       <?php }  ?>       
                                            </div>
                                        </div>
                                        <div id="bubbleChatPadre" class="d-flex justify-content-end align-items-center gap-2 px-1 mb-2">
                                            <div class="button_like_comentario" id="<?= $comment['id'] ?>" style="display: inline-block;
                                                        border: 0;
                                                        padding: 3px 8px;
                                                        font-size: .8rem;
                                                        border-radius: 8px;
                                                        cursor: pointer;
                                                        background: #38383878; ">
                                                <i class="bi bi-hand-thumbs-up-fill"></i> 
                                                <span id="<?= $comment['user_id'] ?>"><?= count(getLikesCommentarios($comment['id'])) ?></span>  
                                                
                                            </div>
                                            <button
                                             id="responder_chat"
                                             style="display: inline-block;
                                                    border: 0;
                                                    padding: 3px 8px;
                                                    font-size: .8rem;
                                                    border-radius: 8px;
                                                    cursor: pointer;
                                                    background: #38383878;"
                                             class="text-white text_size_small" >responder</button>

                                            <p style="margin:0px;" class="text-muted">(<?= show_time($comment['created_at']) ?>)</p>
                                        </div>

                                        
                                       <?php 
                                        $repuestasAComentarios = getResponsesComments($comment['id']);

                                        foreach($repuestasAComentarios as $respuesta){
                                            $userProfile = getUser($respuesta['user_id']);
                                        
                                       ?> 
                                        
                                        <div class="align-self-start pt-2">
                                           
                                        </div>
                                            
                                  <div class="d-flex gap-1 justify-content-end">

                                            <img src="assets/images/profile/<?=$userProfile['profile_pic'] ?>" alt="" width="25px" height="25px"
                                            class="rounded-circle" style="border: 1px solid white;">

                                            <div class="d-flex flex-column justify-content-start align-items-start col-10 px-1 rounded background_bubble_chat " style="overflow-wrap: break-word; width:55%; position: relative;">
                                            
                                                <h6 style="margin: 0px;">
                                                    <a href="?u=<?= $userProfile['username'] ?>" class="text-decoration-none text-dark text-muted text_size_small">@<?=$userProfile['username']?></a> 
                                                </h6>
                                                
                                                <p class="text_size_small" style=" color: #aaaaaa;
                                                        padding: 10px 15px;
                                                        display: inline-block;
                                                        max-width: 100%;
                                                        margin-bottom: 0.25rem;
                                                        font-size: 0.9rem;
                                                        position: relative;
                                                        padding-right: 1.65rem;"><?= $respuesta['comment']?></p> 

                                                <form 
                                                 method="post"
                                                 action="assets/php/ajax.php?editarResponseComentario"
                                                 class="form_editar_comentario_response" style="display: none; outline: none;">
                                                    <input id="input_editar_comentario_response" class="input_editar_comentario_response" type="text" value="<?= $respuesta['comment'] ?>" name="nuevo_comentario" style="transform: scale(0);">
                                                    <input id="input_editar_comentario_id_response" class="input_editar_comentario_id_response" type="number" value="<?=$respuesta['id'] ?>" style="display: none; outline: none;" name="id_comentario">
                                                </form>       
                                        <?php if($user['id'] == $respuesta['user_id']) {?>  
                                            
                                        <div class="menu-comentario">
                                            <i style="color: #b0b0b0;" class="fas fa-pen"></i>
                                            <ul class="menu">
                                                <li ><a class="boton_editar_comentario_response" id="<?=$respuesta['id'] ?>" >Editar</a></li>
                                                <li><a class="boton_eliminar_comentario_response" id="<?=$respuesta['id'] ?>">Eliminar</a></li>
                                                
                                            </ul>
                                        </div>
                                       <?php }  ?>  
                                                      
                                              
        </div><br>
                 
    </div>      
    <!-- Botones de reacciones -->
                                            <!-- LIKES  -->
          <div class="d-flex justify-content-end " style="padding-right: 4px;">
            <div class="button_like_response_comentario " id="<?= $respuesta['id'] ?>" 
            style="display: inline-block;
            border: 0;
            padding: 3px 8px;
            font-size: .8rem;
            border-radius: 8px;
            cursor: pointer;
            background: #38383878; 
            margin-right: 4px;">
            <i class="bi bi-hand-thumbs-up-fill"></i> 
            <span id="<?= $respuesta['user_id'] ?>"><?= count(getLikesResponseCommentarios($respuesta['id'])) ?></span>  
                                                
            </div>
                                        
                                            <!-- TIME AGO -->
            <p style="margin:0px;" class="text-muted">(<?= show_time($respuesta['created_at']) ?>)</p>
          </div>
                                       <?php } ?>

                                    <?php
                                    }
                                    ?>
            </div>
               <?php }else{
                
               ?>
                <div style="height:0; max-height:100%; overflow-y: scroll; ">
                </div>
                <?php } ?>
                
                <?php  
               
                    if($post['allow_comment']){

                    
                ?>

                <div class="input-group p-2 gap-2 align-items-center">

                     <img src="assets/images/profile/<?= $user['profile_pic'] ?>" alt="" height="30" width="30" class="rounded-circle border">
                        
                    <input
                    style="outline:none;
                           height: 30px;
                           background-color: #515151;
                           flex-grow: 1;
                           flex-basis: 0;
                           padding: 8px 10px;
                           font-size: .9rem;
                           border-radius: 8px;
                           margin-right: 0.5rem;
                           margin-left: 0.5rem;
                           color:#aaaaaa;"
                     type="text" class="form-control  rounded border-0 shadow-none comment-input"  aria-label="Recipient's username" aria-describedby="button-addon2">

                    <button 
                     style="width:20%;
                            background-color: #515151; z-index: 0;" 
                    class="btn btn-outline-primary rounded-0 border-0 add-comment" data-page='wall' data-cs="comment-section<?= $post['id'] ?>" data-post-id="<?= $post['id'] ?>" type="button" id="button-addon2"><i class="bi bi-send-fill text-light"></i></button>
                </div>

                <?php }?>

            </div>
           
           
           
           
           
           
           <!-- modal postview -->
           
           
           
            <div class="modal fade" id="postview<?= $post['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div
                style="width: 65%; height: 100vh;" 
                class="modal-dialog modal-xl modal-dialog-centered">
                    <div 
                    style="max-height: 700px;
                            height: 560px;" 
                    class="modal-content" 
                    id="modal_contenido">

                        <div class="modal-body d-md-flex p-0">
                            <div class="col-md-8 col-sm-12">
                                <img
                                 style=" max-height:555px; height:100%; object-fit:contain; "
                                src="assets/images/posts/<?= $post['post_img'] ?>" style="max-height:90vh" class="w-100 overflow:hidden">
                            </div>



                            <div class="col-md-4 col-sm-12 d-flex flex-column border-start">
                                <div class="d-flex flex-column p-2 ">
                                    <div class="d-flex gap-2 align-items-center"> 
                                        <img src="assets/images/profile/<?= $post['profile_pic'] ?>" alt="" height="50" width="50" class="rounded-circle border" style="object-fit: cover;">
                                        <div class="d-flex flex-column justify-content-start">
                                        <h6 style="margin: 0px;"><?= $post['first_name'] ?> <?= $post['last_name'] ?></h6>
                                       <div style="font-size:small" class="text-muted">Posted <?= show_time($post['created_at']) ?> </div>
                                    </div>
                                    </div>
                                    <div>&nbsp;&nbsp;&nbsp;</div>
                                    <?= show_description($post['post_text']) ?>
                                    
                                  <div style="font-size: x-larger" class="p-2 d-flex align-items-center justify-content-between"> 


            <div class="d-flex align-items-center">
                  <span>
                        <?php
                        if (checkLikeStatus($post['id'])) {
                            $like_btn_display = 'none';
                            $unlike_btn_display = '';
                        } else {
                            $like_btn_display = '';
                            $unlike_btn_display = 'none';
                        }
                        ?>
                        <!-- <i class="bi bi-heart-fill unlike_btn text-danger" style="display:<?= $unlike_btn_display ?>" data-post-id='<?= $post['id'] ?>'></i> -->
                        <!-- <i class="bi bi-heart like_btn" style="display:<?= $like_btn_display ?>" data-post-id='<?= $post['id'] ?>'></i> -->
                        <svg 
                            id="corazon_like_menos"
                            style="display:<?= $unlike_btn_display ?>"
                            data-post-id='<?= $post['id'] ?>'
                            xmlns="http://www.w3.org/2000/svg" 
                            width="16" 
                            height="16" 
                            fill="currentColor" 
                            class="bi bi-heart-fill unlike_btn text-danger" 
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg>


                        <svg 
                            id="corazon_like_mas"
                            style="display:<?= $like_btn_display ?>" data-post-id='<?= $post['id'] ?>'
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                            fill="currentColor" 
                            width="16" 
                            height="16" 
                            class="bi bi-heart like_btn" 
                            viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                         <span
                         style="font-size: small;" 
                         id="likecount<?= $post['id'] ?>"><?= count($likes) ?>
                        </span>
                    </span> 
                    &nbsp;&nbsp;
                    
                    <svg 
                        class="bi bi-chat-left d-flex align-items-center mt-1" 
                        style="font-size:small"
                        data-bs-toggle="modal" 
                        data-bs-target="#postview<?= $post['id'] ?>"
                        xmlns="http://www.w3.org/2000/svg" 
                        width="16" 
                        height="16" 
                        fill="currentColor" 
                        viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <span class="mx-2 text-small" style="font-size:small" data-bs-toggle="modal" data-bs-target="#postview<?= $post['id'] ?>"><?= count($comments) ?></span>
                    </svg>
                    
                 <div>
                </div>
               
            </div>

            <span style="font-size:small" class="text-muted"> <?= show_time($post['created_at']) ?></span>
            </div>
                                    <hr style="width: 100%;" />

                                </div>


                                <div class="flex-fill align-self-stretch overflow-auto" id="comment-section<?= $post['id'] ?>" style="height: 100px; padding: 12px; overflow-x: hidden !important;">

                                    <?php
                                    if (count($comments) < 1) {
                                    ?>
                                        <p class="p-3 text-center my-2 nce">no comments</p>
                                    <?php
                                    }
                                     foreach ($comments as $comment) {
                                        $cuser = getUser($comment['user_id']);
                                    ?>
                                        <div class="d-flex align-items-center justify-content-end p-1 gap-1" style="padding-right: 0 !important; padding-top: 8px !important;">
                                            <div class="align-self-start pt-2">
                                                <img src="assets/images/profile/<?= $cuser['profile_pic'] ?>" alt="" height="25" width="25" class="rounded-circle border">
                                            </div>
                                       
                                            <div class="d-flex flex-column justify-content-start align-items-start col-10 px-1 rounded background_bubble_chat position-relative " style="overflow-wrap: break-word;">

                                                <h6 style="margin: 0px;">
                                                    <a href="?u=<?= $cuser['username'] ?>" class="text-decoration-none text-dark text-muted text_size_small">@<?= $cuser['username'] ?></a> 
                                                </h6>
                                                
                                                <p 
                                                class="text_size_small" 
                                                style=" color: #aaaaaa;
                                                        padding: 10px 15px;
                                                        display: inline-block;
                                                        max-width: 100%;
                                                        margin-bottom: 0.25rem;
                                                        font-size: 0.9rem;
                                                        position: relative;
                                                        padding-right: 1.65rem;" ><?= $comment['comment'] ?></p> 

                                                 <form 
                                                 method="post"
                                                 action="assets/php/ajax.php?editarComentario"
                                                 class="form_editar_comentario" style="display: none; outline: none;">
                                                    <input id="input_editar_comentario" class="input_editar_comentario" type="text" value="<?= $comment['comment'] ?>" name="nuevo_comentario" style="transform: scale(0);">
                                                    <input id="input_editar_comentario_id" class="input_editar_comentario_id" type="number" value="<?=$comment['id'] ?>" style="display: none; outline: none;" name="id_comentario">
                                                </form>       
                                    <?php if($user['id'] == $comment['user_id']) {?>  
                                        <div class="menu-comentario">
                                            <i style="color: #b0b0b0;" class="fas fa-pen"></i>
                                            <ul class="menu">
                                                <li ><a class="boton_editar_comentario" id="<?=$comment['id'] ?>" >Editar</a></li>
                                                <li><a class="boton_eliminar_comentario" id="<?=$comment['id'] ?>">Eliminar</a></li>
                                                
                                            </ul>
                                        </div>
                                       <?php }  ?>       
                                            </div>
                                        </div>
                                        <div id="bubbleChatPadre" class="d-flex justify-content-end align-items-center gap-2 px-1 mb-2">
                                            <div class="button_like_comentario" id="<?= $comment['id'] ?>" style="display: inline-block;
                                                        border: 0;
                                                        padding: 3px 8px;
                                                        font-size: .8rem;
                                                        border-radius: 8px;
                                                        cursor: pointer;
                                                        background: #38383878; ">
                                                <i class="bi bi-hand-thumbs-up-fill"></i> 
                                                <span id="<?= $comment['user_id'] ?>"><?= count(getLikesCommentarios($comment['id'])) ?></span>  
                                                
                                            </div>
                                            <button
                                             id="responder_chat"
                                             style="display: inline-block;
                                                    border: 0;
                                                    padding: 3px 8px;
                                                    font-size: .8rem;
                                                    border-radius: 8px;
                                                    cursor: pointer;
                                                    background: #38383878;"
                                             class="text-white text_size_small" >responder</button>

                                            <p style="margin:0px;" class="text-muted">(<?= show_time($comment['created_at']) ?>)</p>
                                        </div>

                                        
                                       <?php 
                                        $repuestasAComentarios = getResponsesComments($comment['id']);

                                        foreach($repuestasAComentarios as $respuesta){
                                            $userProfile = getUser($respuesta['user_id']);
                                        
                                       ?> 
                                        
                                        <div class="align-self-start pt-2">
                                           
                                        </div>
                                            
                                  <div class="d-flex gap-1 justify-content-end">

                                            <img src="assets/images/profile/<?=$userProfile['profile_pic'] ?>" alt="" width="25px" height="25px"
                                            class="rounded-circle" style="border: 1px solid white; object-fit: cover">

                                            <div class="d-flex flex-column justify-content-start align-items-start col-10 px-1 rounded background_bubble_chat " style="overflow-wrap: break-word; width:55%; position: relative;">
                                            
                                                <h6 style="margin: 0px;">
                                                    <a href="?u=<?= $userProfile['username'] ?>" class="text-decoration-none text-dark text-muted text_size_small">@<?=$userProfile['username']?></a> 
                                                </h6>
                                                
                                                <p class="text_size_small" style=" color: #aaaaaa;
                                                        padding: 10px 15px;
                                                        display: inline-block;
                                                        max-width: 100%;
                                                        margin-bottom: 0.25rem;
                                                        font-size: 0.9rem;
                                                        position: relative;
                                                        padding-right: 1.65rem;"><?= $respuesta['comment']?></p> 

                                                <form 
                                                 method="post"
                                                 action="assets/php/ajax.php?editarResponseComentario"
                                                 class="form_editar_comentario_response" style="display: none; outline: none;">
                                                    <input id="input_editar_comentario_response" class="input_editar_comentario_response" type="text" value="<?= $respuesta['comment'] ?>" name="nuevo_comentario" style="transform: scale(0);">
                                                    <input id="input_editar_comentario_id_response" class="input_editar_comentario_id_response" type="number" value="<?=$respuesta['id'] ?>" style="display: none; outline: none;" name="id_comentario">
                                                </form>       
                                        <?php if($user['id'] == $respuesta['user_id']) {?>  
                                            
                                        <div class="menu-comentario">
                                            <i style="color: #b0b0b0;" class="fas fa-pen"></i>
                                            <ul class="menu">
                                                <li ><a class="boton_editar_comentario_response" id="<?=$respuesta['id'] ?>" >Editar</a></li>
                                                <li><a class="boton_eliminar_comentario_response" id="<?=$respuesta['id'] ?>">Eliminar</a></li>
                                                
                                            </ul>
                                        </div>
                                       <?php }  ?>  
                                                      
                                              
        </div><br>
                 
    </div>      
    <!-- Botones de reacciones -->
                                            <!-- LIKES  -->
          <div class="d-flex justify-content-end " style="padding-right: 4px;">
            <div class="button_like_response_comentario " id="<?= $respuesta['id'] ?>" 
            style="display: inline-block;
            border: 0;
            padding: 3px 8px;
            font-size: .8rem;
            border-radius: 8px;
            cursor: pointer;
            background: #38383878; 
            margin-right: 4px;">
            <i class="bi bi-hand-thumbs-up-fill"></i> 
            <span id="<?= $respuesta['user_id'] ?>"><?= count(getLikesResponseCommentarios($respuesta['id'])) ?></span>  
                                                
            </div>
                                        
                                            <!-- TIME AGO -->
            <p style="margin:0px;" class="text-muted">(<?= show_time($respuesta['created_at']) ?>)</p>
          </div>
                                       <?php } ?>

                                    <?php
                                    }
                                    ?>

                                </div>
                                <!-- INPUT PARA ESCRIBIR COMENTARIO POSTVIEW -->
                                <?php if($post['allow_comment'] == 1){ ?>
                                <div class="input-group p-2 border-0">

                                    <input 
                                    style="max-width: 80%;"
                                    type="text" class="form-control rounded border-0 shadow-none comment-input" placeholder="Escribe algo..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    
                                    <button
                                    style="background: #272727; width:20%;" 
                                    class="btn btn-outline-primary rounded border-0 add-comment ms-2" data-cs="comment-section<?= $post['id'] ?>" data-post-id="<?= $post['id'] ?>" type="button" id="button-addon2"><i class="bi bi-send-fill text-light"></i> </button>
                                </div>

                                <?php }?>
                            </div>



                        </div>

                    </div>
                </div>
            </div>

            <!-- AQUI TERMINA EL MODAL DE POSTVIEW -->


            <div class="modal fade" id="likes<?= $post['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Likes</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <?php
                            if (count($likes) < 1) {
                            ?>
                                <p>Currently No Likes</p>
                            <?php
                            }
                            foreach ($likes as $f) {

                                $fuser = getUser($f['user_id']);
                                $fbtn = '';
                                if (checkBS($f['user_id'])) {
                                    continue;
                                } else if (checkFollowStatus($f['user_id'])) {
                                    $fbtn = '<button class="btn btn-sm btn-danger unfollowbtn" data-user-id=' . $fuser['id'] . ' >Unfollow</button>';
                                } else if ($user['id'] == $f['user_id']) {
                                    $fbtn = '';
                                } else {
                                    $fbtn = '<button class="btn btn-sm btn-primary followbtn" data-user-id=' . $fuser['id'] . ' >Follow</button>';
                                }
                            ?>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center p-2">
                                        <div><img src="assets/images/profile/<?= $fuser['profile_pic'] ?>" alt="" height="40" width="40" class="rounded-circle border">
                                        </div>
                                        <div>&nbsp;&nbsp;</div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <a href='?u=<?= $fuser['username'] ?>' class="text-decoration-none text-dark">
                                                <h6 style="margin: 0px;font-size: small;"><?= $fuser['first_name'] ?> <?= $fuser['last_name'] ?></h6>
                                            </a>
                                            <p style="margin:0px;font-size:small" class="text-muted">@<?= $fuser['username'] ?></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <?= $fbtn ?>

                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>

        <?php
        }
        ?>



    </div>

    <div style="background-color: #272727 !important; height: 100%; width: 260px;     position: -webkit-sticky;
    position: sticky;
    top: 20px;" class="col-3 mt-0 p-3 rounded shadow">




        <div class="card">
         
            <img style="max-height: 140px; object-fit: cover;" class="card-img-top" src="assets/images/frontpage/<?=$user['frontpage_pic'] ?>" alt="Bologna">
            <div class="card-body text-center">
                
                <img
                style="
                border-radius: 80px;
                width: 120px;
                height: 120px;    
                object-fit: cover;" 
                class="avatar rounded-circle" src="assets/images/profile/<?= $user['profile_pic'] ?>" alt="Bologna">
                <a style="font-weight: 500 !important;" href="?u=<?= $user['username'] ?>" class="card-title fs-6 d-block text-decoration-none text-secondary font-weight-bold" ><?= $user['first_name'] ?> <?= $user['last_name'] ?></a >
                <p  class="card-text text-muted"><?= $user['username'] ?> </p>
                <hr style="width: 100% !important;" />

                <div class="d-flex justify-content-between ">
                 <div>
                    <p  class="p-0 m-0 font-weight-bold">
                        <?= isset($profile['followers']) ? count($profile['followers']) : "0" ?>
                    </p>
                    <span style="letter-spacing: 1px;">Followers</span>

                 </div>
                 <div>
                    
                    <p  class="p-0 m-0 font-weight-bold"> <?= allLikesUser()  ?></p>
                    <span style="letter-spacing: 1px;">Likes</span>
                 </div>
                 <div>  
                    <p  class="p-0 m-0 font-weight-bold"><?=count($posts)?></p>
                    <span style="letter-spacing: 1px;">Photos</span>
                 </div>   
                </div>
        
            </div>
        </div>


        <!-- SECCION DE EVENTOS-->
        <div>
            <div class ="d-flex justify-content-between border-bottom font-weight-bold mt-3 align-items-end ">
                <p style="font-weight: 800;" class="text-secondary font-weight-bold  m-0">Eventos</p>
                <a href="?eventos=1">click aqui</a>
            </div>
            <br/>

            <div class="d-flex text-secondary position-relative gap-3 mb-3">
                <div style="max-width:74px;
                            height:64px;
                            background: linear-gradient(to bottom, #212529 65%, #0d6efd 50%);
                            text-align: center;
                            /* width: 89px !important; */
                            border-radius: 8px;
                            box-shadow: rgba(255, 255, 255, 0.24) 0px 3px 8px;
                            padding: 3px 14px;"
                     class="d-flex flex-column align-items-center"
                 >

                    <p style="width: 74px; margin:4px 0 10px 0 ;">15</p>
                    <p 
                    style=" font-size: 12px;"
                    class=" text-white ">Enere</p>
                </div>

                <div  class ="d-flex flex-column  ">
                    <p style="font-weight: 800; margin:0; font-size: 14px;" class="text-secondary font-weight-bold">Cumpleaños</p>
                    <span style="font-size: 12px;"><i class="bi bi-geo-alt-fill"></i> Juchitan</span>
                    <a href="?eventos=1" style="font-size: 12px;">Mas informacion</a>  
                </div>
            </div>
            <div class="d-flex text-secondary position-relative gap-3 mb-3">
           
 
        </div>
        <div>
            <div class ="d-flex justify-content-between border-bottom font-weight-bold mt-3 align-items-end ">
                <p style="font-weight: 800;" class="text-secondary font-weight-bold m-0">Peligro</p>
                <a href="#">ten cuidado con</a>
            </div>
            <div class="mt-3">
                <img style="object-fit: cover;" width="100%" src="assets/images/oficial_logo.png"/>
            </div>
            <br/>
        </div> 
        <div>
            <div class ="d-flex justify-content-between border-bottom font-weight-bold mt-3 align-items-end ">
                <p style="font-weight: 800;" class="text-secondary font-weight-bold m-0">Contactos</p>
                <a href="#">hola!</a>
            </div>
           <p
           style="margin: 4px 0;
    background-color: rgb(52 73 94);
    color: white;
    text-align: center;
    padding: 4px 0;
    font-size: 12px;"
           >Copyright 2022 Avadisk</p>
        </div>  
        
<!-- MODAL PARA EL Post -->
        <div id="miModal" class="modal">
            <div class="flex" id="flex">
                <div class="contenido-modal">
                    
                    <div class="emergente-containercom">
                        <div class="public-emer-container">
                            <span class="close" id="close">&times;</span>


                            <div class="user-profile" id="user-profile">
                                <img src="avatars/" alt="">
            
                                    <div>
                                        <a href="#">
                                        <p></p></a>
                                        <div>
                                        <a href="#" class="vinculo-e">
                                        <small></small></a></div>
                                    </div>
                                </div>


                            <div class="public-area">
                                 <div class="user-profile mb-2   ">
              <img style="background-size: cover;" height="45px" src="assets/images/profile/<?= $user['profile_pic'] ?>" alt="perfil" />

              <div>
                <a href="?u=<?= $user['username'] ?>" 
                style="font-weight: 500;"
                class="d-block text-decoration-none text-white "
                ><?= $user['first_name'] ?> <?= $user['last_name'] ?></a>
                <small style="opacity: .5;" >CEO <i class="bi bi-caret-down-fill"></i></small>
              </div>
            </div>
                                <span class="placeholder">Cuentanos tu dia <?= $user['first_name'] ?> </span>
                                <div class="input-editable" contenteditable="true"></div>            
                            </div>
                
                
                    <div class="emergente-yr12">
                
                    <div class="wrapper-s12">
                        
                        <form class="form-file form_modal" id="posteo_imagen"  method="post"  enctype="multipart/form-data"
                        action="assets/php/actions.php?addpost" >
                        <input type="text" name="post_text" id="post_textarea" hidden />
                        <input type="file"  name="post_img" id="select_post_img" 
                        class="file-input" hidden>
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p>Browse File To upload</p>
                        </form>
                        <section class="progress-area"></section>
                        <section class="uploaded-area"></section>
                    </div>
                
                </div>
                
                
                <div class="privacy">
                    <i class="fas fa-globe-asia"></i>
                    <span>Todos pueden comentar</span>
                    <label class="toggle">
                        <input checked type="checkbox" id="toggle-input" name="allow_comment" form="posteo_imagen" value="1">
                        <span class="slider"></span>
                    </label>
                </div>
                <div class="footer-box">
                    <!-- <ul class="footer-icons">
                        <li><i class="far fa-file-image"></i></li>
                        <li><i class="fas fa-map-marker-alt"></i></li>
                        <li><i class="far fa-grin"></i></li>
                        <li><i class="far fa-calendar"></i></li>
                        <li><i class="fas fa-user"></i></li>
                    </ul> -->
                   
                    <span style="padding-top: 10px ;" class="counter-limit">400</span>
                    <button style="position: absolute; right: 0; bottom: -10px;" type="submit" form="posteo_imagen" class="public-btn ">Publicar</button>

                    <button style="position: absolute; right: 120px; bottom: -10px;"  class="public-btn btn btn-primary" id="publicar_estado">Estado</button>   
                
                </div>
               
                </div>
                <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
         
                </div>
                </div>
                
       
                         <!-------- modal ------->


        </div>

    </div>
</div>

<script>




var toggle = document.getElementById("toggle-input"); // Obtener el checkbox
toggle.addEventListener("change", function() { // Agregar un evento al cambiar de estado
if (this.checked) { // Si está marcado
// Hacer algo si el toggle está encendido
alert("Todos podran comentar tu post");
} else { // Si no está marcado
// Hacer algo si el toggle está apagado
alert("Nadie podra comentar tu post");
}
});

let boton_de_wall_publicar = document.getElementById('boton_de_wall_publicar')

boton_de_wall_publicar.addEventListener('click', (e)=>{
    e.preventDefault()
    let textarea = document.getElementById("post_textarea");

    textarea.click()

})

let editar_descripcionpost_button =document.querySelectorAll('.editar_descripcionpost_button_2')

let texto_descripcipcion_post = document.getElementById('texto_descripcipcion_post')
let input_descripcionpost = document.querySelectorAll('.input_descripcionpost')
let boton_editar_comentario = document.querySelectorAll('.boton_editar_comentario')
let boton_editar_comentario_response = document.querySelectorAll('.boton_editar_comentario_response')
let form_editar_comentario =document.querySelectorAll('.form_editar_comentario')
let form_editar_comentario_response =document.querySelectorAll('.form_editar_comentario_response')
let input_editar_comentario = document.querySelectorAll('.input_editar_comentario');
let input_editar_comentario_response = document.querySelectorAll('.input_editar_comentario_response');
let boton_eliminar_comentario = document.querySelectorAll('.boton_eliminar_comentario')
let boton_eliminar_comentario_response = document.querySelectorAll('.boton_eliminar_comentario_response')
let button_like_comentario = document.querySelectorAll('.button_like_comentario')
let button_like_response_comentario = document.querySelectorAll('.button_like_response_comentario')


let mostrarInputPost = (e) =>{
    let input_editar = e.target.nextElementSibling.firstElementChild
    let descripcionText = e.target.parentElement.previousElementSibling
    
    input_editar.value = descripcionText.textContent
    if(input_editar.style.display === "none"){
       
        input_editar.style.display = 'inline-block'

    }else{
        input_editar.style.display = 'none'
    }
}

let editarDescripcionPost = (e) =>{
    
    let form_editar_descripcion = e.target.parentElement
  
    form_editar_descripcion.submit()
}


editar_descripcionpost_button.forEach((btn)=>{
   
    btn.addEventListener("click",mostrarInputPost )
})

input_descripcionpost.forEach((inpt)=>{
    inpt.addEventListener("change", editarDescripcionPost )
})

// boton_editar_comentario.addEventListener('click', mostrarEditComentario)


boton_editar_comentario.forEach((el)=>{
    
    let li = el.parentElement
    let ul = li.parentElement
    let padre = ul.parentElement
    let form_editar_comentario_element =padre.previousElementSibling
    let idComent =  el.id

    el.addEventListener('click', ()=>{
        let inputText = form_editar_comentario_element.firstElementChild

        if(form_editar_comentario_element.style.display === 'none'){
            form_editar_comentario_element.style.display = ''
            inputText.style.transform = 'scale(1)'
            inputText.addEventListener('change', ()=>{
                form_editar_comentario_element.submit()
            })

        }else{
            form_editar_comentario_element.style.display = 'none'
            inputText.style.transform = 'scale(0)'
            inputText.removeEventListener('change')
        }
    })
})

boton_editar_comentario_response.forEach((el)=>{
    
    let li = el.parentElement
    let ul = li.parentElement
    let padre = ul.parentElement
    let form_editar_comentario_element =padre.previousElementSibling
    
    let idComent =  el.id

    el.addEventListener('click', ()=>{
        console.log('FORM')
    console.log(form_editar_comentario_element)
        let inputText = form_editar_comentario_element.firstElementChild

        if(form_editar_comentario_element.style.display === 'none'){

            form_editar_comentario_element.style.display = ''
            inputText.style.transform = 'scale(1)'
            inputText.addEventListener('change', ()=>{
               
                form_editar_comentario_element.submit()
            })

        }else{
            form_editar_comentario_element.style.display = 'none'
            inputText.style.transform = 'scale(0)'
            inputText.removeEventListener('change')
        }
    })
})
boton_eliminar_comentario.forEach((boton)=>{
    let li = boton.parentElement
    let ul = li.parentElement
    let padre = ul.parentElement
    let form_editar_comentario_element =padre.previousElementSibling
    let idComent =  boton.id


    boton.addEventListener('click', ()=>{
        $.ajax({
        url:"assets/php/ajax.php?eliminarComentario",
        method:"post",
        data:{idComentario: idComent},
        success:function(response){
            alert('Comentario eliminado')
            console.log(response)
        }
    })
    })
    

})

boton_eliminar_comentario_response.forEach((boton)=>{
    let li = boton.parentElement
    let ul = li.parentElement
    let padre = ul.parentElement
    let form_editar_comentario_element =padre.previousElementSibling
    let idComent =  boton.id


    boton.addEventListener('click', ()=>{
        console.log('AQUI EL ID DEL RESPONSE')
        console.log(idComent)
        $.ajax({
        url:"assets/php/ajax.php?eliminarResponseComentario",
        method:"post",
        data:{idComentario: idComent},
        success:function(response){
            alert('Comentario eliminado')
            console.log(response)
        }
    })
    })
    

})


button_like_comentario.forEach((likeButton)=>{
   let idComent = likeButton.id
   likeButton.addEventListener('click', (e)=>{

      $.ajax({
        url:"assets/php/ajax.php?likeComentario",
        method:"post",
        data:{idComentario: idComent, toUserId:likeButton.lastElementChild.id},
        success:function(response){
            if(response){
                likeButton.lastElementChild.textContent = Number(likeButton.lastElementChild.textContent) +1 
            }else{
                likeButton.lastElementChild.textContent = Number(likeButton.lastElementChild.textContent) - 1 
            }
        }
    })

    e.stopPropagation();
   })
})

button_like_response_comentario.forEach((likeButton)=>{
    let idComent = likeButton.id
   
    likeButton.addEventListener('click', (e)=>{
        
        $.ajax({
        url:"assets/php/ajax.php?likeResponseComentario",
        method:"post",
        data:{idComentario: idComent, toUserId:likeButton.lastElementChild.id},
        success:function(response){
            if(response){
                likeButton.lastElementChild.textContent = Number(likeButton.lastElementChild.textContent) +1 
            }else{
                likeButton.lastElementChild.textContent = Number(likeButton.lastElementChild.textContent) - 1 
            }
        }
    })

    e.stopPropagation();
   })
})


let corazon_like_mas = document.getElementById('corazon_like_mas')
let corazon_like_menos = document.getElementById('corazon_like_menos')

corazon_like_mas.addEventListener('click', ()=>{
    let valor = corazon_like_mas.nextElementSibling
    console.log('HOLA MAS')
    console.log(valor)
    valor.textContent =Number(valor.textContent) + 1

})

corazon_like_menos.addEventListener('click', ()=>{
    
    let valor = corazon_like_menos.nextElementSibling.nextElementSibling
    console.log(valor)
    valor.textContent =Number(valor.textContent) - 1

})

 let editar_descripcionpost_button2 =document.querySelectorAll('.editar_descripcionpost_button')
console.log(editar_descripcionpost_button2)


let cuadro_like_post = document.querySelectorAll('.cuadro_like_post');

let clickearCorazon = (e) =>{
   let corazonLike = e.currentTarget.firstElementChild
   let corazonDislike = e.currentTarget.firstElementChild.nextElementSibling
   if(corazonLike.style.display === 'none'){
    $(corazonDislike).click()
 
   }else{
    $(corazonLike).click()
   
   }
}

cuadro_like_post.forEach((cuadro)=>{
    cuadro.addEventListener('click', clickearCorazon, false)
})


</script>