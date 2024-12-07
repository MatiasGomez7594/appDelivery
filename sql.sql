CREATE TABLE direcciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    direccion VARCHAR(255),
    latitud DECIMAL(10, 8),
    longitud DECIMAL(11, 8)
);
