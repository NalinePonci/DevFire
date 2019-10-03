<?php
    session_start();
    session_destroy();
    echo "
        <script>
            alert('Deslogado');
            location.href='index.php';
        </script>
    ";
?>