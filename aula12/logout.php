<?php

session_start();
session_unset();
//encerra a sessão
session_destroy();

header("location: login.php");