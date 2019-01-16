<?php
/* Smarty version 3.1.31, created on 2013-01-01 11:50:10
  from "G:\Programacion\php\prueba-trabajo\protected\view\select.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_50e2bf62b0a4e6_85348103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8435c6e4fe6f73c4d8e9040e37725ea42170470d' => 
    array (
      0 => 'G:\\Programacion\\php\\prueba-trabajo\\protected\\view\\select.tpl',
      1 => 1357037375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_50e2bf62b0a4e6_85348103 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="text-center">SELECT
    <?php if (!empty($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
        <br><small><div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div></small>
    <?php }?>
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
        <div class="col-xs-8 col-xs-offset-2">
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
                    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_objects['tabla'][0]) ? $_smarty_tpl->smarty->registered_objects['tabla'][0] : null;
if (!is_callable(array($_block_plugin1, 'each'))) {
throw new SmartyException('block tag \'tabla\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabla', array('row'=>'row'));
$_block_repeat=true;
echo $_block_plugin1->each(array('row'=>'row'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                    <tr>

                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['telefono'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
</td>
                        <td><a href="editar/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><span class="glyphicon glyphicon-edit"></span></a></td>
                        <td><a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><span class="glyphicon glyphicon-remove"></span></a></td>
                    </tr>
                    <?php $_block_repeat=false;
echo $_block_plugin1->each(array('row'=>'row'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                </tbody>
            </table>

        </div>
    </div>
</div><?php }
}
