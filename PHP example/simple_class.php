<?php 
    class Fruites{
        public $color;
        public $name;

        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
        function set_color($color){
            $this->color = $color;
        }
        function get_color() {
            return $this->color;
        }
    }

    $apple=new Fruites();
    $banana=new Fruites();

    $apple->set_name("apple");
    $banana->set_name("banana");

    $apple->set_color("orange");
    $banana->set_color("yellow");

    echo $apple->get_name();
    echo "<br>";
    echo $apple->get_color();
    echo "<br>";
    echo $banana->get_name();
    echo "<br>";
    echo $banana->get_color();


?>