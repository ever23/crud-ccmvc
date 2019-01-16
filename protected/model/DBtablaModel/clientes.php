<?php

/*
 * 
 * Powered by CcMvc 
 * 
 */

namespace Cc\Mvc\TablaModel;

use Cc\Mvc\TablaModel;

/*
 * Clase modelo para la tabla test
 *
 */

class test extends TablaModel
{

    /**
     * Este metod sera llamado cuando se este por crear la tabla test
     * Ejemplo del codigo 
     * <code>
     * <?php //Ejemplo del codigo 
     * $this->Colum('mi_campo')->PrimaryKey(); // UN CAMPO PARA LA TABLA
     * $this->Colum('mi_otro_campo')->VARCHAR(50); // OTRO CAMPO PARA LA TABLA
     * $this->ForeingKey('mi_campo')->References('mi_otra_tabla')->OnUpdate('CASCADE'); // UNA CLAVE FORANEA  
     * ?>
     * </code>
     */
    public function Create()
    {
        // Columnas de la tabla 
        $this->Colum('id')->INT()->PrimaryKey()->autoincrement();
        $this->Colum('nombre')->VARCHAR(100)->DefaultNull();
        $this->Colum('email')->VARCHAR(100)->DefaultNull();
        $this->Colum('telefono')->VARCHAR(100)->DefaultNull();
        $this->Colum('fecha')->DATETIME();
    }

    /**
     * Este metod sera llamado cuando se inicialize la tabla test
     * Ejemplo del codigo 
     * <code>
     * <?php //Ejemplo del codigo
     * $this->Insert('hola1','hola2');//insertando usando el formato de parametros
     * $this->Insert(['hola1','hola2']);//insertando usando el formato arrays simples
     * $this->Insert(['campo1'=>'hola1','campo2'=>'hola2']);//insertando usando el formato arrays asociativos o diccionario
     * ?>
     * </code>
     */
    public function Initialized()
    {
        
    }

}
