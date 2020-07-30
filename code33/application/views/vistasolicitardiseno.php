<?php ?>

<body>
    <h2 class="titulo-solicitar-diseño">Solicitar un diseño</h2>
    <form method="post" action="" enctype="multipart/form-data">
        <h3 class="subtitulo-solicitar-diseño">Datos de la prenda</h3>
        <div class="datos-solicitud-col1">
            <label class="label-col1">Tipo:</label>
            <select id="Tiposprenda" name="prenda" required>
                <option value="">Seleccionar</option>
                <?php               
        foreach($resultadoPrendas as $r) {         
             ?>
                <option value="<?= $r->getIdPrenda()?>"> <?= $r->getTipo()?> </option>
                <?php
        }
        ?>
            </select>
            <label class="label-col1">Talla:</label>
            <select id="Tipostallas" name="talla" required>
                <option value="">Seleccionar</option>
                <?php               
        foreach($resultadoTallas as $r) {         
             ?>
                <option value="<?= $r->getIdTalla()?>"> <?= $r->getNombre()?> </option>
                <?php
        }
        ?>
            </select>
            <label class="label-col1" value="#ff0000">Color:</label>
            <input type="color" name ="color" class="input-color" />
            <label class="label-col1">Tela:</label>
            <select id="Tipostela" name="tela" required>
                <option value="">Seleccionar</option>
                <?php               
        foreach($resultadoTelas as  $r) {         
             ?>
                <option value="<?= $r->getIdTela()?>"> <?= $r->getNombre()?> </option>
                <?php
        }
        ?>

            </select>
        </div>
        <div class="datos-solicitud-col2">
            <label class="label-col2">Seleccione la imagen:</label>
            <input type="file" name ="image" class="input-cargar-imagen" placeholder="Imagen del producto" required />
            <label class="label-col2">Nombre de la imagen:</label>
            <input type="text" name ="imagename" class="input-nombre-imagen" />
            <textarea name="descripcion" class="descripcion-text">  Escribe tus comentarios aquí...</textarea>
            <div class="contenedor-btn">
                <button type="submit" value="Submit" name="submit">Enviar</button>
                <a  name="cancelar" class="btn-cancelar" href="#">Cancelar</a>
            </div>
        </div>
    </form>
</body>

</html>