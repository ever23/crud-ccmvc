<h1 class="text-center">SELECT
    {if !empty($mensaje)}
        <br><small><div class="alert alert-success">{$mensaje}</div></small>
        {/if}
</h1>
<div class="row">
    <div class="col-sm-6 col-xs-offset-3">   
        <form action="" method="GET"  class="input-group">
            <input type="search" class="form-control" placeholder="Buscar" name='q' style="    min-width: 30%;"  value="">
            <span class="input-group-btn">
                <button class="btn btn-info glyphicon glyphicon-search " style="    background: rgba(245, 8, 8, 0.92);
                        border-color: rgba(245, 8, 8, 0.7);"></button>
            </span>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h3>Datos</h3>
        <table class="table table-responsive">
            <thead>
                <tr>               
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Fecha</th>
                </tr>  
            </thead>
            <tbody>
                {if $tabla->num_rows>0}
                    {tabla->each row=row}
                    <tr>

                        <td>{$row.id}</td>
                        <td>{$row.nombre}</td>
                        <td>{$row.email}</td>
                        <td>{$row.telefono}</td>
                        <td>{$row.fecha}</td>
                        <td><a href="editar/{$row.id}"><span class="glyphicon glyphicon-edit"></span></a></td>
                        <td><a href="eliminar/{$row.id}"><span class="glyphicon glyphicon-remove"></span></a></td>
                    </tr>
                    {/tabla->each}
                {/if}
            </tbody>
        </table>

    </div>
</div>
</div>