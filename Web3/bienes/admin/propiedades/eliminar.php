<?php
    $inicio = false;
    include "../../includes/templates/header.php";
    
    // Validar que el parámetro 'cod' está presente y no está vacío
    if(isset($_GET['cod']) && !empty($_GET['cod'])) {
        $idv = $_GET['cod'];
        echo "El id de la propiedad es: " . $idv;

        include "../../includes/config/database.php"; // Conexión 
        $db = conectarDB(); // Llama a la función 
        
        // Asegúrate de que $idv es un número entero antes de usarlo en la consulta
        $idv = intval($idv); // Convierte a entero
        
        // Preparar la consulta
        $consql = "UPDATE propiedades SET estado='inactivo' WHERE id=$idv"; 
        
        // Ejecutar la consulta
        $res = mysqli_query($db, $consql);
        
        if ($res) {
            echo "Se eliminó el registro";
        } else {
            echo "No se eliminó el registro. Error: " . mysqli_error($db);
        }
    } else {
        echo "No se proporcionó un ID válido.";
    }
?>
<main class="contenedor seccion">
</main>
<?php
    include "../../includes/templates/footer.php";
?>
