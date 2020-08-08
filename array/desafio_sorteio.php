<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elsa", "Rapunzel", "Branca de neve", "Cinderela"];
$index = array_rand($nomes);
echo "<div center><h1>$nomes[$index]</h1>";

?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>
