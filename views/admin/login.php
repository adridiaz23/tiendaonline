<div class="header">
<!--Contenido antes de las olas-->
    <div class="inner-header flex">
         <div class="fromGenerico">
            <!-- Creamos el formulario donde su action será pasar los datos al model/loginAdmin y su función validar -->
            <form action="index.php?controller=Admin&action=validar" method="POST">
                    
                <label for="nombre">Usuario:</label>
                <input type="text"  placeholder="Usuario" name="nombre" id="nombre" autofocus>

                <label for="password">Contraseña:</label>
                <input type="password" placeholder="Password" name="password" id="password">
               
                <button class="botonMostrar " type="button" onclick="mostrarContrasena()"> 
                    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/tyounuzx.json"
                        trigger="hover"
                        colors="primary:#121331,secondary:#1663c7"
                        style="width:50px;height:50px">
                    </lord-icon>
                </button>
                
                <div class="buttonSubmit">
                    <input type="submit" value="Iniciar sesión" class="rainbowButton" >
                </div>

                <a href= 'index.php?controller=Cliente&action=login' class='enlaceMenuAdmin'>Cliente Login</a>

            </form>
        </div>
    </div>

        <!--Contenedor de olas-->
        <div>
        <svg class="Olas" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">

        <defs> <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" /> </defs>

        <g class="OlasLogin">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
        </g>
    </svg>
</div>
<!--Fin de las olas-->

<!--Header ends-->

<!--Content starts-->
<div class="content flex">
    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
    <lord-icon
        src="https://cdn.lordicon.com/wxnxiano.json"
        trigger="morph"
        colors="primary:#242424,secondary:#1663c7"
        style="width:250px;height:150px">
    </lord-icon>
</div>
<!--Content ends-->