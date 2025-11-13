<?php
    include "../../includes/templates/header.php";
?>
<main class="contenedor seccion">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <h1>Lista de vendedores</h1>
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Paterno</th>
            <th>Materno</th>
            <th>Telefono</th>
            <th>Operaciones</th>
        </thead>
        <tbody>
            <?php 
            include "../../includes/config/database.php";
            $db = ConectarDB(); //conecta a base de datos
            $consql = "SELECT * FROM vendedores WHERE estado like 'activo'"; //selecciona todos los datos que esten en "activo"
            $res = mysqli_query($db, $consql); //ejecuta la consulta con mysqueli_query y se almacena los dos anteriores en la variable res
            while ($reg = mysqli_fetch_array($res)) { //reg se convierte en un array asociativo y con este bucle se extrae una fila de res a cada iteracion
                echo "<tr>";
                echo "<td>" . $reg['nombre'] . "</td>";
                echo "<td>" . $reg['paterno'] . "</td>";
                echo "<td>" . $reg['materno'] . "</td>";
                echo "<td>" . $reg['telefono'] . "</td>";
                // Aquí corregimos las comillas y cerramos correctamente el href
                echo "<td><a href='eliminar.php?cod=" . $reg['idvendedores'] . "' class='btn btn-danger'>ELIMINAR</a></td>";
                echo "<td><a href='' class='btn btn-warning'>MODIFICAR</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</main>
<?php
    include "../../includes/templates/footer.php";
?>
