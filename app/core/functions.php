<?php 


function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    //die;
}

function old($value, $default = null){

    if(!empty($_POST[$value])){
        
      return $_POST[$value];
    }
    return "";
}