<h1 class="text-center">{$type}
    {if !empty($mensaje)}
        <br><small><div class="alert alert-success">{$mensaje}</div></small>
    {/if}
</h1>
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
        <div  style="height: auto;" class="form-control">
            {basicForm->Form }
                {basicForm->Input name="id" }
                <ul >
                    <li class="form-group">
                        <label class="control-label">Nombre </label>
                        {basicForm->Input name="nombre" placeholder="Tu nombre" class="form-control" }
                    </li>
                    <li class="form-group">
                        <label class="control-label">Email </label>
                        {basicForm->Input name="email" placeholder="Tu email" class="form-control"}
                    </li>
                    <li>
                        <label class="control-label">Telefono </label>
                        {basicForm->Input name="telefono" placeholder="Tu telefono" class="form-control"}
                    </li class="form-group">
                    <li class="form-group">

                        {basicForm->ButtonSubmit value="Guardar <spam class='glyphicon  glyphicon-cloud-upload'></spam>" class="btn btn-success"}
                    </li>
                </ul>
            {/basicForm->Form}
        </div>
    </div>
</div>