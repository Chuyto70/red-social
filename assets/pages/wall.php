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
    background-color:#404040;
    padding: 50px 30px;
    max-width: 800px;
    width: 100vw;
    border-radius: 10px;
    -webkit-border-radius: 20px;
    -ms-border-radius:10px;
    -o-border-radius: 10px;
}
 #close{
    color: #f2f2f2;
    font-size:30px;
    font-weight: bold;
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
    overflow-y: scroll;
    scrollbar-width: none;
}
.placeholder{
    position: absolute;
    top: -0.2rem;
    font-size: 130%;
    color: rgb(165, 165, 165);
    pointer-events: none;
    background-color: transparent;
}
.input-editable{
    outline: none;
    color: rgb(255, 255, 255);
    font-size: 100%;
    height: 10vh;
}

.emergente-yr12{
    display: flex;
    align-items: center;
    justify-content: center;
    background: #404040;
}
.wrapper-s12{
    background: #404040;
    padding: 30px;
    width: 500px;
    border-radius: 5px;
}
.wrapper-s12 form {
    height: 167px;
    display: flex;
    margin: 30px 0;
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
    margin-top: 20px;
    font-size: 90%;
    transition: 0.5s;
    -webkit-transition: 0.5s;
    -moz-transition: 0.5s;
    -ms-transiton: 0.5s;
    -o-transition: 0.5s;
    padding: 5px 10px;
    width: 50%;
    cursor: pointer;
}
.footer-box{
    border-top: 1px solid #737476;
    margin: 20px 5px;
}
.footer-icons{
    display: flex;
    list-style: none;
}

.footer-icons li{
    margin: 20px 5px;
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
    font-size: 50px;
  }
  .form_modal p{
    margin-top: 15px;
    font-size: 16px;
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
  </style>

<?php
global $user;
global $posts;
global $follow_suggestions;
global $profile;

?>
<div class="container col-12 rounded-0 d-flex justify-content-between mt-5 gap-4">    


    <div style="background-color: #272727 !important; height: 100%;" class="col-3 mt-0 p-3 rounded shadow">

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
                    <img width="16px" height="16px" src="assets/images/home/logo.png" alt="" srcset="">
                    <span><a style="text-decoration: none; color: white;" href="?fundadores">Fundadores</a></span>
                    <div></div>
                </div>
            </button>
        </div>

        <!-- <div>
            <h6 class="text-muted p-2">Puedes seguirlos</h6>
            <?php
            // foreach ($follow_suggestions as $suser) {
            // ?>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/<?= $suser['profile_pic'] ?>" alt="" height="40" class="rounded-circle border">
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
            // }

            // if (count($follow_suggestions) < 1) {
            //     echo "<p class='p-2 bg-white border rounded text-center'>No Suggestions For You</p>";
            // }
            ?>

        </div> -->
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
                          
                                <textarea name="post_text" class="form-control mb-3 bg-transparent shadow-0 border-0" rows="1" placeholder="¿Qué estás pensando?" style="background-color:#ddd;" id="post_textarea"></textarea>
                        
                        </div>

                    </div>

                    
                    <div class="form-group d-flex flex-column">
                        <div class="custom-file d-flex align-items-center gap-1">
                            <input type="file" class="custom-file-input" name="post_img" id="select_post_img">
                            <i class="bi bi-share"></i>
                            <label 
                            style="color:#aaaaaa;"
                            class="custom-file-label cursor" for="select_post_img">Imagen</label>

                        </div>
                        <div class="d-flex align-items-center gap-1">
                            <i class="bi bi-envelope-fill"></i>
                            <input 
                            style="color:#aaaaaa;
                                   background-color:transparent;
                                   border:none;
                                   padding:0;
                                   "
                            type="submit" class="" value="Pasear">  

                        </div>
                    </div>

                    
                   
                </form>
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
            <div class="card mt-4 px-3" style="background-color:#272727; color:#ffffff; max-height: 660px;">
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

                                <i class="bi bi-three-dots-vertical" id="option<?= $post['id'] ?>" data-bs-toggle="dropdown" aria-expanded="false"></i>

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
                    <div class="p-1">
                        <?= $post['post_text'] ?>
                    </div>
                <?php
                }
                ?>
                <img
                style="max-height: 340px; object-fit: contain;" 
                src="assets/images/posts/<?= $post['post_img'] ?>"  loading=lazy class="imagen_post" alt="..." data-bs-toggle="modal" data-bs-target="#postview<?= $post['id'] ?>">

                <!-- HASTA AQUI -->
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
              <?php if(count($comments) > 0){
                ?>    
            
                
            <div id="contenedo_principal_comentarios" style="height:160px; max-height:100%; overflow-y: scroll; ">
                 <?php foreach ($comments as $comment) {
                                        $cuser = getUser($comment['user_id']);
                                    ?>
                                        <div class="d-flex align-items-center p-1 gap-1">
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
                                    <?php if($user['id'] == $comment['user_id']) {?>  
                                        <div class="menu-comentario">
                                            <i style="color: #b0b0b0;" class="fas fa-pen"></i>
                                            <ul class="menu">
                                                <li><a href="">Editar</a></li>
                                                <li><a href="">Eliminar</a></li>
                                            </ul>
                                        </div>
                                       <?php }  ?>       
                                            </div>
                                        </div>
                                        <div id="bubbleChatPadre" class="d-flex justify-content-end align-items-center gap-2 px-1 mb-2">
                                            <div style="display: inline-block;
                                                        border: 0;
                                                        padding: 3px 8px;
                                                        font-size: .8rem;
                                                        border-radius: 8px;
                                                        cursor: pointer;
                                                        background: #38383878; ">
                                                <i class="bi bi-hand-thumbs-up-fill"></i>   
                                                5
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
                                    }
                                    ?>
            </div>
               <?php }else{
                
               ?>
                <div style="height:0; max-height:100%; overflow-y: scroll; ">
                </div>
                <?php } ?>
                
                <div class="input-group p-2 gap-2 align-items-center">

                     <img src="assets/images/profile/<?= $post['profile_pic'] ?>" alt="" height="30" width="30" class="rounded-circle border">
                        
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
                            background-color: #515151;" 
                    class="btn btn-outline-primary rounded-0 border-0 add-comment" data-page='wall' data-cs="comment-section<?= $post['id'] ?>" data-post-id="<?= $post['id'] ?>" type="button" id="button-addon2"><i class="bi bi-send-fill text-light"></i></button>
                </div>

            </div>
           
           
           
           
           
           
           
           
           
           
            <div class="modal fade" id="postview<?= $post['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div
                style="width: 65%; height: 100vh;" 
                class="modal-dialog modal-xl modal-dialog-centered">
                    <div style="height: 85%;" class="modal-content" id="modal_contenido">

                        <div class="modal-body d-md-flex p-0">
                            <div class="col-md-8 col-sm-12">
                                <img
                                 style=" max-height:555px; height:100%; object-fit:contain; "
                                src="assets/images/posts/<?= $post['post_img'] ?>" style="max-height:90vh" class="w-100 overflow:hidden">
                            </div>



                            <div class="col-md-4 col-sm-12 d-flex flex-column border-start">
                                <div class="d-flex flex-column p-2 ">
                                    <div class="d-flex gap-2 align-items-center"> 
                                        <img src="assets/images/profile/<?= $post['profile_pic'] ?>" alt="" height="50" width="50" class="rounded-circle border">
                                        <div class="d-flex flex-column justify-content-start">
                                        <h6 style="margin: 0px;"><?= $post['first_name'] ?> <?= $post['last_name'] ?></h6>
                                       <div style="font-size:small" class="text-muted">Posted <?= show_time($post['created_at']) ?> </div>
                                    </div>
                                    </div>
                                    <div>&nbsp;&nbsp;&nbsp;</div>
                                    <?= show_description($post['post_text']) ?>
                                    
                                    <div class="d-flex justify-content-between mt-2 align-items-end flex-fill">
                                        
                                        <div class="dropdown">
                                            <span class="<?= count($likes) < 1 ? 'disabled' : '' ?>" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <?= count($likes) ?> likes
                                            </span>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <?php
                                                foreach ($likes as $like) {
                                                    $lu = getUser($like['user_id']);
                                                ?>
                                                    <li><a class="dropdown-item" href="?u=<?= $lu['username'] ?>"><?= $lu['first_name'] . ' ' . $lu['last_name'] ?> (@<?= $lu['username'] ?>)</a></li>

                                                <?php
                                                }
                                                ?>

                                            </ul>
                                        </div>
                                        <div style="font-size:small" class="text-muted"> </div>

                                    </div>
                                    <hr style="width: 100%;" />

                                </div>


                                <div class="flex-fill align-self-stretch overflow-auto" id="comment-section<?= $post['id'] ?>" style="height: 100px;">

                                    <?php
                                    if (count($comments) < 1) {
                                    ?>
                                        <p class="p-3 text-center my-2 nce">no comments</p>
                                    <?php
                                    }
                                    foreach ($comments as $comment) {
                                        $cuser = getUser($comment['user_id']);
                                    ?>
                                        <div class="d-flex align-items-center p-1 gap-1">
                                            <div class="align-self-start pt-2">
                                                <img src="assets/images/profile/<?= $cuser['profile_pic'] ?>" alt="" height="25" width="25" class="rounded-circle border">
                                            </div>
                                       
                                            <div class="d-flex flex-column justify-content-start align-items-start col-10 px-1 rounded background_bubble_chat " style="overflow-wrap: break-word;">

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
                                              
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end align-items-center gap-2 px-1 mb-2">
                                            <div style="display: inline-block;
                                                        border: 0;
                                                        padding: 3px 8px;
                                                        font-size: .8rem;
                                                        border-radius: 8px;
                                                        cursor: pointer;
                                                        background: #38383878; ">
                                                <i class="bi bi-hand-thumbs-up-fill"></i>   
                                                5
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
                                    }
                                    ?>






                                </div>
                                <div class="input-group p-2 border-0">
                                    <input 
                                    style="max-width: 80%;"
                                    type="text" class="form-control rounded border-0 shadow-none comment-input" placeholder="Escribe algo..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    
                                    <button
                                    style="background: #272727; width:20%;" 
                                    class="btn btn-outline-primary rounded border-0 add-comment ms-2" data-cs="comment-section<?= $post['id'] ?>" data-post-id="<?= $post['id'] ?>" type="button" id="button-addon2"><i class="bi bi-send-fill text-light"></i> </button>
                                </div>
                            </div>



                        </div>

                    </div>
                </div>
            </div>

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

    <div style="background-color: #272727 !important; height: 100%;" class="col-3 mt-0 p-3 rounded shadow">




        <div class="card">
            <img class="card-img-top" src="assets/images/frontpage/<?=$profile['frontpage_pic'] ?>" alt="Bologna">
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
                <a href="#">click aqui</a>
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
                <img width="100%" src="assets/images/home/logo.png"/>
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
                                        <a href="perfil.html">
                                        <p></p></a>
                                        <div>
                                        <a href="perfil.html" class="vinculo-e">
                                        <small></small></a></div>
                                    </div>
                                </div>


                            <div class="public-area">
                                
                                <span class="placeholder">Cuentanos tu dia </span>
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
                    <span>Every can reply</span>
                </div>
                <div class="footer-box">
                    <ul class="footer-icons">
                        <li><i class="far fa-file-image"></i></li>
                        <li><i class="fas fa-map-marker-alt"></i></li>
                        <li><i class="far fa-grin"></i></li>
                        <li><i class="far fa-calendar"></i></li>
                        <li><i class="fas fa-user"></i></li>
                    </ul>
                </div>
                <div class="puclic-limits">
                    <span class="counter-limit">400</span>
                    <button type="submit" form="posteo_imagen" class="public-btn ">Publicar</button>
                </div>
                </div>
                <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
         
                </div>
                </div>
                
       
                         <!-------- modal ------->


        </div>
        <!--<div>
            <h6 class="text-muted p-2">Puedes seguirlos</h6>
            <?php
            foreach ($follow_suggestions as $suser) {
            ?>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/<?= $suser['profile_pic'] ?>" alt="" height="40" width="40" class="rounded-circle border">
                        </div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <a href='?u=<?= $suser['username'] ?>' class="text-decoration-none text-dark">
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




        </div>-->
    </div>
</div>