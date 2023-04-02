<style>
    * {
  outline: none;
}

body {
  padding: 0;
}


body,
input,
button {
  font-family: Helvetica;
}

img {
  display: block;
  width: 100%;
  border: 0;
}

.tb {
  display: table;
  width: 100%;
}

.tr {
  display: table-row;
}

.td {
  display: table-cell;
  vertical-align: middle;
}

a {
  text-decoration: none;
}

button {
  padding: 0;
  border: 0;
  background-color: transparent;
}

::placeholder {
  color: #f1f1f1;
}

main {
  width: 1280px;
  margin: 0 auto;
  background-color: #e9ebee;
  box-shadow: 0px 8px 30px #1d2d4f;
  border-radius: 4px;
  overflow: hidden;
}

#device-bar-1 {
  text-align: right;
  padding: 6px;
  background-color: #000;
  overflow: hidden;
}

#device-bar-1 button {
  width: 15px;
  height: 15px;
  float: left;
  margin: 6px;
  border-radius: 50%;
  cursor: pointer;
}

#device-bar-1 button:first-child {
  background-color: #f35d5b;
}

#device-bar-1 button:nth-child(2) {
  background-color: #f6bd3a;
}

#device-bar-1 button:last-child {
  background-color: #44cc45;
}


#logo {
  width: 30px;
}

#logo a {
  display: block;
}

#logo a i {
  font-size: 34px;
  color: #fff;
}

#search-form form {
  position: relative;
  width: 280px;
  font-size: 16px;
  padding: 8px 15px;
  padding-right: 37px;
  background-color: #3b5ca0;
  border-radius: 20px;
  margin-left: 15px;
}

#search-form form input {
  width: 100%;
  color: #fff;
  border: 0;
  background-color: transparent;
}

#search-form form button {
  position: absolute;
  top: 6px;
  right: 6px;
  color: #f1f1f1;
  height: 22px;
  line-height: 1;
  cursor: pointer;
}

#search-form form button i {
  font-size: 22px;
}

#f-name-l {
  width: 1px;
  color: #fff;
  font-weight: bold;
  white-space: pre;
  padding-right: 20px;
}

#f-name-l span {
  padding-right: 28px;
  border-right: 1px solid #35518b;
}

#i-links {
  width: 1px;
}

#m-td {
  padding-right: 20px;
}

#m-td span {
  position: relative;
  cursor: pointer;
}

#m-td span.m-active:before {
  content: "5";
  position: absolute;
  top: -8px;
  right: 0px;
  color: #fff;
  font-size: 12px;
  padding: 4px 4px 3px 4px;
  background-color: #ff1e0e;
  border-radius: 3px;
  line-height: 1;
}

#i-links i {
  color: #fff;
  font-size: 24px;
  padding: 0px 8px;
  vertical-align: middle;
}

#p-link {
  display: block;
  width: 34px;
  height: 34px;
  background-color: #f1f1f1;
  border-radius: 50%;
  overflow: hidden;
}

#p-link img {
  width: 100%;
}

/* Header finished */

/* Profile image header */
#profile-upper {
  position: relative;
}

#profile-d {
  position: absolute;
  left: 59px;
  bottom: 0px;
  right: 0px;
  height: 180px;
  z-index: 2;
}

#profile-banner-image {
  height: 360px;
  overflow: hidden;
  z-index: 1;
}

#profile-banner-image img {
  width: 100%;
  margin-top: -20%;
}

#profile-pic {
  width: 180px;
  height: 180px;
  border-radius: 3px;
  margin-top: 28px;
  overflow: hidden;
  box-shadow: 0 0 0 5px #fff;
}

#profile-pic img {
  width: 100%;
}

#u-name {
  position: absolute;
  top: 120px;
  left: 208px;
  color: #fff;
  font-size: 36px;
  font-weight: bold;
}

#m-btns {
  position: absolute;
  right: 56px;
  bottom: 20px;
  width: 211px;
}

#m-btns .td {
  padding: 0 8px;
}

.m-btn {
  cursor: pointer;
  color: #0e0e0e;
  font-size: 14px;
  white-space: pre;
  padding: 5px 8px 6px 8px;
  background-color: rgba(255, 255, 255, 0.7);
  border-radius: 2px;
}

.m-btn i {
  font-size: 16px;
  margin-right: 1px;
  vertical-align: middle;
}

.m-btn span {
  position: relative;
  top: 1px;
}

#edit-profile {
  position: absolute;
  right: 20px;
  bottom: 21px;
  line-height: 1;
  cursor: pointer;
}

#edit-profile i {
  display: block;
  color: rgba(255, 255, 255, 0.7);
}

#black-grd {
  position: absolute;
  left: 0px;
  bottom: 0px;
  right: 0px;
  height: 300px;
  background: linear-gradient(rgba(0, 0, 0, 0) 71%, rgba(0, 0, 0, 0.53));
  z-index: 1;
}
/* Profile image header finished */

/* Content area */
#main-content {
  padding: 55px 0px 0px 55px;
}

#l-col,
#m-col,
#r-col {
  vertical-align: top;
}

#l-col {
  width: 340px;
  padding-top: 6px;
}

.l-cnt {
  padding: 20px;
  background-color: #fff;
  box-shadow: 0px 3px 3px #ddd;
}

.l-mrg {
  margin-top: 28px;
}
.l-i {
  display: inline-block;
  width: 24px;
  height: 24px;
  margin-right: 2px;
  background-size: auto;
  background-repeat: no-repeat;
  vertical-align: middle;
}

#l-i-i {
  background-image: url("https://imagizer.imageshack.com/img922/7749/C8tmwX.png");
  background-position: 0 -87px;
}

#l-i-p {
  background-image: url("https://imagizer.imageshack.com/img923/7847/sRapnM.png");
  background-position: 0 0;
}

#l-i-k {
  background-image: url("https://imagizer.imageshack.com/img922/5617/QpPVKn.png");
}

.cnt-label {
  position: relative;
  padding-right: 24px;
  margin-bottom: 15px;
}

.cnt-label span {
  position: relative;
  top: 2px;
  color: #707070;
  font-size: 18px;
}

.lb-action {
  position: absolute;
  top: 0px;
  right: 0px;
  cursor: pointer;
}

.lb-action i {
  display: block;
  color: #ccc;
  font-size: 18px;
}

#b-i i {
  font-size: 24px;
}

#i-box {
  color: #797979;
  font-size: 14px;
  line-height: 1.3;
}

#intro-line {
  margin-top: 17px;
}

#u-occ {
  margin: 10px 0px;
}

#u-occ a {
  color: #2196f3;
}

#u-loc i {
  color: #2196f3;
  font-size: 16px;
  margin-left: -3px;
  margin-right: 2px;
  margin-top: -1px;
  vertical-align: middle;
}

#u-loc a {
  position: relative;
  top: 1px;
  color: #2196f3;
}

#photos {
  padding: 2px;
  margin: 15px -20px -20px -20px;
}

#photos .td {
  width: 33.333%;
  height: 112px;
  border: 2px solid #fff;
  box-sizing: border-box;
  background-color: #f1f1f1;
  background-position: 50% 25%;
  background-size: cover;
}

#photos .tb .tr:nth-child(1) .td:nth-child(1) {
  background-image: url("https://imagizer.imageshack.com/img922/8637/NN4aPj.jpg");
}

#photos .tb .tr:nth-child(1) .td:nth-child(2) {
  background-image: url("https://imagizer.imageshack.com/img923/528/iJy0X5.jpg");
}

#photos .tb .tr:nth-child(1) .td:nth-child(3) {
  background-image: url("https://imagizer.imageshack.com/img923/9781/26phSy.jpg");
}

#photos .tb .tr:nth-child(2) .td:nth-child(1) {
  background-image: url("https://imagizer.imageshack.com/img921/8417/svxO7y.jpg");
}

#photos .tb .tr:nth-child(2) .td:nth-child(2) {
  background-image: url("https://imagizer.imageshack.com/img921/6488/i2Hb4U.jpg");
}

#photos .tb .tr:nth-child(2) .td:nth-child(3) {
  background-image: url("https://imagizer.imageshack.com/img921/2453/J7PICR.jpg");
}

#photos .tb .tr:nth-child(3) .td:nth-child(1) {
  background-image: url("https://imagizer.imageshack.com/img921/3021/8uZZY2.jpg");
}

#photos .tb .tr:nth-child(3) .td:nth-child(2) {
  background-image: url("https://imagizer.imageshack.com/img923/3992/22mL29.jpg");
}

#photos .tb .tr:nth-child(3) .td:nth-child(3) {
  background-image: url("https://imagizer.imageshack.com/img921/2711/JXSt41.jpg");
}

#k-nm {
  color: #b8b8b8;
  font-size: 15px;
  font-style: normal;
  margin-left: 8px;
  cursor: pointer;
}

.q-ad-c {
  padding: 2px;
}

.q-ad {
  display: block;
  padding: 8px;
  border: 1px solid #eeeeee;
  background-color: #fafafa;
  border-radius: 4px;
}

.q-ad img {
  display: inline;
  width: 24px;
  height: 24px;
  margin-right: 5px;
  vertical-align: middle;
}

.q-ad span {
  position: relative;
  top: 1px;
  color: #242424;
  font-size: 14px;
  text-align: center;
}

#add_q {
  color: #858585;
  text-align: center;
  margin-top: 10px;
  background-color: #fff;
  border-color: #f1f1f1;
}

#add_q i {
  font-size: 17px;
  margin-right: -3px;
  vertical-align: middle;
}

#add_q span {
  color: #858585;
  font-size: 12.4px;
  position: relative;
  top: -1px;
}

#t-box {
  font-size: 14px;
  color: #686868;
  padding-top: 24px;
  line-height: 18px;
}

#t-box a {
  margin-right: 5px;
}

#t-box a,
#t-more {
  color: #999;
}

#t-more {
  cursor: pointer;
}

#t-more i {
  font-size: 15px;
  vertical-align: middle;
}

#cpy-nt {
  margin-top: 4px;
}

#m-col {
  padding: 0px 55px;
}

.m-mrg {
  margin-bottom: 28px;
}

#p-tabs {
  position: relative;
  font-size: 13px;
  color: #919191;
  text-align: center;
  padding: 13px 20px;
  margin-top: -64px;
  background-color: #fff;
  box-shadow: 0px 3px 3px #ddd;
  z-index: 3;
}

#p-tabs-m .td {
  width: 16.6666667%;
  cursor: pointer;
}

#p-tabs-m .td.active {
  color: #ee6000;
}

#p-tabs-m span {
  position: relative;
}

#p-tabs-m .td.active span:after {
  content: "";
  position: absolute;
  left: 0px;
  right: 0px;
  bottom: -13px;
  height: 4px;
  background-color: #ee6000;
}

#p-tabs-m .td i {
  display: block;
  font-size: 24px;
  margin-bottom: 5px;
}

#p-tab-m {
  width: 1px;
  color: #ccc;
  cursor: pointer;
}

#p-tab-m i {
  margin-right: -4px;
}

#composer {
  padding: 20px;
  background-color: #fff;
  box-shadow: 0px 3px 3px #ddd;
}

#c-tabs-cvr {
  padding-bottom: 12px;
  border-bottom: 1px solid #ececec;
}

#c-tabs {
  width: auto;
  color: #919191;
}

#c-tabs .td {
  position: relative;
  width: 1px;
  padding: 0px 15px;
  white-space: pre;
  cursor: pointer;
}

#c-tabs .td:after {
  content: "";
  position: absolute;
  top: 50%;
  right: 0px;
  width: 1px;
  height: 12px;
  margin-top: -6px;
  background-color: #eaeaea;
}

#c-tabs .td:first-child {
  padding-left: 0px;
}

#c-tabs .td:last-child {
  padding-right: 0;
}

#c-tabs .td:last-child:after {
  display: none;
}

#c-tabs .td span {
  position: relative;
}

#c-tabs .td.active {
  color: #373737;
}

#c-tabs .td.active span:after {
  content: "";
  position: absolute;
  left: 0px;
  right: 0px;
  bottom: -20px;
  width: 10px;
  height: 10px;
  border: 1px solid transparent;
  border-color: transparent #ececec #ececec transparent;
  margin: 0 auto;
  background-color: #fff;
  transform: rotateZ(45deg);
}

#c-tabs .td i {
  font-size: 21px;
  margin-right: 4px;
  vertical-align: middle;
}

#c-tabs .td span {
  position: relative;
  top: 1px;
  font-size: 15px;
}

#c-c-main {
  position: relative;
  padding-top: 15px;
}

#p-c-i {
  width: 50px;
  border-radius: 50%;
  overflow: hidden;
}

#p-c-i img {
  display: block;
  width: 100%;
}

#c-inp {
  padding-left: 20px;
}

#c-inp input {
  width: 100%;
  font-size: 20px;
  border: 0;
  padding: 0;
  margin: 0;
}

#c-c-main input::placeholder {
  color: #666;
}

#insert_emoji {
  position: absolute;
  right: -2px;
  bottom: -10px;
  cursor: pointer;
}

#insert_emoji i {
  display: block;
  color: #ccced6;
  font-size: 21px;
}

.post {
  padding: 20px;
  background-color: #fff;
  box-shadow: 0px 3px 3px #ddd;
}

.p-p-pic {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  overflow: hidden;
}

.p-p-pic img {
  width: 100%;
  display: block;
  border: 0;
}

.p-r-hdr {
  vertical-align: top;
  padding-left: 20px;
}

.p-u-info {
  color: #5a5959;
  font-size: 15px;
  margin-bottom: 7px;
}

.p-u-info a {
  color: #4267b2;
}

.p-dt {
  color: #a8a8a8;
  font-size: 13px;
}

.p-dt i {
  font-size: 14px;
  margin-right: 2px;
}

.p-dt span {
  position: relative;
  top: -2px;
}

.p-opt {
  position: relative;
  right: -3px;
  width: 1px;
  color: #ccc;
  cursor: pointer;
  vertical-align: top;
}

.p-cnt-v {
  display: block;
  margin: 20px -20px;
  cursor: pointer;
}

.p-acts {
  overflow: hidden;
}

.p-act {
  width: 24px;
  height: 24px;
  color: #a3a6aa;
  cursor: pointer;
}

.p-act span {
  position: relative;
  top: 1px;
  width: 20px;
  font-size: 15px;
  color: #a3a6aa;
}

.like {
  margin-right: 36px;
}

.like,
.comment {
  width: 50px;
  float: left;
}

.p-act i {
  vertical-align: middle;
}

.like i,
.comment i {
  margin-right: 6px;
}

.share {
  float: right;
  transform: rotateY(180deg);
  margin-right: -1px;
}

#loading {
  text-align: center;
  padding: 40px 0px;
}

#loading i {
  color: #4267b2;
  font-size: 32px;
  display: block;
}
/* Content area finished */

/* Chat bar */
#r-col {
  position: relative;
  width: 150px;
}

#chat-bar {
  position: absolute;
  top: -55px;
  right: 55px;
  bottom: 0px;
  left: 0px;
}

#chat-lb {
  color: #3a5795;
  font-size: 16px;
  text-align: center;
  margin: 23px 0px;
}

#chat-lb i {
  font-size: 18px;
  margin-right: 4px;
  vertical-align: middle;
}

#chat-lb span {
  position: relative;
  top: 2px;
}

.on-ct {
  position: relative;
  width: 50px;
  height: 50px;
  margin: 28px auto 0 auto;
  border-radius: 50%;
}

#cts .on-ct:first-child {
  margin-top: 0px;
}

.on-ct img {
  border-radius: 50%;
}

.on-ct.active:after {
  content: "";
  position: absolute;
  top: 3px;
  right: 2px;
  width: 10px;
  height: 10px;
  background-color: #2ecd18;
  border-radius: 50%;
  box-shadow: 0px 0px 0px 3px #e9ebee;
  z-index: 1;
}

#ct-sett {
  margin-top: 55px;
}

#ct-sett i {
  color: #3a5795;
  padding: 13px;
  background-color: #d8e4ff;
  border-radius: 50%;
  cursor: pointer;
}
/* Chat bar finished */

/* Footer */
#device-bar-2 {
  padding: 9px 0px 13px 0px;
  background-color: #000;
}

#device-bar-2 i {
  display: block;
  width: 40px;
  color: #fff;
  font-size: 40px;
  text-align: center;
  margin: 0 auto;
}
/* Footer finished */

</style>




<?php
global $profile;
global $profile_post;
global $user;
?>


<div id="profile-upper">
    <div id="profile-banner-image">
      <img src="https://imagizer.imageshack.com/img921/9628/VIaL8H.jpg" alt="Banner image">
    </div>
    <div id="profile-d">
        <div id="profile-pic" class="d-flex justify-content-center align-items-center">
        <img src="assets/images/profile/<?=$profile['profile_pic']?>" class="img-fluid">
    </div>

      <div id="u-name"><?=$profile['first_name']?> <?=$profile['last_name']?></div>
      <div class="tb" id="m-btns">
        <div class="td">
          <div class="m-btn"><i class="material-icons">Cambiar portada</i></div>
        </div>
        <!-- <div class="td">
          <div class="m-btn"><i class="material-icons">lock</i><span>Privacy</span></div>
        </div> -->
      </div>
      <!-- <div id="edit-profile"><i class="material-icons">camera_alt</i></div> -->
    </div>
    <div id="black-grd"></div>
  </div>









  <div id="main-content">
    <div class="tb">
      <div class="td" id="l-col">
        <div class="l-cnt">
          <div class="cnt-label">
            <i class="l-i" id="l-i-i"></i>
            <span>Biografía</span>
            <div class="lb-action"><i class="material-icons">editar</i></div>
          </div>
          <div id="i-box">
            <div id="intro-line">Front-end Engineer</div>
            <div id="u-occ">I love making applications with Angular.</div>
            <div id="u-loc"><i class="material-icons">location_on</i><a href="#">Lima</a>, <a href="#">Perú</a></div>
          </div>

          <div class="d-flex gap-5 align-items-center">
                        <span style="font-size: xx-large;"><?=$profile['first_name']?> <?=$profile['last_name']?></span>
                        
                        <?php
if($user['id']!=$profile['id']){
    ?>
  <div class="dropdown">
                            <span class="" style="font-size:xx-large" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots"></i> </span>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#chatbox" onclick="popchat(<?=$profile['id']?>)"><i class="bi bi-chat-fill"></i> Message</a></li>
                                <li><a class="dropdown-item " href="assets/php/actions.php?block=<?=$profile['id']?>&username=<?=$profile['username']?>"><i class="bi bi-x-circle-fill"></i> Block</a></li>
                            </ul>
                        </div>
    <?php
}
                        ?>
                      


                    </div>
                    <span style="font-size: larger;" class="text-secondary">@<?=$profile['username']?></span>
                    <?php
if(!checkBS($profile['id'])){
    ?>
 <div class="d-flex gap-2 align-items-center my-3">

<a class="btn btn-sm btn-primary"><i class="bi bi-file-post-fill"></i> <?=count($profile_post)?> Posts</a>
<a class="btn btn-sm btn-primary <?=count($profile['followers'])<1?'disabled':''?>" data-bs-toggle="modal" data-bs-target="#follower_list"><i class="bi bi-people-fill"></i> <?=count($profile['followers'])?> Followers</a>
<a class="btn btn-sm btn-primary <?=count($profile['following'])<1?'disabled':''?>" data-bs-toggle="modal" data-bs-target="#following_list"><i class="bi bi-person-fill"></i> <?=count($profile['following'])?> Following</a>

<?php


if($user['id']!=$profile['id']){
?>
 <div class="d-flex gap-2 align-items-center my-1">
<?php
if(checkBlockStatus($user['id'],$profile['id'])){
?> 
<button class="btn btn-sm btn-danger unblockbtn" data-user-id='<?=$profile['id']?>' >Unblock</button>

<?php
}else if(checkBlockStatus($profile['id'],$user['id'])){ ?>
    <div class="alert alert-danger" role="alert">
    <i class="bi bi-x-octagon-fill"></i> @<?=$profile['username']?> blocked you !
</div>
   <?php }else if(checkFollowStatus($profile['id'])){
   ?>
<button class="btn btn-sm btn-danger unfollowbtn" data-user-id='<?=$profile['id']?>' >Unfollow</button>
   
   <?php
}else{
    ?>
<button class="btn btn-sm btn-primary followbtn" data-user-id='<?=$profile['id']?>' >Follow</button>

    <?php
}
?>



</div>
<?php
}
?>
</div>
    <?php

}
                    ?>
                   

                   

                    
        </div>
        <div class="l-cnt l-mrg">
          <div class="cnt-label">
            <i class="l-i" id="l-i-p"></i>
            <span>Fotos</span>
            <!-- <div class="lb-action" id="b-i"><i class="material-icons">keyboard_arrow_down</i></div> -->
          </div>
          <div id="photos">
            <div class="tb">
              <div class="tr">
                <div class="td"></div>
                <div class="td"></div>
                <div class="td"></div>
              </div>
              <div class="tr">
                <div class="td"></div>
                <div class="td"></div>
                <div class="td"></div>
              </div>
              <div class="tr">
                <div class="td"></div>
                <div class="td"></div>
                <div class="td"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="l-cnt l-mrg">
          <div class="cnt-label">
            <i class="l-i" id="l-i-k"></i>
            <span>Did You Know<i id="k-nm">1</i></span>
          </div>
          <div>
            <div class="q-ad-c">
              <a href="#" class="q-ad">
                <img src="https://imagizer.imageshack.com/img923/1849/4TnLy1.png">
                <span>My favorite superhero is...</span>
              </a>
            </div>
            <div class="q-ad-c">
              <a href="#" class="q-ad" id="add_q">
                <i class="material-icons">add</i>
                <span>Add Answer</span>
              </a>
            </div>
          </div>
        </div>
        <div id="t-box">
          <a href="#">Privacy</a> <a href="#">Terms</a> <a href="#">Advertising</a> <a href="#">Ad Choices</a> <a href="#">Cookies</a> <span id="t-more">More<i class="material-icons">arrow_drop_down</i></span>
          <div id="cpy-nt">Facebook &copy; <span id="curr-year"></span></div>
        </div>
      </div>


      <div class="td" id="m-col">
        <div class="m-mrg" id="p-tabs">
          <div class="tb">
            <div class="td">
              <div class="tb" id="p-tabs-m">
                <!-- <div class="td active"><i class="material-icons">av_timer</i><span>TIMELINE</span></div>
                <div class="td"><i class="material-icons">people</i><span>FRIENDS</span></div> -->
      

                <div class="td"><i class="material-icons">Publicación</i></div>    
                <div class="td"><i class="material-icons">Información</i></div>                
                <div class="td"><i class="material-icons">Amigos</i></div>
                <div class="td"><i class="material-icons">Fotos</i></div>
              </div>
            </div>
            <!-- <div class="td" id="p-tab-m"><i class="material-icons">keyboard_arrow_down</i></div> -->
          </div>
        </div>
        <div class="m-mrg" id="composer">
          <div id="c-tabs-cvr">
            <div class="tb" id="c-tabs">
              <div class="td active"><i class="material-icons">Publicar</i></div>                
              <!-- <div class="td active"><i class="material-icons">subject</i><span>Make Post</span></div> -->
              <!-- <div class="td"><i class="material-icons">camera_enhance</i><span>Photo/Video</span></div>
              <div class="td"><i class="material-icons">videocam</i><span>Live Video</span></div>
              <div class="td"><i class="material-icons">event</i><span>Life Event</span></div> -->
            </div>
          </div>
          <div id="c-c-main">
            <div class="tb">
              <div class="td" id="p-c-i"><img src="assets/images/profile/<?=$profile['profile_pic']?>" alt="Profile pic"></div>
              <div class="td" id="c-inp">
                <input type="text" placeholder="¿en que estás pensando?">
              </div>
            </div>
            <div id="insert_emoji"><i class="material-icons">insertar emoticón</i></div>
          </div>
        </div>
        <div>
        <?php
               
               foreach($profile_post as $post){
                   ?>
          <div class="post">
            <div class="tb">
              <a href="#" class="td p-p-pic"><img src="assets/images/profile/<?=$profile['profile_pic']?>" alt="Rajeev's profile pic"></a>
              <div class="td p-r-hdr">
                <div class="p-u-info">
                    <p><?=$profile['first_name']?> <?=$profile['last_name']?></p>
                    <!-- <a href="#">Rajeev Singh</a> shared a memory with <a href="#">Himalaya Singh</a> -->
                </div>
                <div class="p-dt">
                  <!-- <i class="material-icons">calendar_today</i> -->
                  <span>Enero 28, 2015</span>
                </div>
              </div>
              <div class="td p-opt"><i class="material-icons">Compartió</i></div>
            </div>
            <a href="#" class="p-cnt-v">
              <img src="assets/images/posts/<?=$post['post_img']?>">
            </a>
            <div>


            <div class="td p-r-hdr">
                <div class="p-u-info">
                  <p><?=$post['post_text']?></p>
                </div>
              </div>


              <div class="p-acts">
                <div class="p-act like"><i class="material-icons">Comentar</i></div>
                <!-- <div class="p-act like"><i class="material-icons">thumb_up_alt</i><span>25</span></div> -->
                <!-- <div class="p-act comment"><i class="material-icons">comment</i><span>1</span></div> -->
                <!-- <div class="p-act share"><i class="material-icons">dasfasdf</i></div> -->
              </div>
            </div>
          </div>
          <hr>
          <?php
}
                          ?>
        </div>
        <div id="loading"><i class="material-icons">autorenew</i></div>
      </div>
      <div class="td" id="r-col">
        <div id="chat-bar">
          <!-- <div id="chat-lb"><i class="material-icons">contacts</i><span>Contacts</span></div> -->
          <div id="chat-lb"><i style="color:white" class="material-icons">Contactos</i></div>
          <div id="cts">
            <div class="on-ct active">
              <a href="#"><img src="https://imagizer.imageshack.com/img924/4231/JnFicn.jpg"></a>
            </div>
            <div class="on-ct active">
              <a href="#"><img src="https://imagizer.imageshack.com/img923/332/1abR4H.png"></a>
            </div>
            <div class="on-ct">
              <a href="#"><img src="https://imagizer.imageshack.com/img924/4231/JnFicn.jpg"></a>
            </div>
            <div class="on-ct active">
              <a href="#"><img src="https://imagizer.imageshack.com/img923/332/1abR4H.png"></a>
            </div>
            <div class="on-ct active">
              <a href="#"><img src="https://imagizer.imageshack.com/img924/4231/JnFicn.jpg"></a>
            </div>
            <div class="on-ct">
              <a href="#"><img src="https://imagizer.imageshack.com/img924/4231/JnFicn.jpg"></a>
            </div>
            <div class="on-ct">
              <a href="#"><img src="https://imagizer.imageshack.com/img923/332/1abR4H.png"></a>
            </div>
            <div class="on-ct" id="ct-sett"><i class="material-icons">settings</i></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="device-bar-2"><i class="fab fa-apple"></i></div>




  
  
    <!-- Modal -->
    
    


    <!-- this is for follower list -->
    <div class="modal fade" id="follower_list" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Followers</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
foreach($profile['followers'] as $f){
    $fuser = getUser($f['follower_id']);
    $fbtn='';
    if(checkFollowStatus($f['follower_id'])){
        $fbtn = '<button class="btn btn-sm btn-danger unfollowbtn" data-user-id='.$fuser['id'].' >Unfollow</button>';
    }else if($user['id']==$f['follower_id']){
        $fbtn='';
    }else{
        $fbtn = '<button class="btn btn-sm btn-primary followbtn" data-user-id='.$fuser['id'].' >Follow</button>';

    }
    ?>
<div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/<?=$fuser['profile_pic']?>" alt="" height="40" class="rounded-circle border">
                        </div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <a href='?u=<?=$fuser['username']?>' class="text-decoration-none text-dark"><h6 style="margin: 0px;font-size: small;"><?=$fuser['first_name']?> <?=$fuser['last_name']?></h6></a>
                            <p style="margin:0px;font-size:small" class="text-muted">@<?=$fuser['username']?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                      <?=$fbtn?>

                    </div>
                </div>
    <?php
}
                ?>
            </div>
   
        </div>
  </div>
</div>



<!-- this is for following list -->
<div class="modal fade" id="following_list" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Following</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
foreach($profile['following'] as $f){
    $fuser = getUser($f['user_id']);
    $fbtn='';
    if(checkFollowStatus($f['user_id'])){
        $fbtn = '<button class="btn btn-sm btn-danger unfollowbtn" data-user-id='.$fuser['id'].' >Unfollow</button>';
    }else if($user['id']==$f['user_id']){
        $fbtn='';
    }else{
        $fbtn = '<button class="btn btn-sm btn-primary followbtn" data-user-id='.$fuser['id'].' >Follow</button>';

    }
    ?>
<div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/<?=$fuser['profile_pic']?>" alt="" height="40" class="rounded-circle border">
                        </div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <a href='?u=<?=$fuser['username']?>' class="text-decoration-none text-dark"><h6 style="margin: 0px;font-size: small;"><?=$fuser['first_name']?> <?=$fuser['last_name']?></h6></a>
                            <p style="margin:0px;font-size:small" class="text-muted">@<?=$fuser['username']?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                      <?=$fbtn?>

                    </div>
                </div>
    <?php
}
                ?>
            </div>
   
        </div>
  </div>
</div>