<div class="container-fluid">
        <hr>
        <br>
            <h1> Willkommen! Tragen Sie sich hier für unseren Newsletter ein</h1>
            <hr>
            <form action="/MVC_Test/public/home/newsletter" method="POST">
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="firstname">Vorname</label>
                    <input type="text" name="firstname" placeholder="Max" class="form-control">
                </div>
                <div class="form-group col-md-5">
                    <label for="lastname">Nachname</label>
                    <input type="text" name="lastname" placeholder="Mustermann" class="form-control">
                </div>
            </div>
            <div class="form-row ">
                <div class="form-group col-md-5">
                    <label for="street">Strasse</label>
                    <input type="text" name="street" placeholder="Rainbowstr." class="form-control">
                </div>
                <div class="form-group col-md-5">
                    <label for="town">Ort</label>
                    <input type="text" name="town" placeholder="Narnia" class="form-control">
                </div>
            </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="mail">E-Mail</label>
                <input type="text" name="mail" placeholder="me@mail.com" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <button style="margin-top:25px;" type="submit" class="btn btn-lg btn-success btn-block">Jetzt anmelden</button>
            </div>
           
        </div>
        </form>
</div>



