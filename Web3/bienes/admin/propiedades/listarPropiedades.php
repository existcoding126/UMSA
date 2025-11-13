<?php include "../../includes/templates/header.php"; 
$inicio = false; ?>
    
<main class="contenedor seccion">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <a href="/bienes/admin/propiedades/crear.php" class="boton boton-verde">Nueva</a>
    <h1> Listado de propiedades</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Vendedor</th>

                <th>Titulo</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>N hab</th>
                <th>N baños</th>
                <th>estacionamiento</th>
                <th>imagen</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../../includes/config/database.php";
            $db = conectarDB();
            $con_sql = "SELECT p.*, v.* FROM propiedades p, vendedores v WHERE p.idvendedores = v.idvendedores AND p.estado = 'activo'";
            $res = mysqli_query($db, $con_sql);

            while ($reg = $res->fetch_assoc()) {
            ?>
            <tr>
                <td> <?php echo $reg['id']; ?> </td>
                <td> <?php echo $reg['nombre']. " ".$reg['paterno']; ?> </td>
                <td> <?php echo $reg['titulo']; ?> </td>
                <td> <?php echo $reg['precio']; ?> </td>
                <td> <?php echo $reg['descripcion']; ?> </td>
                <td> <?php echo $reg['habitaciones']; ?> </td>
                <td> <?php echo $reg['wc']; ?> </td>
                <td> <?php echo $reg['estacionamiento']; ?> </td>
                <td><img src="imagenes/<?php echo $reg['imagen']; ?>" alt="Imagen de propiedad" width="100"></td>
                <td><a href="eliminar.php?cod=<?php echo $reg['id']; ?>" class="btn btn-danger">Eliminar</a></td>
                <td><a href="modificar.php?cod=<?php echo $reg['id']; ?>" class="btn btn-warning">Modificar</a></td>
            </tr>
            <?php 
            } // Cierre del while 
            ?>
        </tbody>
    </table>
</main>

<?php include "../../includes/templates/footer.php"; ?>
