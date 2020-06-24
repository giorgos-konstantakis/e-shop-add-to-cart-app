<?php 
    class Product{

        public $name;
        public $price;
        public $weightFactor;
        public $id;

        function set_name($name) {
          $this->name = $name;
        }

        function get_name() {
          return $this->name;
        }

        function set_price($price) {
            $this->price = $price;
          }
  
        function get_price() {
            return $this->price;
          }

        function set_weightFactor($weightFactor) {
            $this->weightFactor = $weightFactor;
          }
          
        function get_weightFactor() {
            return $this->weightFactor;
          }

        function set_id($id) {
            $this->id = $id;
          }
  
        function get_id() {
            return $this->id;
          }
      }
?>