<?php
/**
 * verificamos que la imagen se suba solo despues de presionar el boton "subir",tomamos los valores
 * del formulario y  los asiganmos respectivamente a las varibles.
 * Creamos un objeto imagen y le pasomos los parametro @param $fileImagen, @param $nombre y llamamos a la 
 * función cargarImagenn().
 */
if(array_key_exists('subir',$_POST)){ 
    $nombre=$_POST['nombreImagen'];
    $fileImagen=$_FILES['imagen']['tmp_name'];
    $imagen = new Imagen($fileImagen,$nombre);    
    $imagen->cargarImagen();
}
?>
<form method="post" action="" enctype="multipart/form-data" class="formu">
    
        
            <h2 class="titulo">Subir imagen</h2>
            <br>
        
            <input type="text" class="input" placeholder="Nombre  de la imagen" name="nombreImagen" required />
        
            <input type="file" class="input" name="imagen" title="Imagen" placeholder="Imagen" required />
            
        <div class="div_boton">
        <input type="submit" class="btn_subir"  name="subir" value="Subir" />
</div>
    
</form>