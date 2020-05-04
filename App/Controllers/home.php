<?php

class Home extends Controller {

    protected $user;
    public function __construct() {
        $this->user = $this->model('User');
    }

    public function index($name = '') {
        
        $user = $this->user;
        $user->name = $name;
        $this->view('home/index', ['name' => $user->name]);

        $this->goto('home', 'newsletter');
    }


    
    public function newsletter(){
    //schauen ob ein post vorhanden 
    if(isset($_POST['Email'])){
        $file = fopen('liste.txt', 'a+');

        //schauen ob mail schon registriert
        $write = true;
        while(!feof($file)){
                if(trim(fgets($file)) == $_POST['Email']){
                    $write = false;
                }
        }

        // fehler meldung oder mail in file schreiben
        if($write == true){
            fwrite($file, $_POST['Email']."\n");
            echo $_POST['Email'].' wurde für Sie erfasst';
        }else{
            echo $_POST['Email'].' wurde bereits erfasst';
        }

    }

    $this->view('home/newsletter');
    }
}