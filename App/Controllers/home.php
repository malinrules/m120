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
    if( !empty($_POST['mail']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['town']) && !empty($_POST['street'])){     //isset = prüft ob eine variable existiert / nicht NULL
        $file = fopen('liste.txt', 'a+');       //fopen -> öffnet datei   a+ zum schreiben und lesen 

        //schauen ob mail schon registriert 
        $write = true;
        $lines = file('d:\liste.txt');
        foreach($lines as $line)
        {
            if(strpos($line, $searchstr) )
        }
        while(!feof($file)){    //feof prüft ob ein Dateizeiger am Ende der Datei steht
                if(trim(fgets($file)) == $_POST['mail']){  //trim entfernt whitespace  fgets liest die zeile von der Position des Dateizeigers
                    $write = false;
                }
        }

        // fehler meldung oder mail in file schreiben
        if($write == true){
            fwrite($file, $_POST['mail']." ");
            fwrite($file, $_POST['firstname']." ");
            fwrite($file, $_POST['lastname']." ");
            fwrite($file, $_POST['town']." ");
            fwrite($file, $_POST['street']."\n");
            echo $_POST['mail'].' wurde für Sie erfasst';
        }else{
            echo $_POST['mail'].' wurde bereits erfasst';
        }

    } else {
        echo 'bitte füllen sie das formular ganz aus';
    }
    $this->view('home/newsletter');
    }
}