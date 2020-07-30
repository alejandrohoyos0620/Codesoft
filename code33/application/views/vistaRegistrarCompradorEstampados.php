<?php ?>
<body>
<h2 class="titulo-registro-comprador">Registrarse como comprador de estampados</h2>
    <div class="cont-form">
    
        <form class="form-registro-comprador">
            
            <div class="item-registro-comprador">
                <label class="label-registro-comprador" for="usuario">Nombre de usuario:</label>
                <input type="text" name="usuario" class="usuario-comprador" required/>
            </div>
            <div class="item-registro-comprador">
                <label class="label-registro-comprador" for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="nombre-comprador" required/>
                <label class="label-registro-comprador label-r2" for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos" class="apellidos-comprador" required/>
            </div>
            <div class="item-registro-comprador">
                <label class="label-registro-comprador" for="fecha">Fecha de nacimiento:</label>
                <input type="text" name="fecha" class="fecha-comprador" required/>
            </div>
            <div class="item-registro-comprador">
                <label class="label-registro-comprador" for="correo">Correo electrónico:</label>
                <input type="text" name="correo" class="correo-comprador" required/>
            </div>
            <div class="item-registro-comprador">
                <label class="label-registro-comprador" for="contrasena">Contraseña:</label>
                <input type="text" name="contrasena" class="contrasena-comprador" required/>
                <label class="label-registro-comprador label-r2" for="contrasena2">Verificar contraseña:</label>
                <input type="text" name="contrasena2" class="contrasena2-comprador" required/>
            </div>
            <div class="item-registro-comprador">
                <button type="submit" value="Submit" name="submit" class="btn-enviar-registro-comprador">Enviar registro</button>
            </div>
            <div class="item-registro-comprador item-btns">
                <a href="#" class="btn-registro-comprador google"><i class="fab fa-google"></i>  Registrarse con Google</a>
                <a href="#" class="btn-registro-comprador facebook"><i class="fab fa-facebook-square"></i>  Registrarse con Facebook</a>
            </div>
        </form>
    </div>

</body>
</html>