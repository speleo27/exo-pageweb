<?php
    class Pageweb
    {
        private $name;

        public function __construct($name){
                $this->name=$name;

        }

        public function add_css_file(){
            $css= include "controller/css/style.css";
            if ($css == 1) {
              return $css;
            }

        }




    }


?>