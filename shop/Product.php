<?php
class Product {
  protected $name;
  protected $description;
  protected $price;
  protected $image;

  public function __construct($name, $description, $price, $image) {
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->image = $image;
  }

  public function getName() {
    return $this->name;
  }

  public function getDescription() {
    return $this->description;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getImage() {
    return $this->image;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function setDescription($description) {
    $this->description = $description;
  }

  public function setPrice($price) {
    $this->price = $price;
  }

  public function setImage($image) {
    $this->image = $image;
  }

}

?>
