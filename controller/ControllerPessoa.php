<?php

class ControllerPessoa{

    private $_method;
    private $_modelPessoa;

    public function __construct($model){
        
        $this->modelPessoa = $model;
        $this->method = $_SERVER['REQUEST_METHOD'];
    }
    function router(){
        switch ($variable) {
            case 'value':
                # code...
                break;
            
            default:
                # code...
                break;
        }
    }
}



?>