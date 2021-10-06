<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['usuario'];

if($varsesion==null || $varsesion==""){
    echo"<script> alert('Debes iniciar sesión para continuar');
	window.location.replace('https://lacasadelassalsas.000webhostapp.com/login.php');</script>";
}

include("conexion.php");
$pedidos="SELECT * FROM salsas";
$papas="SELECT * FROM platillos"


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    
    <title>La Casa de las Salsas</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="css/responsive.css">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/cssMenu/bootstrap.min.css">
    
    
</head>

 
<body class="main-layout Menu_page">
   
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
    

     <div class="sidebar">
           
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li >
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="about.php">Acerca de la página</a>
                    </li>
                    <li class="active">
                        <a href="Menu.html">Menú</a>
                    </li>
                </ul>

            </nav>
        </div>

    <div id="content">
   
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="index.php"><img src="images/logo.png" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="images/location_icon.png" alt="#"><a href="https://goo.gl/maps/wK9fRVuidgJCjJs38">Emiliano Zapata #373 Colonia El Llanito Purepero</a></li>
                                <li><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="images/user.png" alt="#"><a><?php echo $_SESSION['usuario']; ?></a></li>
                                <li class="button_user"><a href="cerrarSesion.php">Cerrar sesión</a></li>
                                
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="images/menu_icon.png" alt="#">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
   
    
    <div class="yellow_bg">
   <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>MENÚ</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>  

    <section class="cont-menu">
        <div class="contenedor">
            
            <div class="items">
                <div class="row">
                     <?php $res1=mysqli_query($conn, $papas);
                    while($row=mysqli_fetch_assoc($res1) ){ ?>
                    <div class="col-12 col-md-6">
                        
                        <div class="item shadow mb-4">
                             
                            <h3 class="item-title"><?php echo $row["nombre"]; ?></h3>
                            <img class="item-image" src="./images/Papas.jpeg">

                            <div class="item-details">
                                <h4 class="item-price"><?php echo $row["precio"]; ?>$</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                    <?php }mysqli_free_result($res1); ?>
                </div>
            </div>
        </div>
                
                
                
        <div class="container">
            <div class="items">
                <div class="row">
                    <?php $res=mysqli_query($conn, $pedidos);
                    while($row=mysqli_fetch_assoc($res) ){ ?>
                    <div class="col-4 col-md-4">
                        
                        <div class="item shadow mb-4">
                             
                            <h3 class="item-title"><?php echo $row["nombre"]; ?></h3>
                            <img class="item-image" src="<?php echo $row["imagen"]; ?>">

                            <div class="item-details">
                                <h4 class="item-price">0$</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                    <?php }mysqli_free_result($res); ?>
                </div>
                
            </div>
            
            
        </div>
    </section>
    
    <section class="shopping-cart">
        <div class="container">
            <h1 class="text-center">CARRITO</h1>
            <hr>
            <div class="row">
                <div class="col-6">
                    <div class="shopping-cart-header">
                        <h6>Salsa</h6>
                    </div>
                </div>
                <div class="col-2">
                    <div class="shopping-cart-header">
                        <h6 class="text-truncate">Precio</h6>
                    </div>
                </div>
                <div class="col-4">
                    <div class="shopping-cart-header">
                        <h6>Cantidad</h6>
                    </div>
                </div>
            </div>
            <!-- ? START SHOPPING CART ITEMS -->
            <div class="shopping-cart-items shoppingCartItemsContainer">
                
            </div>
            <!-- ? END SHOPPING CART ITEMS -->

            <!-- START TOTAL -->
            <div class="row">
                <div class="col-12">
                    <div class="shopping-cart-total d-flex align-items-center">
                        <p class="mb-0">Total :</p>
                        <p class="ml-4 mb-0 shoppingCartTotal"> 0.00$</p>
                        <div class="toast ml-auto bg-info" role="alert" aria-live="assertive" aria-atomic="true"
                            data-delay="2000">
                            <div class="toast-header">
                                <span>✅</span>
                                <strong class="mr-auto ml-1 text-secondary">Elemento en el carrito</strong>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body text-white">
                                Se aumentó correctamente la cantidad
                            </div>
                        </div>
                        <button class="btn btn-success ml-auto comprarButton" type="button" data-toggle="modal"
                            data-target="#comprarModal">Comprar</button>
                    </div>
                </div>
            </div>

            <!-- END TOTAL -->

            <!-- START MODAL COMPRA -->
            <div class="modal fade" id="comprarModal" tabindex="-1" aria-labelledby="comprarModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="comprarModalLabel">Gracias por su compra</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Pronto recibirá su pedido</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL COMPRA -->


        </div>

    </section>
    
    

    </div>
    </div>
    <div class="overlay"></div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <script src="./js/funcion_carrito.js"></script>
    
     <script src="js/jquery-3.0.0.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

<script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 5
               }
             }
           })
         })
      </script>

</body>

</html>