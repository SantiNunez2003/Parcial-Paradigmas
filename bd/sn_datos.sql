USE sn_parcial_inmobiliaria;

-- Insertar usuarios
INSERT INTO usuarios (nombre, email, clave, telefono, contacto_preferido) VALUES
('Juan Pérez', 'juan@example.com', 'clave123', '123456789', 'email'),
('María García', 'maria@example.com', 'clave456', '987654321', 'telefono'),
('Carlos López', 'carlos@example.com', 'clave789', '456789123', 'email');

-- Insertar propiedades
INSERT INTO propiedades (titulo, descripcion, precio, tipo, direccion, ciudad, provincia, pais, habitaciones, baños, superficie, usuario_id) VALUES
('Casa en el centro', 'Amplia casa ubicada en el centro de la ciudad.', 150000, 'venta', 'Calle Principal 123', 'Ciudad', 'Provincia', 'País', 3, 2, 120.50, 1),
('Departamento en la playa', 'Departamento con vista al mar.', 250000, 'venta', 'Av. Playa 456', 'Ciudad', 'Provincia', 'País', 2, 1, 80.00, 2),
('Finca en el campo', 'Finca ideal para descansar y disfrutar de la naturaleza.', 300000, 'venta', 'Camino Rural 789', 'Ciudad', 'Provincia', 'País', 4, 3, 200.00, 1),
('Finca en el campo', 'Finca con muchas posibilidades de desarrollo.', 280000, 'alquiler', 'Calle Finca 321', 'Ciudad', 'Provincia', 'País', 4, 2, 250.00, 3),
('Finca en el campo', 'Finca acogedora con vistas panorámicas.', 220000, 'venta', 'Camino Verde 654', 'Ciudad', 'Provincia', 'País', 3, 2, 150.00, 1),
('Finca en el campo', 'Finca en un entorno natural privilegiado.', 210000, 'alquiler', 'Camino Natural 987', 'Ciudad', 'Provincia', 'País', 3, 1, 140.00, 2),
('Casa moderna', 'Casa moderna con todos los servicios.', 180000, 'venta', 'Calle Moderna 135', 'Ciudad', 'Provincia', 'País', 3, 2, 130.00, 1),
('Departamento espacioso', 'Departamento espacioso y luminoso.', 240000, 'venta', 'Av. Espaciosa 246', 'Ciudad', 'Provincia', 'País', 2, 2, 90.00, 2);

-- Insertar imágenes
INSERT INTO imagenes (propiedad_id, url, descripcion) VALUES
(1, './imagenes/sn_departamento_1.jfif', 'Casa en el centro'),
(2, './imagenes/sn_departamento_2.webp', 'Departamento en la playa'),
(3, './imagenes/sn_casa_4.jfif', 'Finca en el campo'),
(4, './imagenes/sn_casa_2.jfif', 'Finca en el campo'),
(5, './imagenes/sn_casa_1.jfif', 'Finca en el campo'),
(6, './imagenes/sn_departamento_3.jfif', 'Finca en el campo'),
(7, './imagenes/sn_casa_3.jfif', 'Finca en el campo'),
(8, './imagenes/sn_departamento_4.jfif', 'Finca en el campo');

-- Insertar contactos
INSERT INTO contactos (usuario_id, propiedad_id, mensaje) VALUES
(1, 1, 'Estoy interesado en esta propiedad, ¿puedo recibir más información?'),
(2, 2, 'Me gustaría programar una visita al departamento.'),
(3, 3, 'Quiero saber más sobre las características de la finca.'),
(1, 4, 'Estoy interesado en alquilar esta propiedad.'),
(2, 5, '¿Está disponible esta finca para venta?');
