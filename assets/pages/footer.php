<style>
  .perfil_container_messages{
    position: relative;
    background-color: rgb(213 220 230);
  }
  .menu_perfil_message{
    position: absolute;
    background-color: rgb(64 64 64);
    color: white;
    right: -124px;
    top: 0px;
    
    transition: all 500ms ease-in-out;
  }
  .opaciti1{
    opacity: 1;
  }
  .menu_perfil_message p{
    padding: 12px;
  }
  .menu_perfil_message p:hover{
    background-color: black;
    
  }
  .iconos_thenavher{
    font-size: 21px;
   
  }
  .iconos_thenavher::before {
     font-weight: 900 !important;
  }
  .userdata_container{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 3px;
  }

.container_iconos{
    display: flex;
    justify-content: center;
    gap: 20px;
}
.opciones_iconos {
  width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    border: 1px solid #1f3765;
    justify-content: center;
    align-items: center;
    margin: 16px 0;
}
.opciones_iconos i::before{
    color: grey;
    font-size: 20px;
}
.header_chatbox{
  position: relative;
  background-color: #d9d9d9;
  display: flex;
  justify-content: space-between !important;
}
.cerrar_chatbox_boton{
  margin: 0 !important;
  padding: 0 !important;
  width: 29px;
  height: 29px;
}
.iconos_llamadas_chatbox{
  display: flex;
    gap: 12px;
    align-items: center;
}
.iconos_llamadas_chatbox i::before {
  font-size: 29px;
  font-weight: 900 !important;
}
#msgsender{
    align-items: center;
    gap: 10px;
}
#msgsender i::before {
  font-size: 28px;
}
.chatbox_menu_emergente{
      position: absolute;
    right: 83px;
    background-color: rgb(64 64 64);
    color: white;
    top: 24px;
    z-index: 100;
    display: none;
}
.chatbox_menu_emergente p {
  padding: 8px;
  margin: 0 !important;
}
.chatbox_menu_emergente p:hover{
  background-color: black;
}
#icono_send::before{
  font-size: 18px !important;
}
.header_perfilmodal{
  display: flex;
  justify-content: space-between;
  background-color: #181717;
  color: white;
}
.header_perfilmodal i::before{
  font-size: 21px;
  font-weight: 500;
}
.nombre_imagen_perfil{
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  top: -40px;
}
.nombre_imagen_reportar{
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  top: 50px;
 
}
.imagen_perfil {
  border-radius: 50%;
  margin-top: -50px;
  object-fit: cover;
}
.contenedor_modal_perfil{
  background-color: #404040;
  color: white;
}
.funciones_perfil{
    display: flex;
    justify-content: space-evenly;
    gap: 14px;
    background-color: #272525;
    margin-top: -18px;
}

.funciones_perfil .opciones_iconos{
  background-color: #656565;
  border-radius: 8px;
  border: 2px solid #595959;
}
.funciones_perfil .opciones_iconos i::before{
  color: black;
  font-size: 30px;
  font-weight: 500 !important;
}
.contenedor_imagenes_perfil_modal{
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  row-gap: 23px;
  column-gap: 12px;
}
.contenedor_imagenes_perfil_modal img{
 height: 100%;
 width: 100%;
 object-fit: cover;
 max-height: 66px;
 border-radius: 8px;
}
.perfil_menu_emergente{
  position: absolute;
    background-color: rgb(64 64 64);
    color: white;
    top: 16px;
    right: 39px;
    z-index: 1000;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    display: none;
}
.perfil_menu_emergente p {
  padding: 8px;
  margin: 0 !important;
}

.perfil_menu_emergente p:hover{
  background-color: black;
}

.form_reportar{
    display: flex;
    flex-direction: column;
    gap: 12px;
}
input[type=radio]{
  width: 34px;
  height: 34px;
}
.header_color_grupo{
  background-color: #e7e6e6;
  justify-content: center;

}
.contenedor_search_grupo{
  padding: 8px 16px;
    border: 2px solid #c2c2c2;
    border-radius: 8px;
}
.contenedor_search_grupo input{
    background: transparent;
    border: none;
    outline: none;
    color: #7d7878;
}
.contenedor_search_grupo i::before{
  color: #7d7878;
}
.grupo_modal_body{
background-color: white;
    display: flex;
    flex-direction: column;
    gap: 12px;
    padding: 32px 64px;
    
}
.grupo_modal_image{
    border-radius: 100%;
    border: 1px solid grey;
    padding: 5px;

}
.input_check_grupo{
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: white;
    border: 2px solid gray;
    appearance: none;
    -webkit-appearance: none;
    outline: none;
    cursor: pointer;
}
.input_check_grupo:checked {
  background-color: #0d6efd;
}

.button_crear_grupo::before{
  color: #0d6efd;
  font-size: 48px;
}
.icono_grupo::before{
 color: #7f7f7f;
 font-size: 45px;
 position: absolute;
 left: 18px;
 top: 6px;
}
.imagen_grupo{
    display: flex;
    justify-content: center;
    align-items: center;
   
    width: 100%;
}
.contenedor_imagen_grupo{
      display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 165px;
    width: 165px;
    background-color: #bfbfbf;
    color: #2f2828;
    border-radius: 100%;
    /* margin: 12px 0; */
    border: 1px solid #2f2828;
}
.contenedor_imagen_grupo i::before{
  font-size: 65px;
}

.grupo_modal_body input[type="text"]{

  border: 2px solid grey;
  border-radius: 8px;
  padding: 8px 16px;
  outline: none;
  color: grey;
  margin-bottom: 100px;
}
.quitar_amigo{
  display: none !important;
}


/* VIDEO CALL */

#videos{
  position: relative;
            display: grid;
            /* grid-template-columns: 1fr 1fr; */
            gap: 2em;
            transition: all 1s ease-in-out;
}
        .video-player{
            background-color: black;
            width: 100%;
            height: 300px;
        }
        #user-2{
            display: none;
            object-fit: cover;
        }
        #user-1{
          display: block;
          position: absolute;
          height: 160px;
          width: 120px;
          z-index: 100;
          top: 0;
          right: 0;
          object-fit: cover;
          border-radius: 8px;
        }
        .video-player {
transform: scaleX(-1); /* Invertir horizontalmente */
}
#video-streams{
            display: grid;
            /* grid-template-columns: repeat(auto-fit, minmax(500px, 1fr)); */
            height: 500px;
            width: 100%;
            margin: 0 auto;
        }
        #join-btn {
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -50px;
            margin-left: -100px;
            font-size: 18px;
            padding: 20px 40px;
        }
        .video-container{
            max-height: 100%;
            border: 2px solid black;
            background-color: #203A49;
        }
        .video-player{
            height: 100%;
            width: 100%;
        }
        #stream-control{
            display: none;
            justify-content: center;
            margin-top: 0.5em;
        }
        #stream-control button{
            border: none;
            background-color: cadetblue;
            color: #fff;
            padding: 10px 20px ;
            font-size: 16px;
            margin: 2px;
            cursor: pointer;

        }

        @media screen and (max-width: 1400px){
            #video-streams{
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                width: 100%;
            }
        }

  /* VIDEO LLAMADA ESTILOS */
  #controls{
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 1em;
  }
  #controls_2{
  
    display: flex;
    gap: 1em;
  }
  .control-container_2{
     background-color: rgb(179, 102, 249, .9);
    padding: 20px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    height: 56px;
    width: 56px;
  }
  .control-container{
    width: 58px;
    height: 58px;
    background-color: rgb(179, 102, 249, .9);
    padding: 20px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
  }
  .control-container i{
    font-size: 30px;
    color: white;
  }
  #leave-btn{
    background-color: rgb(255, 80, 80,1);
  }
  .header_video_llamada{
    background-color: rgb(38 38 38);
  }

  .body_video_llamada{
    background-color: rgb(64 64 64);
  }


  .header_contestar_llamada{
    background-color: #262626;
    display: flex;
    justify-content: end;
  }
  .header_contestar_llamada i{
    font-size: 28px;
    color: white;
  }
  .content_contestar_llamada{
    background-color: #404040;
    display: flex;
    align-items: center;
    flex-direction: column;
  }
.modal-open {
overflow-y: scroll !important;
}
#bodyApp{
  overflow-y: auto !important;
}
#buscador_de_chat{
    /* display: none; */
    border: none;
    outline: none;
    background-color: #6683bc;
    border-radius: 8px;
    margin-right: 11px;
    position: relative;
    color: white;
    padding: 2px 6px;
    transition: all 0.5s ease-in-out; 
    
}
</style>
<?php if(isset($_SESSION['Auth'])){ ?>


<input style="display: none;" type="text" id="current_user_localStorage"  value="<?= $_SESSION['userdata']['id'] ?>">
  
<div class="modal fade" id="addpost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="" style="display:none" id="post_img" class="w-100 rounded border">
                <form method="post" action="assets/php/actions.php?addpost" enctype="multipart/form-data">
                    <div class="my-3">
                        <input class="form-control" name="post_img" type="file" id="select_post_img">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Say Something</label>
                        <textarea name="post_text" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                    </div>
    
                <button type="submit" class="btn btn-primary">Post</button>
          
                </form>
            </div>
   
        </div>
  </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="notification_sidebar" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Notifications</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body" id="contenedor_de_notificaciones">
  
    
  </div>
</div>



<div class="offcanvas offcanvas-start" tabindex="-1" id="message_sidebar" aria-labelledby="offcanvasExampleLabel">
  
  <div class="offcanvas-header">
    <?php 
    $currentUser = getCurrentUserData();
    // print_r($currentUser)
   ?>

    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Messages</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

  </div>

   <div class="perfil_container_messages mb-2">
    <div style="transform: scale(0);" class="menu_perfil_message">
      <p role="button" data-bs-toggle="modal" data-bs-target="#crearGrupoModal">Crear grupo</p>
      <p role="button" data-bs-toggle="offcanvas" data-bs-target="#notification_sidebar">Notificaciones</p>
      <p>Cambiar tema</p>
    </div>
    <div style="background-color: rgb(31 55 101);
    display: flex;
    padding: 12px 18px;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px;
    color: white;">
    
        <strong>THENAVHER</strong>
        <div>
          <input type="text" id="buscador_de_chat" class="fade-in-right" style="transform: scale(0);">
          <i role="button" id="mostrar_buscador" class="bi bi-search iconos_thenavher"></i>
          <i id="menu_perfil_messages" class="bi bi-three-dots-vertical iconos_thenavher" role="button"></i>
        </div>
        
      </div>
      
      <div class="userdata_container">
        <img style="border-radius: 50%; object-fit: cover;" width="65px" height="65px" src="assets/images/profile/<?=$currentUser['profile_pic']?>">
        <strong> <?php echo $currentUser['first_name'] . " " . $currentUser['last_name'];?> </strong>
        <div>
           <span> <?= $currentUser['username'] ?> </span>
           <i role="button" id="editar_apodo" class="bi bi-pencil-fill"></i>
           <input id="input_editar_apodo" name="username_edit_input" type="text" value="<?= $currentUser['username'] ?>" style="display: none;">
        </div>
       
      </div>
      <div class="container_iconos">
        <div role="button" 
        data-bs-toggle="modal" 
        data-bs-target="#crearGrupoModal" 
        class="opciones_iconos">
          <i class="bi bi-people-fill"></i>
        </div>
        <div 
        class="opciones_iconos">
          <i class="bi bi-telephone-fill"></i>
        </div>
        <div class="opciones_iconos">
          <i class="bi bi-camera-fill"></i>
        </div>
        <div class="opciones_iconos">
          <i class="bi bi-plus-lg"></i>
        </div>
      </div>
      <hr>
    </div>
  <div class="offcanvas-body" id="chatlist">

    
  </div>
</div>

<div class="modal fade" id="chatbox" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

    <div class="modal-content" style="min-height: 300px !important;">
      
      <div class="modal-header header_chatbox">
      
        <div href="" id="cplink" class="text-decoration-none text-dark">

          <div role="button" class="modal-title d-flex gap-2" id="perfilModalLabel" data-bs-toggle="modal" data-bs-target="#perfilModal">

            <img src="assets/images/profile/default_profile.jpg" id="chatter_pic" height="40" width="40" class="m-1 rounded-circle border">
            <div class="d-flex flex-column">

              <span
              style="font-weight: bold;" 
              id="chatter_name"></span>
              <span>
                (@<i
                    style="font-weight: 100;" 
                    id="chatter_username">loading..</i>)</span> 
            </div>
        </div></div>
        
        <div class="iconos_llamadas_chatbox">
          <i id="boton_camara_chatbox" role="button" data-bs-toggle="modal" data-bs-target="#videoLlamadaModal" class="bi bi-camera-video"></i>
          <i class="bi bi-telephone"></i>
          <i role="button" id="chatbox_menu_dropdown" class="bi bi-three-dots-vertical"></i>
          <button type="button" class="btn-close cerrar_chatbox_boton" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="chatbox_menu_emergente">
          <p>Silenciar notificaciones</p>
          <p>Eliminar chat</p>
          <p role="button" data-bs-toggle="modal" data-bs-target="#reportarModal">Reportar abuso</p>
          <p>Archivar chat</p>
          <p role="button" data-bs-toggle="modal" data-bs-target="#bloquearModal">Bloquear</p>
        </div>
      
      </div>

      <div style="overflow: scroll;" class="modal-body d-flex flex-column-reverse gap-2" id="user_chat">
      loading..

      </div>
      <div 
      style="padding: 0 !important;"
      class="modal-footer">
         
          <p class="p-2 text-danger mx-auto" id="blerror" style="display:none"> 
          <i class="bi bi-x-octagon-fill"></i> you are not allowed to send msg to this user anymore

</div>
      <div class="input-group p-3 " id="msgsender">
        
                <i class="fa fa-sticky-note" aria-hidden="true"></i>
                <i class="bi bi-paperclip"></i>
                
                            <input
                            style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;"
                             type="text" class="form-control rounded border-0  " id="msginput" placeholder="Di hola"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-secondary rounded border-0" id="sendmsg" data-user-id="0" type="button"
                                ><i id="icono_send" class="bi bi-send-fill"></i></button>
                        </div>
      </div>
    </div>
  </div>
</div>



<!-- Modal del perfil -->
<div class="modal fade" id="perfilModal" tabindex="-1" role="dialog" aria-labelledby="perfilModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content contenedor_modal_perfil">
      <!-- HEADER DEL MODAL -->
      <div class="modal-header header_perfilmodal position-relative">
        
        <i role="button" data-bs-toggle="modal" data-bs-target="#chatbox" class="bi bi-arrow-left"></i>
        <i id="dropdown_perfil_menu" role="button" class="bi bi-three-dots-vertical"></i>
        <div class="perfil_menu_emergente position-absolute">
          <p>Silenciar notificaciones</p>
          <p>Eliminar chat</p>
          <p role="button" data-bs-toggle="modal" data-bs-target="#reportarModal">Reportar abuso</p>
          <p>Archivar chat</p>
          <p role="button" data-bs-toggle="modal" data-bs-target="#bloquearModal" >Bloquear</p>
        </div>
      </div>  

      <div>
        <img 
        id="frontimage_profile_modal"
        style="display: block;
               width: 100%;
               height: 150px;
               object-fit: cover;
               margin: -5px 0;" 
               src="./assets/images/frontpage/mundo.jpg" alt="imagen de portada">
      </div>
      <a style="text-decoration: none; color:white;" class="nombre_imagen_perfil">
        <img id="profile_profile_modal" class="imagen_perfil" height="120px" width="120px" src="./assets/images/profile/profile.jpg" alt="">
        <strong  id="nombre_profile_modal">Nombre de usuario</strong>
      </a>
      <div class="funciones_perfil">
         <div class="opciones_iconos">
          <i role="button" class="bi bi-camera-video"></i>
        </div>
        <div class="opciones_iconos">
          <i role="button" class="bi bi-telephone"></i>
        </div>
        <div class="opciones_iconos">
          <i role="button" class="bi bi-search"></i>
        </div>
        <div class="opciones_iconos">
          <i role="button" class="bi bi-bell"></i>
        </div>
      </div>
      <div class="modal-body">
        <p>Imagenes y documentos</p>
     
        <div class="contenedor_imagenes_perfil_modal">
          <!-- <img src="../../facebook99/assets/images/posts/1638040695post3.png" alt="">
          <img src="../../facebook99/assets/images/posts/1638040695post3.png" alt="">
          <img src="../../facebook99/assets/images/posts/1638040695post3.png" alt="">
          <img src="../../facebook99/assets/images/posts/1638040695post3.png" alt="">
          <img src="../../facebook99/assets/images/posts/1638040695post3.png" alt="">
          <img src="../../facebook99/assets/images/posts/1638040695post3.png" alt=""> -->
        </div>
      </div>
     
    </div>
  </div>

</div>


<!-- MODAL PARA REPORTAR ABUSO -->
<div class="modal fade" id="reportarModal" tabindex="-1" role="dialog" aria-labelledby="reportarModalLabel" aria-hidden="true">

<div class="modal-dialog" role="document">
   <div class="modal-content contenedor_modal_perfil">
     <div class="modal-header header_perfilmodal position-relative">
        
        <i role="button" data-bs-toggle="modal" data-bs-target="#perfilModal" class="bi bi-arrow-left"></i>
        
     </div> 
      
     <div class="modal-body">
       <div class="nombre_imagen_reportar">
        <img id="profile_reportar_modal" class="imagen_perfil" height="120px" width="120px" src="./assets/images/profile/profile.jpg" alt="">
        <strong  id="nombre_reportar_modal">Nombre de usuario</strong>
      </div>

      <p class="mt-5 text-center">¿Razón por la que esta reportando este usuario?</p>

      <form class="form_reportar" method="post" action="assets/php/ajax.php?reportUser">
        <input type="number" hidden id="user_reported_id" name="user_reported_id">
        <div class="d-flex justify-content-between">
          <label for="lenguaje_ofensivo">Lenguaje ofensivo</label>
          <div>
            <label for="">Si</label>
            <input value="1" width="34px" type="radio" name="lenguaje_ofensivo" id="lenguaje_ofensivo">
            <label for="">No</label>
            <input value="0" checked width="34px" type="radio" name="lenguaje_ofensivo" id="lenguaje_ofensivo_no">
          </div>
         
        </div>
        
        <div class="d-flex justify-content-between">
          <label for="contenido_inapropiado">Contenido inapropiado</label>
          <div>
            <label for="">Si</label>
            <input  value="1" width="34px" type="radio" name="contenido_inapropiado" id="contenido_inapropiado">

            <label for="">No</label>
            <input  value="0" checked width="34px" type="radio" name="contenido_inapropiado" id="contenido_inapropiado_no">
          </div>
          
        </div>
        
        <div class="d-flex justify-content-between">
          <label for="acoso_comportamiento">Acoso y comportamiento intimidatorio</label>
          <div>
            <label for="">Si</label>
            <input  value="1" width="34px" type="radio" name="acoso_comportamiento" id="acoso_comportamiento">

            <label for="">No</label>
            <input checked value="0" width="34px" type="radio" name="acoso_comportamiento" id="acoso_comportamiento_no">
          </div>
          
        </div>

        
        <label class="text-center" for="razon">Escribe la razón </label>
        <textarea class="rounded" name="razon" id="razon" cols="30" rows="4" placeholder="A la hora de reportar a este usuario, tendrás la opción de vaciar el chat o bloquearlo"> </textarea>

        <input name="reportar" style="width: 80px; height: 40px; align-self:center;" type="submit" value="Enviar" id="reportar_boton" class="btn btn-primary">
      </form>
     </div>
     

   </div>
</div>

</div>

<!-- MODAL DE BLOQUEAR -->

<div class="modal fade" id="bloquearModal" tabindex="-1" role="dialog" aria-labelledby="bloquearModalLabel" aria-hidden="true">

<div class="modal-dialog" role="document">
   <div class="modal-content contenedor_modal_perfil">
     <div class="modal-header header_perfilmodal position-relative">
        
        <i role="button" data-bs-toggle="modal" data-bs-target="#perfilModal" class="bi bi-arrow-left"></i>
        
     </div> 
      
     <div class="modal-body">
       <div class="nombre_imagen_reportar">
        <img id="profile_block_modal" class="imagen_perfil" height="120px" width="120px" src="./assets/images/profile/profile.jpg" alt="">
        <strong class="mb-2" id="nombre_block_modal">Nombre de usuario</strong>
      </div>
      <p style="text-align: justify;" class="mt-5 mb-5">
        A la hora de bloquear a este usuario, no podrán
mandarse mensaje, no podrás ver sus historias y
publicaciones en la página, no podrás realizar
llamadas, tampoco ingresar al chat, a menos que
decidas desbloquear a este usuario
      </p>
     
      <form class="d-flex justify-content-center" method="post" action="assets/php/ajax.php?blockUser">
        <input type="number" hidden id="user_block_id" name="user_block_id">
        <input class="btn btn-primary" type="submit" value="Bloquear" name="bloquear" id="bloquear_usuario">
      </form>
     </div>
     
     
   </div>
</div>

</div>

<!-- MODAL PARA CREAR GRUPOS crearGrupoModal  -->

<div class="modal fade" id="crearGrupoModal" tabindex="-1" role="dialog" aria-labelledby="crearGrupoModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content contenedor_modal_perfil">
      
      <div class="modal-header header_color_grupo">

       <div class="contenedor_search_grupo">
       <input type="text" placeholder="Buscar amigos" id="buscador_amigos">
        <i class="bi bi-search iconos_thenavher"></i>
       </div>
        
     
        
     </div> 
       <div class="modal-body grupo_modal_body ">

        <?php 
        $usuarios_amigos = getUserFriend();

        foreach($usuarios_amigos as $amigo){

        
        ?>
          <div  class="d-flex justify-content-between align-items-center contenedor_perfil_amigos">

          <div class="d-flex align-items-center gap-1">
            <img style="object-fit:cover; " class="grupo_modal_image" width="60px" height="60px" src="assets/images/profile/<?= $amigo['profile_pic'] ?>" alt="">
            <strong style="margin: 0px; color: grey;"> <?= $amigo['first_name']?> <?= $amigo['last_name']?> </strong>        
          </div>
          <input class="input_check_grupo" type="checkbox" name="" id="<?= $amigo['id'] ?> ">
          
        </div>
        <?php }?>

        
       </div>

       <div class="modal-footer justify-content-center" style="background-color: white;" id="next_phase_group">
          <i role="button" data-bs-toggle="modal" data-bs-target="#crearGrupoModalInterfaz" class="bi bi-arrow-right-circle-fill button_crear_grupo"></i>
       </div>
    
      </div>
  </div>


</div>


<!-- MODAL DE CREAR GRUPO INTERFAZ -->
<div class="modal fade" id="crearGrupoModalInterfaz" tabindex="-1" role="dialog" aria-labelledby="crearGrupoModalInterfazLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content contenedor_modal_perfil">
      
      <div class="modal-header header_color_grupo">

       <div class="contenedor_header_interfazgrupo">
       <i role="button" data-bs-toggle="modal" data-bs-target="#crearGrupoModal" class="bi bi-arrow-left icono_grupo"></i>
       <strong style="color: grey;">Grupo</strong>
       </div>
        
     
        
     </div> 
       <form method="post" action="assets/php/ajax.php?crearGrupo" class="modal-body grupo_modal_body " enctype="multipart/form-data" id="formulario_lista">
        <label role="button" for="imagen_grupo" class="imagen_grupo">
          <div class="contenedor_imagen_grupo">
              <i class="bi bi-camera"></i>
          <strong>Imagen del grupo</strong>
          </div>
        
        </label>
        <input style="display: none;" type="file" id="imagen_grupo" name="imagen_grupo"  onchange="mostrarInput()">
        <p id="imagen_seleccionada" style="display: none; color: gray; "></p>
        <input name="nombre_grupo" type="text" placeholder="Nombre del grupo">
        <input hidden type="text" value="<?= $_SESSION['userdata']['id'] ?>" name="current_user_id">
        
        <!-- Usuarios a agregar -->
       

        
       <div class="modal-footer justify-content-center" style="background-color: white;">
          <input id="crear_grupo" class="btn btn-primary" type="submit" value="Crear grupo" name="crear_grupo">
         <!-- <button name="crear_grupo" type="submit" class="btn btn-primary" id="crear_grupo">Crear grupo</button> -->
       </div>
    
       </form>
  </div>


</div>
</div>


<!-- MODAL DE VIDEO LLAMADA -->


<div class="modal fade" id="videoLlamadaModal" tabindex="-1" role="dialog" aria-labelledby="videoLlamadaModalLabel" aria-hidden="true">
  <div style="max-width: 700px; max-height:450px;" class="modal-dialog" role="document">

    <div style="height: 450px;" class="modal-content">

      <div id="boton_abrir_minimodal" role="button" data-bs-target="#miniLlamada" data-bs-toggle="modal" class="modal-header justify-content-end header_video_llamada" data-backdrop="false" data-bs-keyboard="false">
        <i style="font-size: 28px; color: white;" role="button" class="bi bi-box-arrow-in-down-right"></i>
      </div>

      <div style="height: 100%;" class="modal-body body_video_llamada">
        
        <div style="height: 100%;" id="stream-wrapper">
            <div style="height: 100%; overflow: hidden;" id="video-streams">
           
              <div id="usuario_a_llamar_info" 
                    style="color: white;
                          position: absolute;
                          display: flex;
                          flex-direction: column;
                          align-items: center;
                          gap: 12px;
                          font-size: 16px;
                          left: calc(50% - 75px);">
                <img id="imagen_perfil_te_llaman"
                style="width: 150px;
                       height: 150px;
                       border-radius: 50%;
                       padding: 12px;
                       background: white;" 
                 src="" alt="">
                
                <p id="nombre_perfil_te_llaman"></p>
              </div>

              <div id="videos" style="transform: scale(0);">

                <video class="video-player" id="user-1" autoplay playsinline muted></video>
                <video class="video-player" id="user-2" autoplay playsinline></video>

              </div>
             <button id="button_llamada" style="
                                            position: absolute;
                                            width: 58px;
                                            height: 58px;
                                            border: none;
                                            background-color: forestgreen;
                                            border-radius: 50%;
                                            bottom: 20px;
                                            left: 172px;
                                            color: white;
                                            font-size: 28px;">
              <i class="bi bi-telephone-plus"></i>
            </button>
            </div>
           

            <div id="controls">
                <div class="control-container" id="camera-btn"> 
                  <i class="bi bi-camera-video"></i>
                </div>
                
                <div class="control-container" id="mic-btn"> 
                  <i class="bi bi-mic"></i>
                </div>

                <div class="control-container" id="leave-btn"> 
                  <i class="bi bi-telephone-x"></i>
                </div>
            </div>
        </div>

    
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>


          <!-- BOX DE RECIBIENDO LLAMADA -->
  <div style="position: fixed; top:140px;" id="contenedor_de_llamada">
  </div>
 
  <!-- MINI LLAMADA -->
  <div class="modal fade" id="miniLlamada" tabindex="-1" role="dialog" aria-labelledby="miniLlamadaLabel" aria-hidden="true" style="width: 0 !important; height:0 !important;">
  <div class="modal-dialog" role="document" >
    <div id="minillamada_draggable" class="modal-content" draggable="true" ondragstart="drag(event)" style="position: fixed;
                                      width: 250px;
                                      height: 274px;
                                      bottom: 0;
                                      right: 0;
                                      cursor: grab;
                                      padding: 6px;">
     
      <div style="height: 100%;" class="modal-body">
        <div style="position: absolute; top: 0; color: grey;top: -7px;left: -4px;
" role="button" data-bs-target="#videoLlamadaModal" data-bs-toggle="modal">
          <i class="bi bi-box-arrow-up-left"></i>
        </div>
        <video class="video-player" id="user-2-mini" autoplay playsinline></video>
        <div id="controls">
                <div class="control-container" id="camera-btn_mini"> 
                  <i class="bi bi-camera-video"></i>
                </div>
                
                <div class="control-container" id="mic-btn_mini"> 
                  <i class="bi bi-mic"></i>
                </div>

                <div style="background-color: red;" class="control-container" id="leave-btn_mini"> 
                  <i class="bi bi-telephone-x"></i>
                </div>
            </div>
      </div>
          
    </div>
  </div>
</div>

<!-- MODAL DE AGREGAR EVENTO -->

<div class="modal fade" id="agregarEvento" tabindex="-1" role="dialog" aria-labelledby="agregarEventoLabel" aria-hidden="true">

<div class="modal-dialog" role="document">
   <div class="modal-content contenedor_modal_perfil">
      
     <div class="modal-body">
      
          <form enctype="multipart/form-data" method="post" 
          action="assets/php/ajax.php?createEvento">
          
            <div class="form-group">
              <label for="evento_fecha">Cuando sera el evento</label>
              <input required type="date" class="form-control" id="evento_fecha" name="evento_fecha">
              
            
            <div class="form-group">
              <label for="evento_nombre">Nombre del evento</label>
              <input required type="text" class="form-control" id="evento_nombre" name="evento_nombre">
            </div>

            <div class="form-group" style="display: flex; flex-direction: column;">
              <label for="evento_descripcion">Descripcion del evento</label>
              <textarea required name="evento_descripcion" id="evento_descripcion" cols="30" rows="5"></textarea>
            </div>

             <div class="form-group">
              <label for="evento_imagen">Imagen para el evento</label>
              <input type="file" required name="evento_imagen">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
</div>            
</form>
      
     </div>
     
     
   </div>
</div>

</div>
<?php } ?>


    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery.timeago.js"></script>
    
    

    <script src="assets/js/custom.js?v=<?=time()?>"></script>
    
<script>
let menuMessagesa =document.getElementById('menu_perfil_messages');
let menuMessageContainer =document.querySelector('.menu_perfil_message')
let menuChatBoxDropdow = document.getElementById('chatbox_menu_dropdown')
let menuEmergente =document.querySelector('.chatbox_menu_emergente')
let perfil_menu_emergente =document.querySelector('.perfil_menu_emergente')
let dropdown_perfil_menu =document.querySelector('#dropdown_perfil_menu')

let inputImagenGrupo = document.getElementById("imagen_grupo");
let imagen_seleccionada =document.getElementById('imagen_seleccionada')


let buscador_amigos =document.getElementById('buscador_amigos')

buscador_amigos.addEventListener('change', (e)=>{
  let valor = e.target.value.toLowerCase();
  let contenedor_amigos = document.querySelectorAll('.contenedor_perfil_amigos');
  let filtrados = [];
  for (let i = 0; i < contenedor_amigos.length; i++) { 
      let elemento = contenedor_amigos[i];
      let contenido = elemento.textContent.toLowerCase(); 

      

      if (!contenido.includes(valor)) { // Verificar si el texto contiene "Maria"
      // filtrados.push(elemento); // Agregar el elemento al array de filtrados
      elemento.classList.add('quitar_amigo')
      console.log('ENTRO if')
      
      }else{
        console.log('entro else')
        elemento.classList.remove('quitar_amigo')
      }
     }     
  console.log(contenedor_amigos)

})


function mostrarInput() {

if (inputImagenGrupo.value) {
imagen_seleccionada.textContent = inputImagenGrupo.value
imagen_seleccionada.style.display = 'block';

} else {
imagen_seleccionada.style.display = 'none';
}

}



menuChatBoxDropdow.addEventListener('click', ()=>{
  if (menuEmergente.style.display === 'none'){
    menuEmergente.style.display = 'block'
  }
  else{
    menuEmergente.style.display = 'none'
  }
})

menuMessagesa.addEventListener('click', ()=>{
  if(menuMessageContainer.style.transform == 'scale(0)'){
    menuMessageContainer.style.transform = 'scale(1)'
  }else{
    menuMessageContainer.style.transform = 'scale(0)'
  }
})

dropdown_perfil_menu.addEventListener('click', ()=>{
  if(perfil_menu_emergente.style.display=='none'){
    perfil_menu_emergente.style.display = 'block'}
    else{
      perfil_menu_emergente.style.display='none';
    }
})



$(document).on("click","#cust_btn",function(){
  
  $("#myModal").modal("toggle");
  
})

let miniboton = document.getElementById('boton_abrir_minimodal')
let modal_mini_llamada = document.getElementById("miniLlamada")

let modalMini = new bootstrap.Modal(modal_mini_llamada, {
backdrop: false, // Pasar la opción backdrop como false
keyboard: false // Pasar la opción keyboard como false
});
miniboton.addEventListener("click", function () {


modalMini.show();
// document.getElementById('bodyApp').style = ""

});

function drag(event) {
// Guardamos el id del contenedor en el objeto dataTransfer

event.dataTransfer.setData("text", event.target.id);

event.target.offsetX = event.offsetX;
event.target.offsetY = event.offsetY;

}
function allowDrop(event) {
// Evitamos el comportamiento por defecto del navegador
event.preventDefault();
}
function drop(event) {
// Evitamos el comportamiento por defecto del navegador
event.preventDefault();
// Obtenemos el id del contenedor desde el objeto dataTransfer
var data = event.dataTransfer.getData("text");
// Obtenemos una referencia al contenedor usando su id
var contenedor = document.getElementById(data);
// Obtenemos las coordenadas del ratón al soltar el contenedor
var x = event.clientX;
var y = event.clientY;
// Restamos el desplazamiento del elemento al arrastrarlo a las coordenadas
x -= contenedor.offsetX;
y -= contenedor.offsetY;
// Movemos el contenedor a esas coordenadas usando las propiedades style.left y style.top
contenedor.style.left = x + "px";
contenedor.style.top = y + "px";
}

let mostrar_buscador = document.getElementById('mostrar_buscador')
let buscador_de_chat = document.getElementById('buscador_de_chat')

let mostrarBuscador = () =>{
  if(buscador_de_chat.style.transform == 'scale(0)'){
    buscador_de_chat.style.transform ='scale(1)';
  }else{
    buscador_de_chat.style.transform ='scale(0)';
  }
  
}

let buscandoChat = () => {
  let inputValue = $('#buscador_de_chat').val();
  
  let chatlist = document.getElementById("chatlist")
  let hijos = chatlist.children;  

  for (var i = 0; i < hijos.length; i++) {
        var h6 = hijos[i].querySelector("h6"); // Obtener el elemento h6 dentro del hijo
        var nombre = h6.textContent; // Obtener el texto del elemento h6
          console.log(nombre.toLowerCase().includes(inputValue.toLowerCase()))
        if (nombre.toLowerCase().includes(inputValue.toLowerCase())) { // Si el nombre contiene el valor del input
        hijos[i].style = `display:flex !important;`; // Mostrar el hijo
        } else { // Si no
        hijos[i].style = `display:none !important;`; // Ocultar el hijo
        }
        }
}



mostrar_buscador.addEventListener('click', mostrarBuscador)
buscador_de_chat.addEventListener('change', buscandoChat)

let editar_apodo =document.getElementById('editar_apodo')
let input_editar_apodo =document.getElementById('input_editar_apodo')

let mostrarInputApodo = () =>{
  if(input_editar_apodo.style.display = "none"){
    input_editar_apodo.style.display = "inline-block"
  }else{
    input_editar_apodo.style.display = "none"
  }
}

let editarApodo = (e) =>{
  $.ajax({
        url: 'assets/php/ajax.php?editarApodo',
        method: 'post',
        data: { newApodo: e.target.value },
        success: function (apodo) {
            // console.log(response);
           alert('Recarga la pagina para reflejar los cambios')
        }
    });
}

editar_apodo.addEventListener('click', mostrarInputApodo)

input_editar_apodo.addEventListener('change', editarApodo)
</script>
<script>
$(document).on("click", ".close", function() {
  $("#myModal").modal("hide");
});
</script>

<script>
  
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>

</html>
