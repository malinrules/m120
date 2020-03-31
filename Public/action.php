
<?php 

class action {
    public $start; 
    public $end;
    public $price;

    public function test(){
        echo htmlspecialchars($_POST['startingPoint']); 
    }
    function streckePreis($astart, $aend){
        if($astart == "kr" && $aend == "kr"){
            echo 'Fehler, bitte wählen Sie eine andere Strecke';
        } elseif($astart =="kr" && $aend =="fr"){
            $price = 10;
            echo $price;
            echo ".Fr";
        } elseif($astart =="kr" && $aend =="rn"){
            $price = 8;
            echo $price;
            echo ".Fr";
        } elseif($astart =="fr" && $aend =="rn"){
            $price = 15;
            echo $price;
            echo ".Fr";
        } elseif($astart =="fr" && $aend =="fr"){
            echo 'Fehler, bitte wählen Sie eine andere Strecke';
        } elseif($astart =="rn" && $aend =="rn"){
            echo 'Fehler, bitte wählen Sie eine andere Strecke';
        } 
    }
    test();
    //streckePreis( $_GET['startingPoint'],$_GET['endPoint']);
}

    ?> 