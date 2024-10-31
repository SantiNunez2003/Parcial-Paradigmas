<?php
    include("includes/sn_conexion.php");
    conectar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/sn_styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="./js/sn_script.js" defer></script>
    <title>Inmobiliaria</title>
</head>
<body>
    <header>
        <h1>Inmobiliaria Los Palos</h1>
        <nav>
            <ul>
                <li><a href="index.php?modulo=sn_inicio">Inicio</a></li>
                <li><a href="index.php?modulo=sn_propiedades">Propiedades</a></li>
                <li><a href="index.php?modulo=sn_contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="propiedades">
        
            <h2>Propiedades Destacadas</h2>
            <?php 
                if(!empty($_GET['modulo']))
                {
                    include('sn_php/'.$_GET['modulo'].'.php');
                }
            ?>
        </section>
    </main>
        
    <footer>
        <p>&copy; 2024 Inmobiliaria Los Palos. Todos los derechos reservados.</p>
    </footer>
</body>
</html>