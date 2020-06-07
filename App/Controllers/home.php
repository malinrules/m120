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

       // $this->goto('home', 'newsletter');
       // $this->goto('home', 'delete');
     
        
    }


    public function replacemail($oldmail, $newmail) {
        
        // read the entire file
        $str = file_get_contents('newsletter-list.txt');
        
        // replace old mail with new mail
        $str=str_replace($oldmail, $newmail, $str);
        
        // rewrite the file
        file_put_contents('newsletter-list.txt', $str);

        // go back to newsletter
        //$this->goto('home', 'newsletter');
    }
  
    public function newsletter() {

        // check if form was sent
        if(isset($_POST['mail'])){
            $file = fopen('newsletter-list.txt', 'a+');

            // loop all lines and compare with form inputs
            $write = true;
            while(!feof($file)){

                // split line in parts
                $l = explode(';', fgets($file));

                // check if line is identical
                if($l[0] == $_POST['mail'] && $l[1] == $_POST['firstname'] && $l[2] == $_POST['lastname'] && $l[3] == $_POST['street'] && trim($l[4]) == $_POST['town']){
                    $write = false; // dont write again
                    echo 'Diese Person wurde bereits erfasst!';
                    break;
                } 
                // check if just mail is different
                elseif($l[1] == $_POST['firstname'] && $l[2] == $_POST['lastname'] && $l[3] == $_POST['street'] && trim($l[4]) == $_POST['town']) {
                    $write = false; // ask if mail should be replaced
                    echo '
                    Die gleiche Adresse mit einer anderen Email ist bereits vorhanden. Möchten Sie die Mail ersetzen?
                    <br>
               <a href=""/MVC_Test/public/home/replacemail/'.$l[0].'/'.$_POST['mail'].'">Ja, überschreiben</a>';
                    break;
                }
            }

            // write new line
            if($write == 23){
                fwrite($file, $_POST['mail'].";");
                fwrite($file, $_POST['firstname'].";");
                fwrite($file, $_POST['lastname'].";");
                fwrite($file, $_POST['town'].";");
                fwrite($file, $_POST['street']."\n");
                echo $_POST['mail']. ' wurde erfasst.';
            }
        }

        // render view
        $this->view('home/newsletter');
    }
    public function noMail(){
        print("Email nicht vorhanden");
       $this->view('home/newsletter');
    }
 
    public function delete(){
        if( strpos(file_get_contents('C:\xampp\htdocs\MVC_Test\Public\newsletter-list.txt'), $_POST['mail']) !== false) {
            $k = $_POST['mail'];
            $contents = '';
            $f=file('C:\xampp\htdocs\MVC_Test\Public\newsletter-list.txt');
            foreach($f as $line){
                if (!strstr($line,$k)){
                    $contents .= $line;
                }
            }
            file_put_contents('C:\xampp\htdocs\MVC_Test\Public\newsletter-list.txt', $contents);
            $this->view('home/delete');
        } else {
         $this->noMail();
        }
    
        $this->view('home/delete');
        
    }

    

}