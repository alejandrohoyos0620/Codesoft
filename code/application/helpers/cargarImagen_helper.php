<?php
/*
	/uploadImage Crea un archivo image para los estampados
	/@param userType especifica que tipo de usuario subio el archivo 
	/@param fileName especifica el nombre del archivo image para los estampados
	/ return devuelve el nombre del archivo file concatenado a un numero random entre 0 y 999

*/

function uploadImage($userType,$fileName) {
        
        $file= $fileName.rand(0,999).".png";   
        $mi_archivo = 'image';
        $config['upload_path'] = "imagenes/".$userType."/";
        $config['file_name'] = $file;
        $config['allowed_types'] = "jpg|png|jpeg";
        $config['max_size'] = "5000";
        $config['max_width'] = "1000";
        $config['max_height'] = "1000";
        $CI =& get_instance();
        $CI->load->library('upload',$config);
       
        
        if (!$CI->upload->do_upload($mi_archivo)) {       
            echo $CI->upload->display_errors();            
            return false ;
         }
        
        return $file;
    }
    ?>
