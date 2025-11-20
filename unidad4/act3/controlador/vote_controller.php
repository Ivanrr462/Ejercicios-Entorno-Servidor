<?php 

namespace Controlador;
use Option\OptionModel;

class VoteController {
    private OptionModel $modelo;

    public function __construct(OptionModel $modelo) {
        $this->modelo = $modelo;
    }

    public function procesar() {
        if(isset($_POST['voto'])) {
            $this->modelo->votar($_POST['voto']);
        }

        if (isset($_POST['eliminar'])) {
            $this->modelo->eliminar($_POST['eliminar']);
        }

        if (isset($_POST['texto'])) {
            $this->modelo->agregarOpcion($_POST['texto']);
        }

        $opciones = $this->modelo->obtenerOpciones();
        $total = 0;

        foreach ($opciones as $opcion) {
            $total += $opcion['votos'];
        }

        return [
            'opciones' => $opciones,
            'total' => $total
        ];
    }
}