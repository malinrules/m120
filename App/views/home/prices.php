
<html>
    
    <body class="bg-dark text-white">
<?php
    echo '
        <div class="container-fluid">
            <h1>Ihr Ticket: </h1>
            <hr>
                <div>
                    <div class="container outline">
                        <div class="row">
                            <div class="col-6">
                             <h1>'.$data['start'].' -> '.$data['end'].'</h1>
                            </div>
                            <div class="col-6">
                             <h3>'.$data['class'].'</h3>
                            </div>
                            <div class="col-12">
                            <hr>
                            </div>
                            <div class="col-4">
                             <h4>'.$data['times'].': '.$data['people'].' </h4> 
                            </div>
                            <div class="col-4">
                             <h4>Senioren/Kinder/Hunde: '.$data['others'].'</h4> 
                            </div>
                            <div class="col-4">
                             <h4>Vergünstigungen: '.$data['reduction'].'</h4> 
                            </div>
                            <div class="col-12">
                            <hr>
                            </div>
                            <div class="col-12">
                             <h4> Gültig am/ab: '.$data['date'].'</h4>
                            </div>
                            <div class="col-12">
                            <hr>
                            </div>
                            <div class="container ">
                                <div class="row">
                                    <div class="col-6">
                                    <h1>Gesamtpreis: CHF '.$data['price'].'</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                            <hr>
                            </div>
                            <div class="col-4">
                            <button type="button" class="btn btn-lg btn-block btn-success" disabled>Bezahlen</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>';
        ?>
    </body>
    <style>
    .container {
        margin: 0px;
        width:100vw;
        vertical-align: bottom;
    }
    /*
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
    }*/
    </style>
</html>
