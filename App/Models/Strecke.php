
<?php 

if(isset($_POST)){
    
    $instance = new Strecke();
    
}
class Strecke {
    public $start;
    public $end;
    public $time;
    public $date;
    public $class;
    public $price;
    
   public function setStart(){
    $start = $_POST['startingPoint'];
   }
   public function getStart(){
       $this->setStart();
       return $this->start;
   }
}

    ?> 