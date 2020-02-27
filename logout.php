<?php
session_start();
unset($_SESSION['pseudo']);
session_destroy();
?>
<div>vous avez été déconnecté</div>
<a href="index.php">cliquez ici pour vous reconnecter</a>
