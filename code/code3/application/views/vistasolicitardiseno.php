<?php ?>
<body>
<h2 class="titulo-solicitar-diseño">Solicitar un diseño</h2>
    <form method="post" action="">        
        <h3 class="subtitulo-solicitar-diseño">Datos de la prenda</h3>
        <div class="datos-solicitud-col1">
            <label class="label-col1">Tipo:</label>
            <select required>
                <option value="">Seleccionar</option>
            </select>
            <label class="label-col1">Talla:</label>
            <select required>
                <option value="">Seleccionar</option>
            </select>
            <label class="label-col1" value="#ff0000">Color:</label>
            <input type="color" class="input-color"/>
            <label class="label-col1">Tela:</label>
            <select required>
                <option value="">Seleccionar</option>
            </select>
        </div>  
        <div class="datos-solicitud-col2">
			<label class="label-col2">Seleccione la imagen:</label>
			<input type="file" class="input-cargar-imagen" placeholder="Imagen del producto" required />
            <label class="label-col2">Nombre de la imagen:</label>
            <input type="text" class="input-nombre-imagen"/>
			<textarea class="descripcion-text">  Escribe tus comentarios aquí...</textarea>
			<div class="contenedor-btn">
				<button type="submit">Enviar</button>
				<a class="btn-cancelar" href="#">Cancelar</a>
            </div>
        </div> 
    </form>
</body>
</html>