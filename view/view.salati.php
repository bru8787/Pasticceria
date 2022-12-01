<?php require '../view/partials/header.php'; ?>
<?php require '../func.php'; ?>
       <!-- singolo prodotto -->  
         <div class="row  row-cols-3 container-sm mx-auto row-cols-sm-4 g-4">
            <?php echo showSalatiCards($Salati); ?>
    
        </div>
    <!-- Lista -->
    <div class="container-sm">
        <h3>Lista Salati</h3>
        <table class="table md table-sm table-primary">
            <thead>
                <tr>
                    <th scope="col">Quantità disp.</th>
                    <th scope="col">Dolce</th>
                    <th scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody><?php foreach ($Salati as $dolce) :?>
                    <tr>
                        <th scope="row"><?= $dolce['SalatiQty'] ?></th>
                        <td><?= $dolce['SalatiName'] ?></td>
                        <td><?= $dolce['SalatiPrezzo']."€" ?></td>
                    </tr><?php endforeach; ?>
            </tbody>
        </table>
    </div>