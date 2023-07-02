<?php

class TicketController {
    private $ticketModel;
    
    public function __construct() {
        $this->ticketModel = new TicketModel();
    }
    
    public function crearTicket() {
        // Verificar si se ha enviado el formulario de creación de ticket
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los datos del formulario
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["Descripcion"];
            $departamento = $_POST["Departamento"];
            $usuario_id = $_POST["IdCliente"];

            // Realizar la asignación automática del ticket
            $analista_id = $this->ticketModel->asignarAnalista($departamento);

            // Guardar el ticket en la base de datos
            $this->ticketModel->guardarTicket($titulo, $descripcion, $departamento, $usuario_id, $analista_id);
            
            // Mostrar mensaje de éxito
            $mensaje = "El ticket se ha creado correctamente.";
        }
        
        include 'index.php';
    }
}

?>
