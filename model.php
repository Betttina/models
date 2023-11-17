<?php

require_once "databas.php";

class Model {

    private static $connection = null;

    function __construct()
    {
        
    }

    protected function getConnection(){
        if(Model::$connection == null){
            Model::$connection = getDatabaseConnection();
        }

        return Model::$connection;
    }

}

$modelA = new Model();
$modelB = new Model();