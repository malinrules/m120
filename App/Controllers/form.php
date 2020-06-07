<?php

class Form extends Controller
{
    private $start;
    private $end;
    private $time;
    private $date;
    private $class;
    private $price;

    public function index($start ='',$end='',$time='',$date='',$class='',$people='',$type=''){
       $strecke = $this->model('Strecke');
       $strecke->start = $_POST['startingPoint'];
       $strecke->end = $_POST['endPoint'];
       $strecke->date = $_POST['travelDate'];
       $strecke->time = $_POST['travelTime'];
       $strecke->class = $_POST['class'];
       $strecke->people = $_POST['people'];
       $strecke->others = $_POST['others'];
       $strecke->type = $_POST['type'];
    }

    public function calculate()
    {
    
       
        $strecke = $this->model('Strecke');
        require('C:\xampp\htdocs\MVC_Test\App\data\prices.php');
        $strecke = new Strecke(); 
        $priceConnections = getPrices();
       
        foreach ($priceConnections as $key => $value) {
            if ($value['From'] ===   $this->start && $value['To'] ===   $this->end) {
                $this->price = $value['Price'];
            }
        }
        //im model und dann stat $this -> start $model.getStart() im model getter 
       $this->view('home/prices', [$strecke.getStart()]);
        // $this->view('home/prices', ['start' => $this->start, 'end' => $this->end, 'date' => $this->date, 'time' => $this->time, 'class' => $this->class, 'price' => $this->price]);
    }
}
