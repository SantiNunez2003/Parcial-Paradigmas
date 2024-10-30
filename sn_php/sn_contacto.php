<?php
if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['telefono']) && isset($_POST['propiedad_id']) && isset($_POST['mensaje'])) {
    // Escapar los datos recibidos
    $nombre = $con->real_escape_string($_POST['nombre']);
    $email = $con->real_escape_string($_POST['email']);
    $telefono = $con->real_escape_string($_POST['telefono']);
    $mensaje = $con->real_escape_string($_POST['mensaje']);
    $propiedad_id = intval($_POST['propiedad_id']);

    // Verificar que la propiedad exista
    $sql = "SELECT * FROM propiedades WHERE id = $propiedad_id";
    $result = $con->query($sql);

    if ($result->num_rows === 0) {
        echo "<script>alert('Error: La propiedad seleccionada no existe.');</script>";
    } else {
        // Insertar datos en la tabla de contactos
        $sql = "INSERT INTO contactos (usuario_id, propiedad_id, mensaje) VALUES (NULL, $propiedad_id, '$mensaje')";
        if ($con->query($sql) === TRUE) {
            echo "<script>alert('Mensaje enviado con éxito.');</script>";
        } else {
            echo "<script>alert('Error al enviar el mensaje: " . $con->error . "');</script>";
        }
    }
    // Limpiar el POST y redirigir (opcional)
    echo "<script>window.location='index.php?modulo=sn_contacto';</script>";
}
?>

<section class="contacto">
    <h2>Contacto</h2>
    <form action="index.php?modulo=sn_contacto" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>

        <label for="propiedad">Seleccione la Propiedad:</label>
        <select id="propiedad" name="propiedad_id" required>
            <option value="">Seleccione una propiedad</option>
            <?php
            // Consultar propiedades para llenar el select
            $sql = "SELECT id, titulo FROM propiedades";
            $result = $con->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['id'] . '">' . $row['titulo'] . '</option>';
                }
            } else {
                echo '<option value="">No hay propiedades disponibles</option>';
            }
            ?>
        </select>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required></textarea>

        <button type="submit">Enviar</button>
    </form>
</section>