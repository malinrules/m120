<div class="container-fluid">
        <hr>
        <br>
            <h1> Schade das sie gehen. Tragen sie hier ihre email ein um sich von Newsletter abzumelden</h1>
            <hr>
            <form action="/MVC_Test/public/home/delete" method="POST" onsubmit="return confirm('Sind Sie sicher das sie sich abmelden wollen?');">

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="mail">E-Mail</label>
                <input type="text" name="mail" placeholder="me@mail.com" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <button style="margin-top:25px;" type="submit" class="btn btn-lg btn-success btn-block">Jetzt abmelden</button>
            </div>
           
        </div>
        </form>
</div>