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
        $this->text('nombre')->Validator("required|maxlength:200");
        $this->email('email')->Validator("required");
        $this->tel('telefono')->Validator("required");
    }

    /**
     * Este metodo se ejecutara cuando se reciban datos del formulario
     *
     */
    protected function OnSubmit()
    {
        //tu codigo aqui
    }

}
