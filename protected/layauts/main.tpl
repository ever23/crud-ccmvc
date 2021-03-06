<!doctype html>
<html>
    <head>
        {$this->GetContenHead()}
        <script  src='src/js/jquery-3.1.0.min.js' type='text/javascript'></script>
        <script  src='src/js/bootstrap.min.js' type='text/javascript'></script>
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
                {$content}
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


