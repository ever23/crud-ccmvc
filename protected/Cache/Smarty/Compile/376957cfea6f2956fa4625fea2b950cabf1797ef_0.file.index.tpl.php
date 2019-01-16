<?php
/* Smarty version 3.1.31, created on 2013-01-01 11:34:05
  from "G:\Programacion\php\prueba-trabajo\protected\view\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_50e2bb9de54816_84860522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '376957cfea6f2956fa4625fea2b950cabf1797ef' => 
    array (
      0 => 'G:\\Programacion\\php\\prueba-trabajo\\protected\\view\\index.tpl',
      1 => 1357036161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_50e2bb9de54816_84860522 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>

    <?php if (!empty($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
        <br><small><div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div></small>
    <?php }?>
</h1>
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
        <div  style="height: auto;" class="form-control">
            <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_objects['basicForm'][0]) ? $_smarty_tpl->smarty->registered_objects['basicForm'][0] : null;
if (!is_callable(array($_block_plugin1, 'Form'))) {
throw new SmartyException('block tag \'basicForm\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('basicForm', array());
$_block_repeat=true;
echo $_block_plugin1->Form(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                <?php echo $_smarty_tpl->smarty->registered_objects['basicForm'][0]->Input(array('name'=>"id"),$_smarty_tpl);?>

                <ul >
                    <li class="form-group">
                        <label class="control-label">Nombre </label>
                        <?php echo $_smarty_tpl->smarty->registered_objects['basicForm'][0]->Input(array('name'=>"nombre",'placeholder'=>"Tu nombre",'class'=>"form-control"),$_smarty_tpl);?>

                    </li>
                    <li class="form-group">
                        <label class="control-label">Email </label>
                        <?php echo $_smarty_tpl->smarty->registered_objects['basicForm'][0]->Input(array('name'=>"email",'placeholder'=>"Tu email",'class'=>"form-control"),$_smarty_tpl);?>

                    </li>
                    <li>
                        <label class="control-label">Telefono </label>
                        <?php echo $_smarty_tpl->smarty->registered_objects['basicForm'][0]->Input(array('name'=>"telefono",'placeholder'=>"Tu telefono",'class'=>"form-control"),$_smarty_tpl);?>

                    </li class="form-group">
                    <li class="form-group">

                        <?php echo $_smarty_tpl->smarty->registered_objects['basicForm'][0]->ButtonSubmit(array('value'=>"Guardar <spam class='glyphicon  glyphicon-cloud-upload'></spam>",'class'=>"btn btn-success"),$_smarty_tpl);?>

                    </li>
                </ul>
            <?php $_block_repeat=false;
echo $_block_plugin1->Form(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        </div>
    </div>
</div><?php }
}
