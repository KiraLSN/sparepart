<?php 
include('../model/conexao.php'); 
include('../model/login/verifica_login.php');

include('../model/login/redirect.php');

$useraprov = $_SESSION['aprovador'];
$nome = $_SESSION['nome'];
/*
if ($useraprov == 0){
    header("location: index.php");
}
if ($useraprov == 2){
    header("location: indices_svr.php");
}
*/
?>

<!DOCTYPE html>
<html lang="en" onload="selectpedidos()">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Spare Part - Requisicao</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/multicon.png">
    <!-- ICONE DE ATALHOS -->
    <link rel="apple-touch-icon" href="img/core-img/multicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="img/core-img/multicon.png" type="image/x-icon" />

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="css/home.css">
    <script src="../controller/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <!-- ***** Top Search Area Start ***** -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="index.php" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Search Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="../index.php">
                        <h2><?php echo $nome ?></h2>
                    </a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <!--<li class="current-item"><a href="./index.php">Home</a></li> -->


                                <li><a href="#">Principal</a>
                                    <ul class="dropdown">

                                        <li><a href="../index.php">Home</a></li>
                                        <li><a href="report-mensal.php">Relatorio</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">Ajustes</a>
                                    <ul class="dropdown">

                                        <li><a href="incluir-modelo.php">Alterar Cadastro</a></li>
                                        <li><a href="incluir-postos.php">Instrucoes</a></li>

                                    </ul>
                                </li>
                                <li><a style="color: red" href="../model/login/sair.php">Logout</a></li>
                            </ul>




                        </div>


                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">



        <!-- Single Welcome Slide -->

        <!-- Background Curve -->

        <div class="background-curve">
            <img class="enfeite" src="img/core-img/curve-1.png" alt="">
        </div>







    </section>
    <!-- ***** Welcome Area End ***** -->








    <!-- ***** Blog Area Start ***** -->
    <section class="uza-blog-area">

        <!-- Background Curve -->

        <div class="blog-bg-curve">
            <img src="img/core-img/curve-4.png">
        </div>




        <div class="container">



            <div class="row">

                <!-- Single Blog Post -->

                <div class="single-blog-post bg-img mb-80" style="background-image: url(img/bg-img/8.jpg);">

                    <div id="formulario" class="post-content">
                        <span class="post-date" id="datou"><?php echo date("d ") ."de". date(" M "). "de ". date("Y") ?></span>
                        <h3 id="numcar">
                            <label>Nova Requisicao</label>
                        </h3>
                        <form method="post" action="../model/sendNewRequest.php">

                            <p class="branco">Tipo de Solicitação</p><select name="tiposol" class="form-control">
                                <option>Solicitação de novo item sem a peça física</option>
                                <option>Solicitação de material para Setup.</option>
                                <option>Solicitação de item sem retorno ao spare part. </option>
                                <option>Devolução de item para o S/part [GR] </option>


                            </select>


                            <p class="branco">Tipo de Identificador</p><select name="list2" class="form-control">
                                <option>Input</option>
                                <option>Prensa.</option>
                                <option>Calibração</option>
                                <option>LCIA</option>
                                <option>Radiação</option>
                                <option>Printer</option>
                                <option>Bateria</option>
                                <option>IMEI</option>
                                <option>Audio Test</option>
                                <option>Kitting</option>
                                <option>Outros</option>


                            </select>



                            <div class="form-group">
                                <input type="checkbox" class="checkbx" name="check" value="Retorno" />

                                <p class="brancobx">Com Retorno</p><br>
                            </div>
                            <br>
                            <div>
                                <input type="text" class="form-control" name="material" placeholder="Material" autocomplete="on" required />
                            </div>
                            <br>
                            <div>
                                <input type="number" class="form-control" name="qty" placeholder="Quantidade" required />
                            </div>
                            <br>
                            <div>
                                <input type="text" class="form-control" name="linha" placeholder="Linha/Setor" required />

                            </div>
                            <br>
                            <div>
                                <input type="text" class="form-control" name="motivo" placeholder="Motivo" required />
                            </div>
                            <br>

                            <?php
                
                if ($useraprov == 1){
                    
                        echo '<div hidden>';
                        echo '<p hidden class="branco">Aprovador / MySingleID</p><select  name="aprovador" class="form-control hidden">';
                            echo '<option hidden value='.$_SESSION['nome'].'> </option>';
                    
                                     


                        echo '</select>';
                        echo '</div>';
         
                }else{
                  
                        echo '<p class="branco">Aprovador / MySingleID</p><select name="aprovador" class="form-control" required>';
                            echo '<option value=""> </option>';
                                     
                    $pdo_verifica = $conexao_pdo->prepare('SELECT nome FROM usuarios WHERE aprovador = 1');
		$pdo_verifica->execute();
                    
                    while( $fetch = $pdo_verifica->fetch() ) {
			echo '<option>' . $fetch['nome'] . '</option>';
                        
                    }
                    


                        echo '</select>';
                    echo '</div>';
                echo '</div>';
                }
                
                
                            ?>

                            <button type="submit" name="btnCadastrar" id="form-submit" class="btn uza-btn btn-3 mt-15">Submit</button>

                        </form>
                        <form method="post" action="../index.php">
                            <button type="submit" name="btnCancelar" id="form-cancel" class="btn uza-btn btn-3 mt-15">Cancel</button>
                        </form>
                        <br>


                        <!-- ***** Blog Area End ***** -->



                        <!-- ***** Footer Area Start ***** -->
                        <footer class="footer-area section-padding-80-0">
                            <div class="container">

                                <div class="row" style="margin-bottom: 30px;">

                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());

                                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </div>

                            </div>
                        </footer>
                        <!-- ***** Footer Area End ***** -->

                        <!-- ******* All JS Files ******* -->
                        <!-- jQuery js -->
                        <script src="../controller/js/jquery.min.js"></script>
                        <!-- Popper js -->
                        <script src="../controller/js/popper.min.js"></script>
                        <!-- Bootstrap js -->
                        <script src="../controller/js/bootstrap.min.js"></script>
                        <!-- All js -->
                        <script src="../controller/js/uza.bundle.js"></script>
                        <!-- Active js -->
                        <script src="../controller/js/default-assets/active.js"></script>

                        <script src="../controller/js/vendor/jquery-1.12.4.min.js"></script>
                        <script src="../controller/js/vendor/jquery-ui.js"></script>
                        <script src="../controller/js/vendor/bootstrap.min.js"></script>

                        <script src="../controller/js/owl.carousel.min.js"></script>
                        <script src="../controller/js/contact-form.js"></script>
                        <script src="../controller/js/ajaxchimp.js"></script>
                        <script src="../controller/js/scrollUp.min.js"></script>
                        <script src="../controller/js/magnific-popup.min.js"></script>
                        <script src="../controller/js/wow.min.js"></script>

                        <script src="../controller/js/main.js"></script>
                        <script src="../controller/js/check.js"></script>

                        <script>
                            document.getElementById("datou").value = new Date().getFullYear();

                        </script>


</body>

</html>
