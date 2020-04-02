<div class="container-fluid">
            <h1> Willkommen! Wo soll es heute hingehen? </h1>
            <hr>
            <form action="preise.php" method="post">
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
            <input name="travelDate" type="date" class="form-control" id="travelDate" placeholder="21.04.2020">
        </div>
        <div class="form-group col-md-2">
            <label for="travelTime">Zeit</label>
            <input name="travelTime" type="time" class="form-control" id="travelTime" placeholder="14:00">
        </div>
        <div class="form-group col-md-3">
           
        </div>
            <div class="form-group col-md-3">
            <button style="margin-top:25px;" type="submit" class="btn btn-lg btn-success btn-block">Verbindung suchen</button>
            </div>
        </div>
        </form>
        </div>