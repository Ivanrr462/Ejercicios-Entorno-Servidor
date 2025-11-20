<?php

require __DIR__ . '/../config.php';
require __DIR__ . '/../controlador/vote_controller.php';
require __DIR__ . '/../modelo/option_model.php';

use Option\OptionModel;
use Controlador\VoteController;

$conn = new PDO(DB_DSN, DB_USER, DB_PASS);

$modeloOpcion = new OptionModel($conn);
$controlador = new VoteController($modeloOpcion);

$opciones = $controlador->procesar();

require __DIR__ . '/../vista/vote_view.php';