<?php

namespace Cc\Mvc;

/**
 * Modelo de formulario BasicForm
 *
 */
class BasicForm extends FormModel
{

    /**
     * Usa este metodo para definir los capos que tendra el formulario
     * <code>
     * <?php
     * $this->email('email_contac')->Validator('max:200|required|placeholder:Email');
     * $this->tel('telf_contac')->Validator('max:200|required|placeholder:Telefono');
     * $this->string('texto')->Validator('max:600|required|placeholder:tu texto');
     * </code>
     *
     */
    protected function Campos()
    {
        $this->hidden('id');
        $this->text('nombre')->Validator("required|maxlength:200");
        $this->email('email')->Validator("required|maxlength:200");
        $this->text('telefono')->Validator("required|pattern:\+?\d{10,}");
    }

    /**
     * Este metodo se ejecutara cuando se reciban datos del formulario
     *
     */
    protected function OnSubmit()
    {
        $this->fecha = (new \DateTime("now", new \DateTimeZone('America/Caracas')));
    }

}
