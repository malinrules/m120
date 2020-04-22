<?php

class Form extends Controller {

   
    public function __construct() {
      
    }
    public function index() {
        $this->view('home/prices');
       
            }
    public function calculate($from="startingPoint", $to="endingPoint") {
    
    
    }
}