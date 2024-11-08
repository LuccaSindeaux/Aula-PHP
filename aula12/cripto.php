<?php

echo $senha = "lucca";
echo "<hr>";
echo $cripto = base64_encode($senha); //criptografia ultrapassada 
echo "<hr>";
echo "MD5: ". md5($senha); //criptografia md5 que ainda é ultrapassado 
echo "<hr>";
echo "Sha1: ". sha1($senha); //cripotgrafia melhor que a MD5
echo "<hr>";
echo 'mais segura: '. password_hash($senha, PASSWORD_DEFAULT);