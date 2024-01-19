<h1> Holaaaaaaa Mostrando todos los usuarios de samyslan...</h1>

<?php while($user = $todosLosUsuarios->fetch_object()): ?>
    <?=$user->nombre?> - <?=$user->apellidos?><br/>
<?php endwhile ?>
