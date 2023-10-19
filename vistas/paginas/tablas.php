<!--=========== Breadcumd Section Here ========= -->
<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Admin
            </h1>

            <ul class="right__content">

                <li>

                    <a href="index.php?Inicio=home">

                        Home

                    </a>

                </li>

                <li>

                    <i class="fa-solid fa-chevron-right"></i>

                </li>
                <li>

                    Admin

                </li>

            </ul>

        </div>

    </div>

</section>

<!--=========== Breadcumd Section End ========= -->
<?php

if (!isset($_SESSION["Iniciar"])) {


    if ($_SESSION["Iniciar"] != "ok") {


        echo '<script> window.location = "index.php?pagina=login";</script>';

        return;


    } else {

        echo '<script> windows.location = "index.php?pagina=admin";</script>';

        return;

    }
}

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);

?>
<!--=========== Error Section Here ========= -->
<section class="error__section pt-120 pb-120">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-7">
                <div class="error__content">
                    <h2>ADMINISTAR</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($usuarios as $key => $value) : // hacemos recorrido al arreglo

                            ?>
                                <tr>
                                    
                                <td> <?php echo ($key + 1) ?> </td>

                                    <td> <?php echo $value["nombre"] ?> </td>

                                   
                                    <td> <?php echo $value["email"] ?> </td>
                                    
                                    <td> <?php echo $value["f"] ?> </td>

                                    <td>
                                        
                                    <div class="btn-group">

                                           
                                    <a href= <?php echo 'index.php?pagina=form&id='. $value["id"]; ?>>

                                                
                                    <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button></a>

                                              
                                    <form method="POST" >  


                                              
                                    <input type = "hidden" value= <?php echo $value["id"]?> name="eliminarRegistro" >

                                            
                                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                                            
                                            <?php 

                                            
                                                $eliminar= new ControladorFormularios();
                                            
                                            
                                                $eliminar-> ctrEliminarRegistro();

                                           ?> 
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Error Section End ========= -->