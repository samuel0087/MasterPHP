<h2 class="title">Crear categoria</h2>
<div class="create">
    <div class="form-container">
        
        <form action="<?=base_url?>Categoria/save" method="POST" class="form form-registro">
            <label for="name" class="label">Nombre de la categoria:</label>
            <input type="text" name="name" placeholder="ej: camisa" class="input input-usu">

          <input type="submit" value="Create" class="primary-button login-button botton-sam">
        </form>
    </div>
</div>    