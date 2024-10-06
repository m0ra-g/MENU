<?php
//pertenece a ejericicio 33 y 7.php
    function uploadFiles($files){
        if($files['files']['name'][0]==""){
            return "por favor elija por lo menos 1 archivo";
        }
        $folder="uploads/";
        $names=$files['files']['name'];
        $tmp_names=$files['files']['name'];

        $files_array=array_combine($tmp_names, $names);

        foreach($files_array as $tmp_folder => $image_name){
            move_uploaded_file($tmp_folder, $folder.$image_name);
        }
        return "bien";
    }
?>