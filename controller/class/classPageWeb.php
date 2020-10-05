<?php
    require_once "classarticle.php";
    class Pageweb
    {
        private $name;

        public function __construct($name){
                $this->name=$name;

        }

        public function show(){
            include './template/page.php';
        }

       



    }


?>