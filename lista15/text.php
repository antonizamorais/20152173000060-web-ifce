<?php
// Abre ou cria o arquivo bloco1.txt
// "a" representa que o arquivo é aberto para ser escrito
$fp = fopen("bloco1.txt", "a");

// Escreve "exemplo de escrita" no bloco1.txt
$frase1 = fwrite($fp, "exercicio de web, ");
$frase2 = fwrite($fp, "aula de php, ");
$frase3 = fwrite($fp, "exemplo de escrita");

echo "<br>".$frase1;
echo "<br>".$frase2;
echo "<br>".$frase3;

// Fecha o arquivo
fclose($fp); 
?>
