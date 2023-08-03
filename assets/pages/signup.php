<style>
    .login{
    width:100%;
    height: 100%;
display: flex;
justify-content: center;
align-items: flex-start;
}
.container_inputs_nombre div{
    width: 50%;
}
.container_inputs_nombre input{
    padding: 3px 8px;
    max-width: 100%;
}
</style>
<div  class="text-center ">
    <h1 class="text-white">NAV<span style="color: rgb(127 127 127) !important;" class="text-gray">HER</span></h1>
    <div class="login">
        <div class="col-lg-4 col-md-8 col-sm-12 border rounded p-4 shadow-sm bg-white">
            <form method="post" action="assets/php/actions.php?signup">
                <div class="d-flex justify-content-center">

                <img src="assets/images/home/logo.ico" alt="logo" class="img-fluid mb-4" style="height: 60px;">
                </div>
                <h1 class="h5 fw-normal">Registrate</h1>
                <div class="d-flex justify-content-between container_inputs_nombre gap-2">
                    <div    class=" mt-1 ">
                        <input 
                        style="width: 100%; background-color: rgb(180 199 231); border:1px solid rgb(143 170 220);"
                        type="text" name="first_name" value="<?=showFormData('first_name')?>" class="rounded" placeholder="Nombre">
                        <!-- <label for="floatingInput">first name</label> -->
                    </div>
                 
                    <div class="mt-1">
                        <input 
                        style="width: 100%; background-color: rgb(180 199 231); border:1px solid rgb(143 170 220);"
                        type="text" name="last_name" value="<?=showFormData('last_name')?>" class="rounded" placeholder="Apellido">
                        <!-- <label for="floatingInput">last name</label> -->
                    </div>
                </div>
                <?=showError('first_name')?>
                <?=showError('last_name')?>

                <div class="d-flex gap-3 my-3 justify-content-around">
                    <div class="form-check" style="display: flex;
                                                 align-items: center;
                                                 gap: 4px;">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"
                            value="1" <?=isset($_SESSION['formdata'])?'':'checked'?><?=showFormData('gender')==1?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check" style="display: flex;
                                                 align-items: center;
                                                 gap: 4px;">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios3"
                            value="2" <?=showFormData('gender')==2?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios3">
                            Female
                        </label>
                    </div>
                    <div class="form-check" style="display: flex;
                                                 align-items: center;
                                                 gap: 4px;">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                            value="0" <?=showFormData('gender')==0?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios2">
                            Other
                        </label>
                    </div>
                </div>
                <div class=" mt-1">
                    <input 
                    style="width: 100%; background-color: rgb(180 199 231); border:1px solid rgb(143 170 220);"
                    type="email" name="email" value="<?=showFormData('email')?>" class="form-control rounded" placeholder="Correo">
                    <!-- <label for="floatingInput">email</label> -->
                </div>
                <?=showError('email')?>

                <div class="d-flex justify-content-between container_inputs_nombre mt-2 gap-2">
                <div class=" mt-1">
                    <input 
                    style=" width: 100%; background-color: rgb(180 199 231); border:1px solid rgb(143 170 220);"
                    type="text" name="username" value="<?=showFormData('username')?>" class=" rounded" placeholder="Usuario">
                    <!-- <label for="floatingInput">username</label> -->
                </div>
                <?=showError('username')?>

                <div class=" mt-1">
                    <input 
                    style="width: 100%; background-color: rgb(180 199 231); border:1px solid rgb(143 170 220);"
                    type="password" name="password" class=" rounded" id="floatingPassword" placeholder="Contraseña">
                    <!-- <label for="floatingPassword">password</label> -->
                </div>
                <?=showError('password')?>

                </div>
                
                <a href="?terminos">Terminos y condiciones</a>
                <div>
                    <input type="checkbox" id="acepta_terminos">
                    <label for="">He leido y acepto los terminos y condiciones </label>
                </div>

                <div class="mt-2 d-flex flex-column align-items-center">
                    <button id="btn_crearcuenta" style="width: 16rem; background-color: rgb(32 56 100);" class="btn btn-primary" type="submit">Crear cuenta</button>
                    <a href="?login" class="text-decoration-none">¿Ya tienes cuenta?</a>


                </div>

            </form>
        </div>
    </div>


</div>
<script>
    
    let btn_crearcuenta = document.getElementById('btn_crearcuenta')
    
    btn_crearcuenta.addEventListener('click', (e)=>{
        let acepta_terminos =document.getElementById('acepta_terminos')

        if(!acepta_terminos.checked){
            alert('Necesitas aceptar los terminos y condiciones para registrarte.')
            e.preventDefault()
           return;
        }
    })
</script>
    