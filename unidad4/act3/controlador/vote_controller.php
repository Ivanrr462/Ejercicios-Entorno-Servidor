<?php 

namespace Controlador;
use Option\OptionModel;

class VoteController {
    private OptionModel $modelo;

    public function __construct(OptionModel $modelo) {
        $this->modelo = $modelo;
    }

    public function procesar() {
        $voto = $_POST['voto'];
        $eliminar = $_POST['eliminar'];
        $opcion = $_POST['texto'];

        if(isset($voto) && !empty($_POST)) {
            $this->modelo->
        }

        return $opciones;
    }
}