<?php
/* Smarty version 3.1.31, created on 2013-01-01 11:50:33
  from "G:\Programacion\php\prueba-trabajo\protected\layauts\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_50e2bf7982da52_29471632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68ae9b4715f009de144e898845703519d13e9a09' => 
    array (
      0 => 'G:\\Programacion\\php\\prueba-trabajo\\protected\\layauts\\main.tpl',
      1 => 1357037422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_50e2bf7982da52_29471632 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
    <head>
        <?php echo $_smarty_tpl->tpl_vars['this']->value->GetContenHead();?>

        <?php echo '<script'; ?>
  src='src/js/jquery-3.1.0.min.js' type='text/javascript'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
  src='src/js/bootstrap.min.js' type='text/javascript'><?php echo '</script'; ?>
>
        <link  rel='stylesheet' href='src/css/bootstrap.min.css' media='screen'/>
        <link  rel='stylesheet' href='src/css/styles.css' media='screen'/>
        
    </head>
    <body>
        <header class="navbar navbar-default  shadow" > 
            <h1 class="text-center">CRUD PHP</h1>
        </header>
         <div class="container nopdf" >
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                    </div>
                    <div class="navbar-collapse collapse menu ">
                        <ul class="nav navbar-nav">
                            <li><a href=""><span class="glyphicon glyphicon-home margRight"></span> Inicio</a></li>
                            <li><a href="insertar"><span class="glyphicon glyphicon-plus"></span> Insertar</a></li>
                        </ul>   
                    </div>
                </div>
        <div class=" main_conten">
            <div class="container"> 
            <div class="container">
                <!--  contenido proveniente de el controlador y los views  -->
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        </div> 
        <div class="page-header"></div>
        <footer style="padding: 20px" class="text-center"> 
            <div class="row">
                <div class="col-sm-3 text-center"> <b class="pull-left"> Powered by<a href="http://ccmvc.com.ve" title="CcMvc"><img alt="CcMvc" src="src/images/CcMvc-peque.png?GDw=30"></a></b>
                </div>
               
            </div>
        </footer>
    </body>
</html>


<?php }
}
