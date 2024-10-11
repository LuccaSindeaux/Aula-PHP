<?php

//iniciar a sessão 
session_start();


//Limpar caches da sessão
session_unset();

//Encerra a sessão
session_destroy();

header("location: index.php");