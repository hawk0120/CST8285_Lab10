<?php
    class menuItem {
        private $itemName;
        private $description;
        private $price;
        
        function __construct($itemName, $description, $price) {
                $this->setItemName($itemName);
                $this->setDescription($description);
                $this->setPrice($price);}
        function getItemName() {
                return $this->itemName;
        }
        function setItemName($itemName) {
                $this->itemName = $itemName;
        }
        
        function getDescription() {
                return $this->description;
        }
        function setDescription($description) {
                $this->description = $description;
        }
        function getPrice() {
                return $this->price;
        }
        function setPrice($price) {
                $this->price = $price;
        }
    }
?>