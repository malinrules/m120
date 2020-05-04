<?php

class Test extends Controller {

    //protected $user;
    public function __construct() {
       // $this->user = $this->model('User');
    }

    public function index() {
 
   
    }

    public function sendNews() {
        echo "Willkommen in der Liste " .$_GET['mail'];

        if(isset($_POST['mail'])){
            $file = fopen('liste.txt', 'a+');
    
            //schauen ob mail schon registriert
            $write = true;
            while(!feof($file)){
                    if(trim(fgets($file)) == $_POST['mail']){
                        $write = false;
                    }
            }
    
            // fehler meldung oder mail in file schreiben
            if($write == true){
                fwrite($file, $_POST['mail']."\n");
                echo $_POST['mail'].'ist nun eingetragen';
            }else{
                echo $_POST['mail'].'ist bereits vorhanden';
            }
    
        }
  
    }
}