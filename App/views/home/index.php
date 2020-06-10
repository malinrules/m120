<div class="container-fluid">
            <h1> Willkommen! Wo soll es heute hingehen? </h1>
            <hr>
           
            <form action="form/calculate" method="post">
        <div class="form-row">
            <div class="form-group col-md-5">
            <label for="startingPoint">Start</label>
            <select name ="startingPoint" id="startingPoint" class="form-control">
                <option  selected disabled>Wählen Sie Ihren Abfahrtsort</option>
                <option >Kreuzlingen</option>
                <option >Frauenfeld</option>
                <option >Romanshorn</option>
            </select>
            </div>
            <!-- <div class="form-group col-md-2">
            icon
            </div> -->
            <div class="form-group col-md-5">
            <label for="endPoint">Ziel</label>
            <select name="endPoint" id="endPoint" class="form-control">
                <option val="" selected disabled>Wählen Sie Ihren Zielort</option>
                <option >Kreuzlingen</option>
                <option >Frauenfeld</option>
                <option >Romanshorn</option>
            </select>
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-3">
            <label for="travelDate">Datum</label>
            <input name="travelDate" type="date" class="form-control" id="travelDate" >
        </div>
        </div>
        <hr>
        <h2>Reisedetails</h2>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="class">Klasse</label>
                <select name="class" id="class" class="form-control">
                    <option selected disabled>Wie wollen Sie reisen?</option>
                    <option>1.Klasse</option>
                    <option>2.Klasse</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="people">Anzahl Erwachsener</label>
                <input name="people" type="number" class="form-control" id="people" placeholder="0" >
            </div>
            <div class="form-group col-md-5">
                <label for="others">Anzahl Senioren(65+)/Kinder/Hunde (-25%)</label>
                <input name="others" type="number" class="form-control" id="others" placeholder="0" value="0">
            </div>
           
        </div>
        <hr>
        <h2>Ticket-Art</h2>
        <div class="form-row">
            <hr>
            <div class="form-group col-md-5">
                <label for="times">Billet-Art</label>
                <select name="times" id="times" class="form-control">
                    <option value="Einzelbillet">Einzelbillet</option>
                    <option value="Hin und Zurück">Hin- und Zurück</option>
                    <option value="Zehnerkarte">Zehnerkarte</option>
                </select>
            </div>
            <div class="form-group col-md-5">
            <label for="reduction">Vegünstigungen</label>
                <select name="reduction" id="reduction" class="form-control">
                    <option value="Keine" >Keine</option>
                    <option value="Halbtax">Halbtax</option>
                </select>
            </div>
            <div class="form-group col-md-2">
            </div>
            </div>
        </div>
        </div>
            <div class="form-group col-md-10">
            <button style="margin-top:25px;" type="submit" class="btn btn-lg btn-success btn-block">Verbindung suchen</button>
         </div>
        </form>
        </div>
        
      
    