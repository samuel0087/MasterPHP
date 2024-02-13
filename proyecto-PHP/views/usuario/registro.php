<div class="create">
    <div class="form-container">
      <h2 class="title">Registro de usuario</h2>
      
      <?php if(isset($_SESSION['register']) && $_SESSION['register']): ?>
      
        <h2 class="ok">Se guardo usuario</h2>
      
      <?php elseif(isset($_SESSION['register']) && !$_SESSION['register']): ?>
      
        <h2 class="error">NO SE guardo usuario, llenar correctamente los datos por favor.</h2>
      
      <?php endif;?>
        
        <?php Utils::deleteSession('register')?>
      
      

      <form action="<?=base_url?>Usuario/save" method="POST" class="form form-registro">
          <label for="name" class="label">Nombre</label>
          <input type="text" name="name" placeholder="Nombre" class="input input-usu">
          
          <label for="surname" class="label">Apellidos</label>
          <input type="text" name="surname" placeholder="Apellidos" class="input input-pass">
          
          

          <label for="email" class="label">Email</label>
          <input type="text" name="email" placeholder="usuario@usuario.com" class="input input-email">

          <label for="password" class="label">Password</label>
          <input type="password" name="password" placeholder="*********" class="input input-password">

        <input type="submit" value="Create" class="primary-button login-button botton-sam">
      </form>
    </div>
  </div>