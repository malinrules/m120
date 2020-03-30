<html>
    <head>
        <title> My MVC test </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body>

        <div class="container-fluid  bg-dark text-white">
            <h1> Willkommen! Wo soll es heute hingehen? </h1>
            <hr>
            <form>
        <div class="form-row">
           
            <div class="form-group col-md-6">
            <label for="startingPoint">Start</label>
            <select id="startingPoint" class="form-control">
                <option val="" selected disabled>Wählen Sie Ihren Abfahrtsort</option>
                <option val="kr">Kreuzlingen</option>
                <option val="fr">Frauenfeld</option>
                <option val="rn">Romanshorn</option>
            </select>
            </div>
            <div class="form-group col-md-6">
            <label for="startingPoint">Ziel</label>
            <select id="startingPoint" class="form-control">
                <option val="" selected disabled>Wählen Sie Ihren Zielort</option>
                <option val="kr">Kreuzlingen</option>
                <option val="fr">Frauenfeld</option>
                <option val="rn">Romanshorn</option>
            </select>
           
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputAddress">Datum</label>
            <input type="date" class="form-control" id="inputAddress" placeholder="21.04.2020">
        </div>
        <div class="form-group col-md-2">
            <label for="inputAddress">Zeit</label>
            <input type="time" class="form-control" id="inputAddress" placeholder="14:00">
        </div>
        <div class="form-group col-md-2">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                <div style="margin-top:40px;display:flex; padding: 5px;">
                <h6> Abfahrt </h6>
                <label class="custom-control-label" for="customSwitch1"></label>
                <h6> Abfahrt </h6>
                </div>
                
            </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Sign in</button>
        </form>

            <?php 
            require_once('../app/init.php');
            $app = new App;            
            ?>
        </div>
    </body>
    <style>
    * { 
       
    }
    .container {
        margin: 0px;
    }
    h1 {
        padding: 10px;
        text-align: center;
    }
    </style>

</html>