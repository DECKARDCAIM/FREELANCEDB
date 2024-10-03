<?php
session_start();
session_destroy();
header('Location: /freelance/web/views/pages/login.php');
exit();
?>
