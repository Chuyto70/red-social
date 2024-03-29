//for preview the post image
var input = document.querySelector("#select_post_img");

let current_user_id = document.getElementById('current_user_localStorage').value

localStorage.setItem('current_user_id', JSON.stringify(current_user_id) );


input.addEventListener("change", preview);

function preview() {
    var fileobject = this.files[0];
    var filereader = new FileReader();

    filereader.readAsDataURL(fileobject);

    filereader.onload = function () {
        var image_src = filereader.result;
        var image = document.querySelector("#post_img");
        image.setAttribute('src', image_src);
        image.setAttribute('style', 'display:');
    }
}
 let users_selected_grupos = [];
 let users_to_grupo = [];

$('#next_phase_group').click((e)=>{
    let inputs_checkbox = document.querySelectorAll('.input_check_grupo');
    let formulario_lista = document.getElementById('formulario_lista')
    inputs_checkbox.forEach((checkbox)=>{
        if(checkbox.checked  && !users_selected_grupos.includes(checkbox.id)){

                users_selected_grupos.push(checkbox.id)
                let inputText = document.createElement('input')
                inputText.setAttribute('type', 'number');
                inputText.setAttribute('value', Number(checkbox.id));
                inputText.setAttribute('name','user_ids[]')
                inputText.setAttribute('id', Number(checkbox.id))
                // inputText.setAttribute('hidden', true)
                inputText.style.display = "none"; 
                formulario_lista.appendChild(inputText)

        }else{
            if(users_selected_grupos.includes(checkbox.id) && !checkbox.checked ){

                users_selected_grupos = users_selected_grupos.filter(el=>el!=checkbox.id)
                let inputText = document.getElementById(Number(checkbox.id))
                inputText.remove()

            }
        }
    })
    console.log(users_selected_grupos)
    if(localStorage.getItem('users_group_selected')){
        localStorage.removeItem('users_group_selected')
        localStorage.setItem('users_group_selected', JSON.stringify(users_selected_grupos))

    }else{

        localStorage.setItem('users_group_selected', JSON.stringify(users_selected_grupos))
    }
})


$('#crear_grupo').click(function(e){
    
    
    alert('Creando grupo')
    console.log(users_selected_grupos)
    $.ajax({
        url:"assets/php/ajax.php?crearGrupo",
        method:"post",
        dataType: 'json',
        data:{nombre_grupo_prueba: "OKLAHOMA", users_selected:users_selected_grupos},
        success:function(response){
            alert('response')
            console.log(response)
        }
    })

    // for(let i = 0; i < users_selected_grupos.length; i++){
       
    //     $.ajax({
    //         url:"assets/php/ajax.php?insertarUsersGroup",
    //         method:'post',
    //         data:{user_selected:users_selected_grupos[i]}
    //     })
    // }
    
    alert('Grupo creado exitosamente')
})


//for follow the user

$(".followbtn").click(function () {
    var user_id_v = $(this).data('userId');
    var button = this;
    $(button).attr('disabled', true);

    $.ajax({
        url: 'assets/php/ajax.php?follow',
        method: 'post',
        dataType: 'json',
        data: { user_id: user_id_v },
        success: function (response) {
            // console.log(response);
            if (response.status) {
                $(button).data('userId', 0);
                $(button).html('<i class="bi bi-check-circle-fill"></i> Followed')
            } else {
                $(button).attr('disabled', false);

                alert('something is wrong,try again after some time');
            }
        }
    });
});



//for unfollow the user

$(".unfollowbtn").click(function () {
    var user_id_v = $(this).data('userId');
    var button = this;
    $(button).attr('disabled', true);
    // console.log('clicked');
    $.ajax({
        url: 'assets/php/ajax.php?unfollow',
        method: 'post',
        dataType: 'json',
        data: { user_id: user_id_v },
        success: function (response) {
            if (response.status) {
                $(button).data('userId', 0);
                $(button).html('<i class="bi bi-check-circle-fill"></i> Unfollowed')
            } else {
                $(button).attr('disabled', false);

                alert('something is wrong,try again after some time');
            }
        }
    });
});




//for like the post



$(".like_btn").click(function () {
    var post_id_v = $(this).data('postId');
    var button = this;
    $(button).attr('disabled', true);
    $.ajax({
        url: 'assets/php/ajax.php?like',
        method: 'post',
        dataType: 'json',
        data: { post_id: post_id_v },
        success: function (response) {
            // console.log(response);
            if (response.status) {

                $(button).attr('disabled', false);
                $(button).hide()
                $(button).siblings('.unlike_btn').show();
                // $('#likecount' + post_id_v).text($('#likecount' + post_id_v).text() - (-1));
                // location.reload();

            } else {
                $(button).attr('disabled', false);

                alert('something is wrong,try again after some time');

            }


        }
    });
});



$(".unlike_btn").click(function () {
    var post_id_v = $(this).data('postId');
    var button = this;
    $(button).attr('disabled', true);
    $.ajax({
        url: 'assets/php/ajax.php?unlike',
        method: 'post',
        dataType: 'json',
        data: { post_id: post_id_v },
        success: function (response) {

            if (response.status) {

                $(button).attr('disabled', false);
                $(button).hide()
                $(button).siblings('.like_btn').show();
                // location.reload();
                // $('#likecount' + post_id_v).text($('#likecount' + post_id_v).text() - 1);

            } else {
                $(button).attr('disabled', false);

                alert('something is wrong,try again after some time');


            }



        }
    });
});


//for adding comment
$(".add-comment").click(function () {
    console.log('ESTE SE EJECTUO')
    
    var button = this;

    var comment_v = $(button).siblings('.comment-input').val();
    console.log(document.querySelectorAll('.comment-input'))

    if (comment_v == '') {
        return 0;
    }
    var post_id_v = $(this).data('postId');
    var cs = $(this).data('cs');
    var page = $(this).data('page');


    $(button).attr('disabled', true);
    $(button).siblings('.comment-input').attr('disabled', true);
    $.ajax({
        url: 'assets/php/ajax.php?addcomment',
        method: 'post',
        dataType: 'json',
        data: { post_id: post_id_v, comment: comment_v },
        success: function (response) {
            // console.log(response);
            if (response.status) {

                $(button).attr('disabled', false);
                $(button).siblings('.comment-input').attr('disabled', false);
                $(button).siblings('.comment-input').val('');
                $("#" + cs).prepend(response.comment);

                $('.nce').hide();
                if (page == 'wall') {
                    location.reload();
                }

            } else {
                $(button).attr('disabled', false);
                $(button).siblings('.comment-input').attr('disabled', false);

                alert('something is wrong,try again after some time');


            }



        }
    });
});

$('.comment-input').on( 'change', (e)=>{
    e.target.parentElement.lastElementChild.click()
})

var sr = false;

$("#search").focus(function () {
    $("#search_result").show();


});



$("#close_search").click(function () {
    $("#search_result").hide();
});

$("#search").keyup(function () {
    var keyword_v = $(this).val();

    $.ajax({
        url: 'assets/php/ajax.php?search',
        method: 'post',
        dataType: 'json',
        data: { keyword: keyword_v },
        success: function (response) {
            // console.log(response);
            if (response.status) {
                $("#sra").html(response.users);

            } else {


                $("#sra").html('<p class="text-center text-muted">no user found !</p>');




            }



        }
    });

});


jQuery(document).ready(function () {
    jQuery("time.timeago").timeago();
});


$("#show_not").click(function () {

    $.ajax({
        url: 'assets/php/ajax.php?notread',
        method: 'post',
        dataType: 'json',
        success: function (response) {

            if (response.status) {
                $(".un-count").hide();
            }



        }
    });

});

$('#bloquear_usuario').click(function(){
    alert('Usuario ha sido bloqueado')
})

$(".unblockbtn").click(function () {
    var user_id_v = $(this).data('userId');
    var button = this;
    $(button).attr('disabled', true);
    // console.log('clicked');
    $.ajax({
        url: 'assets/php/ajax.php?unblock',
        method: 'post',
        dataType: 'json',
        data: { user_id: user_id_v },
        success: function (response) {
            // console.log(response);
            if (response.status) {
                location.reload();
            } else {
                $(button).attr('disabled', false);

                alert('something is wrong,try again after some time');
            }
        }
    });
});

let chatting_user_id = 0;
let chatting_grupo_id = 0;
$(".chatlist_item").click();

function popchat(user_id) {
    chatting_grupo_id = 0
    
    $('#buscador_de_chat').val("")
    localStorage.setItem('user_id_to_call', JSON.stringify(user_id))
    $("#user_chat").html(`<div class="spinner-border text-center" role="status">

  </div>`);

    $("#chatter_username").text('loading..');
    $("#chatter_name").text('');
    $("#chatter_pic").attr('src', 'assets/images/profile/default_profile.jpg');
    chatting_user_id = user_id;
    $("#sendmsg").attr('data-user-id', user_id);
}

function popGrupochat(grupo_id){
    chatting_user_id = 0;
    $("#user_chat").html(`<div class="spinner-border text-center" role="status">

  </div>`);

    $("#chatter_username").text('loading..');
    $("#chatter_name").text('');
    $("#chatter_pic").attr('src', 'assets/images/profile/default_profile.jpg');

    chatting_grupo_id = grupo_id;

    $("#sendmsg").attr('data-user-id', grupo_id);


}


$("#sendmsg").click(function () {
    if(chatting_grupo_id !== 0){
    
        let grupo_id = chatting_grupo_id;
        let msg = $("#msginput").val();
     
        if (!msg) return;

        $("#sendmsg").attr("disabled", true);
        $("#msginput").attr("disabled", true);

        $.ajax({
        url: 'assets/php/ajax.php?sendmessageGrupo',
        method: 'post',
        dataType: 'json',
        data: { grupo_id: grupo_id, msg: msg },
        success: function (response) {
            if (response.status) {
                $("#sendmsg").attr("disabled", false);
                $("#msginput").attr("disabled", false);
                $("#msginput").val('');
            } else {
                alert('someting went wrong, try again after some time');
            }



        }
    });
    }
    if(chatting_user_id !== 0){
    var user_id = chatting_user_id;
    var msg = $("#msginput").val();
     
    if (!msg) return;

    $("#sendmsg").attr("disabled", true);
    $("#msginput").attr("disabled", true);
    $.ajax({
        url: 'assets/php/ajax.php?sendmessage',
        method: 'post',
        dataType: 'json',
        data: { user_id: user_id, msg: msg },
        success: function (response) {
            if (response.status) {
                $("#sendmsg").attr("disabled", false);
                $("#msginput").attr("disabled", false);
                $("#msginput").val('');
            } else {
                alert('someting went wrong, try again after some time');
            }



        }
    });
    }
    

});

//VALIDACION DEL REPORT
 let contenido_inapropiado_no = document.querySelector('#contenido_inapropiado_no')
 let lenguaje_ofensivo_no = document.querySelector('#lenguaje_ofensivo_no')
 let acoso_comportamiento_no = document.querySelector('#acoso_comportamiento_no')
 let reportar_boton = document.querySelector('#reportar_boton')
    
 reportar_boton.addEventListener('click', (e)=>{
        if(contenido_inapropiado_no.checked && lenguaje_ofensivo_no.checked && acoso_comportamiento_no ){
            alert('Debes seleccionar un motivo')
            e.preventDefault()
        }else{
            alert('Reporte realizado exitosamente')
        }
    })
function synmsg() {
    // Obteniendo mensajes
    $.ajax({
        url: 'assets/php/ajax.php?getmessages',
        method: 'post',
        dataType: 'json',
        data: { chatter_id: chatting_user_id, chatter_grupo_id: chatting_grupo_id },
        success: function (response) {
            
            let inputValorBuscarChat = $('#buscador_de_chat').val()
            if(inputValorBuscarChat.length === 0){
                 $("#chatlist").html(response.chatlist);
            if (response.newmsgcount == 0) {
                $("#msgcounter").hide();
            } else {
                $("#msgcounter").show();
                $("#msgcounter").html("<small>" + response.newmsgcount + "</small>");


            }
            if (response.blocked) {
                $("#msgsender").hide();
                $("#blerror").show();

            } else {
                $("#msgsender").show();
                $("#blerror").hide();
            }

            if (chatting_user_id != 0) {

                document.getElementById('imagen_perfil_te_llaman').src = `assets/images/profile/${response.chat.userdata.profile_pic}`
                document.getElementById('nombre_perfil_te_llaman').textContent = `${response.chat.userdata.first_name} ${response.chat.userdata.last_name}`
                document.getElementById('boton_camara_chatbox').style.display = ''
                document.getElementById('chatbox_menu_dropdown').style.display = ''
                let userchat = $("#user_chat")
                let userChat = document.getElementById('user_chat')
                let scroll_pos = userchat.scrollTop()
                userchat.html(response.chat.msgs);
                userchat.scrollTop(scroll_pos)
              
                // $("#user_chat").html(response.chat.msgs);
                //  userChat.scrollTop = scroll_pos ;
                //console.log(response)
                $("#chatter_username").text(response.chat.userdata.username);
                // $("#cplink").attr('href', '?u=' + response.chat.userdata.username);

                $("#chatter_name").text(response.chat.userdata.first_name + ' ' + response.chat.userdata.last_name);
                $("#chatter_pic").attr('src', 'assets/images/profile/' + response.chat.userdata.profile_pic);
                

                //DATA PROFILE 
                $('.nombre_imagen_perfil').attr('href',`?u=${response.chat.userdata.username}`)
                $("#frontimage_profile_modal").attr('src','assets/images/frontpage/' + response.chat.userdata.frontpage_pic )
                $("#profile_profile_modal").attr('src','assets/images/profile/' + response.chat.userdata.profile_pic )
                $("#nombre_profile_modal").text(response.chat.userdata.first_name + ' ' + response.chat.userdata.last_name)
                $('#profile_block_modal').attr('src','assets/images/profile/' + response.chat.userdata.profile_pic )
                $("#nombre_block_modal").text(response.chat.userdata.first_name + ' ' + response.chat.userdata.last_name)

                //DATA REPORTAR

                $('#profile_reportar_modal').attr('src','assets/images/profile/' + response.chat.userdata.profile_pic )
                $('#nombre_reportar_modal').text(response.chat.userdata.first_name + ' ' + response.chat.userdata.last_name)
                $('#user_reported_id').attr('value', response.chat.userdata.id)
                $('#user_block_id').attr('value', response.chat.userdata.id)
                $.ajax({
                    url: 'assets/php/ajax.php?getPostById',
                    method: 'post',
                    dataType:'json',
                    data: {
                        funcion:"getPostById",
                        user_id:response.chat.userdata.id
                    },
                    success: function (usuarioPosts) {
                        let contenedor_imagenes = document.querySelector('.contenedor_imagenes_perfil_modal')
                        contenedor_imagenes.innerHTML = '';
                        for( let i = 0; i < usuarioPosts.length; i++){
                            let imagesName = usuarioPosts[i].post_img
                            let imageHtml = document.createElement('img')
                            imageHtml.setAttribute('src', `assets/images/posts/${imagesName}`)
                            contenedor_imagenes.appendChild(imageHtml)
                        }
                    }
                })
            }
            if (chatting_grupo_id != 0) {
                
                document.getElementById('imagen_perfil_te_llaman').src = `assets/images/imagesGrupos/${response.chat.userdata.grupos_pic}`
                document.getElementById('nombre_perfil_te_llaman').textContent = `${response.chat.userdata.nombre_grupo}`

                let userchat = $("#user_chat")
                let userChat = document.getElementById('user_chat')
                let scroll_pos = userchat.scrollTop()
                userchat.html(response.chat.msgs);
                userchat.scrollTop(scroll_pos)
              
                // $("#user_chat").html(response.chat.msgs);
                //  userChat.scrollTop = scroll_pos ;
                //console.log(response)
                $("#chatter_username").text(response.chat.userdata.nombre_grupo);
                // $("#cplink").attr('href', '?u=' + response.chat.userdata.username);

                $("#chatter_name").text(response.chat.userdata.nombre_grupo);
               
                $("#chatter_pic").attr('src', 'assets/images/imagesGrupos/' + response.chat.userdata.grupos_pic);
                
                document.getElementById('boton_camara_chatbox').style.display = 'none'
                document.getElementById('chatbox_menu_dropdown').style.display = 'none'
                //DATA PROFILE 
               
               
                $("#profile_profile_modal").attr('src','assets/images/imagesGrupos/' + response.chat.userdata.grupos_pic )
                $("#nombre_profile_modal").text(response.chat.userdata.nombre_grupo)
                $('#profile_block_modal').attr('src','assets/images/imagesGrupos/' + response.chat.userdata.grupos_pic )
                $("#nombre_block_modal").text(response.chat.userdata.nombre_grupo)

                //DATA REPORTAR

              
                
            }
            }
            
           
            


        }
    });
    // Obteniendo llamadas
    $.ajax({
        url: 'assets/php/ajax.php?getllamadas',
        method:'GET',
        success:function(response){
            let responseFormat = JSON.parse(response)
            let htmlLlamadas = '';
            if(responseFormat.length !== 0){
                
                console.warn('AQUI LA DATA DE QUE TE ESTAN LLAMANDO')
                console.warn(responseFormat)
                let tipo_de_llamada = ''
                channelNameFromDB = responseFormat[0].channelName
                if(responseFormat[0].tipo_llamada === "llamada"){
                   tipo_de_llamada = 'Te estan llamando'
                   document.getElementById('user-1').style.display = 'none'
                   document.getElementById('user-2').style.display = 'none'
                   document.getElementById('en_llamada').style.display = 'block'

                }else{
                    tipo_de_llamada = 'Te hacen una videollamada'
                }
                $.ajax({
                    url: 'assets/php/ajax.php?getUserCalling',
                    method:'post',
                    data:{userCalling: responseFormat[0].id_user_calling},
                    success:function(response2){
                        
                        let usuario = JSON.parse(response2)
                        
                        if(usuario){
                           
                            htmlLlamadas = `
                         <div style="position: absolute;
                  transform: translate(calc(50% - 90px), -35px );
                  width: 600px;
                  height: 450px;
                  border-radius: 12px; 
                  color: white;"
                  class="container_contestar_llamada p-3">

                            <audio id="sonido_llamada" autoplay preload="auto">
                                <source src="assets/efectos/llamadas.wav" type="audio/ogg">
                                
                                Tu navegador no soporta la etiqueta audio.
                            </audio>
              <div class="header_contestar_llamada p-3">
                <i class="bi bi-x-square-fill"></i>
              </div>

              <div class="content_contestar_llamada p-3">
                <h3>${tipo_de_llamada}</h3>
                <img style="border-radius: 50%;
                            padding: 10px;
                            background: white;" width="120px" height="120px" src="assets/images/profile/${usuario.profile_pic}" alt="">
                <p>${usuario.first_name} ${usuario.last_name}</p>
                <div id="controls_2">
                    <div role="button" data-bs-target="#videoLlamadaModal" data-bs-toggle="modal" style="background-color: forestgreen;" class="control-container_2" id="camera-btn_2"> 
                      <i class="bi bi-telephone-plus"></i>
                    </div>
                    
                  

                    <div class="control-container_2" id="leave-btn"> 
                      <i class="bi bi-telephone-x"></i>
                    </div>
                </div>

              </div>
      </div>

                        `
                        $('#contenedor_de_llamada').html(htmlLlamadas)
                        let buttonContestar = document.getElementById('camera-btn_2') || null
                        buttonContestar.addEventListener('click' , async()=>{

                            console.log('SE EJECUTO EL buttonContestar')
                            let sonido = document.getElementById('sonido_llamada')
                            sonido.muted = true
                            let nameChannel = JSON.parse(channelNameFromDB)
                            console.log(nameChannel)
                            await actualizarLlamada(nameChannel)
                            await init(channelNameFromDB)
                            if(responseFormat[0].tipo_llamada === "llamada"){
                                document.getElementById('user-1').style.display = 'none'
                                document.getElementById('user-2').style.display = 'none'
                                document.getElementById('en_llamada').style.display = 'block' 
                            }
                            $('#contenedor_de_llamada').html('')
})      
                        }
                        
                        
                        
                    }
                })
               
            // Define the function that makes an AJAX request
            
                
            }else{
                
                $('#contenedor_de_llamada').html('')
            }
             
            
         
        }
    })
    // Obteniendo notificaciones
    $.ajax({
        url:'assets/php/ajax.php?getNotifications',
        method:'GET',
        success: function(notificaciones){
            
            let notificacionesJSON = JSON.parse(notificaciones)
            let notificacionesCount = notificacionesJSON.pop()
    
            let htmlNotifications = ``
            for (let not of notificacionesJSON) { // Iterar sobre las notificaciones
            let time = new Date(not['created_at']) ;
            let transcurridoTime = tiempo_transcurrido(time)

            let fuser = not['user'];
            let post = '';
            if (not['post_id']) {
            post = 'data-bs-toggle="modal" data-bs-target="#postview' + not['post_id'] + '"';
            }
            let fbtn = '';
            htmlNotifications += `<div class="d-flex justify-content-between border-bottom"> 
                        <div class="d-flex align-items-center p-2"> 
                            <div>
                            <img src="assets/images/profile/${fuser['profile_pic']}" alt="" height="40" width="40" class="rounded-circle border"> 
                            </div> <div>&nbsp;&nbsp;
                        </div> <div class="d-flex flex-column justify-content-center" ${post}> 
                            <a href='?u=${fuser['username']}' class="text-decoration-none text-dark">
                            <h6 style="margin: 0px;font-size: small;">${fuser['first_name']} ${fuser['last_name']}</h6>
                            </a> 
                            <p style="margin:0px;font-size:small" class="${not['read_status'] ? 'text-muted' : ''}">@${fuser['username']} ${not['message']}</p> 
                            <span style="font-size:small" class="timeago ${not['read_status'] ? 'text-muted' : ''} text-small" datetime="${transcurridoTime}">${transcurridoTime}</span> 
                            </div> 
                            </div> 
                            <div class="d-flex align-items-center"> ${not['read_status'] == 0 ? '<div class="p-1 bg-primary rounded-circle"></div>' : ''} ${not['read_status'] == 2 ? '<span class="badge bg-danger">Post Deleted</span>' : ''} 
                            </div>
                            </div>`;
}

let icono_notificacionesHTML = ``;
if(Number(notificacionesCount) > 0 ){
    icono_notificacionesHTML = `
     <i class="bi bi-bell-fill" style="color: white; font-size: 1.4rem;"></i>
<span class="un-count position-absolute start-10 translate-middle badge p-1 rounded-pill bg-danger">
   <small>${notificacionesCount}</small>
</span>
`
}else{
    icono_notificacionesHTML = `
    <i class="bi bi-bell-fill" style="color: white; font-size: 1.4rem;"></i>`
}

$('#show_not').html(icono_notificacionesHTML)
$("#contenedor_de_notificaciones").html(htmlNotifications);
        }
    })

    // Borrando estados caducados

     $.ajax({
        url:"assets/php/ajax.php?estadoCaducado",
        method:"post",
        success:function(response){
           
          
        }
    })
}

synmsg();

setInterval(() => {
    synmsg();

}, 10000);

var valorAModificar = document.querySelectorAll('#valorAModificar')
var modificarPerfil = document.querySelector("#modificarPerfil");
var modificarInput = document.querySelectorAll('#modificarInput');
var guardarPerfil = document.querySelector("#guardarPerfil");

//Aqui se hace el update de los datos

if(modificarPerfil){
modificarPerfil.addEventListener('click', (e)=>{
    e.preventDefault()
    console.log(valorAModificar)
    for(let i = 0; i<modificarInput.length; i++){

    modificarInput[i].style.display = 'inline-block'
    }
    modificarPerfil.style.display = 'none'
    guardarPerfil.style.display = 'inline-block';

    guardarPerfil.addEventListener('click', ()=>{
        guardarPerfil.style.display = 'none';
        modificarPerfil.style.display = 'inline-block'
        for(let i = 0; i<modificarInput.length; i++){

        modificarInput[i].style.display = 'none'
    }
    })

    
})
}

var responderChat = document.querySelectorAll('#bubbleChatPadre #responder_chat');
var bubbleChatPadre = document.querySelectorAll('#bubbleChatPadre');


for(let i = 0; i< bubbleChatPadre.length; i++){



responderChat[i].addEventListener('click', (e)=>{
    let target = e.target
    if(document.getElementById('contenedor_de_respuesta')){
        return
    }
    
    let inputDiv = document.createElement('div');
    let newBuble = document.createElement('div');
    
    inputDiv.setAttribute('id', 'contenedor_de_respuesta')
    inputDiv.setAttribute('style', 
    `display: flex;
    align-items: flex-end;
    justify-content: end;`)
    
    newBuble.innerHTML = `
    <div class="input-group p-2 gap-2 align-items-center">

                        
                    <input
                    id="respuesta" 
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
                           color:#aaaaaa;" type="text" class="form-control  rounded border-0 shadow-none comment-input" aria-label="Recipient's username" aria-describedby="button-addon2">
                    
                     <button style="width:20%;                            
                            background-color: #515151;" 
                            class="btn btn-outline-secondary rounded border-0 add-comment" type="button" id="input_button_respuesta"><i class="bi bi-send-fill text-light"></i> </button>

                </div>
    `
    newBuble.setAttribute('placeholder', 'Escribe aquí...');
    inputDiv.appendChild(newBuble);
    console.log(bubbleChatPadre[i])
    bubbleChatPadre[i].parentNode.insertBefore(inputDiv,bubbleChatPadre[i].nextSibling );

    let contenedo_principal_comentarios = document.querySelectorAll('#contenedo_principal_comentarios')
   
   bubbleChatPadre[i].parentElement.querySelector('#contenedor_de_respuesta').scrollIntoView({
     behavior: 'smooth',
     block: 'end',
  
});
    

    let input_button_respuesta = document.getElementById('input_button_respuesta')

    input_button_respuesta.addEventListener('click', ()=>{
        

         if(document.getElementById('respuesta').value.length === 0){
            return
        }

         let idComentario = input_button_respuesta.parentElement.parentElement.parentElement.previousElementSibling.previousElementSibling.querySelector('form').lastElementChild.value

         let comentario = input_button_respuesta.previousElementSibling.value
         let user_id = JSON.parse(localStorage.getItem('current_user_id')) 
       

        let respuesta = document.getElementById('respuesta').value;
        
        let div = document.createElement('div');
        div.className = 'd-flex align-items-center justify-content-end p-1 ps-0 gap-1';
        div.style ='flex-wrap: wrap;'
        div.innerHTML = `
        <div class="align-self-start pt-2">
          
        </div>
        <img src="" id="imagen_perfil_respuesta"
         style="width: 25px;
                height: 25px;
                border-radius: 50%;
                border: 1px solid;
                object-fit: cover;"/>
        <div class="d-flex flex-column justify-content-start align-items-start col-10 px-1 rounded background_bubble_chat " style="overflow-wrap: break-word; width:55%;">

                                                <h6 style="margin: 0px;">
                                                    <a id="link_al_perfil" href="" class="text-decoration-none text-dark text-muted text_size_small"></a> 
                                                </h6>
                                                
                                                <p class="text_size_small" style=" color: #aaaaaa;
                                                        padding: 10px 15px;
                                                        display: inline-block;
                                                        max-width: 100%;
                                                        margin-bottom: 0.25rem;
                                                        font-size: 0.9rem;
                                                        position: relative;
                                                        padding-right: 1.65rem;">${respuesta}</p> 
                                              
        </div>
        <div class="d-flex justify-content-end " style="padding-right: 4px; flex-basis:100%;">
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
            <span id="<?= $respuesta['user_id'] ?>">0</span>  
                                                
            </div>
                                        
                                            <!-- TIME AGO -->
            <p style="margin:0px;" class="text-muted">(justo ahora)</p>
          </div>
        `;
        
        bubbleChatPadre[i].appendChild(div);
        document.getElementById('respuesta').remove();
        document.getElementById('contenedor_de_respuesta').remove()
        bubbleChatPadre[i].parentNode.insertBefore(div,bubbleChatPadre[i].nextSibling );

         $.ajax({
               url:"assets/php/ajax.php?responseComentario",
               method:"post",
               data:{idComentario:idComentario, comentario:comentario, user_id:user_id},
               success:function(response){
                 let datares = JSON.parse(response)
                 let respuesta = datares[0];
                 let userData = datares[1]

                 $('#link_al_perfil').attr('href',`?u=${userData.username}`)
                 $('#link_al_perfil').text(`@${userData.username}`)
                 $('#imagen_perfil_respuesta').attr('src', `assets/images/profile/${userData.profile_pic}`)
               }
           })

    })
    
})
}

let flex = document.getElementById("flex");

let post_textarea = document.querySelectorAll('#post_textarea');
let modal = document.getElementById('miModal');
let cerrar = document.getElementById('close');
post_textarea[0].addEventListener('click', ()=>{
   modal.style.display = 'block';
})

flex.addEventListener("click", function(e) {
// Comprobar si el elemento objetivo es el mismo que el div flex
if (e.target == flex) {
// Ocultar el modal cambiando su propiedad de visualización a none
modal.style.display = "none";
}
});

$('#agregar_estado_plus').click((e)=>{
    if(modal.style.display === 'none'){

        modal.style.display = 'block';
    }else{
        modal.style.display = 'none';
    }
})

cerrar.addEventListener('click', function(){
    modal.style.display = 'none';
    console.log(document.querySelector('.file-input'))
});

const placeHolder = document.querySelector('.placeholder');
const inputModal = document.querySelector('.input-editable');
const counterLimit = document.querySelector('.counter-limit');
const publicBtn = document.querySelector('.public-btn');

const form = document.querySelector('.form-file');
const fileInput = document.querySelector('.file-input');

const progressArea = document.querySelector('.progress-area');
const uploadedArea = document.querySelector('.uploaded-area');

form.addEventListener("click", ()=>{
    document.querySelector('.file-input').click();
});

fileInput.onchange = ({target})=>{
    let file = target.files[0];
 
    if(file){
      let fileName = file.name;
      if(fileName.length >= 12){
        let splitName = fileName.split('.');
        fileName = splitName[0].substring(0, 13) + "... ." + splitName[1];
      }
      
      uploadFile(fileName);
    }
  }
  function uploadFile(name){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "sub.php");
    xhr.upload.addEventListener("progress", ({loaded, total}) =>{
      let fileLoaded = Math.floor((loaded / total) * 100);
      let fileTotal = Math.floor(total / 1000);
      let fileSize;
      (fileTotal < 1024) ? fileSize = fileTotal + " KB" : fileSize = (loaded / (1024*1024)).toFixed(2) + " MB";
      let progressHTML = `<li class="row">
                            <i class="fas fa-file-alt"></i>
                            <div class="content">
                              <div class="details">
                                <span class="name">${name} • Uploading</span>
                                <span class="percent">${fileLoaded}%</span>
                              </div>
                              <div class="progress-bar">
                                <div class="progress" style="width: ${fileLoaded}%"></div>
                              </div>
                            </div>
                          </li>`;
      uploadedArea.classList.add("onprogress");
      progressArea.innerHTML = progressHTML;
      if(loaded == total){
        progressArea.innerHTML = "";
        let uploadedHTML = `<li class="row">
                              <div class="content upload">
                                <i class="fas fa-file-alt"></i>
                                <div class="details">
                                  <span class="name">${name} • Uploaded</span>
                                  <span class="size">${fileSize}</span>
                                </div>
                              </div>
                              <i class="fas fa-check"></i>
                            </li>`;
        uploadedArea.classList.remove("onprogress");
        uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
      }
    });
    let data = new FormData(form);
    xhr.send(data);
  }




let limit = 400;

inputModal.addEventListener('keyup',function(){
    const inputLength = inputModal.textContent.length;

     
     for(let i = 0; i< post_textarea.length; i++){
        console.log(post_textarea[i])
        post_textarea[i].value = `${inputModal.textContent}`
     }
    if(inputLength >0){
        placeHolder.style.display = 'none';
        const limitNum = counterLimit.textContent = limit - inputLength;
        counterLimit.style.visibility = 'visible';
        publicBtn.classList.add('active')
        if(limitNum < 0){
            counterLimit.style.color = 'red'
            publicBtn.classList.remove('active')
        }else{
            counterLimit.style.color = '#000'
        }
    }else{
        placeHolder.style.display = 'block'
        counterLimit.textContent = limit
        counterLimit.style.visibility = 'hidden';
        publicBtn.classList.remove('active')
    }
})


// Video llamada
let localStream;
let remoteStream;
let peerConnection;

let APP_ID = "06495e3b0ced46478913f5b7795f412f"
let token = null
let uid = JSON.parse(localStorage.getItem('current_user_id'))  || null
let client;
let channel;
let iceCandidatesQueue = []
let channelNameFromDB = null

const servers = {
    iceServers:[
        {
            urls:['stun:stun1.l.google.com:19302', 'stun:stun2.l.google.com:19302']
        }
    ]
}

let init = async(nombreCanal = null) =>{
    document.getElementById('button_llamada').style.display = 'none'
    document.getElementById('usuario_a_llamar_info').style.display = 'none'
    document.getElementById('videos').style.transform = 'scale(1)'
    let tipo = document.getElementById('camera-btn').style.opacity == '0.3' ? 'llamada' : 'video';
    if(typeof nombreCanal ==="object"){
        $.ajax({
               url:"assets/php/ajax.php?insertingCalls",
               method:"post",
               data:{user_called:localStorage.getItem('user_id_to_call'), channelName:localStorage.getItem('user_id_to_call'), tipo:tipo},
               success:function(response){
                 console.log('AQUI LA RESPUESTA DEL INIT INSERTINGCALLS')
                 console.log(response)
               }
           })
    
    }

   
    uid = JSON.parse(localStorage.getItem('current_user_id')) 
    client = await AgoraRTM.createInstance(APP_ID)
    
    await client.login({uid, token})
 

    if(typeof nombreCanal ==="string"){
        console.log('ENTRO ACA EN EL NOMBRE DEL CANAL')
        channel = await client.createChannel(nombreCanal)
        document.getElementById('user-2').style.display = 'none'
    }else{
        
        channel = await client.createChannel(localStorage.getItem('user_id_to_call'))
    }
    
   
    await channel.join()
    
    channel.on('MemberJoined', handleUserJoined)
   
    channel.on('MemberLeft', handleUserLeft)
 
    client.on('MessageFromPeer', handleMessageFromPeer)
  
    let isJustCall = document.getElementById('camera-btn').style.opacity == '0.3' ? false : true;
    localStream = await navigator.mediaDevices.getUserMedia({video:isJustCall, audio:true})
  
    
    document.getElementById('user-1').srcObject = localStream
 
 
}
let actualizarLlamada = async (nombre_channel)=>{
     $.ajax({
               url:"assets/php/ajax.php?progressCall",
               method:"post",
               data:{channel_name:nombre_channel},
               success:function(response){
                 console.log('AQUI LA RESPUESTA DEL INIT progressCall')
                 console.log(response)
               }
           })
}

let handleUserJoined =async (memberId) =>{
    console.warn('A new user has joined: ', memberId)
    if(localStream){
        
        await createOffer(memberId)
    }else{
        console.warn('NO HAY LOCALSTREAM')
    }

}

let handleUserLeft = async (memberId) =>{
    document.getElementById('user-2').style.display = 'none'
}

let handleMessageFromPeer = async (message, memberId) =>{

message = JSON.parse(message.text)

if(message.type === 'offer'){

await createAnswer(memberId, message.offer)
}
if(message.type === 'answer'){

await addAnswer(message.answer)
}
if(message.type === 'candidate'){

if(peerConnection && peerConnection.remoteDescription) {
// Si hay un peerConnection y una descripción remota, se añade el candidato ICE
peerConnection.addIceCandidate(message.candidate).then(()=>{
console.warn('SE EJECUTO LA FUNCION ADDICECANDIDATE')
})
} else {
// Si no, se guarda el candidato ICE en la cola
iceCandidatesQueue.push(message.candidate);
}
}
}

let createPeerConnection = async (memberId) =>{
    peerConnection = new RTCPeerConnection(servers)
    remoteStream =  new MediaStream()
    if(remoteStream){
    document.getElementById('user-2').style.display = "block"
    document.getElementById('user-2').srcObject = remoteStream
    document.getElementById('user-2-mini').srcObject = remoteStream
    let isJustCall = document.getElementById('camera-btn').style.opacity === '0.3' ? false : true;
    
    if(!isJustCall){
        document.getElementById('user-1').style.display = 'none'
        
        document.getElementById('user-2').style.display = 'none'
        document.getElementById('en_llamada').style.display = 'block'
    }
    
    
    }
   
        if(!localStream){
            let isJustCall = document.getElementById('camera-btn').style.opacity === '0.3' ? false : true;
            localStream = await navigator.mediaDevices.getUserMedia({video:isJustCall,audio:true})
            document.getElementById('user-1').srcObject = localStream
            if(!isJustCall){
                document.getElementById('user-1').style.display = 'none'
                document.getElementById('user-2').style.display = 'none'
                document.getElementById('en_llamada').style.display = 'block'
            }
        }
       

    
    localStream.getTracks().forEach((track)=>{
        peerConnection.addTrack(track, localStream)
    })

    peerConnection.ontrack = (event)=>{

        event.streams[0].getTracks().forEach((track)=>{
            remoteStream.addTrack(track)
        })
    }

    peerConnection.onicecandidate = async (event) =>{
      
        if(event.candidate){
            try {
                await client.sendMessageToPeer({text:JSON.stringify({'type':'candidate', 'candidate':event.candidate})}, memberId)
            } catch (error) {
               
            }
        

        }
    }
}

let createOffer = async (memberId) =>{

    await createPeerConnection(memberId)
    let offer = await peerConnection.createOffer()
    await peerConnection.setLocalDescription(offer)
    

    await client.sendMessageToPeer({text:JSON.stringify({'type':'offer', 'offer':offer})}, memberId)


}

let createAnswer = async (memberId, offer)=>{

 
    try {
    await createPeerConnection(memberId)
 
    await peerConnection.setRemoteDescription(offer)

   

    let answer = await peerConnection.createAnswer()

    await peerConnection.setLocalDescription( answer)
    
    await client.sendMessageToPeer({text:JSON.stringify({'type':'answer', 'answer':answer})}, memberId)
    } catch (error) {
        console.warn('ERROR ES EN CREATE ANSWER')
    }
    
   
   

}

let addAnswer = async (answer) => {


peerConnection.setRemoteDescription(answer).then(()=>{

// Se procesan los candidatos ICE que estaban en la cola
while (iceCandidatesQueue.length > 0) {
let candidate = iceCandidatesQueue.shift();
peerConnection.addIceCandidate(candidate);
}
})


}

let leaveChannel = async () =>{
    await channel.leave()
    await channel.logout()
}

let toggleCamera = async () =>{
    let videoTrack = localStream.getTracks().find(track=>track.kind ==='video')

    if(videoTrack.enabled){
        videoTrack.enabled = false
        document.getElementById('camera-btn').style.backgroundColor = 'rgb(255,80,80)'
        document.getElementById('camera-btn_mini').style.backgroundColor = 'rgb(255,80,80)'

    }else{
        videoTrack.enabled = true;
        document.getElementById('camera-btn').style.backgroundColor = 'rgb(179,102,249,.9)';
        document.getElementById('camera-btn_mini').style.backgroundColor = 'rgb(179,102,249,.9)';
    }
}

let toggleMic = async () =>{
    let audioTrack = localStream.getTracks().find(track=>track.kind ==='audio')

    if(audioTrack.enabled){
        audioTrack.enabled = false
        document.getElementById('mic-btn').style.backgroundColor = 'rgb(255,80,80)'
        document.getElementById('mic-btn_mini').style.backgroundColor = 'rgb(255,80,80)'

    }else{
        audioTrack.enabled = true;
        document.getElementById('mic-btn').style.backgroundColor = 'rgb(179,102,249,.9)';
        document.getElementById('mic-btn_mini').style.backgroundColor = 'rgb(179,102,249,.9)';
    }
}

window.addEventListener('beforeunload', leaveChannel)

document.getElementById('camera-btn').addEventListener('click', toggleCamera)
document.getElementById('camera-btn_mini').addEventListener('click', toggleCamera)
document.getElementById('mic-btn').addEventListener('click', toggleMic)
document.getElementById('mic-btn_mini').addEventListener('click', toggleMic)
let buttonLlamada = document.getElementById('button_llamada')
let buttonContestar = document.getElementById('camera-btn_2') || null


// init();

buttonLlamada.addEventListener('click', init)

if(buttonContestar){
    buttonContestar.addEventListener('click' , async()=>{
        console.log('SE EJECUTO EL buttonContestar')
        await actualizarLlamada(channelNameFromDB)
        await init(channelNameFromDB)
})
}


function tiempo_transcurrido(date) {
var seconds = Math.floor((new Date() - date) / 1000); // Calcular la diferencia en segundos
var interval = seconds / 31536000; // Calcular el intervalo en años
if (interval > 1) { // Si el intervalo es mayor que 1, devolver el número de años
return Math.floor(interval) + " año" + (Math.floor(interval) != 1 ? "s" : "") + " atrás";
}
interval = seconds / 2592000; // Calcular el intervalo en meses
if (interval > 1) { // Si el intervalo es mayor que 1, devolver el número de meses
return Math.floor(interval) + " mes" + (Math.floor(interval) != 1 ? "es" : "") + " atrás";
}
interval = seconds / 86400; // Calcular el intervalo en días
if (interval > 1) { // Si el intervalo es mayor que 1, devolver el número de días
return Math.floor(interval) + " día" + (Math.floor(interval) != 1 ? "s" : "") + " atrás";
}
interval = seconds / 3600; // Calcular el intervalo en horas
if (interval > 1) { // Si el intervalo es mayor que 1, devolver el número de horas
return Math.floor(interval) + " hora" + (Math.floor(interval) != 1 ? "s" : "") + " atrás";
}
interval = seconds / 60; // Calcular el intervalo en minutos
if (interval > 1) { // Si el intervalo es mayor que 1, devolver el número de minutos
return Math.floor(interval) + " minuto" + (Math.floor(interval) != 1 ? "s" : "") + " atrás";
}
if (seconds >= 1) { // Si la diferencia es mayor o igual que un segundo, devolver el número de segundos
return Math.floor(seconds) + " segundo" + (Math.floor(seconds) != 1 ? "s" : "") + " atrás";
}
return "hace un momento"; // Si la diferencia es menor que un segundo, devolver una cadena genérica
}


// document.getElementById('join-btn').addEventListener('click', joinStream)
document.getElementById('leave-btn').addEventListener('click', async()=>{
     $.ajax({
               url:"assets/php/ajax.php?updateCalls",
               method:"post",
               data:{current_user: localStorage.getItem('current_user_id')},
               success:function(response){
                 console.log('AQUI LA RESPUESTA DEL INIT updateCalls')
                 console.log(response)
               }
           })
            window.location.reload()
})
document.getElementById('leave-btn_mini').addEventListener('click', async()=>{
     $.ajax({
               url:"assets/php/ajax.php?updateCalls",
               method:"post",
               data:{current_user: localStorage.getItem('current_user_id')},
               success:function(response){
                 console.log('AQUI LA RESPUESTA DEL INIT updateCalls')
                 console.log(response)
               }
           })
            window.location.reload()
})
// document.getElementById('mic-btn').addEventListener('click' ,toggleMic)
// document.getElementById('camera-btn').addEventListener('click' ,toggleCamera)

let agregarEstado = document.getElementById('agregarEstado')
let mostrarMiModal = () =>{
    console.log('SE ESTA EJECUTANDO')
    let textarea = document.getElementById("post_textarea");

    textarea.click()
}
agregarEstado.addEventListener('click', mostrarMiModal)



$('#publicar_estado').click((e)=>{

    let descripcion = document.getElementById('post_textarea').value;
    let formData = new FormData();
    let files = $('#select_post_img')[0].files[0];
    if(!files) {
        alert('Agrega una imagen')
        return
    }
    formData.append('file',files);
    formData.append('user_id', localStorage.getItem('current_user_id'));
    formData.append('descripcion', descripcion);
    
    $.ajax({
        url:"assets/php/ajax.php?publicarEstado",
        method:"post",
        data:formData,
        success:function(response){
           window.location.reload()
        },
        error:function(error){
            alert('Lo siento.');
        },
        contentType: false,
        processData: false,
    })

})


document.querySelectorAll('.abrir_menu_estado').forEach((boton)=>{
    boton.addEventListener('click', ()=>{
     console.log('HOLA ABRIR')
    let menu_estado = boton.nextElementSibling
    console.log('EL ID DEL ELEMENTO A ELIMINAR')
    console.log(menu_estado.id)
    if(menu_estado.style.transform === "scale(0)"){
        menu_estado.style.transform = "scale(1)"
    }else{  
        menu_estado.style.transform = "scale(0)"
    }
})
})

document.querySelectorAll('.imagen_estado').forEach((estado)=>{
   
    estado.addEventListener('dblclick', ()=>{
        let id_estado = estado.id;

       $.ajax({
        url:"assets/php/ajax.php?likeEstado",
        method:"post",
        data:{id_estado: id_estado},
        success:function(response){
           let corazon = estado.nextElementSibling
          
            if(corazon.style.transform == 'scale(0)'){
                corazon.style.transform = 'scale(1)'
            }else{
                corazon.style.transform ='scale(0)';
            }
           
          
        }
    })
    })
})

 let borrarMiEstado = document.querySelector('.borrarMiEstado')

 borrarMiEstado.addEventListener('click', (e)=>{

    let id_estado = borrarMiEstado.id;

    $.ajax({
        url:"assets/php/ajax.php?borrarMiEstado",
        method:"post",
        data:{id_estado: id_estado},
        success:function(response){
         alert('Haz borrado tu estado')
         window.location.reload()
          
        }
    })
 })

 

 

 
