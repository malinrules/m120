<html>
    
    <body class="bg-dark text-white">

        <div class="container-fluid">
            <h1> Preisberechnung: </h1>
            <hr>
            <div class="row">
                <div class="col-6">
                    <div class="container">
                    <div class="row">
                        <form action="submit">
                          
                        </form>
                    </div>
                    <button type="button" class="btn btn-lg btn-block btn-success">Preis neu berechnen</button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="container outline">
                        <div class="row">
                            <div class="w-100">
                             <h1>Ihr Ticket:</h1>
                            </div>
                            <div class="w-100">
                             <h3>Kreuzlingen -> Frauenfeld</h3>
                            </div>
                            <div class="w-100">
                             <h5>2.Klasse</h5>
                            </div>
                            <div class="w-100">
                             <h4>1 Einzelbillett</h4> <!-- 1 muss variabel sein-->
                            </div>
                            <div class="w-100">
                             <h4>Kein Abo/Vergünstigung</h4> <!--  muss variabel sein-->
                            </div>
                            <div class="w-100">
                             <h5>Gültig: {{Date}}</h5>
                            </div>
                            <div class="w-100">
                             <h5>2 Stunden</h5>
                            </div>
                            <div class="container outline-sm">
                                <div class="row">
                                    <div class="col-6">
                                    <h2>Gesamtpreis: </h2>
                                    <h2>CHF 7.20 </h2>
                                    </div>
                                    <div class="col-2">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <!-- <div class="row">
                <div class="col-8">
                <h4> Regulärer Preis : 10 CHF </h4>
                </div>
                <div class="col-4">
                <button type="button" class="btn btn-lg btn-block btn-success">Bezahlen</button>
                </div>
                <hr>
                <div class="w-100"></div>
            <div class="row">
                <div class="col-4">
                <h1> Optionen: </h1>
                </div>
            </div>
            </div> -->
        </div>
    </body>
    <style>
    .container {
        margin: 0px;
    }
    .outline {
        border: 1px solid #515557;
    }
    .outline-sm {
        border-top: 1px solid #515557;
    }
    h1,h2, h3,h4, h5 { 
        padding-left: 10px;
        padding-top: 5px;
    }
    button {
        margin-top: 10px;
    }
    table {
    border-collapse: collapse;
    width: 100%;
    }
    
    th, td {
    font-size: 125%;
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #515557;
    }
    </style>
</html>