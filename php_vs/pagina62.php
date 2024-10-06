<?php
if (isset($_POST['direccion'])) {
    $direccion = $_POST['direccion'];
    if ($direccion == "www.google.com") {
        header("Location: https://www.youtube.com/watch?v=dOv-GPmKD8w&ab_channel=JIMMYSAN151");
    } else {
        header("Location: http://$direccion");
    }
    exit();
}
?>