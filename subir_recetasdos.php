<?php
    //Establecer la conexion a la base de datos
    $conexion=mysqli_connect('localhost','root','','ingsoft');

    //Verificar que se pudo conectar a la base de datos
    if(!$conexion){
        die("Error al conectarse a la base de datos: ".mysqli_connect_error());
    }

    //Crear Receta
    if(isset($_POST['subir'])){
        $ConsultaAgregar = "INSERT INTO receta 
        (idreceta,  nombre_receta ,  porciones ,  tiempo_preparacion ,  tiempo_comida ,  tipo_comida ,  tipo_preferencia ,  dificultad ,  preparacion ,  fotos ,  usuario_idusuario ) 
        VALUES 
        (NULL, 
        '".$_POST['titulo']."', 
        '".$_POST['porciones']."', 
        '".$_POST['tiempo_preparacion']."', 
        '".$_POST['tiempo_comida']."', 
        '".$_POST['tipo_comida']."', 
        '".$_POST['tipo_preferencia']."', 
        '".$_POST['dificultad']."', 
        '".$_POST['preparacion']."', 
        'prueba', 
        '1');";
        $ResultadoAgregar = mysqli_query($conexion, $ConsultaAgregar);
    }

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <style>
        button {
            padding: 0;
            border: 0;
            margin: 0;
            width: 1150px;
        }
    </style>
</head>



<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="./index.html"><img src="img/logo_blog_de_comdia.png" alt="" width="100px"
                                    height="100px"></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <nav class="header__menu">
                            <ul>
                                <div class="blog__sidebar__search">
                                    <form action="#">
                                        <input type="text" placeholder="Search...">
                                        <button type="submit"></button>
                                    </form>
                                </div>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2">
                        <div class="header__cart">
                            <ul>
                                <li><img src="img/foto_perfil.png" width="60px" height="60px"> </img></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->

    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>SUBE TU RECETA</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title product__discount__title">
                    <form action="subir_recetas.php" method="post">
                        <h2>Título: </h2><br><br>
                            <div class="row">
                                <input id="nombre" name="nombre" type="text" placeholder="Título">
                            </div>

                        <button type="button">
                            <img src="img/subetufoto.png" width="1150px" id="imagen"
                                onclick="document.getElementById('fileInput').click();">
                            <input type="file" id="fileInput" style="display: none;"
                                onchange="document.getElementById('imagen').src = window.URL.createObjectURL(this.files[0]);">
                        </button><br><br>

                        <div class="col-lg-12">
                            <nav class="header__menu">
                                <ul>
                                    <li>                                        
                                        <select id="tipo_comida" name="tipo_comida" onchange="mostrarOpcionSeleccionadaTipoComida()">
                                            <option value=""><strong>Tipo de Comida:</strong></option>
                                            <option value="Entrada">Entrada</option>
                                            <option value="Sopa">Sopa</option>
                                            <option value="Plato Principa">Plato Principal</option>
                                            <option value="Ensalada">Ensalada</option>
                                            <option value="Bebida">Bebida</option>
                                            <option value="Sopa">Sopa</option>
                                            <option value="Pasta">Pasta</option>
                                            <option value="Postre">Postre</option>
                                        </select>
                                        <p id="opcion-seleccionada"></p>
                                    </li>
                                    <li>
                                      
                                        <select id="tiempo_comida" name="tiempo_comida" onchange="mostrarOpcionSeleccionadaTiempoComida()">
                                            <option value=""><strong>Tiempo de Comida:</strong></option>
                                            <option value="Desayuno">Desayuno</option>
                                            <option value="Almuerzo">Almuerzo</option>
                                            <option value="Aperativo">Aperativo</option>
                                            <option value="Comida">Comida</option>
                                            <option value="Cena">Cena</option>
                                        </select>
                                        <p id="opcion-seleccionada"></p>
                                    </li>
                                    <li>
                                        <select id="opciones" name="opciones" onchange="mostrarOpcionSeleccionada()">
                                            <option value=""><strong>Preferencias</strong></option>
                                            <option value="Mariscos">Mariscos</option>
                                            <option value="Lácteos">Lácteos</option>
                                            <option value="opcion3">Omnívoro</option>
                                            <option value="Vegetariano">Vegetariano</option>
                                            <option value="Nueces y Dátlies">Nueces y Dátlies</option>
                                            <option value="Saludables">Saludables</option>
                                            <option value="Vegano">Vegano</option>
                                        </select>
                                        <p id="opcion-seleccionada"></p>
                                    </li>
                                    <li>
                                        <select id="opciones" name="opciones" onchange="mostrarOpcionSeleccionada()">
                                            <option value=""><strong>Dificultad:</strong></option>
                                            <option value="Alta">Alta</option>
                                            <option value="Media">Media</option>
                                            <option value="Baja">Baja</option>                                        
                                        </select>
                                        <p id="opcion-seleccionada"></p>
                                    </li>
                                    <li><div class="row">
                                        <input type="text" id="tiempo_preparacion" name="tiempo_preparacion" placeholder="Tiempo de Preparacion" style="border-radius: 10px; border: 2px solid #d9d9d9; padding: 5px; color: #333333;">
 
                                    </div></li>
                                    <li><div class="row">
                                        <input type="text" id="porciones" name="porciones" placeholder="Porciones" style="border-radius: 5px; border: 1px solid #d9d9d9; padding: 5px; color: #333333;">
                                    </div></li>
                                </ul>
                            </nav><br>
                        </div>

                        <div class="section-title product__discount__title">
                            <h2>Ingredientes: </h2><br><br><br>

                            <div class="shoping__cart__table">
                            <table id="tablaDatos">
                                    <thead>
                                        <tr>
                                            <th class="shoping__product">
                                                Ingrediente
                                            </th>
                                            <th>Cantidad</th>
                                            <th>Medida</th>
                                            <th>
                                                    <input type="text" id="buscarInput" placeholder="Buscar..."
                                                        onkeydown="if(event.keyCode==13) { buscarTabla(); return false; }">
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="shoping__cart__item">
                                                <select id="ingredientes">
                                                    <option value="">Selecciona un ingrediente</option>
                                                    <option value="Esencia de Vainilla">Esencia de Vainilla</option>
                                                    <option value="Leche">Leche</option>
                                                    <option value="Leche evaporada Carnation">Leche evaporada Carnation</option>
                                                    
                                                  </select>
                                            </td>
                                            
                                            <td class="shoping__cart__quantity">
                                                <div class="quantity">
                                                    <div class="pro-qty">
                                                        <input type="text" value="1">
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td>
                                                <nav class="header__menu">
                                                    <ul><!--Hola -->
                                                        <li><a href="#">Selecciona</a>
                                                            <ul class="header__menu__dropdown">
                                                                <li><a></a></li>
                                                                <li><a></a></li>
                                                                <li><a></a></li>
                                                                <li><a></a></li>
                                                                <li><a></a></li>
                                                                <li><a></a></li>
                                                                <li><a></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </td>
                                            <td>
                                                <button type=button class="btn btn-success" style="width: 40px; height: 40px;">+</button>
                                                <button  type= button class="btn btn-danger" style="width: 40px; height: 40px;">-</button>
                                               
                                            </td>

                                        </tr>
                                       
                                      
                                    </tbody>
                                </table>
                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  // Handler para agregar una nueva fila
  $(document).on('click', '#tablaDatos .btn-success', function() {
    // Clona la última fila de la tabla
    var $clone = $('#tablaDatos tbody tr:last').clone();
    // Resetea los valores de los campos de la nueva fila
    $clone.find('select').val('');
    $clone.find('input[type="text"]').val('1');
    // Agrega la nueva fila a la tabla
    $('#tablaDatos tbody').append($clone);
  });
  
  // Handler para eliminar una fila
  $(document).on('click', '#tablaDatos .btn-danger', function() {
    // Elimina la fila que contiene el botón presionado
    $(this).closest('tr').remove();
  });
});

</script>



                            </div>
                        </div>

                        <div class="section-title product__discount__title">
                            <h2>Pasos de Preparación: </h2><br><br><br>
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <textarea placeholder="Escribe los pasos de preparación..."></textarea>
                                        <button type="submit" name="subir" id="subir" class="site-btn">SUBIR RECETA</button>
                                    </div>
                                </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
  
    <!-- Footer Section End -->
    <script>
        const ropa = document.getElementById('ropa');
const opcionesAdicionales = document.getElementById('opciones-adicionales');

ropa.addEventListener('change', () => {
  if (ropa.value === 'camisa') {
    opcionesAdicionales.style.display = 'block';
  } else {
    opcionesAdicionales.style.display = 'none';
  }
});

    </script>
  
    <script>
        function mostrarOpcionSeleccionada() {
            var seleccion = document.getElementById("opciones").value;
        }

        
        function mostrarOpcionSeleccionadaTipoComida () {
            var seleccion = document.getElementById("tipo_comida").value;
        }

        function mostrarOpcionSeleccionadaTiempoComida() {
            var seleccion = document.getElementById("tiempo_comida").value;
        }


    </script>
    <script>
        function buscarTabla() {
            var input, filtro, tabla, tr, td, i, j, encontrado;
            input = document.getElementById("buscarInput");
            filtro = input.value.toUpperCase();
            tabla = document.getElementById("tablaDatos");
            tr = tabla.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                if (i === 0) { // omitir la primera fila de la tabla (cabeceras)
                    continue;
                }
                encontrado = false;
                td = tr[i].getElementsByTagName("td");
                for (j = 0; j < td.length; j++) {
                    if (td[j].innerHTML.toUpperCase().indexOf(filtro) > -1) {
                        encontrado = true;
                    }
                }
                if (encontrado) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }

    </script>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>
<!---->