<?php
function uploadImage($userType,$fileName) {
        
        $file= $fileName.rand(0,999);    
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
    