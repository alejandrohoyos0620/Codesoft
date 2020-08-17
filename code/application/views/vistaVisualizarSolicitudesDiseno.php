<?php ?>
       <section class="products-list">
       <?php      
       $i=0;        
       if($resultadoSolicitudDisenos!=null){
        foreach($resultadoSolicitudDisenos as $r) {     
        if(isset($r)){  
             ?>
             <div class="product-item">
             <img src="imagenes/cliente/<?=$resultadoUrlImagen[$i]?>">
             <a onclick="funcionAlerta('La prenda elegida es: <?= $resultadoPrendas[$i]?>\nLa talla de esta prenda es: <?= $resultadoTallas[$i]?>\nEl color es: <?= $r ->getColor()?>\nCon una tela llamada: <?= $resultadoTelas[$i]?>\nDescripción de la prenda: <?= $r ->getDescripcion()?>')">Información</a>
             </div>
                <?php
                $i=$i+1;
        }}}
                ?>
               
       </section>
</form>

</div>
</div>

</body>
</html>