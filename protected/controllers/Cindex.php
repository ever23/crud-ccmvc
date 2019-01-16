<?php

namespace Cc\Mvc;

/**
 * controlador index sera ejecutado al llamar a / o a index/
 */
class Cindex extends Controllers
{

    /**
     * controlador index/index
     * los parametros de los controladores son resueltos e inyectados automaticamente por el framework
     * @param \Cc\Mvc\Html $h objeto de respuesta 
     * @param \Cc\Mvc\DBtabla $test objeto DBtabla asociado a la tabla test de la base de datos para esta clase en particular cuando un controlador 
     * tiene un parametro con esta clase se tomara el nombre del parametro como el nombre de la tabla que se requiere automaticamente 
     * @param \Cc\Mvc\Cookie $cookie objeto para manejar cookies 
     *
     */
    public function index(Html $h, Cookie $cookie, Request $r)
    {
        //  echo RouteByMatch::ResolveUrl('url', );

        $basicForm = new BasicForm(); /* se crea una instancia del formulario BasicForm */

        if ($basicForm->IsSubmited() && $basicForm->IsValid())/* se recivio y es valido */
        {
            $this->view->mensaje = 'El formulario se recibio y es valido';
        }
        $this->view->basicForm = $basicForm; // envio el formulario a el view 



        $this->view->Load('index');
    }

}
