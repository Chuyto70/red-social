<?php

require_once 'assets/php/functions.php';


if(isset($_GET['newfp'])){
    unset($_SESSION['auth_temp']);
    unset($_SESSION['forgot_email']);
    unset($_SESSION['forgot_code']);
}
if(isset($_SESSION['Auth'])){
    $user = getUser($_SESSION['userdata']['id']);
    $posts = filterPosts();
    $follow_suggestions = filterFollowSuggestion();
    $profile = getUserByUsername($_SESSION['userdata']['username']);
}

$pagecount = count($_GET);


//manage pages
if(isset($_SESSION['Auth']) && $user['ac_status']==1 && !$pagecount){
    showPage('header',['page_title'=>'Home']);
    showPage('navbar');
    showPage('wall');
}elseif(isset($_SESSION['Auth']) && $user['ac_status']==0 && !$pagecount){

    showPage('header',['page_title'=>'Verify Your Email']);
    showPage('verify_email');
}elseif(isset($_SESSION['Auth']) && $user['ac_status']==2 && !$pagecount){
    showPage('header',['page_title'=>'Blocked']);
    showPage('blocked');
}elseif(isset($_SESSION['Auth']) && isset($_GET['editprofile']) && $user['ac_status']==1){
    showPage('header',['page_title'=>'Edit Profile']);
    showPage('navbar');
    showPage('edit_profile');
}elseif(isset($_SESSION['Auth']) && isset($_GET['u']) && $user['ac_status']==1){
    $profile = getUserByUsername($_GET['u']);
      showPage('header',['page_title'=>'User Not Found']);
      showPage('navbar');
    if(!$profile){
      
        showPage('user_not_found');

    }else{
     $profile_post = getPostById($profile['id']);  
     $profile['followers']=getFollowers($profile['id']);
     $profile['following']=getFollowing($profile['id']);
        showPage('header');
        // showPage('navbar');
        showPage('profile');
        
    }
 
  
}elseif(isset($_GET['signup'])){
    showPage('header',['page_title'=>'Pictogram - SignUp']);
    showPage('signup');
}elseif(isset($_GET['login'])){
   
    showPage('header',['page_title'=>'Pictogram - Login']);
    showPage('login');
}elseif(isset($_GET['forgotpassword'])){
    
    showPage('header',['page_title'=>'Pictogram - Forgot Password']);
    showPage('forgot_password');
}elseif(isset($_GET['fundadores'])){
 showPage('header');
 showPage('navbar');
 showPage('fundadores');
}elseif($_GET['eventos']){
    showPage('header');
    showPage('navbar');
    showPage('eventos');
}elseif(isset($_GET['mascategorias'])){
 showPage('header');
 showPage('navbar');
 showPage('mascategorias');
}
elseif(isset($_GET['sugerencias'])){
 showPage('header');
 showPage('navbar');
 showPage('sugerencias');
}
else{
    if(isset($_SESSION['Auth']) && $user['ac_status']==1){
        showPage('header',['page_title'=>'Home']);
        showPage('navbar');
        showPage('wall');
    }elseif(isset($_SESSION['Auth']) && $user['ac_status']==0){

        showPage('header',['page_title'=>'Verify Your Email']);
        showPage('verify_email');
    }elseif(isset($_SESSION['Auth']) && $user['ac_status']==2){
        showPage('header',['page_title'=>'Blocked']);
        showPage('blocked');
    }else{
        showPage('header',['page_title'=>'Pictogram - Login']);
        showPage('login');
    }
  
}


showPage('footer');
unset($_SESSION['error']);
unset($_SESSION['formdata']);







