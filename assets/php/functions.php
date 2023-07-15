<?php
require_once 'config.php';
$db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die("database is not connected");

//function for showing pages
function showPage($page,$data=""){
include("assets/pages/$page.php");
}




// EDITAR APODO

function editarApodo($newApodo){
    global $db;
    $cu = $_SESSION['userdata']['id'];

    $query = "UPDATE users SET `username`='$newApodo' WHERE id = $cu ";

    $run = mysqli_query($db, $query);
    if($run){
        return "Actualizacion exitosa";
    }else{
        return "Ocurrio un error";
    }


}

function getUserFriend(){
     global $db;

    $current_user = $_SESSION['userdata']['id'];
    $query = "SELECT f1.follower_id AS mutual_follower
                FROM follow_list f1
                INNER JOIN follow_list f2
                ON f1.follower_id = f2.user_id AND f2.follower_id = f1.user_id
                WHERE f1.user_id = $current_user";

    $run = mysqli_query($db,$query);   
    $data = mysqli_fetch_all($run,true);
    $array_of_user = array();
   
    for ($i = 0; $i < sizeof($data); $i++) {
            // Obtenemos el valor de [mutual_follower] del elemento actual
            $id = $data[$i]["mutual_follower"];
            // Llamamos a la función getUserFriend(id) con el valor de $id
            $array_of_user[$i]= getUser($id);
}
    
     return $array_of_user;
}

function insertarUsersGroup($usuario_id, $grupo_id){
    global $db;


    $query = "INSERT INTO users_grupos (id_usuario, id_grupo) VALUES ($usuario_id,$grupo_id)";
    mysqli_query($db,$query);
}
function crearGrupo($user_admin, $nombre_grupo, $grupos_pic){
    global $db;

    $query = "INSERT INTO grupos (user_admin_id, nombre_grupo, grupos_pic) VALUES ($user_admin, '$nombre_grupo', '$grupos_pic')";
    // mysqli_query($db,$query);
    if (mysqli_query($db,$query)) {
        $last_id = mysqli_insert_id($db); 
        return $last_id;
        } else {
        return false; 
        }
     
}
//Report user

function reportUser($reportData){
    global $db;
    $userReporting = $_SESSION['userdata']['id'];
    $user_reported_id = $reportData['user_reported_id'];
    $lenguaje_ofensivo = $reportData['lenguaje_ofensivo'];
    $contenido_inapropiado = $reportData['contenido_inapropiado'];
    $acoso_comportamiento = $reportData['acoso_comportamiento'];
    $detail = $reportData['detail'];

    $query = "INSERT INTO reports (from_user_id,to_user_id, lenguaje_ofensivo, contenido_inapropiado, acoso_comportamiento, detail) VALUES ($userReporting,$user_reported_id, $lenguaje_ofensivo, $contenido_inapropiado, $acoso_comportamiento , '$detail')";

    return mysqli_query($db,$query);

}


function getCurrentUserData(){
    
  $cu= getUser($_SESSION['userdata']['id']);
  return $cu;

}
//for getting ids of chat users
function getActiveChatUserIds(){
    global $db;
    $current_user_id = $_SESSION['userdata']['id'];
    $query = "SELECT from_user_id,to_user_id FROM messages WHERE to_user_id=$current_user_id || from_user_id=$current_user_id ORDER BY id DESC";
    $run = mysqli_query($db,$query);
    $data =  mysqli_fetch_all($run,true);
    $ids=array();
    foreach($data as $ch){
    if($ch['from_user_id']!=$current_user_id && !in_array($ch['from_user_id'],$ids)){
       $ids[]=$ch['from_user_id'];
    }

    if($ch['to_user_id']!=$current_user_id && !in_array($ch['to_user_id'],$ids)){
        $ids[]=$ch['to_user_id'];
     }

    }

    return $ids;
}

function getActiveChatGroupsIds(){
    global $db;
    $current_user_id = $_SESSION['userdata']['id'];

    $query = "SELECT ug.id_usuario, ug.id_grupo,g.user_admin_id,g.nombre_grupo,g.grupos_pic 
               FROM users_grupos ug
               INNER JOIN grupos g 
               ON ug.id_grupo = g.id_grupo
               WHERE ug.id_usuario =$current_user_id
               UNION 
               SELECT g.user_admin_id, g.id_grupo,g.user_admin_id,g.nombre_grupo,g.grupos_pic 
               FROM grupos g
               WHERE g.user_admin_id = $current_user_id";
    $run = mysqli_query($db,$query);
    $data =  mysqli_fetch_all($run,true);
    
    return $data;
}

function getGrupo($grupo_id){
    global $db;

    $query = "SELECT * FROM grupos WHERE id_grupo = $grupo_id";
    $run = mysqli_query($db,$query);
    return  mysqli_fetch_all($run,true);
}
function getMessages($user_id){
    global $db;
    $current_user_id = $_SESSION['userdata']['id'];
    $query = "SELECT * FROM messages WHERE (to_user_id=$current_user_id && from_user_id=$user_id) || (from_user_id=$current_user_id && to_user_id=$user_id) ORDER BY id DESC";
    $run = mysqli_query($db,$query);
    return  mysqli_fetch_all($run,true);
}
function getMessagesGrupos($grupo_id){
    global $db;
    $current_user_id = $_SESSION['userdata']['id'];
    $query = "SELECT * FROM gruposmessage WHERE id_grupo = $grupo_id ORDER BY created_at DESC";
    $run = mysqli_query($db,$query);
    return  mysqli_fetch_all($run,true);
}

function sendMessage($user_id,$msg){
    global $db;
    $current_user_id = $_SESSION['userdata']['id'];
    $query = "INSERT INTO messages (from_user_id,to_user_id,msg) VALUES($current_user_id,$user_id,'$msg')";
    return mysqli_query($db,$query);

}
function sendMessageGrupo($grupo_id, $msg){
    global $db;

    $current_user_id = $_SESSION['userdata']['id'];
    $query = "INSERT INTO gruposmessage (id_usuario,id_grupo,mensaje) VALUES($current_user_id,$grupo_id,'$msg')";
    return mysqli_query($db,$query);
}

function newMsgCount(){
global $db;
$current_user_id = $_SESSION['userdata']['id'];
$query="SELECT COUNT(*) as `row` FROM messages WHERE to_user_id=$current_user_id && read_status=0";
$run=mysqli_query($db,$query);
return mysqli_fetch_assoc($run)['row'];
}

function updateMessageReadStatus($user_id){
    $cu_user_id = $_SESSION['userdata']['id'];
    global $db;
    $query="UPDATE messages SET read_status=1 WHERE to_user_id=$cu_user_id && from_user_id=$user_id";
    return mysqli_query($db,$query);
}

function gettime($date){
    return date('H:i - (F jS, Y )', strtotime($date));
}

function getAllMessages(){
    $active_chat_ids = getActiveChatUserIds();
    $conversation=array();
    foreach($active_chat_ids as $index=>$id){
        $conversation[$index]['user_id'] = $id;
        $conversation[$index]['messages'] = getMessages($id);
    }
    return $conversation;
}

function getAllMessageGroup(){
    $gruposActivos = getActiveChatGroupsIds();


    return $gruposActivos;

}

//function for follow the user
function followUser($user_id){
    global $db;
    $cu = getUser($_SESSION['userdata']['id']);
    $current_user=$_SESSION['userdata']['id'];
    $query="INSERT INTO follow_list(follower_id,user_id) VALUES($current_user,$user_id)";
  
    createNotification($cu['id'],$user_id,"te empezo a seguir!");
    return mysqli_query($db,$query);
    
}




//function for blocking the user
function blockUser($blocked_user_id){
    global $db;
    $cu = getUser($_SESSION['userdata']['id']);
    $current_user=$_SESSION['userdata']['id'];
    $query="INSERT INTO block_list(user_id,blocked_user_id) VALUES($current_user,$blocked_user_id)";
  
    createNotification($cu['id'],$blocked_user_id,"blocked you");
    $query2="DELETE FROM follow_list WHERE follower_id=$current_user && user_id=$blocked_user_id";
    mysqli_query($db,$query2);
    $query3="DELETE FROM follow_list WHERE follower_id=$blocked_user_id && user_id=$current_user";
    mysqli_query($db,$query3);

   
    return mysqli_query($db,$query);
    
}

//for unblocking the user
function unblockUser($user_id){
    global $db;
    $current_user=$_SESSION['userdata']['id'];
    $query="DELETE FROM block_list WHERE user_id=$current_user && blocked_user_id=$user_id";
    createNotification($current_user,$user_id,"Unblocked you !");
    return mysqli_query($db,$query);   
}

//function checkLikeStatus
function checkLikeStatus($post_id){
    global $db;
    $current_user = $_SESSION['userdata']['id'];
    $query="SELECT count(*) as `row` FROM likes WHERE user_id=$current_user && post_id=$post_id";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_assoc($run)['row'];
}
function checkLikeCommentStatus($idComentario){
    global $db;
    $current_user = $_SESSION['userdata']['id'];
    $query="SELECT count(*) as `row` FROM likescomments WHERE id_user=$current_user && id_comment=$idComentario";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_assoc($run)['row'];
}

function allLikesUser(){
    global $db;
    $current_user = $_SESSION['userdata']['id'];
    $query="SELECT count(*) as `row` FROM likes WHERE user_id=$current_user";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_assoc($run)['row'];
}

//function for like the post
function like($post_id){
    global $db;
    $current_user=$_SESSION['userdata']['id'];
    $query="INSERT INTO likes(post_id,user_id) VALUES($post_id,$current_user)";
    $poster_id = getPosterId($post_id);
   
   if($poster_id!=$current_user){
    createNotification($current_user,$poster_id,"le gusto tu publicación!",$post_id);
   } 
    return mysqli_query($db,$query);
    
}


//function for creating comments
function addComment($post_id,$comment){
    global $db;
 $comment = mysqli_real_escape_string($db,$comment);

    $current_user=$_SESSION['userdata']['id'];
    $query="INSERT INTO comments(user_id,post_id,comment) VALUES($current_user,$post_id,'$comment')";
    $poster_id = getPosterId($post_id);

    if($poster_id!=$current_user){
        createNotification($current_user,$poster_id,"commented on your post",$post_id);
    }
   

    return mysqli_query($db,$query);
    
}


//function for creating comments
function createNotification($from_user_id,$to_user_id,$msg,$post_id=0){
    global $db;
    $query="INSERT INTO notifications(from_user_id,to_user_id,message,post_id) VALUES($from_user_id,$to_user_id,'$msg',$post_id)";
    mysqli_query($db,$query);    
}



//function for getting likes count
function getComments($post_id){
    global $db;
    $query="SELECT * FROM comments WHERE post_id=$post_id ORDER BY id DESC";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_all($run,true);
}

//get notifications

function getNotifications(){
  $cu_user_id = $_SESSION['userdata']['id'];

    global $db;
    $query="SELECT * FROM notifications WHERE to_user_id=$cu_user_id ORDER BY id DESC";
    $run = mysqli_query($db,$query);
    $result = array();
    while ($row = mysqli_fetch_assoc($run)) { 
        $from_user_id = $row['from_user_id'];
        $user = getUser($from_user_id);
        $row['user'] = $user;
         
        $result[] = $row; 
    } 
   
    $result[] = getUnreadNotificationsCount();
    return $result;

}



function getUnreadNotificationsCount(){
    $cu_user_id = $_SESSION['userdata']['id'];
  
      global $db;
      $query="SELECT count(*) as `row` FROM notifications WHERE to_user_id=$cu_user_id && read_status=0 ORDER BY id DESC";
      $run = mysqli_query($db,$query);
      return mysqli_fetch_assoc($run)['row'];
  }

  function show_time($time){
    return '<time style="font-size:small" class="timeago text-muted text-small" datetime="'.$time.'"></time>';
  }

  function show_description($description){
    return '<span>'.$description.'</span>';
  }

  function setNotificationStatusAsRead(){
       $cu_user_id = $_SESSION['userdata']['id'];
      global $db;
      $query="UPDATE notifications SET read_status=1 WHERE to_user_id=$cu_user_id";
      return mysqli_query($db,$query);
  }

//function for getting likes count
function getLikes($post_id){
    global $db;
    $query="SELECT * FROM likes WHERE post_id=$post_id";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_all($run,true);
}

//function for unlike the post
function unlike($post_id){
    global $db;
    $current_user=$_SESSION['userdata']['id'];
    $query="DELETE FROM likes WHERE user_id=$current_user && post_id=$post_id";
    
    $poster_id = getPosterId($post_id);
    if($poster_id!=$current_user){
        createNotification($current_user,$poster_id,"Ya no le gusta tu publicación!",$post_id);
    }
  
    return mysqli_query($db,$query);
}
function unfollowUser($user_id){
    global $db;
    $current_user=$_SESSION['userdata']['id'];
    $query="DELETE FROM follow_list WHERE follower_id=$current_user && user_id=$user_id";

    createNotification($current_user,$user_id,"Unfollowed you !");
    return mysqli_query($db,$query);
 
    
}


//function for show errors
function showError($field){
if(isset($_SESSION['error'])){
    $error =$_SESSION['error'];
    if(isset($error['field']) && $field==$error['field']){
       ?>
<div class="alert alert-danger my-2" role="alert">
  <?=$error['msg']?>
</div>
       <?php
    }
}
}


//function for show prevformdata
function showFormData($field){
    if(isset($_SESSION['formdata'])){
        $formdata =$_SESSION['formdata'];
        return $formdata[$field];
    }
 
}


//for checking duplicate email
function isEmailRegistered($email){
    global $db;
    $query="SELECT count(*) as `row` FROM users WHERE email='$email'";
    $run=mysqli_query($db,$query);
    $return_data = mysqli_fetch_assoc($run);
    return $return_data['row'];
}

//for checking duplicate username
function isUsernameRegistered($username){
    global $db;
    $query="SELECT count(*) as `row` FROM users WHERE username='$username'";
    $run=mysqli_query($db,$query);
    $return_data = mysqli_fetch_assoc($run);
    return $return_data['row'];
}

//for checking duplicate username by other
function isUsernameRegisteredByOther($username){
    global $db;
    $user_id=$_SESSION['userdata']['id'];
    $query="SELECT count(*) as `row` FROM users WHERE username='$username' && id!=$user_id";
    $run=mysqli_query($db,$query);
    $return_data = mysqli_fetch_assoc($run);
    return $return_data['row'];
}

//for validating the signup form
function validateSignupForm($form_data){
$response=array();
$response['status']=true;
  
    if(!$form_data['password']){
        $response['msg']="password is not given";
        $response['status']=false;
        $response['field']='password';
    }
   
    if(!$form_data['username']){
        $response['msg']="username is not given";
        $response['status']=false;
        $response['field']='username';
    }
    
    if(!$form_data['email']){
        $response['msg']="email is not given";
        $response['status']=false;
        $response['field']='email';
    }
    
    if(!$form_data['last_name']){
        $response['msg']="last name is not given";
        $response['status']=false;
        $response['field']='last_name';
    }
    if(!$form_data['first_name']){
        $response['msg']="first name is not given";
        $response['status']=false;
        $response['field']='first_name';
    }
    if(isEmailRegistered($form_data['email'])){
        $response['msg']="email id is already registered";
        $response['status']=false;
        $response['field']='email';
    }
    if(isUsernameRegistered($form_data['username'])){
        $response['msg']="username is already registered";
        $response['status']=false;
        $response['field']='username';
    }

    return $response;

}


//for validate the login form
function validateLoginForm($form_data){
    $response=array();
    $response['status']=true;
    $blank=false;
      
        if(!$form_data['password']){
            $response['msg']="password is not given";
            $response['status']=false;
            $response['field']='password';
            $blank=true;
        }
       
        if(!$form_data['username_email']){
            $response['msg']="username/email is not given";
            $response['status']=false;
            $response['field']='username_email';
            $blank=true;
        }

        if(!$blank && !checkUser($form_data)['status'] ){
            $response['msg']="something is incorrect, we can't find you";
            $response['status']=false;
            $response['field']='checkuser';
        }else{
            $response['user']=checkUser($form_data)['user'];
        }
        
      
       
       
    
    
        return $response;
    
    }


//for checking the user
function checkUser($login_data){
global $db;
 $username_email = $login_data['username_email'];
 $password=md5($login_data['password']);

 $query = "SELECT * FROM users WHERE (email='$username_email' || username='$username_email') && password='$password'";
 $run = mysqli_query($db,$query);
 $data['user'] = mysqli_fetch_assoc($run)??array();
 if(count($data['user'])>0){
     $data['status']=true;
 }else{
    $data['status']=false;

 }

 return $data;
}

// INSERTANDO LLAMADAS

function insertingCalls($user_called, $channelName) {
    global $db;
    $cu = $_SESSION['userdata']['id'];

    $query = "INSERT INTO `llamadas`(`id_user_calling`, `id_user_called`, `status`, `channelName`) 
                VALUES ($cu,$user_called,'activa', '$channelName')";
    $run =  mysqli_query($db,$query);
    

}

function getllamadas(){
    global $db;

    $cu = $_SESSION['userdata']['id'];

    $query = "SELECT * FROM llamadas WHERE id_user_called = $cu AND status = 'activa' " ;

    $run = mysqli_query($db,$query);

    return mysqli_fetch_all($run,true);

}

function updateCalls(){
    global $db;
    $cu = $_SESSION['userdata']['id'];
    $query = "UPDATE `llamadas` 
                SET `status`='terminada' 
                WHERE `id_user_calling` = $cu OR `id_user_called` = $cu";

    $run = mysqli_query($db,$query);   
    
    return mysqli_fetch_all($run,true);
}
function progressCall($channel_name){
     global $db;
    $cu = $_SESSION['userdata']['id'];
    $query = "UPDATE `llamadas` 
                SET `status`='ENPROGRESO' 
                WHERE `channelName` = '$channel_name'";

    $run = mysqli_query($db,$query);   
    
    return mysqli_fetch_all($run,true);
}
//for getting userdata by id
function getUser($user_id){
global $db;
 $query = "SELECT * FROM users WHERE id=$user_id";
 $run = mysqli_query($db,$query);
 return mysqli_fetch_assoc($run);

}

function getComentario($idComentario){
    global $db;

    $query = "SELECT * FROM comments WHERE id=$idComentario";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_assoc($run);
}


//for filtering the suggestion list
function filterFollowSuggestion(){
$list = getFollowSuggestions();
$filter_list  = array();
foreach($list as $user){
    if(!checkFollowStatus($user['id']) && !checkBS($user['id']) && count($filter_list)<8){
     $filter_list[]=$user;
    }
}

return $filter_list;
}

//for checking the user is followed by current user or not
function checkFollowStatus($user_id){
    global $db;
    $current_user = $_SESSION['userdata']['id'];
    $query="SELECT count(*) as `row` FROM follow_list WHERE follower_id=$current_user && user_id=$user_id";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_assoc($run)['row'];
}

//for checking the user is followed by current user or not
function checkBlockStatus($current_user,$user_id){
    global $db;
    
    $query="SELECT count(*) as `row` FROM block_list WHERE user_id=$current_user && blocked_user_id=$user_id";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_assoc($run)['row'];
}


function checkBS($user_id){
    global $db;
    $current_user = $_SESSION['userdata']['id'];
    $query="SELECT count(*) as `row` FROM block_list WHERE (user_id=$current_user && blocked_user_id=$user_id) || (user_id=$user_id && blocked_user_id=$current_user)";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_assoc($run)['row'];
}
//

//for getting users for follow suggestions
function getFollowSuggestions(){
    global $db;

    $current_user = $_SESSION['userdata']['id'];
    $query = "SELECT * FROM users WHERE id!=$current_user";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_all($run,true);
}

//get followers count
function getFollowers($user_id){
    global $db;
    $query = "SELECT * FROM follow_list WHERE user_id=$user_id";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_all($run,true);
}

//get followers count
function getFollowing($user_id){
    global $db;
    $query = "SELECT * FROM follow_list WHERE follower_id=$user_id";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_all($run,true);
}

//for getting posts by id
function getPostById($user_id){
    global $db;
 $query = "SELECT * FROM posts WHERE user_id=$user_id ORDER BY id DESC";
 $run = mysqli_query($db,$query);
 return mysqli_fetch_all($run,true);

}

//for getting post
function getPosterId($post_id){
    global $db;
 $query = "SELECT user_id FROM posts WHERE id=$post_id";
 $run = mysqli_query($db,$query);
 return mysqli_fetch_assoc($run)['user_id'];

}

//for searching the users
function searchUser($keyword){
    global $db;
 $query = "SELECT * FROM users WHERE username LIKE '%".$keyword."%' || (first_name LIKE '%".$keyword."%' || last_name LIKE '%".$keyword."%') LIMIT 5";
 $run = mysqli_query($db,$query);
 return mysqli_fetch_all($run,true);

}




//for getting userdata by username
function getUserByUsername($username){
    global $db;
 $query = "SELECT * FROM users WHERE username='$username'";
 $run = mysqli_query($db,$query);
 return mysqli_fetch_assoc($run);

}

//for getting posts
function getPost(){
    global $db;
 $query = "SELECT users.id as uid,posts.id,posts.user_id,posts.post_img,posts.post_text,posts.allow_comment,posts.created_at,users.first_name,users.last_name,users.username,users.profile_pic FROM posts JOIN users ON users.id=posts.user_id ORDER BY id DESC";

 $run = mysqli_query($db,$query);
 return mysqli_fetch_all($run,true);

}


function deletePost($post_id){
    global $db;
$user_id=$_SESSION['userdata']['id'];
    $dellike = "DELETE FROM likes WHERE post_id=$post_id && user_id=$user_id";
    mysqli_query($db,$dellike);
    $delcom = "DELETE FROM comments WHERE post_id=$post_id && user_id=$user_id";
    mysqli_query($db,$delcom);
    $not = "UPDATE notifications SET read_status=2 WHERE post_id=$post_id && to_user_id=$user_id";
mysqli_query($db,$not);


    $query = "DELETE FROM posts WHERE id=$post_id";
    return mysqli_query($db,$query);
}

//for getting posts dynamically
function filterPosts(){
    $list = getPost();
    $filter_list  = array();
    foreach($list as $post){
        if(checkFollowStatus($post['user_id']) || $post['user_id']==$_SESSION['userdata']['id']){
         $filter_list[]=$post;
        }
    }
    
    return $filter_list;
    }



//for creating new user
function createUser($data){
 global $db;
 $first_name = mysqli_real_escape_string($db,$data['first_name']);
 $last_name = mysqli_real_escape_string($db,$data['last_name']);
 $gender = $data['gender'];
 $email = mysqli_real_escape_string($db,$data['email']);
 $username = mysqli_real_escape_string($db,$data['username']);
 $password = mysqli_real_escape_string($db,$data['password']);
 $password = md5($password);

 $query = "INSERT INTO users(first_name,last_name,gender,email,username,password) ";
 $query.="VALUES ('$first_name','$last_name',$gender,'$email','$username','$password')"; 
 return mysqli_query($db,$query);
}

//function for verify email
function verifyEmail($email){
    global $db;
    $query="UPDATE users SET ac_status=1 WHERE email='$email'";
    return mysqli_query($db,$query);
}

//function for verify email
function resetPassword($email,$password){
    global $db;
    $password=md5($password);
    $query="UPDATE users SET password='$password' WHERE email='$email'";
    return mysqli_query($db,$query);
}

//for validating update form
function validateUpdateForm($form_data,$image_data){
    $response=array();
    $response['status']=true;
      

        if(!$form_data['username']){
            $response['msg']="username is not given";
            $response['status']=false;
            $response['field']='username';
        }
        
        if(!$form_data['last_name']){
            $response['msg']="last name is not given";
            $response['status']=false;
            $response['field']='last_name';
        }
        if(!$form_data['first_name']){
            $response['msg']="first name is not given";
            $response['status']=false;
            $response['field']='first_name';
        }
  
        if(isUsernameRegisteredByOther($form_data['username'])){
            $response['msg']=$form_data['username']." is already registered";
            $response['status']=false;
            $response['field']='username';
        }
    
       if($image_data['name']){
           $image = basename($image_data['name']);
           $type = strtolower(pathinfo($image,PATHINFO_EXTENSION));
           $size = $image_data['size']/1000;

           if($type!='jpg' && $type!='jpeg' && $type!='png'){
            $response['msg']="only jpg,jpeg,png images are allowed";
            $response['status']=false;
            $response['field']='profile_pic';
        }

        if($size>1000){
            $response['msg']="upload image less then 1 mb";
            $response['status']=false;
            $response['field']='profile_pic';
        }
       }

        return $response;
    
    }
    

    //function for updating profile
function updateProfile($data,$imagedata){
        global $db;
        $first_name = mysqli_real_escape_string($db,$data['first_name']);
        $last_name = mysqli_real_escape_string($db,$data['last_name']);
        $username = mysqli_real_escape_string($db,$data['username']);
        $password = mysqli_real_escape_string($db,$data['password']);

if(!$data['password']){
$password = $_SESSION['userdata']['password'];
}else{
    $password = md5($password);
    $_SESSION['userdata']['password']=$password;
}

$profile_pic="";
if($imagedata['name']){
    $image_name = time().basename($imagedata['name']);
    $image_dir="../images/profile/$image_name";
    move_uploaded_file($imagedata['tmp_name'],$image_dir);
    $profile_pic=", profile_pic='$image_name'";
}
       
      
    
        $query = "UPDATE users SET first_name = '$first_name', last_name='$last_name',username='$username',password='$password' $profile_pic WHERE id=".$_SESSION['userdata']['id'];
return mysqli_query($db,$query);

    }

function updateFrontImage($frontImage){
    global $db;
    $frontpage_pic="";
    if($frontImage['name']){
    $image_name = time().basename($frontImage['name']);
    $image_dir="../images/frontpage/$image_name";
    move_uploaded_file($frontImage['tmp_name'],$image_dir);
    $frontpage_pic="frontpage_pic='$image_name'";

    $query = "UPDATE users SET $frontpage_pic WHERE id=".$_SESSION['userdata']['id'];
    return mysqli_query($db,$query);
}
}
    //for validating add post form
function validatePostImage($image_data){
    $response=array();
    $response['status']=true;
      



        // if(!$image_data['name']){
        //     $response['msg']="no image is selected";
        //     $response['status']=false;
        //     $response['field']='post_img';
        // }
        
   
    
       if($image_data['name']){
           $image = basename($image_data['name']);
           $type = strtolower(pathinfo($image,PATHINFO_EXTENSION));
           $size = $image_data['size']/1000;

        //    if($type!='jpg' && $type!='jpeg' && $type!='png'){
        //     $response['msg']="only jpg,jpeg,png images are allowed";
        //     $response['status']=false;
        //     $response['field']='post_img';
        // }

        // if($size>2000){
        //     $response['msg']="upload image less then 1 mb";
        //     $response['status']=false;
        //     $response['field']='post_img';
        // }
       }

        return $response;
    
    }

    //for creating new user
function createPost($text,$image){
    global $db;
    $post_text = mysqli_real_escape_string($db,$text['post_text']);
    $user_id = $_SESSION['userdata']['id'];
    
    $image_name = time().basename($image['name']);
    $image_dir="../images/posts/$image_name";
    move_uploaded_file($image['tmp_name'],$image_dir);
    $allow_comment = $text['allow_comment'];

    $query = "INSERT INTO posts(user_id,post_text,post_img,allow_comment)";
    $query.="VALUES ($user_id,'$post_text','$image_name','$allow_comment')"; 
    return mysqli_query($db,$query);
   }

 function createEvento($evento_fecha, $evento_nombre, $evento_descripcion, $evento_imagen){
    global $db;

    $evento_fecha = mysqli_real_escape_string($db, $evento_fecha);
    $evento_nombre = mysqli_real_escape_string($db, $evento_nombre);
    $evento_descripcion = mysqli_real_escape_string($db, $evento_descripcion);
    $evento_imagen = mysqli_real_escape_string($db, $evento_imagen);

    $query = "INSERT INTO `eventos`( `nombre`, `fecha_evento`, `descripcion`,`imagen` ) 
                VALUES ('$evento_nombre','$evento_fecha','$evento_descripcion','$evento_imagen' )";

    return mysqli_query($db,$query);         
 }  

 function getEventos(){
   global $db;
   
   $query = "SELECT * from eventos";

   $run = mysqli_query($db, $query);
   return mysqli_fetch_all($run,true);

   
 }

//  Cambiar la decripcion del comentario

function editarPostDescripcion($nuevaDescripcion, $idPost) {
    global $db;
    $nuevaDescripcion = mysqli_real_escape_string($db, $nuevaDescripcion);
    $idPost = mysqli_real_escape_string($db, $idPost);
    $cu = $_SESSION['userdata']['id'];

    $query = "UPDATE `posts` 
                SET `post_text`='$nuevaDescripcion'
                WHERE `id`='$idPost'";
    
    return mysqli_query($db,$query);
    
    // return ;           

}

function editarComentario ($nuevoComentario, $idComentario){
    global $db;
    $nuevoComentario = mysqli_real_escape_string($db, $nuevoComentario);
    $idComentario = mysqli_real_escape_string($db, $idComentario);

     $query = "UPDATE `comments` 
                SET `comment`='$nuevoComentario'
                WHERE `id`='$idComentario'";
    
    return mysqli_query($db,$query);
}

function editarResponseComentario($nuevoComentario, $idComentario){
    global $db;
    $nuevoComentario = mysqli_real_escape_string($db, $nuevoComentario);
    $idComentario = mysqli_real_escape_string($db, $idComentario);

     $query = "UPDATE `responsestocomments` 
                SET `comment`='$nuevoComentario'
                WHERE `id`='$idComentario'";
    
    return mysqli_query($db,$query);
}

function eliminarComentario($idComentario){
    global $db;
    $idComentario = mysqli_real_escape_string($db, $idComentario);

    $query= "DELETE FROM `comments` WHERE `id`='$idComentario'";

    return mysqli_query($db,$query);

}

function eliminarResponseComentario($idComentario){
    global $db;
    $idComentario = mysqli_real_escape_string($db, $idComentario);

    $query= "DELETE FROM `responsestocomments` WHERE `id`='$idComentario'";

    return mysqli_query($db,$query);

}
   
function likeComentario($idComentario, $toUserId){
global $db;
$idComentario = mysqli_real_escape_string($db, $idComentario);
$cu = $_SESSION['userdata']['id'];

// Consulta para verificar si el usuario ya le dio like al comentario
$query = "SELECT * FROM `likescomments` WHERE `id_comment` = '$idComentario' AND `id_user` = '$cu'";

// Ejecuta la consulta y obtiene el número de filas
$result = mysqli_query($db,$query);
$num_rows = mysqli_num_rows($result);

// Si el número de filas es cero, significa que el usuario no le dio like anteriormente
if ($num_rows == 0) {
// Inserta el like en la tabla likescomments
$query = "INSERT INTO `likescomments`(`id_comment`, `id_user`) 
VALUES ('$idComentario','$cu')";

mysqli_query($db,$query);     
createNotification($cu, $toUserId, 'te dio like a tu comentario');
return true;        
} else {
$query = "DELETE FROM `likescomments` 
            WHERE `id_comment` = '$idComentario' 
            AND `id_user` = '$cu'";

 mysqli_query($db,$query);
 return false;
}
}

function likeResponseComentario($idComentario, $toUserId){
global $db;
$idComentario = mysqli_real_escape_string($db, $idComentario);
$cu = $_SESSION['userdata']['id'];

// Consulta para verificar si el usuario ya le dio like al comentario
$query = "SELECT * FROM `likesresponsecomments` WHERE `id_response_comment` = '$idComentario' AND `id_user` = '$cu'";

// Ejecuta la consulta y obtiene el número de filas
$result = mysqli_query($db,$query);
$num_rows = mysqli_num_rows($result);

// Si el número de filas es cero, significa que el usuario no le dio like anteriormente
if ($num_rows == 0) {
// Inserta el like en la tabla likescomments
$query = "INSERT INTO `likesresponsecomments`(`id_response_comment`, `id_user`) 
VALUES ('$idComentario','$cu')";

mysqli_query($db,$query);     
createNotification($cu, $toUserId, 'le dio like a tu respuesta');
return true;        
} else {
$query = "DELETE FROM `likesresponsecomments` 
            WHERE `id_response_comment` = '$idComentario' 
            AND `id_user` = '$cu'";

 mysqli_query($db,$query);
 return false;
}
}


function getLikesCommentarios($idComentario){
  global $db;
  $idComentario = mysqli_real_escape_string($db, $idComentario);

  $query="SELECT * FROM likescomments WHERE id_comment=$idComentario";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_all($run,true);
}
function getLikesResponseCommentarios($idComentario){
  global $db;
  $idComentario = mysqli_real_escape_string($db, $idComentario);

  $query="SELECT * FROM likesresponsecomments WHERE id_response_comment=$idComentario";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_all($run,true);
}

function responseComentario($idComentario, $comentario, $user_id){
    global $db;
    $idComentario = mysqli_real_escape_string($db, $idComentario);
    $comentario = mysqli_real_escape_string($db, $comentario);
    $user_id = mysqli_real_escape_string($db, $user_id);
    $usuarioANotificar = getComentario($idComentario)['user_id'];
    $cu = $_SESSION['userdata'];

    $query = "  INSERT INTO `responsestocomments`( `id_comment`, `user_id`, `comment`) 
                    VALUES ('$idComentario','$user_id','$comentario') ";
    
    createNotification($user_id, $usuarioANotificar, 'ah respondido tu comentario');
    mysqli_query($db,$query);          
    return array($comentario, $cu);
;
                        
}

function getResponsesComments($idComentario){
    global $db;
    $query="SELECT * FROM responsestocomments WHERE id_comment=$idComentario ORDER BY id DESC";
    $run = mysqli_query($db,$query);

    
    return mysqli_fetch_all($run,true);
}


function modificarPerifil($direccion,$telefono,$trabaja_en,$cargo, $ubicacion, $fecha_nacimiento, $redes_sociales, $biografia ){

    global $db;
    $cu = $_SESSION['userdata']['id'];
    $direccion = mysqli_real_escape_string($db, $direccion);
    $telefono = mysqli_real_escape_string($db, $telefono);
    $trabaja_en = mysqli_real_escape_string($db, $trabaja_en);
    $cargo = mysqli_real_escape_string($db, $cargo);
    $ubicacion = mysqli_real_escape_string($db, $ubicacion);
    $fecha_nacimiento = mysqli_real_escape_string($db, $fecha_nacimiento);
    $redes_sociales = mysqli_real_escape_string($db, $redes_sociales);
    $biografia = mysqli_real_escape_string($db, $biografia);

    $query = "UPDATE users 
                SET `direccion`='$direccion',
                    `telefono`='$telefono',
                    `trabaja_en`='$trabaja_en',
                    `cargo`='$cargo',
                    `ubicacion`='$ubicacion',
                    `fecha_nacimiento`='$fecha_nacimiento',
                    `redes_sociales`='$redes_sociales',
                    `biografia`='$biografia'
                
                WHERE id = $cu ";
    return mysqli_query($db,$query); 
}

function publicarEstado($user_id, $imagen_estado, $descripcion ) {

    global $db;
    $cu = $_SESSION['userdata']['id'];
    
    $image_name = time().basename($imagen_estado['name']);
    $image_dir="../images/estados/$image_name";
    move_uploaded_file($imagen_estado['tmp_name'],$image_dir);


    $descripcion = mysqli_real_escape_string($db, $descripcion);



    $query = "INSERT INTO estados (user_id, imagen, descripcion)
    VALUES ($cu, '$image_name', '$descripcion') ";

    return mysqli_query($db, $query);
}

function getEstados(){
    global $db;
    $estados = array();
    $cu = $_SESSION['userdata']['id'];
    $following = getFollowing($cu);

    
    foreach($following as $follow){
        $id = $follow['user_id'];
        $query = "SELECT * from estados WHERE user_id= $id";
        $run = mysqli_query($db, $query);
        $data = mysqli_fetch_all($run,true);
        if(!empty($data)){
            for($i=0;$i<count($data);$i++){
                $estados[] = $data[$i];
            }
        }


    }
    return $estados;
}
?>