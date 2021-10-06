<?php

include("conexion.php");
$pedidos="SELECT * FROM salsas";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    
    <title>La Casa de las Salsas</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="css/responsive.css">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
                        <a href="index.html">Inicio</a>
                    </li>
                    <li>
                        <a href="about.html">Acerca de la página</a>
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
                        <a class="logo" href="index.html"><img src="images/logo.png" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="images/location_icon.png" alt="#"><a href="https://goo.gl/maps/wK9fRVuidgJCjJs38">Emiliano Zapata #373 Colonia El Llanito Purepero</a></li>
                                <li class="button_user"><a href="LOGIN.html">Login</a><a class="button" href="registro.html">Register</a></li>
                                
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

    <section class="resip_section" action="" method="">
        <label class="menu__label" for="ordenes">Ordenes: </label>
        <input class="menu__input__ordenes"type="number" id="ordenes" value="1">
        <br>
        
        <input type="radio" id="opc1" name="opcion">
        <label for="opc1">Recojer en el local</label>
        <br>
        
        <input type="radio" id="opc2" name="opcion">
        <label for="opc2">Envio a domicilio</label>
    </section>
 

    </div>
    </div>
    <div class="overlay"></div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
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