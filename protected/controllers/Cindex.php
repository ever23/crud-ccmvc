<?php

namespace Cc\Mvc;

/**
 * Clase controladora principal
 */
class Cindex extends Controllers
{

    /**
     * Muestra el formulario
     * Si se recibe datos via post los valida e insertar en la base de datos
     * @param \Cc\Mvc\DBtabla $test representacion de la tabla test en la base de datos
     */
    public function insertar(DBtabla $test)
    {
        $basicForm = new BasicForm(); /* se crea una instancia del formulario BasicForm */

        if ($basicForm->IsSubmited() && $basicForm->IsValid())/* se recivio y es valido */
        {

            $this->view->mensaje = 'El formulario se recibio y es valido';
            if (!$test->Insert($basicForm))
            {
                $this->view->mensaje = 'No fue posible insertar en la base de datos ';
            }
        }
        $this->view->basicForm = $basicForm; // envio el formulario a el view
        $this->view->type = "Insertar";
        $this->view->Load('index');
    }

    /**
     * Muestra los datos de msyql
     * @param \Cc\Mvc\DBtabla $test  representacion de la tabla test en la base de datos
     * @param int $id si esta presente se seleccinara el intem en que coincida 
     * @param string $q si esta presente se realizarauna busqueda en los campos 'nombre', 'email', 'telefono'
     */
    public function index(DBtabla $test, $id = null, $q = null)
    {
        if ($q)
        {
            $test->Busqueda($q, ['nombre', 'email', 'telefono']);
        } elseif ($id)
        {
            $test->Select("id='$id'");
        } else
        {
            $test->Select();
        }
        $this->view->tabla = $test;
        $this->view->Load('select');
    }

    /**
     * edita un elemento de la tabla 
     * @param \Cc\Mvc\DBtabla $test representacion de la tabla test en la base de datos
     * @param int $id
     */
    public function editar(DBtabla $test, $id)
    {
        $test->Select("id='" . $id . "'");
        $basicForm = new BasicForm(); /* se crea una instancia del formulario BasicForm */
        if ($test->num_rows != 1)
        {

            $this->HttpError(404, "El item no existe ");
            return;
        }
        if ($basicForm->IsSubmited() && $basicForm->IsValid())/* se recivio y es valido */
        {

            $this->view->mensaje = 'El formulario se recibio y es valido';
            if (!$test->update($basicForm, ['id' => $id]))
            {
                $this->view->mensaje = 'No fue posible editar en la base de datos ';
            } else
            {
                $this->Redirec("", ['id' => $id]);
            }
        }
        $basicForm->DefaultValue($test->fetch());
        $this->view->basicForm = $basicForm; // envio el formulario a el view
        $this->view->type = "Editar";


        $this->view->Load('index');
    }

    public function eliminar(DBtabla $test, $id)
    {
        $test->Select("id='$id'");
        if ($test->num_rows != 1)
        {
            $this->HttpError(404, "El item no existe ");
            return;
        }
        if (!$test->fetch()->Delete())
        {

            $this->Layaut->error = "no fue posible eliminar los datos";
            $this->HttpError(500, "");
        }
        $this->Redirec("");
    }

}
