<h1> Holaaaaaaa Mostrando Notas...</h1>

<?php while($nota = $notas->fetch_object()): ?>
    <?=$nota->titulo?> - <?=$nota->fecha?><br/>
<?php endwhile ?>
