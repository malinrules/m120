<html>
    <head>
        <title> My MVC test </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body class="bg-dark text-white">
<!--
        <div class="container-fluid">
            <h1> Willkommen! Wo soll es heute hingehen? </h1>
            <hr>
            <form action="../Models/Strecke.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-5">
            <label for="startingPoint">Start</label>
            <select name ="startingPoint" id="startingPoint" class="form-control">
                <option val="" selected disabled>Wählen Sie Ihren Abfahrtsort</option>
                <option val="kr">Kreuzlingen</option>
                <option val="fr">Frauenfeld</option>
                <option val="rn">Romanshorn</option>
            </select>
            </div>
            <div class="form-group col-md-2">
            icon
            </div>
            <div class="form-group col-md-5">
            <label for="endPoint">Ziel</label>
            <select name="endPoint" id="endPoint" class="form-control">
                <option val="" selected disabled>Wählen Sie Ihren Zielort</option>
                <option val="kr">Kreuzlingen</option>
                <option val="fr">Frauenfeld</option>
                <option val="rn">Romanshorn</option>
            </select>
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-3">
            <label for="travelDate">Datum</label>
            <input type="date" class="form-control" id="travelDate" placeholder="21.04.2020">
        </div>
        <div class="form-group col-md-2">
            <label for="travelTime">Zeit</label>
            <input type="time" class="form-control" id="travelTime" placeholder="14:00">
        </div>
        <div class="form-group col-md-3">
           
        </div>
            <div class="form-group col-md-3">
            <button style="margin-top:25px;" type="submit" class="btn btn-lg btn-success btn-block">Verbindung suchen</button>
            </div>
        </div>
        </form> -->

            <?php 
            require_once('../app/init.php');
            $app = new App;            
            ?>
     <!--   </div> -->
    </body>
    <style>
    .container {
        margin: 0px;
    }
    h1 {
        padding: 10px;
        text-align: center;
    }
    </style>
</html>