<div class="login">
    <div class="form-container">
      <h2 class="title">Registro de usuario</h2>

      <form action="index.php?controller=Usuario&action=save" method="POST" class="form form-registro">
          <label for="name" class="label">Nombre</label>
          <input type="text" name="name" placeholder="Nombre" class="input input-usu">
          
          <label for="surname" class="label">Apellidos</label>
          <input type="text" name="surname" placeholder="Apellidos" class="input input-pass">
          
          

          <label for="email" class="label">Email</label>
          <input type="text" name="email" placeholder="usuario@usuario.com" class="input input-email">

          <label for="password" class="label">Password</label>
          <input type="password" name="password" placeholder="*********" class="input input-password">

        <input type="submit" value="Create" class="primary-button login-button">
      </form>
    </div>
  </div>