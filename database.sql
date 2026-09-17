-- Creación de la Base de Datos para el Centro de Salud Pirapó Puerto
CREATE DATABASE IF NOT EXISTS db_salud_pirapo;
USE db_salud_pirapo;

-- Tabla de Pacientes
CREATE TABLE IF NOT EXISTS pacientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    cedula VARCHAR(20) UNIQUE NOT NULL,
    telefono VARCHAR(20),
    direccion TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de Citas Médicas (Relacionada con pacientes)
CREATE TABLE IF NOT EXISTS citas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    paciente_id INT NOT NULL,
    especialidad VARCHAR(100) NOT NULL,
    fecha_cita DATE NOT NULL,
    hora_cita TIME NOT NULL,
    estado VARCHAR(50) DEFAULT 'Pendiente',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (paciente_id) REFERENCES pacientes(id) ON DELETE CASCADE
);
