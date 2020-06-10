<?php

class Form extends Controller
{
    private $start;
    private $end;
    private $date;
    private $class;
    private $price;
    private $people;
    private $reduction;
    private $others;
    private $c1 = "1.Klasse";

    public function index(){
     
    }

    public function calculate()
    {
    
        
        $this->start = $_POST['startingPoint'];
        $this->end = $_POST['endPoint'];
        $this->date = $_POST['travelDate'];
        $this->class = $_POST['class'];
        $this->people = $_POST['people'];
        $this->others = $_POST['others'];
        $this->times = $_POST['times'];
        $this->people = $_POST['people'];
        $this->reduction = $_POST['reduction'];
        require('C:\xampp\htdocs\MVC_Test\App\data\prices.php');
      
        $priceConnections = getPrices();
       
       
        foreach ($priceConnections as $key => $value) {
            if ($value['From'] ===   $this->start && $value['To'] ===   $this->end) { 
                $this->price = $value['Price']*$this->people;
                if($this->class === $this->c1){
                    $this->price = $this->price*2;
                }
                if($this->others > 0){
                    $this->price = $this->price+($this->others*0.75);
                }
                if($this->times === "Hin und Zurück"){ //Hin und zurück
                    $this->price = $this->price*2;
                }
                if($this->times === "Zehnerkarte"){
                    $this->price = $this->price*9.5;  //Zehnerkarte mit Rabatt
                }
                if($this->reduction === "Halbtax"){
                    $this->price = $this->price/2;  //Halbtax
                }
            }
        }
        //im model und dann stat $this -> start $model.getStart() im model getter 
       //$this->view('home/prices', ['start' =>$strecke.getStart(),'end' => $strecke->end, 'date' => $strecke->date, 'time' => $strecke->time, 'class' => $strecke->class, 'price' => $this->price]);
      $this->view('home/prices', ['start' => $this->start, 'end' => $this->end, 'date' => $this->date, 'class' => $this->class, 
      'price' => $this->price, 'people' => $this->people,'others' => $this->others, 'times'=>$this->times, 'reduction'=>$this->reduction]);
    }
}
