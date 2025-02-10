<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "POST recibido:\n";
    print_r($_POST);
} else {
    echo "No se detectó POST";
}
?>