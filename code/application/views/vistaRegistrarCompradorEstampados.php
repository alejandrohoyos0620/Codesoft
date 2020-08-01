<?php ?>
<body>
<h2 class="titulo-registro-comprador">Registrarse como comprador de estampados</h2>
    <div class="cont-form">
    
        <form method ="post" class="form-registro-comprador" enctype="multipart/form-data">
            
            <div class="item-registro-comprador">
                <label class="label-registro-comprador" for="usuario">Nombre de usuario:</label>
                <input type="text" name="nombreUsuario" class="usuario-comprador" required/>
            </div>
            <div class="item-registro-comprador">
                <label class="label-registro-comprador" for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="nombre-comprador" required/>
                <label class="label-registro-comprador label-r2" for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos" class="apellidos-comprador" required/>
            </div>
            <div class="item-registro-comprador">
                <label class="label-registro-comprador" for="fecha">Fecha de nacimiento:</label>
                <input type="text" name="fechaNacimiento" class="fecha-comprador" required/>
            </div>
            <div class="item-registro-comprador">
                <label class="label-registro-comprador" for="correo">Correo electrónico:</label>
                <input type="text" name="email" class="correo-comprador" required/>
            </div>
            <div class="item-registro-comprador">
                <label class="label-registro-comprador" for="contrasena">Contraseña:</label>
                <input type="text" name="contrasena" class="contrasena-comprador" required/>
                <label class="label-registro-comprador label-r2" for="contrasena2">Verificar contraseña:</label>
                <input type="text" name="verificarContrasena" class="contrasena2-comprador" required/>
            </div>
            <div class="item-registro-comprador">
                <button type="submit" value="Submit" name="submit" class="btn-enviar-registro-comprador">Enviar registro</button>
            </div>
            <div class="item-registro-comprador item-btns">
                <a href="#" class="btn-registro-comprador google"><em class="fab fa-google"></em>  Registrarse con Google</a>
                <a href="#" class="btn-registro-comprador facebook"><em class="fab fa-facebook-square"></em>  Registrarse con Facebook</a>
            </div>
        </form>
    </div>

</body>
</html>