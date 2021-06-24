<?php

namespace Controllers;

abstract class Controller
{

     protected $model;

     protected $modelName;
/**  
 * Les classes qui possèdent une méthode constructeur appellent cette méthode à chaque
    *  création d'une nouvelle instance de l'objet*/
        public function __construct(){

            $this->model = new $this->modelName();
        }



}