<?php
echo '<h3>Bienvenido '.$_COOKIE['user']."</h3>";
echo "<br><h3>Esta es tu lista de deseos</h3>";
$persona2 = json_decode($_COOKIE['persona2']);   
foreach ($persona2 as $key => $value) {
    echo "<li>$key: $value</li>";
}
?>
<h2>Alta de nuevos deseos</h2>
<form method="POST" action="?method=new">
    <label>item</label><input type="text" name="new">
    <input type="submit" value="añadir">
</form>