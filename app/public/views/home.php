<?php
session_start();
?>
<h1>Olá, <?php echo $_SESSION['nome_usuario'];?></h1>

<?php
session_write_close();
?>