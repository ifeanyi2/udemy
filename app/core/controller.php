<?php

/**
 * main controller that controls view display
 */

class Controller{

    public function view($view, $data = []){

        extract($data); // extract goes through array values and make variables with them

        $filename = "../app/views/".$view.".view.php";
       
        if(file_exists($filename)){
            require $filename;
        }else {
            echo "Could not find view file: ".$filename;
        }
    }

}