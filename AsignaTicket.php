<?php
// Función para asignar automáticamente un analista basado en el departamento
function asignarAnalista($Departamento) {
    // Implementa aquí tu lógica de asignación de analistas basada en departamentos
    // Puedes utilizar una base de datos, un archivo de configuración o cualquier otro mecanismo de almacenamiento de datos para obtener la asignación adecuada

    // Ejemplo de asignación aleatoria de analistas
    $analistasPorDepartamento = array(
        'Ventas' => array('Analista1', 'Analista2', 'Analista3'),
        'Soporte' => array('Analista4', 'Analista5', 'Analista6'),
        'Desarrollo' => array('Analista7', 'Analista8', 'Analista9')
    );

    // Verificar si el departamento está definido en el arreglo de asignaciones
    if (array_key_exists($Departamento, $analistasPorDepartamento)) {
        $analistas = $analistasPorDepartamento[$departamento];
        $analistaAsignado = $analistas[array_rand($analistas)];
        return $analistaAsignado;
    } else {
        // Si el departamento no está definido, se asigna un analista por defecto
        return 'AnalistaPorDefecto';
    }
}

// Ejemplo de uso
$Departamento = 'Ventas';
$analistaAsignado = asignarAnalista($Departamento);
echo "El analista asignado al Ticket $Departamento es: $analistaAsignado";
?>
