<body>

   <!-- Section: Header -->
   <header class="header">
      <section class="container">
         <div class="wrapper">
            <a href="./index.html" class="brand">Proyecto Final</a>
            <button type="button" class="burger" id="burger">
               <span class="burger-line"></span>
               <span class="burger-line"></span>
               <span class="burger-line"></span>
               <span class="burger-line"></span>
            </button>
            <span class="overlay" id="overlay"></span>
            <nav class="navbar" id="navbar">
               <ul class="menu">
                  <li class="menu-item"><a href="#">Home</a></li>

                  <li class="menu-item"><a href="#" onclick="desplegarContenidoUsuarios();">Clientes</a></li>

                  <li class="menu-item"><a href="#">Proyecto</a></li>
                  <li class="menu-item menu-item-child">
                     <a href="#" data-toggle="sub-menu">Services<i class="expand"></i></a>
                     <ul class="sub-menu">
                        <li class="menu-item"><a href="#">Clientes</a></li>
                        <li class="menu-item"><a href="#">Factura</a></li>
                        <li class="menu-item"><a href="#">Empleados</a></li>
                        
                     </ul>
                  </li>
                  
                  <li class="menu-item"><a href="#">Contact</a></li>

                  <li class="menu-item"><a href="control/logout.php">Salir</a></li>
               </ul>

            </nav>

         </div>

      </section>


   </header>


    <br><br><br><br><br>

    <section class="container">

        <div id="contenedor" class="wrapper">
        </div>
    </section>

   <script defer src="./public/js/script.js"></script>
   <script src="js/utileria.js"></script>

</body>
