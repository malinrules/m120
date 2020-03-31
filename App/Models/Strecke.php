
<?php echo htmlspecialchars($_POST['startingPoint']); ?>
<?php echo $_POST['endPoint']; ?> 
<?php 

class Strecke 
{
    public $start; 
    public $end;
    public $price;

    function streckePreis($astart, $aend){
        if($astart == "kr" && $aend == "kr"){
            echo 'Fehler, bitte wählen Sie eine andere Strecke';
        } elseif($astart =="kr" && $aend =="fr"){
            $price = 10;
        } elseif($astart =="kr" && $aend =="rn"){
            $price = 8;
        } elseif($astart =="fr" && $aend =="rn"){
            $price = 15;
        } elseif($astart =="fr" && $aend =="fr"){
            echo 'Fehler, bitte wählen Sie eine andere Strecke';
        } elseif($astart =="rn" && $aend =="rn"){
            echo 'Fehler, bitte wählen Sie eine andere Strecke';
        } 
    }
}

?>