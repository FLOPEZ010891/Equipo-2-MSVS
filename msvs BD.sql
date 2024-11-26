-- CREAR LA BASE DE DATOS
CREATE DATABASE msvs;

-- TABLA DE USUARIO
CREATE TABLE Usuario (
    IdUsuario INT PRIMARY KEY AUTO_INCREMENT,
    UserName VARCHAR(50),
    Password VARCHAR(50),
    Nombre VARCHAR(100),
    Direccion VARCHAR(200),
    Rol VARCHAR(50),
    Ocupacion VARCHAR(100),
    Edad INT,
    Genero VARCHAR(50),
    Telefono VARCHAR(15),
    Email VARCHAR(50)
);

-- TABLA UNIDAD DE SALUD
CREATE TABLE UnidadDeSalud (
    IdUnidad INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(100),
    Ubicación VARCHAR(200),
    Especialidades VARCHAR(500)
);

-- TABLA TAMIZAJE
CREATE TABLE Tamizaje (
    IdTamizaje INT PRIMARY KEY AUTO_INCREMENT,
    IdUsuario INT,
    FechaAudit DATE,
    PuntajeAudit INT,
    FechaPosit DATE,
    PuntajePosit INT,
    FechaDesesperanza DATE,
    PuntajeDesesperanza INT,
    FechaAnsiedad DATE,
    PuntajeAnsiedad INT,
    FechaDepresion DATE,
    PuntajeDepresion INT,
    FechaFargestrom DATE,
    PuntajeFargestrom INT,
    FOREIGN KEY (IdUsuario) REFERENCES Usuario(IdUsuario)
);

-- TABLA RESULTADO
CREATE TABLE Resultado (
    IdResultado INT PRIMARY KEY AUTO_INCREMENT,
    IdTamizaje INT,
    IdUsuario INT,
    Puntaje INT,
    FOREIGN KEY (IdTamizaje) REFERENCES Tamizaje(IdTamizaje),
    FOREIGN KEY (IdUsuario) REFERENCES Usuario(IdUsuario)
);

-- TABLA MENSAJE
CREATE TABLE Mensaje (
    IdMensaje INT PRIMARY KEY AUTO_INCREMENT,
    IdResultado INT,
    Mensaje TEXT,
    IdUnidad INT,
    FOREIGN KEY (IdResultado) REFERENCES Resultado(IdResultado),
    FOREIGN KEY (IdUnidad) REFERENCES UnidadDeSalud(IdUnidad)
);

-- TABLA FORO
CREATE TABLE Foro (
    IdForo INT PRIMARY KEY AUTO_INCREMENT,
    IdUsuario INT,
    Categoría VARCHAR(100),
    FOREIGN KEY (IdUsuario) REFERENCES Usuario(IdUsuario)
);

-- TABLA POST
CREATE TABLE Post (
    IdPost INT PRIMARY KEY AUTO_INCREMENT,
    IdForo INT,
    Contenido TEXT,
    Fecha DATE,
    Aprobación BOOLEAN,
    FOREIGN KEY (IdForo) REFERENCES Foro(IdForo)
);
