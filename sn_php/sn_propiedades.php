<section class="propiedades">
    <h2>Propiedades Destacadas</h2>
    <div>
        <?php
            // Consultar propiedades
            $sql = "SELECT p.id, p.titulo, p.descripcion, p.precio, i.url 
                    FROM propiedades p
                    JOIN imagenes i ON p.id = i.propiedad_id
                    ORDER BY p.fecha_publicacion DESC
                    LIMIT 6"; // Cambia el límite según tus necesidades
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                // Generar las propiedades
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="propiedad">';
                    echo '<img src="' . $row['url'] . '" alt="' . $row['titulo'] . '">';
                    echo '<h3>' . $row['titulo'] . '</h3>';
                    echo '<p>' . $row['descripcion'] . '</p>';
                    echo '<p>Precio: $' . number_format($row['precio'], 2) . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>No hay propiedades destacadas en este momento.</p>';
            }
        ?>
    </div>
</section>
