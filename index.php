<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasticeria Musa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'array.php'; ?>
    <header>
        <div class="p-5 bg-primary text-white text-center">
            <h1>BENVENUTO NELLA PASTICCERIA MUSA</h1>
            <p>Il buon gusto dei cookies digitali </p>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="collapsibleNavbar">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Dolci</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Salati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Su di noi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Contatti</a>
                    </li>
                </ul>
            </div>
        </nav>

        <?php
        $name = "Paolo";

        //questa funzione stampa il nome del visitatore
        function Saluto($name)
        {

            print "<p class='d-flex bg-info justify-content-center'> Ciao " . $name . " " .  " sono le " . date('H:i') . "</p>";
        }
        Saluto($name);
        ?>
        <!-- Carousel -->
        <div id="demo" class="carousel slide justify-content-center " data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner d-block mx-auto" style="height: 220px" >
                <div class="carousel-item active ">
                    <img src="images/baba.png" alt="Los Angeles" class="d-block mx-auto">
                </div>
                <div class="carousel-item">
                    <img src="images/cannollo.png" alt="Chicago" class="d-block mx-auto ">
                </div>
                <div class="images/carousel-item">
                    <img src="ciambella.jpeg" alt="New York" class="d-block mx-auto">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </header>

    <div class="row  row-cols-3 container-sm mx-auto row-cols-sm-4 g-4">
        <?php foreach ($Dolci as $dolce) : ?>
            <div class="col-12">
                <div class="card">
                    <div class=" img-responsive mx-auto">
                        <img src="<?= $dolce['DolcePic'] ?>" class="card-img-top img-responsive figure-img w-50" style="max-height: 160px" alt=" ...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $dolce['DolceName'] ?></h5>
                        <p class="card-text text-truncate" id="testo"><?= $dolce['DolceTesto'] ?></p>
                        <button type="button" class="badge bg-info" data-bs-toggle="collapse" data-bs-target="<?= $dolce['DolceTesto'] ?>">Leggi di Piu</button>
                        <p class="card-price"><?= $dolce['DolcePrezzo'] ?></p>
                        <p class="text-start mx-auto"><button class="btn badge  bg-primary">Aggiungi al carrello</button></p>
                    </div>
                </div>
            </div><?php endforeach; ?>
    </div>
    <div class="container-sm">
        <h3>Lista Dolci</h3>
        <table class="table md table-sm table-primary">
            <thead>
                <tr>
                    <th scope="col">Quantità disp.</th>
                    <th scope="col">Dolce</th>
                    <th scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody><?php foreach ($Dolci as $dolce) : ?>
                    <tr>
                        <th scope="row"><?= $dolce['DolceQty'] ?></th>
                        <td><?= $dolce['DolceName'] ?></td>
                        <td><?= $dolce['DolcePrezzo'] ?></td>
                    </tr><?php endforeach; ?>
            </tbody>
        </table>
    </div>


</body>

</html>