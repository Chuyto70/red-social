<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
        <div class="d-flex align-items-center flex-column">
            <img src="assets/images/home/logo.ico" alt="logo" class="img-fluid mb-4" style="height: 60px;">
            <h5 class="card-title mb-3">Iniciar Sesión</h5>
        </div>

          <form method="post" action="assets/php/actions.php?login">
            <div class="mb-3">
              <label for="username_email" class="form-label">Usuario o Correo</label>
              <input type="text" class="form-control" id="username_email" name="username_email" value="<?=showFormData('username_email')?>" placeholder="Enter your username or email">
              <?=showError('username_email')?>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
              <?=showError('password')?>
              <?=showError('checkuser')?>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </form>
          <hr>
          <div class="text-center">
            <a href="?forgotpassword&newfp" class="text-decoration-none">Forgot password?</a>
          </div>
          <div class="mt-3 text-center">
            Don't have an account? <a href="?signup" class="text-decoration-none">Sign up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

