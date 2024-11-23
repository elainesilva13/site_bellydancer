<?php
$pasta = 'assets/galeria/';

if (is_dir($pasta)) {
    $arquivos = array_diff(scandir($pasta), array('..', '.', "assets/galeria//z.png"));

    foreach ($arquivos as $arquivo) {
        $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
        echo '<div class="page">';

        if (in_array($extensao, ['jpg', 'jpeg', 'png', 'gif'])) {
            echo '<img src="' . $pasta . '/' . $arquivo . '" alt="Elaine Noura Bailarina de Dança do Ventre de São José dos Campos"/>';
        } elseif ($extensao === 'mp4') {
            echo '<video controls>
                    <source src="' . $pasta . '/' . $arquivo . '" type="video/mp4">
                  </video>';
        }
        echo '</div>';
    }
} else {
    echo 'Pasta não encontrada!';
}
