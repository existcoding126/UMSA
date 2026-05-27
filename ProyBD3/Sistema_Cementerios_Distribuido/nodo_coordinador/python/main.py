import psycopg2
import pyodbc
import mysql.connector
import pandas as pd

# =====================================
# POSTGRESQL LP
# =====================================

conn_lp = psycopg2.connect(
    host='IP_LAPAZ',
    database='cementerio_lp',
    user='coordinador',
    password='123456'
)

# =====================================
# POSTGRESQL CBBA
# =====================================

conn_cb = psycopg2.connect(
    host='IP_CBBA',
    database='cementerio_cb',
    user='coordinador',
    password='123456'
)

# =====================================
# SQL SERVER
# =====================================

conn_sql = pyodbc.connect(
    'DRIVER={ODBC Driver 17 for SQL Server};'
    'SERVER=localhost;'
    'DATABASE=CementerioOperativo;'
    'UID=sa;'
    'PWD=123456'
)

# =====================================
# MYSQL
# =====================================

conn_mysql = mysql.connector.connect(
    host='localhost',
    user='root',
    password='123456',
    database='cementerio_historico'
)

# =====================================
# CONSULTA HOMOGENEA
# =====================================

query_lp = "SELECT * FROM difuntos_lp"
query_cb = "SELECT * FROM difuntos_cb"

lp = pd.read_sql(query_lp, conn_lp)
cb = pd.read_sql(query_cb, conn_cb)

homogenea = pd.concat([lp, cb])

print("\nCONSULTA HOMOGENEA")
print(homogenea)

# =====================================
# CONSULTA HETEROGENEA
# =====================================

query_sql = "SELECT * FROM Difuntos_Operativo"
query_mysql = "SELECT * FROM historial_difunto"

operativo = pd.read_sql(query_sql, conn_sql)
historico = pd.read_sql(query_mysql, conn_mysql)

heterogenea = pd.merge(
    operativo,
    historico,
    on='id_difunto'
)

print("\nCONSULTA HETEROGENEA")
print(heterogenea)