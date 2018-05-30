<?php 
spl_autoload_register(function($class) {
    include str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});


use mahasiswa\Mahasiswa;

$v = new Mahasiswa();
$v->render();

echo "<br>";

$x = new model\Model();
$x->render(); 
?>