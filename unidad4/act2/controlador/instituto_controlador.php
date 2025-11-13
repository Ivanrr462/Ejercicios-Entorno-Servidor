<?php

namespace Instituto;

use Curso\CursoModelo;
use Estudiante\EstudianteModelo;

class InstitutoControlador
{
    protected CursoModelo $curso;
    protected EstudianteModelo $estudiante;

    public function __construct(CursoModelo $curso, EstudianteModelo $estudiante)
    {
        $this->curso = $curso;
        $this->estudiante = $estudiante;
    }

    public function ejecutar(): array
    {
        $cursoCiber = $this->curso->agregar("Ciberseguridad");
        $cursoProgra = $this->curso->agregar("Programacion Web");

        $estudiante1 = $this->estudiante->agregar("Ana Perez", 20, $cursoCiber);
        $estudiante2 = $this->estudiante->agregar("Carlos Perez", 23, $cursoProgra);
        $estudiante3 = $this->estudiante->agregar("Miguel Gutierrez", 19);

        $listaInicial = $this->estudiante->conCurso();

        $this->estudiante->actualizarPorNombre("Carlos Perez", "Marquitos Lopez", 25, $cursoProgra);

        $listaModificada = $this->estudiante->conCurso();

        $this->estudiante->eliminarPorNombre("Miguel Gutierrez");

        $listaFinal = $this->estudiante->conCurso();

        $cursos = $this->curso->todos();

        return
            [
                'cursos' => $cursos, // array de Cursos
                'listaInicial' => $listaInicial, // array con datos iniciales.
                'listaModificada' => $listaModificada,  // array con los datos modificados
                'listaFinal' => $listaFinal // array con los datos finales ( estudiante elminado )
            ];
    }
}
