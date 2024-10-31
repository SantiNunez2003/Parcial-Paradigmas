<section class="propiedades-destacadas">
    <h2>Bienvenido a Inmobiliaria Los Palos</h2>
    <p>Ofrecemos las mejores propiedades para ti y tu familia.</p>
    <div class="carrusel">
        <?php
        // Consultar propiedades
        $sql = "SELECT p.id, p.titulo, i.url FROM propiedades p
                JOIN imagenes i ON p.id = i.propiedad_id
                ORDER BY p.fecha_publicacion DESC
                LIMIT 6"; // Cambia el límite según tus necesidades
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // Generar las imágenes del carrusel
            while ($row = $result->fetch_assoc()) {
                echo '<div><img src="' . $row['url'] . '" alt="' . $row['titulo'] . '"></div>';
            }
        } else {
            echo '<div>No hay propiedades destacadas en este momento.</div>';
        }
        ?>
    </div>
</section>