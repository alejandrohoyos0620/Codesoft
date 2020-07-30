<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="text" name="imagename">
        <input type="submit" value="Submit" name="submit">
        <select id="Tipostallas" name="talla" class="" >
            <option value="">escoge una talla</option>
            <?php               
        foreach($resultadoTallas as $r) {         
             ?>
            <option value="<?= $r->getIdTalla()?>"> <?= $r->getNombre()?> </option>
            <?php
        }
        ?>
        </select>
        <select id="Tiposprenda" name="prenda" class="" >
            <option value="">escoge una prenda</option>
            <?php               
        foreach($resultadoPrendas as $r) {         
             ?>
            <option value="<?= $r->getIdPrenda()?>"> <?= $r->getTipo()?> </option>
            <?php
        }
        ?>
        </select>
        <select id="Tipostela" name="tela" class="" >
            <option value="">escoge una tela</option>
            <?php               
        foreach($resultadoTelas as  $r) {         
             ?>
            <option value="<?= $r->getIdTela()?>"> <?= $r->getNombre()?> </option>
            <?php
        }
        ?>
        </select>
    </form>

    <div>

    </div>
</body>

</html>