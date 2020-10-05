<?php

    $contador = "src/visitantes.txt";

    define("adi",1);

    $id = fopen($contador, "r+");
    $conteudo = fread($id,filesize($contador));
    fclose($id);
    clearstatcache();

    $conteudo += adi;

    $id = fopen($contador,"r+");
    fwrite($id, $conteudo, strlen($conteudo) +5);
    fclose($id);
    clearstatcache();

    echo ($conteudo);