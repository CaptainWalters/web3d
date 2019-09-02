<?php

class Load {
    function view($file_name, $data = null, $id = null) {
        if(is_array($data)) {
            extract($data);
        }
        require $file_name . '.php';
    }
}
?>