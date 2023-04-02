<?php global $user;?>
<div class="container col-4 rounded-0 d-flex justify-content-between ">
    <div class="col-12 bg-dark border rounded p-4 mt-4 shadow-sm">
        <form method="post" action="assets/php/actions.php?updateprofile" enctype="multipart/form-data">
            <div class="d-flex justify-content-center text-center">
                <!-- Coloca aquí tu contenido que quieres centrar -->
                <h1 class="h5 mb-3 fw-normal text-white">Editar Perfil</h1>
            </div>
            
                <?php
if(isset($_GET['success'])){
    ?>
<p class="text-white">Perfil actualizado !</p>

<?php
}
                ?>
                <div class="form-floating mt-1 col-6 ">
                <div class="d-flex justify-content-center">
  <div class="rounded-circle overflow-hidden">
    <img src="assets/images/profile/<?=$user['profile_pic']?>" class="img-thumbnail" style="height:150px; object-fit: cover;" alt="...">
  </div>
</div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label text-white">Cambiar foto de perfil</label>
                        <input class="form-control" type="file" name="profile_pic" id="formFile">
                    </div>
                </div>
                <?=showError('profile_pic')?>

               
                    <div class="form-floating mt-1 col-6 text-white ">
                        <input type="text" name="first_name" value="<?=$user['first_name']?>" class="form-control rounded-0" placeholder="username/email">
                        <label for="floatingInput">first name</label>
                    </div>
                    <div class="form-floating mt-1 col-6 text-white">
                        <input type="text" name="last_name" value="<?=$user['last_name']?>" class="form-control rounded-0" placeholder="username/email">
                        <label for="floatingInput">last name</label>
                    </div>
               


                <?=showError('first_name')?>
                <?=showError('last_name')?>
                <div class="d-flex gap-3 my-3">
                    <div class="form-check">
                        <input class="form-check-input " type="radio" name="exampleRadios" id="exampleRadios1"
                            value="option1" <?=$user['gender']==1?'checked':''?> disabled>
                        <label class="form-check-label text-white" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                            value="option2" <?=$user['gender']==2?'checked':''?> disabled>
                        <label class="form-check-label text-white" for="exampleRadios3">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                            value="option2" <?=$user['gender']==0?'checked':''?> disabled>
                        <label class="form-check-label text-white" for="exampleRadios2">
                            Other
                        </label>
                    </div>
                </div>
                <div class="form-floating mt-1">
                    <input type="email" value="<?=$user['email']?>" class="form-control rounded-0" placeholder="email" disabled>
                    <label for="floatingInput text-white">email</label>
                </div>
                <div class="form-floating mt-1">
                    <input type="text"  value="<?=$user['username']?>" name="username" class="form-control rounded-0" placeholder="username/email">
                    <label for="floatingInput text-white">username</label>
                </div>
                <?=showError('username')?>

                <div class="form-floating mt-1">
                    <input type="password" name="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword text-white">new password</label>
                </div>

                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary " type="submit">Update Profile</button>



                </div>

            </form>
        </div>

    </div>
