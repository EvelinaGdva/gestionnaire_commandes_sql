<?php

class Restaurants {
    private $id;
    private $restaurant_name;
    private $location;
    private $food_name;

    public function getId(){
        return $this->id;
    }

    public function getRestaurantName(){
        return $this->restaurant_name;
    }

    public function getLocation(){
        return $this->location;
    }

    public function getFoodName(){
        return $this->food_name;
    }

    
}



?>