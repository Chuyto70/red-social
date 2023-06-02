<style>
  #conteneder_input{
    position: relative;
  }
  #conteneder_input::before{
    display: inline-block;
    position: absolute;
    right: 12px;
    top: 8px;
    content: url(assets/bootstrap/icons/person-fill.svg);
  
  }
  #contenedor_passowrd{
    position: relative;
  }

  #contenedor_passowrd::before{
    display: inline-block;
    position: absolute;
    right: 12px;
    top: 10px;
    content: url(assets/bootstrap/icons/key-fill.svg);
    
  }
</style>

<div class="text-center text-white">
  <h1>NAV<span style="color: rgb(127 127 127) !important;" class="text-gray">HER</span></h1>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
        <div class="d-flex align-items-center flex-column">
            <img src="assets/images/home/logo.ico" alt="logo" class="img-fluid mb-4" style="height: 60px;">
            <h5 class="card-title text-secondary mb-3">Iniciar Sesión</h5>
        </div>

          <form method="post" action="assets/php/actions.php?login">
            <div id="conteneder_input" class="mb-3">
              <!-- <label for="username_email" class="form-label">Usuario o Correo</label> -->
              <input style="background-color: rgb(180 199 231); border:1px solid rgb(143 170 220);" type="text" class="form-control" id="username_email" name="username_email" value="<?=showFormData('username_email')?>" placeholder="Usuario o correo">
              <?=showError('username_email')?>
            </div>
            
            <div class=" mb-3" id="contenedor_passowrd">
              <!-- <label for="password" class="form-label">Contraseña</label> -->
              <input style="background-color: rgb(180 199 231); border:1px solid rgb(143 170 220); " type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
              <?=showError('password')?>
              <?=showError('checkuser')?>
            </div>
            <button style="background-color: rgb(32 56 100); width:100%;" type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button>
            <hr style="color: black;" />
          </form>
          

          <div class="text-center">
            <a href="?forgotpassword&newfp" class="text-decoration-none">¿Olvidaste la contraseña?</a>
          </div>
          <div class="mt-3 text-center text-secondary">
            ¿No tienes cuenta? <a href="?signup" class="text-decoration-none">Registrate</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  
</div>
