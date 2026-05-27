USE CementerioOperativo;
GO

CREATE TABLE Difuntos_Operativo (
    id_difunto INT PRIMARY KEY,
    nombre_completo VARCHAR(150),
    fecha_fallecimiento DATE,
    cementerio VARCHAR(100),
    region VARCHAR(50),
    ubicacion_sepultura VARCHAR(100)
);
GO