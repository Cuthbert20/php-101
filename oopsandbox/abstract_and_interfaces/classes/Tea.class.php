<?php
require_once 'Template.class.php';
class Tea extends Template
{
 public function addPrimaryToppings()
 {
     var_dump('Add proper amount of tea');
     return $this;
 }
}