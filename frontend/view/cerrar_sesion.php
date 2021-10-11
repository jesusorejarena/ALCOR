<?php

session_start();

session_destroy();

header('Location: usu_login.php');

exit;