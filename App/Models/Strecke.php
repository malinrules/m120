
<?php 

if(isset($_POST)){
    
    $instance = new Strecke();
    $instance->streckePreis($_POST['startingPoint'],$_POST['endPoint']);
}
class Strecke {
    public $start; 
    public $end;
    public $price;

    public function test(){
        echo htmlspecialchars($_POST['startingPoint']); 
    }
    function streckePreis($astart, $aend){
        
        if($astart == "Kreuzlingen" && $aend == "Kreuzlingen"){
            echo 'Fehler, bitte wählen Sie eine andere Strecke';
        } elseif($astart =="Kreuzlingen" && $aend =="Frauenfeld" || $astart =="Frauenfeld"&& $aend =="Kreuzlingen"){
            $price = 10;
            echo $price;
            echo ".Fr";
        } elseif($astart =="Kreuzlingen" && $aend =="Romanshorn" || $astart =="Romanshorn"&& $aend =="Kreuzlingen"){
            $price = 8;
            echo $price;
            echo ".Fr";
        } elseif($astart =="Frauenfeld" && $aend =="Romanshorn" || $astart =="Romanshorn"&& $aend =="Frauenfeld"){
            $price = 15;
            echo $price;
            echo ".Fr";
        } elseif($astart =="Frauenfeld" && $aend =="Frauenfeld"){
            echo 'Fehler, bitte wählen Sie eine andere Strecke';
        } elseif($astart =="Romanshorn" && $aend =="Romanshorn"){
            echo 'Fehler, bitte wählen Sie eine andere Strecke';
        } 
    }
}

    ?> 