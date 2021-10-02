<?php

session_start();

session_destroy();

header('Location: ado_login.php');

exit;