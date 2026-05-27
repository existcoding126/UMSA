CREATE EXTENSION postgres_fdw;

CREATE SERVER servidor_cb
FOREIGN DATA WRAPPER postgres_fdw
OPTIONS (
    host 'IP_Cochabamba',
    dbname 'cementerio_cb',
    port '5432'
);

CREATE USER MAPPING FOR CURRENT_USER
SERVER servidor_cb
OPTIONS (
    user 'coordinador',
    password '123456'
);

CREATE FOREIGN TABLE difuntos_cb_remoto (
    id_difunto INT,
    nombre_completo VARCHAR(150),
    fecha_fallecimiento DATE,
    cementerio VARCHAR(100),
    region VARCHAR(50),
    ubicacion_sepultura VARCHAR(100)
)
SERVER servidor_cb
OPTIONS (
    table_name 'difuntos_cb'
);